<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Input;
use App\JambolifeModel;
use App\TDModel;
use App\TicketDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        DB::table('tempticketschosen')->delete();

        $events = DB::table('event')->get();

        $corporate = DB::table('event')->get()->where('EventType', 'Corporate');

        $sports = DB::table('event')->get()->where('EventType', 'Sports');

        $concerts = DB::table('event')->get()->where('EventType', 'Concert');

        $festival = DB::table('event')->get()->where('EventType', 'Festival');

        return view('jambolife', ['corporate' => $corporate, 'events' => $events, 'sports' => $sports, 'concert' => $concerts, 'festival' => $festival]);
    }

    public function getTest()
    {
        return view('test', ['name' => 'shadrack']);
    }

    public function Testing()
    {
        return view('testing');
    }

    public function getEvents($id, Request $request)
    {
        DB::table('tempticketschosen')->delete();

        $data = $request->session()->all();

        $event = JambolifeModel::find($id);

        session(['event_id' => $id]);

        $eventdetails = DB::table('ticketdetails')->get()->where('EventId', $id);

        $corporate = DB::table('event')->get()->where('EventType', 'Corporate');

        $sports = DB::table('event')->get()->where('EventType', 'Sports');

        $concerts = DB::table('event')->get()->where('EventType', 'Concert');

        $festival = DB::table('event')->get()->where('EventType', 'Festival');

        return view('events', ['event' => $event, 'session' => $data, 'TicketDetail' => $eventdetails,
            'corporate' => $corporate, 'sports' => $sports, 'concert' => $concerts, 'festival' => $festival]);

    }

    public function buyticket(Request $request)
    {
        $session = $request->session()->all();

        $chosen = DB::table('tempticketschosen')->get();

        $event = DB::table('event')->get()->where('id', session('event_id'));

        $chosenticket = DB::table('ticketdetails')->get()->where('EventId', session('event_id'));

        $corporate = DB::table('event')->get()->where('EventType', 'Corporate');

        $sports = DB::table('event')->get()->where('EventType', 'Sports');

        $concerts = DB::table('event')->get()->where('EventType', 'Concert');

        $festival = DB::table('event')->get()->where('EventType', 'Festival');

        return view('buyticket', ['event' => $event,'chosen' => $chosen,'chosenticket' => $chosenticket, 'session' => $session, 'corporate' => $corporate, 'sports' => $sports, 'concert' => $concerts, 'festival' => $festival]);
    }

    public function storedetails(Request $request)
    {
        $ticket_type = $request->input('ticket_type');

        $number = $request->input('number');

        $subtotal = $request->input('subtotal');

        $event_title = $request->input('event_title');

        if (DB::table('tempticketschosen')->where('type', '=', $ticket_type)->exists()) {
            if(DB::table('tempticketschosen')->where('type', '=', $ticket_type)->update(
                ['quantity' => $number, 'subtotal' => $subtotal, 'event_title' => $event_title]
            ))
            {
                return response () ->json('table updated');
            }
            else
            {
                return response () ->json('table not updated');
            }
        }
        else
        {
            if(DB::table('tempticketschosen')->insert([
                ['type' => $ticket_type, 'quantity' => $number, 'subtotal' => $subtotal, 'event_title' => $event_title]
            ]))
            {
                return response () -> json('success');
            }

            return response () -> json('error');
        }

    }

    public function removesession()
    {

        if(DB::table('tempticketschosen')->delete())
        {
            return response () -> json('success');
        }
        else{
            return response () -> json('failure');
        }
    }

    public function removedetails(Request $request)
    {
        $ticketType = $request->input('ticket_type');
        if(DB::table('tempticketschosen')->where('type', '=', $ticketType)->delete())
        {
            return response () ->json('success');
        }
        else
        {
            return response () ->json('failed to delete');
        }
    }

    public function getData(Request $request)
    {
        $session = $request->session()->all();
        return response () -> json($session);
    }

    public function removechoice(Request $request)
    {
        $ticket_type = $request->input('ticket_type');

        if(DB::table('tempticketschosen')->where('type', '=', $ticket_type)->delete())
        {
            return response () ->json('success');
        }
        else
        {
            return response () ->json('error');
        }

    }

    public function sort(Request $request)
    {
        $option = $request->input('choice');
        if($option==1)
        {
            $thousand = DB::table('ticketdetails')->get()->where('ChargesInShillings', '>', 1000)
                ->where('ChargesInShillings', '<', 50001)->pluck('EventId');
        }
        else if($option==2)
        {
            $thousand = DB::table('ticketdetails')->get()->where('ChargesInShillings', '>', 5000)
                ->where('ChargesInShillings', '<', 15001)->pluck('EventId');
        }
        else if($option==3)
        {
            $thousand = DB::table('ticketdetails')->get()->where('ChargesInShillings', '>', 15000)
                ->where('ChargesInShillings', '<', 50001)->pluck('EventId');
        }
        else
        {
            $thousand = DB::table('ticketdetails')->get()->where('ChargesInShillings', '>', 50000)
                ->where('ChargesInShillings', '<', 10000001)->pluck('EventId');
        }
        return response () ->json($thousand);
    }

}
