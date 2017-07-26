
<?php
use Illuminate\Support\Facades\Auth;
?>

<script type="text/javascript">
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('nav').addClass('shrink');
        } else {
            $('nav').removeClass('shrink');
        }
    });
</script>

<div class="container">
    <nav class="navbar navbar-findcond navbar-fixed-top" style="background-color: black; padding-top: 5px">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  href="{{url('jambolife')}}"><img src="{{URL::asset('/img/jambolife.png')}}" alt="Cinque Terre" width="120" height="25"></a>
            </div>

            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">



                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>CORPORATE</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Trending
                                        <div class="form-group">
                                            <label><a style="color: #23b0fd" href="#">Morgan Heritage Live</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Sky Party</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Dubai Business Night</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">New Years Party</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">Katy Pery Live</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Bridal Party </a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Kind Party</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Paris Night</a></label>
                                        </div>
                                    </div>
                                    <div class="bottom text-center">
                                        Found it ? <a href="#"><b><span class="glyphicon glyphicon-thumbs-up" style="color: blue"></span></b></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>SPORTS</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Trending
                                        <div class="form-group">
                                            <label><a style="color: #23b0fd" href="#">Morgan Heritage Live</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Sky Party</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Dubai Business Night</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">New Years Party</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">Katy Pery Live</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Bridal Party </a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Kind Party</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Paris Night</a></label>
                                        </div>
                                    </div>
                                    <div class="bottom text-center">
                                        Found it ? <a href="#"><b><span class="glyphicon glyphicon-thumbs-up" style="color: blue"></span></b></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>





                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>CONCERTS</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Trending
                                        <div class="form-group">
                                            <label><a style="color: #23b0fd" href="#">Morgan Heritage Live</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Sky Party</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Dubai Business Night</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">New Years Party</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">Katy Pery Live</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Bridal Party </a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Kind Party</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Paris Night</a></label>
                                        </div>
                                    </div>
                                    <div class="bottom text-center">
                                        Found it ? <a href="#"><b><span class="glyphicon glyphicon-thumbs-up" style="color: blue"></span></b></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>FESTIVALS</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Trending
                                        <div class="form-group">
                                            <label><a style="color: #23b0fd" href="#">Morgan Heritage Live</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Sky Party</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Dubai Business Night</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">New Years Party</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">Katy Pery Live</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Bridal Party </a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Kind Party</a></label><br>
                                            <label><a style="color: #23b0fd" href="#">The Paris Night</a></label>
                                        </div>
                                    </div>
                                    <div class="bottom text-center">
                                        Found it ? <a href="#"><b><span class="glyphicon glyphicon-thumbs-up" style="color: blue"></span></b></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <?php
                    if(Auth::check())
                    {
                    ?>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Favorites</a></li>
                            <li><a href="#">My Tickets</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>

                    <?php
                    }
                    else
                    {
                    ?>

                    <li>
                        {{--<div class="col-md-12">--}}
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" class="search-form">
                                    <div class="form-group has-feedback">
                                        <label for="search" class="sr-only">Search</label>
                                        <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{--</div>--}}
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>LOGIN</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Login via
                                        <div class="social-buttons">
                                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                        </div>
                                        or
                                        <form class="form" role="form" method="post" action="{{url('/login')}}" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email</label>
                                                <input type="email" name="email" placeholder="Email" required class="form-control input-lg" />
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Pin</label>
                                                <input type="password" class="form-control input-lg" name="pin" placeholder="Pin" required="" />
                                                <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> keep me logged-in
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="bottom text-center">
                                        New here ? <a href="{{url('/register')}}" style="counter-reset: blue;"><b>Join Us</b></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <?php
                    }
                    ?>

                    <li> <a href=""><span style="color: #23b0fd">POST EVENT</span></a> </li>

                </ul>
            </div><!-- /.nav-collapse -->
        </div>
    </nav>
</div>





<div class="dennis" style="width: 100%; overflow: hidden;" id="deno">
    <div class="row" style="padding-top: 51px">
        <div class="col-md-12">

            <div class="carousel slide carousel-fade" data-ride="carousel">

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                    </div>
                    <div class="item">
                    </div>
                    <div class="item">
                    </div>
                    <div class="item">
                    </div>
                    <div class="item">
                    </div>
                    <div class="item">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>






$(".dropdown").hover(
function() {
$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
$(this).toggleClass('open');
},
function() {
$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
$(this).toggleClass('open');
}
);

































