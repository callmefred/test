<?php

namespace App\Http\Controllers;

use App\Card;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{
    public function index()

    {
    	//$cards = \DB::table('cards')->get();

    	$cards = Card::all();

    	return view('cards.index',compact('cards'));
    }


    public function show(Card $card)

    {
    	
	   	//return $card;
    	//$card = Card::find($id);

    	return view('cards.show',compact('card'));
    }
}
