@extends('layouts.master')

@section('title')
    {{"Check Out"}}
@endsection

@section('content')
    <?php use Illuminate\Support\Facades\Auth;$user = Auth::user();
    ?>

    <script type="text/javascript">
        window.onhashchange = function() {
            alert('You have pressed the back button');
        }
    </script>

    <script type="text/javascript" src="{!! asset('js/buyticket.js') !!}"></script>

    <link href="{!! asset('css/buyticket.css') !!}" media="all" rel="stylesheet" type="text/css" />

    @foreach($chosen as $chosendetails)
    @endforeach

    @foreach($event as $events)
    @endforeach

    <div class="container" style="padding-top: 80px;">

        <div class="leo">

        <div class="row">

            <div class="col-md-12" style="padding-top: 30px;">

                    <div class="col-md-8 col-sm-8 col-lg-8">

                        <label style="font-size: 20px; color: #23b0fd">{{$chosendetails->event_title}} Payment</label>

                        <div class="table-responsive">

                            <table id="chosen" class="table" style="width: 100%;">

                                <?php
                                $total = 0;
                                $count = 0;
                                ?>

                                @foreach($chosen as $chosendetails)
                                    <tr class="tr" id="{{$count}}">
                                        <td>{{$chosendetails->type}} Ticket</td>
                                        <td>{{$chosendetails->quantity}} Ticket<?php
                                            if ($chosendetails->quantity>1)
                                                {
                                                    echo 's';
                                                }
                                            else
                                                {

                                            }
                                        ?>

                                        </td>
                                        <td id="subtotal">Kshs {{$chosendetails->subtotal}}</td>
                                        <td>
                                                <span onclick="remove({{$count}},
                                                        '{{$chosendetails->type}}',
                                                {{$chosendetails->subtotal}}, {{session('event_id')}})"
                                                      style="color: red" class="glyphicon glyphicon-trash"></span></td>
                                    </tr>
                                <?php
                                    $total += $chosendetails->subtotal;
                                    $count+=1;
                                    ?>

                                @endforeach

                                <tr style="background-color: #F2FCFE" class="tr" style="font-size: 18px">
                                    <td colspan="3"><label>TOTAL</label></td>
                                    <td><label>KShs <label id="total">{{$total}}</label></label></td>
                                </tr>

                            </table>

                        </div>

                    </div>

                    <div class="col-sm-4" style="padding-top: 15px">
                        <div class="details" style="border-radius: 1px; border-color: #EAF0EE; text-align: center;
                         background-color: white">

                            <label style="color: #23b0fd"><?php $date = strtotime($events->StartingDate);

                                echo date("l", $date); ?></label><br>

                            <label style="font-size: 40px; color: #23b0fd"><?php $date = strtotime($events->StartingDate);

                                echo date("jS", $date); ?></label><br>

                            <label  style="color: #23b0fd"><?php $date = strtotime($events->StartingDate);

                                echo date("M Y", $date); ?></label>

                        </div>
                    </div>

                <hr style="display: block; height: 1px; border: 0; border-top: 1px solid #FA9981; padding: 0; padding-top: 5px">

            </div>

        </div>

        </div>

    </div>




@endsection