function date1() {
// set the date we're counting down to
var target_date = new Date('Dec, 25, 2016').getTime();

// variables for time units
var days, hours, minutes, seconds;

// get tag element
var countdown = document.getElementById('countdown');

// update the tag with id "countdown" every 1 second
setInterval(function () {

// find the amount of "seconds" between now and target
var current_date = new Date().getTime();
var seconds_left = (target_date - current_date) / 1000;

// do some time calculations
days = parseInt(seconds_left / 86400);
seconds_left = seconds_left % 86400;

hours = parseInt(seconds_left / 3600);
seconds_left = seconds_left % 3600;

minutes = parseInt(seconds_left / 60);
seconds = parseInt(seconds_left % 60);

// format countdown string + set tag value
countdown.innerHTML = '<span class="days">' + days +  '<span style="font-size: 15px; color: #BCD2D3">Days</span> </span> <span class="hours">' + hours + '<span style="font-size: 15px; color: #BCD2D3">Hrs</span> </span> <span class="minutes">'
                + minutes + '<span style="font-size: 15px; color: #BCD2D3">Mins</span> </span> <span class="seconds">' + seconds + '<span style="font-size: 15px; color: #BCD2D3">Secs</span></span>';

}, 1000);

}

function date2() {
// set the date we're counting down to
var target_date = new Date('Dec, 31, 2016').getTime();

// variables for time units
var days, hours, minutes, seconds;

// get tag element
var countdown = document.getElementById('countdown2');

// update the tag with id "countdown" every 1 second
setInterval(function () {

// find the amount of "seconds" between now and target
var current_date = new Date().getTime();
var seconds_left = (target_date - current_date) / 1000;

// do some time calculations
days = parseInt(seconds_left / 86400);
seconds_left = seconds_left % 86400;

hours = parseInt(seconds_left / 3600);
seconds_left = seconds_left % 3600;

minutes = parseInt(seconds_left / 60);
seconds = parseInt(seconds_left % 60);

// format countdown string + set tag value
countdown.innerHTML = '<span class="days">' + days +  '<span style="font-size: 15px; color: #BCD2D3">Days</span> </span> <span class="hours">' + hours + '<span style="font-size: 15px;color: #BCD2D3">Hrs</span> </span> <span class="minutes">'
                + minutes + '<span style="font-size: 15px; color: #BCD2D3">Mins</span> </span> <span class="seconds">' + seconds + '<span style="font-size: 15px; color: #BCD2D3">Secs</span></span>';

}, 1000);

}

function date3() {
// set the date we're counting down to
var target_date = new Date('Dec, 16, 2016').getTime();

// variables for time units
var days, hours, minutes, seconds;

// get tag element
var countdown = document.getElementById('countdown3');

// update the tag with id "countdown" every 1 second
setInterval(function () {

// find the amount of "seconds" between now and target
var current_date = new Date().getTime();
var seconds_left = (target_date - current_date) / 1000;

// do some time calculations
days = parseInt(seconds_left / 86400);
seconds_left = seconds_left % 86400;

hours = parseInt(seconds_left / 3600);
seconds_left = seconds_left % 3600;

minutes = parseInt(seconds_left / 60);
seconds = parseInt(seconds_left % 60);

// format countdown string + set tag value
countdown.innerHTML = '<span class="days">' + days +  '<span style="font-size: 15px; color: #BCD2D3">Days</span> </span> <span class="hours">' + hours + '<span style="font-size: 15px; color: #BCD2D3">Hrs</span> </span> <span class="minutes">'
                + minutes + '<span style="font-size: 15px; color: #BCD2D3">Mins</span> </span> <span class="seconds">' + seconds + '<span style="font-size: 15px; color: #BCD2D3">Secs</span></span>';

}, 1000);

}

function date4() {
// set the date we're counting down to
var target_date = new Date('Dec, 20, 2016').getTime();

// variables for time units
var days, hours, minutes, seconds;

// get tag element
var countdown = document.getElementById('countdown4');

// update the tag with id "countdown" every 1 second
setInterval(function () {

// find the amount of "seconds" between now and target
var current_date = new Date().getTime();
var seconds_left = (target_date - current_date) / 1000;

// do some time calculations
days = parseInt(seconds_left / 86400);
seconds_left = seconds_left % 86400;

hours = parseInt(seconds_left / 3600);
seconds_left = seconds_left % 3600;

minutes = parseInt(seconds_left / 60);
seconds = parseInt(seconds_left % 60);

// format countdown string + set tag value
countdown.innerHTML = '<span class="days">' + days +  '<span style="font-size: 15px; color: #BCD2D3">Days</span> </span> <span class="hours">' + hours + '<span style="font-size: 15px; color: #BCD2D3">Hrs</span> </span> <span class="minutes">'
                + minutes + '<span style="font-size: 15px; color: #BCD2D3">Mins</span> </span> <span class="seconds">' + seconds + '<span style="color: #BCD2D3; font-size: 15px">Secs</span></span>';

}, 1000);

}

