@extends('layouts.master')

@section('title')
    {{'Jambolife - Simple and Secure Event Ticketing'}}
    @endsection

@include('carousel')

@section('content')




    <div class="container" id="mydi"><script type="text/javascript" src="{!! asset('js/jambolife.js') !!}"></script>
    <div class=" eventform-con clearfix" id="myd">
        <form>
            <div class="col-sm-12">

                <div class="row row-list">

                    <div class="col-sm-3">
                        <form class="navbar-form navbar-left" role="form">
                            <div class="form-group">
                                <div class="row">
                                <i class="glyphicon glyphicon-map-marker">PLACE</i>
                                <label>
                                    <input type="text" class="form-control" placeholder="Search location" /></label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-input">
                            <i class="glyphicon glyphicon-calendar"><label> DATES</label></i>
                            <label>
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
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-input">
                            <div class="styled-select">
                                <i class="glyphicon glyphicon-sort"><label>SORT</label></i>
                                <label>
                                <select class="form-control">
                                    <option>Trending</option>
                                    <option>Upcoming</option>
                                    <option>Ascending order</option>
                                    <option>Descending order</option>
                                </select>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-input">
                            <div class="styled-select">
                                <div class="row">
                                <i class="glyphicon glyphicon-usd"><b>PRICE</b></i>
                                <label>
                                <select id="sortPrice" onchange="sortPricee(this.value)" class="form-control">
                                    <option>Above KShs 1000</option>
                                    <option value="{{1}}">KShs 1001 - KShs 5000</option>
                                    <option value="{{2}}">KShs 5001 - KShs 15000</option>
                                    <option value="{{3}}">KShs 15001 - KShs 50000</option>
                                    <option value="{{4}}">Above KShs 50000</option>
                                </select>
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </form>
    </div>
</div>



<div class="container">
    <div class="row row-list">

        <div class="col-md-12" style="padding-top: 20px; font-size: 20px">
            <label style="padding-left: 21px;">ALL EVENTS</label>
            <span class="pull-right">
                <button id="sort" class="btn btn-info">Sort</button>
                <button id="test" class="btn btn-default">Test</button>
            </span>
            <div id="testDiv"></div>
        </div>
        <div id="body">
        @foreach($events as $event)
        <div class="col-sm-3" id="posts">
            <figure class="snip1237">
                <div class="image" id="yardsale">
                    <div class="se-pre-con" style="margin: auto; position: relative; width: 100%;height: 100%;background: url('/img/loader.gif') no-repeat center #fff;">
                    </div>
                        <a href="{{ url('events/'.$event->id) }}">
                        <img src="{!! url('/img/'.$event->EventImage) !!}" alt="Event Image" height="100%" width="100%"></a><em></em>
                </div>
                <figcaption>

                    <h3 style="text-align: left"><span><?php echo $event->EventTitle; ?></span><span class="pull-right"><a href=""><span class="glyphicon glyphicon-heart-empty" style="color: #ba2f00" onclick="background-color: #ba2f00"></span></a></span></h3><br>
                    <span class="glyphicon glyphicon-heart-empty" style="display: none; color: black"></span>
                    <a href="{{ url('events/'.$event->id) }}" class="read-more" max-length="10">{{$event->EventVenue}}</a>
                    <span class="pull-right" style="color: black">{{$event->StartingDate}}</span></figcaption> </figure>
        </div>
            @endforeach
        </div>
    </div>
</div>


@endsection