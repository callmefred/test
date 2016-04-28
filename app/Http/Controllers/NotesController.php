<?php

namespace App\Http\Controllers;

use App\Card;

use App\Note;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\http\Controllers\Controller;


class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {

    		//$note = new Note;
    		//$note->body = $request->body;
    		//$card->notes()->save($note);

    		$card->addNote(
    				new Note($request->all())
    			);

    		return back();

    }
}
