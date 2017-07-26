@extends('layouts.master')

@section('title')
	{{$event->EventTitle}}
@endsection

@section('content')

    <script type="text/javascript" src="{!! asset('js/events.js') !!}"></script>

    <link href="{!! asset('css/events.css') !!}" media="all" rel="stylesheet" type="text/css" />

    <div class="container" style="padding-top: 80px">
        <div class="leo">

            <div class="panel-heading">
                <h4><span style="font-size: 30px; font-family: 'Tinos', serif;">{{$event->EventTitle}}</span></h4>
                <hr style="display: block; height: 1px; border: 0; border-top: 1px solid #FA9981; margin: 1em 0; padding: 0; ">
            </div>
                <div class="panel-body">
                    <div class="row">
                    <div class="col-sm-4">
                        <div class="panel-body">
                            <img src="{{url('/img/'.$event->EventImage)}}" style="width: 800px; height: 300px;border:2px solid #fff;" class="img-responsive">
                        </div>
                    </div>

                    <div class="col-sm-3" style="padding-top: 15px">
                        <div class="details" style="border-radius: 1px; border-color: #EAF0EE; text-align: center; background-color: white">

                            <label style="color: #23b0fd"><?php $date = strtotime($event->StartingDate);

                                echo date("l", $date); ?></label><br>

                            <label style="font-size: 40px; color: #23b0fd"><?php $date = strtotime($event->StartingDate);

                                echo date("jS", $date); ?></label><br>

                            <label  style="color: #23b0fd"><?php $date = strtotime($event->StartingDate);

                                echo date("M Y", $date); ?></label>

                        </div>

                            <div class="details">

                                <table style="border: 1px solid #ddd; text-align: left; border-collapse: collapse;">
                                    <tr style="border: 1px solid #ddd;text-align: left;">
                                        <td style="padding: 10px;"><label>Location  </label></td>
                                        <td style="padding: 10px;">{{$event->City}}</td>
                                    </tr>
                                    <tr style="border: 1px solid #ddd;text-align: left;">
                                        <td style="padding: 10px;"><label>Venue  </label></td>
                                        <td style="padding: 10px;">{{$event->EventVenue}}</td>
                                    </tr>
                                    <tr style="border: 1px solid #ddd;text-align: left;">
                                        <td style="padding: 10px;"><label>Time   </label></td>
                                        <td style="padding: 10px;">{{$event->StartingTime}} - {{$event->EndingTime}}</td>
                                    </tr>
                                </table>

                                @if($TicketDetail!=null)

                                    @foreach($TicketDetail as $all)

                                    @endforeach

                                @endif
                            </div>
                    </div>


                    <div class="col-sm-5" style="margin-left: 0px; padding-top: 8px">
                        <p style="font-size: 18px; font-family: 'Raleway', sans-serif; font-family: 'Lobster', cursive;
                         font-family: 'Josefin Sans', sans-serif;">  {{$event->EventDescription}} </p>
                    </div>
                    </div>
                </div>


<div class="container">
    <div class="row" style="padding-left: 15px">
        <div class="col-md-12 col-sm-12 col-lg-12">

            <form name="selections" method="get" action="{{url('buyticket')}}">
                {{csrf_field()}}

            <div class="table-responsive" style="overflow-x:auto;">
            <table id="tickettable" style="width: 98%" class="table">

                <tr id="tr">
                    <th><label>Type</label></th>
                    <th><label>Price</label></th>
                    <th><label>Quantity</label></th>
                    <th><label>Subtotal</label></th>
                </tr>

                <?php $c = 0; ?>

                @if($TicketDetail!=null)

                    @foreach($TicketDetail as $all)

                <tr id="tr">
                    <td class="ticket_type">{{$all->TicketType}}</td>
                    <td>KShs <span id="{{$all->ChargesInShillings}}" value="{{$all->ChargesInShillings}}">
                            {{$all->ChargesInShillings}}</span>.00
                    </td>
                    <td class="number_of_tickets">
                        <select id="number" onchange="f(this.value,{{$all->ChargesInShillings}},
                        {{$c}}, '{{$all->TicketType}}', '{{$event->EventTitle}}')">

                            <option value="{{0}}">0</option>

                            <option value="{{1}}">1</option>
                            <option value="{{2}}">2</option>
                            <option value="{{3}}">3</option>
                            <option value="{{4}}">4</option>
                            <option value="{{5}}">5</option>
                            <option value="{{6}}">6</option>
                            <option value="{{7}}">7</option>
                            <option value="{{8}}">8</option>
                            <option value="{{9}}">9</option>
                            <option value="{{10}}">10</option>
                        </select>
                    </td>
                    <td id="{{$c}}">0.00</td>

                    <input type="hidden" value="{{$all->ChargesInShillings}}">

                    <input type="hidden" value="{{$all->TicketType}}">


                        <?php $c++; ?>

                @endforeach


                    @endif

                <tr id="tr" style="font-size: 18px">
                    <td colspan="3"><label>Total</label></td>
                    <td><label>KShs</label> <label id="total"> 0.00 </label></td>
                </tr>

            </table>


        </div>


        <div class="col-md-2 pull-right" style="padding-bottom: 15px;">
                            <span><button style="background-color: #23b0fd;  border-radius: 30px 30px 30px 30px;"
                                          type="submit" id="submit" disabled="disabled"
                                          class="btn btn">
                                        <span style="color: white;" id="sub">Go to Checkout</span></button></span>
        </div>

            </form>

        </div>

    </div>

</div>


        </div>
    </div>
</div>


	@endsection