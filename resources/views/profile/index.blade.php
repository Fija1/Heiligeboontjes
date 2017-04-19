@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('head')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-center pagination-centered">
                        <!-- IMG handmatig in public gezet-->
                        <img src="assets/img/avatar.jpg" alt="avatar">
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <h2>{{Auth::user()->name}}</h2>
                        <h4>Rank: Koffie Fluisteraar</h4>
                        <p>{{Auth::user()->email}}</p>
                        <p>Multiplier: {{Auth::user()->multiplier}}x</p>
                        <a href="/form">
                            <button class="btn btn-success">Vul jouw meting in</button>
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-md-6">

                <table class="table table-hover">
                    <th>Datum</th>
                    <th>Afdruk</th>

                    <div id="footprints"></div>

                    <tr>
                        <td>19-11-2016</td>
                        <td>
                            <img src="assets/img/footprint_l.png" alt="Footprint" style="padding-top: 0px;">
                            <img src="assets/img/footprint_r.png" alt="Footprint" style="padding-top: 30px;">
                            <img src="assets/img/footprint_empty_l.png" alt="Footprint" style="padding-top: 0px;">
                            <img src="assets/img/footprint_empty_r.png" alt="Footprint" style="padding-top: 30px;">
                            <img src="assets/img/footprint_empty_l.png" alt="Footprint" style="padding-top: 0px;">
                        </td>
                    </tr>


                </table>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="recordChart"></div>
            </div>
        </div>

    <!-- <div class="row">
            <div class="col-md-12">
                <a href="/profile/edit/{{Auth::user()->id}}"><div class="btn btn-primary pull-right">Edit Profile</div></a>
            </div>
        </div> -->


    </div>
@endsection

@section('footer')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <script>

        $.ajax({
            url: '/form/fetch',
            type: "get",
            success: function (json) {

                var dataArray = [];
                for (var i = 0; i < json.length; i++) {
                    dataArray.push({Datum: json[i].weeknumber, value: json[i].score});
                }

                // Draw footprints


                // Draw Morris Bar
                new Morris.Bar({
                    // ID of the element in which to draw the chart.
                    element: 'recordChart',
                    // Chart data records -- each entry in this array corresponds to a point on
                    // the chart.

                    data: dataArray,
                    // The name of the data record attribute that contains x-values.
                    xkey: 'Datum',
                    // A list of names of data record attributes that contain y-values.
                    ykeys: ['value'],
                    // Labels for the ykeys -- will be displayed when you hover over the
                    // chart.
                    labels: ['Value']
                });


            }
        });


    </script>
@endsection