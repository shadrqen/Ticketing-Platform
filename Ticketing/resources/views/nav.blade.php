

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
                <a class="navbar-brand"  href="{{url('jambolife')}}">
                    <img src="{{URL::asset('/img/jambolife.png')}}" alt="Jambolife" width="120" height="35">
                </a>
            </div>

            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">



                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CORPORATE</a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Trending
                                        <div class="form-group">
                                            @foreach($corporate as $c)
                                            <label><a style="color: #23b0fd" href="#">{{$c->EventTitle}}</a></label><br>
                                                @endforeach
                                        </div>
                                    </div>
                                    <div class="bottom text-center">
                                        Found it ? <a href="#"><b><span class="glyphicon glyphicon-thumbs-up" style="color: blue"></span></b>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SPORTS</span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Trending
                                        <div class="form-group">
                                            @foreach($sports as $c)
                                                <label><a style="color: #23b0fd" href="#">{{$c->EventTitle}}</a></label><br>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="bottom text-center">
                                        Found it ? <a href="#"><b><span class="glyphicon glyphicon-thumbs-up" style="color: blue"></span></b>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>





                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONCERTS</a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Trending
                                        <div class="form-group">
                                            @foreach($concert as $c)
                                                <label><a style="color: #23b0fd" href="#">{{$c->EventTitle}}</a></label><br>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="bottom text-center">
                                        Found it ? <a href="#"><b><span class="glyphicon glyphicon-thumbs-up" style="color: blue"></span></b>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FESTIVALS</a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Trending
                                        <div class="form-group">
                                            @foreach($festival as $c)
                                                <label><a style="color: #23b0fd" href="#">{{$c->EventTitle}}</a></label><br>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="bottom text-center">
                                        Found it ? <a href="#"><b><span class="glyphicon glyphicon-thumbs-up" style="color: blue"></span></b>
                                        </a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account
                            </span></a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN</a>
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
                                        New here ? <a href="{{url('/register')}}" style="color: blue"><b>Join Us</b></a>
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