function date5() {
// set the date we're counting down to
var target_date = new Date('Dec, 8, 2016').getTime();

// variables for time units
var days, hours, minutes, seconds;

// get tag element
var countdown = document.getElementById('countdown5');

// update the tag with id "countdown" every 1 second
setInterval(function () {

// find the amount of "seconds" between now and target
var current_date = new Date().getTime();
var seconds_left = (target_date - current_date) / 1000;

// do some time calculations
days = parseInt(seconds_left / 86400);
seconds_left = seconds_left % 86400;

hours = parseInt(seconds_left / 3600);
seconds_left = seconds_left % 3600;

minutes = parseInt(seconds_left / 60);
seconds = parseInt(seconds_left % 60);

// format countdown string + set tag value
countdown.innerHTML = '<span class="days">' + days +  '<span style="font-size: 15px; color: #BCD2D3">Days</span> </span> <span class="hours">' + hours + '<span style="font-size: 15px; color: #BCD2D3">Hrs</span> </span> <span class="minutes">'
                + minutes + '<span style="font-size: 15px; color: #BCD2D3">Mins</span> </span> <span class="seconds">' + seconds + '<span style="font-size: 15px; color: #BCD2D3">Secs</span></span>';

}, 1000);

}

function date6() {
// set the date we're counting down to
var target_date = new Date('Dec, 3, 2017').getTime();

// variables for time units
var days, hours, minutes, seconds;

// get tag element
var countdown = document.getElementById('countdown6');

// update the tag with id "countdown" every 1 second
setInterval(function () {

// find the amount of "seconds" between now and target
var current_date = new Date().getTime();
var seconds_left = (target_date - current_date) / 1000;

// do some time calculations
days = parseInt(seconds_left / 86400);
seconds_left = seconds_left % 86400;

hours = parseInt(seconds_left / 3600);
seconds_left = seconds_left % 3600;

minutes = parseInt(seconds_left / 60);
seconds = parseInt(seconds_left % 60);

// format countdown string + set tag value
countdown.innerHTML = '<span class="days">' + days +  '<span style="font-size: 15px; color: #BCD2D3">Days</span> </span> <span class="hours">' + hours + '<span style="font-size: 15px; color: #BCD2D3">Hrs</span> </span> <span class="minutes">'
                + minutes + '<span style="font-size: 15px; color: #BCD2D3">Mins</span> </span> <span class="seconds">' + seconds + '<span style="font-size: 15px; color: #BCD2D3">Secs</span></span>';

}, 1000);

}



date1();
date2();
date3();
date4();
date5();
date6();




















<div class="container">
    <div class="panel-body">
        <div class="col-md-3">
            <label>Type of Ticket</label>
        </div>
        <div class="col-md-2">
            <label>Amount Per Ticket</label>
        </div>
        <div class="col-md-3">
            <label>Number of Tickets</label>
        </div>
        <div class="col-md-3">
            <label>Total Cost</label>
        </div>
    </div>
</div>

<div class="container">
    <div class="panel-body" id="m">

        <div class="row">

            <div class="col-md-3">
                <div class="form-input">

                    <select class="form-control" id="ticket_type" name="ticket_type">

                        @if($EventPrice!=null)

                            @foreach($EventPrice as $all)
                                <option id="{{$all->ChargesInShillings}}" class="special" value="{{$all->ChargesInShillings}}" selected>{{$all->TicketType}}</option>
                                {{session(['ticket_type' => $all->TicketType])}}
                            @endforeach

                        @endif

                    </select>
                </div>

            </div>
            <div class="col-md-2" id="p">

                @if($EventPrice!=null)

                    {{$all->ChargesInShillings}}

                    {{session(['price' =>$all->ChargesInShillings])}}
                @endif

            </div>

            <div class="col-md-3">
                <div class="form-input">
                    <select class="form-control" name="number"  id="js">
                        <option class="special" value="1" >1</option>
                        <option class="special" value="1">2</option>
                        <option class="special" value="1">3</option>
                        <option class="special" value="1">4</option>
                        <option class="special" value="1">5</option>
                        <option class="special" value="1">6</option>
                        <option class="special" value="1">7</option>
                        <option class="special" value="1">8</option>
                        <option class="special" value="1">9</option>
                        <option class="special" value="1">10</option>
                    </select>
                </div>

            </div>
            <div class="col-md-2" id="total">

                @if($EventPrice!=null)

                    <label> {{$all->ChargesInShillings}} </label>

                @endif

            </div>

            <div class="col-md-2 pull-right">
                            <span><a href="{{url('confirm_details')}}"><button
                                            style="background-color: #23b0fd" class="btn btn">
                                        <span style="color: white">Proceed to Pay</span></button></a></span>
            </div>


        </div>
    </div>

