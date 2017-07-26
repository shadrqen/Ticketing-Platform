@extends('layouts.master')

@include('carousel2')

@section('title')
    {{"Confirm Details"}}
@endsection

@section('content')
    <?php use Illuminate\Support\Facades\Auth;$user = Auth::user();
    ?>

    <div class="container" style="padding-top: 90px">

        <div class="col-md-3"></div>

        <div class="col-md-6">
            <div class="row row-list">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: white; text-align: center"><h4><span>
                    <?php if(Auth::check())
                                {
                                ?>
                                Confirm your details below
                                <?php }
                                else{
                                ?>
                                Please fill your details below
                                <?php
                                }
                                ?>
                </span></h4></div>
                    <div class=" eventform-con clearfix" id="mydivv">
                        <div class="col-md-12 col-md-offset-2">
                            <form class="form-horizontal" method="post" action="{{url('buyticket')}}">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name..." value="<?php
                                        if(Auth::check())
                                        {
                                            echo $user->name;
                                        }
                                        else{

                                        }
                                        ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword" class="col-md-2 control-label">Email</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email..." value="<?php
                                        if(Auth::check())
                                        {
                                            echo $user->email;
                                        }
                                        else{

                                        }
                                        ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword" class="col-md-2 control-label">Phone</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number..." value="<?php
                                        if(Auth::check())
                                        {
                                            echo $user->phone;
                                        }
                                        else{

                                        }
                                        ?>">
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <label class="pull-right"><button class="btn btn-success" style=" border-radius: 30px 30px 30px 30px;">Proceed to Payment</button></label>
                                </div>

                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3"></div>

@endsection
