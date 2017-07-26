@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}



                        <div class="form-group{{ $errors->has('FirstName') ? ' has-error' : '' }}">
                            <label for="FirstName" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="FirstName" type="text" class="form-control" name="FirstName" value="{{ old('FirstName') }}" required autofocus>

                                @if ($errors->has('FirstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('FirstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('LastName') ? ' has-error' : '' }}">
                            <label for="LastName" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control" name="LastName" value="{{ old('LastName') }}" required autofocus>

                                @if ($errors->has('LastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('LastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('OtherName') ? ' has-error' : '' }}">
                            <label for="OtherName" class="col-md-4 control-label">Other Name</label>

                            <div class="col-md-6">
                                <input id="OtherName" type="text" class="form-control" name="OtherName" value="{{ old('OtherName') }}" required autofocus>

                                @if ($errors->has('OtherName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('OtherName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('UserType') ? ' has-error' : '' }}">
                            <label for="UserType" class="col-md-4 control-label">User Type</label>

                            <div class="col-md-6">
                                <input id="UserType" type="text" class="form-control" name="UserType" value="{{ old('UserType') }}" required>

                                @if ($errors->has('UserType'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('UserType') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('IdNumber') ? ' has-error' : '' }}">
                            <label for="IdNumber" class="col-md-4 control-label">ID/Passport Number</label>

                            <div class="col-md-6">
                                <input id="IdNumber" type="text" class="form-control" name="IdNumber" value="{{ old('IdNumber') }}" required>

                                @if ($errors->has('IdNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('IdNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Pin</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pin-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="pin-confirm" type="password" class="form-control" name="pin_confirm" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
