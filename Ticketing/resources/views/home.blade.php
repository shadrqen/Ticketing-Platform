<?php
use Illuminate\Support\Facades\Auth;
?>

        <!DOCTYPE html>
<html>
<head>
    <title>Jambolife - Simple and Secure Event Ticketing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Raleway" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">






    <link href="{!! asset('css/jambolife.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{!! asset('js/jambolife.js') !!}"></script>








</head>



<body style="background-color: white">

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
    <nav class="navbar navbar-findcond navbar-fixed-top" id="navi" style="background-color: black">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" style="color: white">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav" style="font-family: 'Arimo', sans-serif;">
                    <li style=""><a href=""><img src="{{URL::asset('/img/jambolife.png')}}" class="img-rectangle" alt="Cinque Terre" width="120" height="25"></a>
                    </li>
                    <li>
                        <a id="home" class="navbar-brand" href="{{ url('jambolife') }}"><span class="glyphicon glyphicon-home" style="color: #5499C7; padding-left: 30px"></span></a>
                    </li>
                    <li style="padding-top: 0px">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default"><span  style="color: #5499C7">Submit</span></button>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span style="color: #5499C7"><i class="glyphicon glyphicon-th-list"></i> My Schedule </span>
                        </a>
                    </li>
                    <li class="active"><a href="#"><span style="color: white"></span><span class="sr-only"></span></a></li>
                    <li>   <a style="color: white" href=""><i class="fa fa-calendar" aria-hidden="true"></i> Event Calendar</a></li>

                    <?php

                    if (Auth::check()) {
                    ?>

                    <li style="color: white; padding-top: 9px">

                        <?php

                        // Get the currently authenticated user...
                        $user = Auth::user();

                        echo $user->name;

                        // Get the currently authenticated user's ID...
                        $id = Auth::id();

                        ?>

                    </li>
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <?php
                    }
                    else
                    {
                    ?>

                    <li><p class="navbar-text" style="color: white">Already have an account?</p></li>
                    <li style="color: #5499C7">
                        <a href="{{ url('/login') }}">Login</a>
                    </li>

                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
</div>





<div class="dennis" style="width: 100%; overflow: hidden;" id="deno">
    <div class="row" style="padding-top: 52px">
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












    <div class="container" style="padding-top: 30px">
        <div class=" eventform-con clearfix" id="mydiv" style="padding: 8px; border-radius: 10px; border-width: 2px; border-color: grey">
            <form>
                <div class="col-md-12">
                    <div class="row row-list">

                        <div class="col-md-3">
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search location...">
                                </div>
                            </form>
                        </div>

                        <div class="col-md-3">
                            <div class="form-input">
                                <select class="form-control">
                                    <option class="special">Today</option>
                                    <option class="special">This Week</option>
                                    <option class="special">This Month</option>
                                    <option class="special">Next Month</option>
                                    <option class="special">Next Six Months</option>
                                    <option class="special">Next One Year</option>
                                    <option class="special">Last Six Months</option>
                                    <option class="special">Last One Year</option>
                                    <option class="special">Last Two Years</option>
                                    <option class="special">Last Five Years</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-input">
                                <div class="styled-select">
                                    <select class="form-control">
                                        <option>Trending</option>
                                        <option>Upcoming</option>
                                        <option>Ascending order</option>
                                        <option>Descending order</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-input">
                                <div class="styled-select">
                                    <select class="form-control">
                                        <option>Below KShs 1000</option>
                                        <option>KShs 1000 - KShs 5000</option>
                                        <option>KShs 5001 - KShs 15000</option>
                                        <option>KShs 15001 - KShs 50000</option>
                                        <option>Above KShs 50000</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>
















    <div class="container" style="padding-top: 18px; padding-left: 33px">
        <h3><label style="font-size: 17px">Top Events</label></h3>
    </div>












    <?php
    foreach ($events as $event)
    {
    ?>


    <div class="container">
        <div class="row row-list">
            <div class="col-md-3">
                <figure class="snip1237">
                    <div class="image" id="yardsale">
                        <a href="{{ url('events') }}"><img src="{!! url('/img/'.$event->image) !!}" alt="profile Pic" height="100%" width="100%"></a><em></em>
                    </div>
                    <figcaption>
                        <h3 style="text-align:center"><?php echo $event->name; ?></h3><br>
                        <a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1234" class="read-more">Read More</a> </figcaption> </figure>
            </div>
        </div>
    </div>

    <?php
    }
    ?>
















    <div class="container-fluid">
        <section style="height:80px;"></section>
        <footer class="footer-bs">
            <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <img src="{{url::asset('/img/jambolife.png')}}" alt="profile Pic" height="100%" width="100%">
                    <p>Simple and Secure Event Ticketing</p>
                    <p>© Jambolife 2016. All rights reserved<br> A Product of <a href="http://deveint.com/">Deveint Limited</a></p>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <div class="col-md-6">
                        <ul class="pages">
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Broadway</a></li>
                            <li><a href="#">Family Shows</a></li>
                            <li><a href="#">Arts & Theater</a></li>
                            <li><a href="#">Just Added</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 footer-social animated fadeInDown" id="social-icons">
                    <h4>Follow Us</h4>
                    <ul class="nomargin">
                        <li><a href="https://www.facebook.com/myjambolife/"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a></li>
                        <li><a href="https://twitter.com/myjambolife"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a></li>
                        <li><a href="https://plus.google.com/"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4>Newsletter</h4>
                    <p>Subscribe to receive updates on upcoming events, programmes together with promotions and deals</p>
                    <p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter your email...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div><!-- /input-group -->
                    </p>
                </div>
            </div>
        </footer>
    </div>


</div>

</body>
</html>
