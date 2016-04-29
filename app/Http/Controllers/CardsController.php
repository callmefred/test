<?php

namespace App\Http\Controllers;

use App\Card;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{
//The index function is used to create new comments in the notes table 
    public function index()

    {
    	
    	$cards = Card::all();

    	return view('cards.index',compact('cards'));
    }


    public function show(Card $card)

    {
	   	
    	$card->load('notes.user');

    	return view('cards.show',compact('card'));
    }
}