</div>



















































<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <legend></legend>
        </div>
        <!-- panel preview -->
        <div class="col-sm-5">
            <h4 style="padding-left: 13px">Choose Ticket</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-9">
                            <div class="form-input">
                                <select class="form-control" id="ticket_type" name="ticket_type">
                                    @if($EventPrice!=null)

                                        @foreach($EventPrice as $all)
                                            <option selected id="{{$all->ChargesInShillings}}" class="space" value="{{$all->ChargesInShillings}}">{{$all->TicketType}}
                                            </option>
                                            {{session(['ticket_type' => $all->TicketType])}}
                                        @endforeach

                                    @endif

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Price</label>
                        <div class="col-sm-9" id="p">
                            @if($EventPrice!=null)
                                {{$all->ChargesInShillings}}
                                {{session(['price' =>$all->ChargesInShillings])}}
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Number</label>
                        <div class="col-sm-9">
                            <div class="form-input">
                                <select class="form-control" name="number"  id="js">

                                    <option value="">0</option>

                                    <option class="special" value="1">1</option>
                                    <option class="special" value="2">2</option>
                                    <option class="special" value="3">3</option>
                                    <option class="special" value="4">4</option>
                                    <option class="special" value="5">5</option>
                                    <option class="special" value="6">6</option>
                                    <option class="special" value="7">7</option>
                                    <option class="special" value="8">8</option>
                                    <option class="special" value="9">9</option>
                                    <option class="special" value="10">10</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Total</label>
                        <div class="col-sm-9" id="total">
                            @if($EventPrice!=null)
                                <input class="form-control" id="amount" name="amount" type="number" value="0" readonly class="form-control"
                                       style="background-color: white">
                                {{session(['price' =>$all->ChargesInShillings])}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


























































<div class="col-md-3">
    <div><label>Type</label></div>
    <div>
        <div class="form-input">
            <select class="form-control" id="ticket_type" name="ticket_type">
                @if($EventPrice!=null)

                    @foreach($EventPrice as $all)
                        <option selected id="{{$all->ChargesInShillings}}" class="space" value="{{$all->ChargesInShillings}}">{{$all->TicketType}}
                        </option>
                        {{session(['ticket_type' => $all->TicketType])}}
                    @endforeach

                @endif

            </select>
        </div>
    </div>
</div>


<div class="col-md-3">
    <div><label>Price</label></div>
    <div id="price">
        @if($EventPrice!=null)
            {{$all->ChargesInShillings}}
            {{session(['price' =>$all->ChargesInShillings])}}
        @endif
    </div>
</div>


<div class="col-md-3">
    <div><label>Number</label></div>
    <div class="row">
        <div class="form-input">
            <select class="form-control" name="number"  id="number">

                <option value="0">0</option>

                <option class="special" value="1">1</option>
                <option class="special" value="2">2</option>
                <option class="special" value="3">3</option>
                <option class="special" value="4">4</option>
                <option class="special" value="5">5</option>
                <option class="special" value="6">6</option>
                <option class="special" value="7">7</option>
                <option class="special" value="8">8</option>
                <option class="special" value="9">9</option>
                <option class="special" value="10">10</option>
            </select>
        </div>
    </div>
</div>


<div class="col-md-3">
    <div><label>Total</label></div>
    <div id="total">
        @if($EventPrice!=null)
            0
            {{session(['price' =>$all->ChargesInShillings])}}
        @endif
    </div>
</div>

<div class="col-md-2 pull-right" style="padding-bottom: 15px">
                            <span><a href="{{url('confirm_details')}}"><button
                                            style="background-color: #23b0fd" id="button" class="btn btn">
                                        <span style="color: white">Proceed to Pay</span></button></a></span>
</div>













































































<script type="text/javascript">

$( "#number" ).change(function() {
var number = document.getElementById('number').value;
var price = document.getElementById('price').value;
alert(price);
//var subtotal = number*price;
//document.getElementById('subtotal').innerHTML=total;

});

        $("#ticket_type").change(function () {
            var type = document.getElementById("ticket_type").value;
            var price2 = document.getElementById('price').innerHTML;
            var number2 = document.getElementById("number").value;
            // var total2 = price2*number2;
            // alert(price2);
            document.getElementById('price').innerHTML=type;
            //document.getElementById('total').innerHTML=total2;
        });




$('#submitorder').attr('disabled', 'disabled');

function updateFormEnabled() {
    if (verifyAdSettings()) {
        $('#submitorder').attr('disabled', '');
    } else {
        $('#submitorder').attr('disabled', 'disabled');
    }
}

function verifyAdSettings() {
    if ($('#ad_type').val() != '') {
        return true;
    } else {
        return false
    }
}

$('#ad_type').change(updateFormEnabled);



</script>

<div id="tot" class="pull-right" style="padding-bottom: 10px; font-size: 18px">
    <label>Total</label><span style="margin-left: 100px">0</span>
</div>



















































<div class="col-md-3">
    <span>Ticket Type</span>
</div>

<div class="col-md-3">
    <span>Amount</span>
</div>

<div class="col-md-3">
    <span>Number of Tickets</span>
</div>

<div class="col-md-3">
    <span>Total Cost</span>
</div>
















































<div class="col-md-12" style="padding-top: 30px">

    <div class="row" style="padding-left: 30px">

        <div class="col-md-3">
            <label>Ticket Type</label>
            <div>Regular</div>
        </div>

        <div class="col-md-3">
            <label>Amount</label>
            <div>KShs 5000 </div>
        </div>

        <div class="col-md-3">
            <label>Number of Tickets</label>
            <div>2</div>
        </div>

        <div class="col-md-3">
            <label>Total Cost</label>
            <div>KShs 10000</div>
        </div>

    </div>

    <hr style="display: block; height: 1px; border: 0; border-top: 1px solid #FA9981; padding: 0; padding-top: 10px">

</div>

<div class="leo" style="padding-top: 80px; background-color: white">

    <div class="stepwizard col-md-offset-3">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a style="background-color: #23b0fd" href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Basic Details</p>
            </div>
            <div class="stepwizard-step">
                <a style="background-color: #23b0fd" href="#step-2" type="button" class="btn btn-default btn-circle"
                   disabled="disabled">2</a>
                <p>Payment</p>
            </div>
            <div class="stepwizard-step">
                <a style="background-color: #23b0fd" href="#step-3" type="button" class="btn btn-default btn-circle"
                   disabled="disabled">3</a>
                <p>Order Review</p>
            </div>
        </div>
    </div>

    <form role="form" action="{{url('success')}}" method="post">

        {{csrf_field()}}

        <div class="row setup-content" id="step-1">
            <div class="col-xs-6 col-md-offset-3">
                <div class="col-md-12" style="padding-bottom: 20px">
                    <h3> Basic Details</h3>
                    <div class="form-input">
                        <label class="control-label">Name</label>
                        <input  maxlength="100" type="text" required="required" class="form-control"
                                placeholder="Name"  />
                    </div>
                    <div class="form-input">
                        <label class="control-label">Phone</label>
                        <input minlenght="10" type="text" required="required" class="form-control"
                               placeholder="Phone" />
                    </div>
                    <div class="form-input" style="padding-bottom: 20px">
                        <label class="control-label">Email</label>
                        <input type="email" required="required" class="form-control" placeholder="Email" >
                    </div>

                    <button style="background-color: #23b0fd; border-radius: 10px 10px 10px 10px;"
                            class="btn btn-default nextBtn btn-md pull-right" type="button" >
                        <span style="color: white">Next</span></button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-6 col-md-offset-3">
                <div class="col-md-12" style="padding-bottom: 20px">
                    <h3>Payment</h3>
                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <input maxlength="200" type="text" required="required" class="form-control"
                               placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Company Address</label>
                        <input maxlength="200" type="text" required="required" class="form-control"
                               placeholder="Enter Company Address"  />
                    </div>
                    <button style="background-color: #23b0fd; border-radius: 30px 30px 30px 30px;"
                            class="btn btn-default btnPrevious btn-md pull-left" type="button" >
                        <span style="color: white">Previous</span></button>
                    <button style="background-color: #23b0fd;  border-radius: 30px 30px 30px 30px;"
                            class="btn btn-primary nextBtn btn-md pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-3">
            <div class="col-xs-6 col-md-offset-3">
                <div class="col-md-12" style="padding-bottom: 20px">
                    <h3>Order Review</h3>
                    <button style="background-color: #23b0fd;  border-radius: 30px 30px 30px 30px;"
                            class="btn btn-success btn-md pull-right" type="submit"><span style="color: white;">
                                        Submit</span></button>
                </div>
            </div>
        </div>
    </form>

</div>















$(document).ready(function () {
var navListItems = $('div.setup-panel div a'),
allWells = $('.setup-content'),
allNextBtn = $('.nextBtn');

allWells.hide();

navListItems.click(function (e) {
e.preventDefault();
var $target = $($(this).attr('href')),
$item = $(this);

if (!$item.hasClass('disabled')) {
navListItems.removeClass('btn-primary').addClass('btn-default');
$item.addClass('btn-primary');
allWells.hide();
$target.show();
$target.find('input:eq(0)').focus();
}
});

allNextBtn.click(function(){
var curStep = $(this).closest(".setup-content"),
curStepBtn = curStep.attr("id"),
nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
curInputs = curStep.find("input[type='text'],input[type='url']"),
isValid = true;

$(".form-group").removeClass("has-error");
for(var i=0; i<curInputs.length; i++){
if (!curInputs[i].validity.valid){
isValid = false;
$(curInputs[i]).closest(".form-group").addClass("has-error");
}
}

if (isValid)
nextStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-primary').trigger('click');
});













select {
width:100px;
padding:5px;
line-height:1;
border-radius:5px;
background-color:white;
color: black;
text-align: center;
}
select:hover {
color: red;
}

@media screen and (max-width: 320px) {
.hide { display: none; }
}

























.stepwizard-step p {
margin-top: 10px;
}
.stepwizard-row {
display: table-row;
}
.stepwizard {
display: table;
width: 50%;
position: relative;
}
.stepwizard-step button[disabled] {
opacity: 1 !important;
filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
top: 14px;
bottom: 0;
position: absolute;
content: " ";
width: 100%;
height: 1px;
background-color: #ccc;
z-order: 0;
}
.stepwizard-step {
display: table-cell;
text-align: center;
position: relative;
}
.btn-circle {
width: 30px;
height: 30px;
text-align: center;
padding: 6px 0;
font-size: 12px;
line-height: 1.428571429;
border-radius: 15px;
}


$.ajax({
type: 'POST',
url: '../storedetails',
dataType: 'html',
data: {
name: "Shadrqen"
},
success: function(){
alert('Got the url');
},

error: function () {
alert('Failed to get the url');
}

});














$(function () {
$.ajax({
type: 'POST',
url: '../storedetails',
dataType: 'json',
data: {
unit_price: price,
number: val,
sub_total: subtotal
},
success: function(data){
console.log(data);
},

error: function () {
alert('error');
}

});

});









































if(window.performance)

{

if(performance.navigation.type  == 1 )
{
$(function () {
$.ajax({
type: 'POST',
url: '../removesession',
dataType: 'json',
data: {
status: 'success',
},
success: function(data){
console.log(data);
},

error: function () {
alert('error');
}

});
});
}
}







$(function () {

var jina = 'shadrqen';
$.ajax({
type: 'POST',
url: '../storedetails',
dataType: 'json',
data: {
ticket_type: ticket_type,

number: number,

},
success: function(data){
console.log(data);
},

error: function () {
alert('error');
}

});

});







$(function () {
$('.clear').click(function () {
$.ajax({
type: 'POST',
url: '../removesession',
dataType: 'json',
data: {
status: 'success',
},
success: function(data){
console.log(data);
},

error: function () {
alert('error');
}

});
});
});









<script type="text/javascript">

    $(window).bind('beforeunload',function(){

        //save info somewhere

        alert('are you sure you want to leave?');

    });

</script>



name="selections" method="post" action="{{url('buyticket')}}"




















if ($request->session()->has('number')) {
if ($request->session()->has('number2')) {
$request->session()->put('number3', $number);
}
else
{
$request->session()->put('number2', $number);
}
}

































