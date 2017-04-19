@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('head')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@endsection

@section('content')
    <div class="container">
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div id="temperatureGraph"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="row">
            <div class="col-md-6">
                <h1>Red de koffieplant!</h1>
            </div>
            <div class="col-md-6">
                <a href="/form"><button id="test-btn" class="btn btn-success pull-right">Vul jouw meting in</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="value-block-container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-default sensor-value-container pull-right">
                                <div class="sensor-title">Licht intensiteit:</div>
                                <div class="sensor-value">75% </div>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-default sensor-value-container pull-right" data-toggle="modal" data-target="#valueModal">
                                <div class="sensor-title">Temperatuur:</div>
                                <div class="sensor-value">22 ℃</div>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="valueModal" tabindex="-1" role="dialog" aria-labelledby="valueModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="valueModalLabel">Plant temperatuur</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div id="temperatureGraph"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Sluit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-default sensor-value-container pull-right">
                                <div class="sensor-title">Water temp:</div>
                                <div class="sensor-value">22 ℃</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="img-container">
                    <img src="assets/img/aquaponic_image.png" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="value-block-container">
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-default sensor-value-container">
                                <div class="sensor-title">Grondvochtigheid:</div>
                                <div class="sensor-value">55%</div>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-default sensor-value-container">
                                <div class="sensor-title">Zuurgraad:</div>
                                <div class="sensor-value">7,0</div>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-default sensor-value-container" style="background-color: deepskyblue;">
                                <div class="sensor-title" style="text-decoration: underline;">Community Score</div>
                                <div class="sensor-value">{{$scoreAll}} kg / CO2</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <script>
        $('#valueModal').on('shown.bs.modal', function () {
            $(function () {
                new Morris.Line({
                    element: 'temperatureGraph',
                    parseTime: false,
                    data: [
                        {x: '31-10', a: 15, b: 22},
                        {x: '07-11', a: 18, b: 22},
                        {x: '14-11', a: 24, b: 22},
                        {x: '21-11', a: 20, b: 22},
                        {x: '28-11', a: 22, b: 22}
                    ],
                    xkey: 'x',
                    ykeys: ['a', 'b'],
                    lineColors: ['#592202' ,'#2ab27b'],
                    labels: ['Temperatuur', 'Ideale temperatuur']
                });
            });
        });

        $('#valueModal').on('hidden.bs.modal', function () {
            var elem = document.getElementById("temperatureGraph");
            elem.innerHTML = "";
        })

    </script>
@endsection
