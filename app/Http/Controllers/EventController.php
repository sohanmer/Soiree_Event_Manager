<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EventController extends Controller
{
    
    public function store(Request $request)
    {
        $venue = $request->input('venue');
        $date = $request->input('date');
        DB::insert('insert into soiree (venue, date) values (?, ?)', [$venue, $date]);
        $rowCount = count('soiree');
        if($rowCount == 1){
            return view('sucessPage');
        }
        else{
            return view('errorPage');
        }
        
    }
    public function retrieve(Request $request)
    {
       
        $soiree = DB::table('soiree')->select('venue','date')->get();
        return view('eventList')->with('soiree',$soiree);
    }
}
?>