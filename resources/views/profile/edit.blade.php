@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Profile</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('profile/update/'.$user->id) }}">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- NAME FIELD -->
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="text" class="col-md-2 control-label">Name</label>

                                        <div class="col-md-10">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ?? $user->name}}" required autofocus>
                                        </div>
                                    </div>

                                    <!-- Email FIELD -->
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="text" class="col-md-2 control-label">E-mail address</label>

                                        <div class="col-md-10">
                                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') ?? $user->email}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right">
                                        Update Profile
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
