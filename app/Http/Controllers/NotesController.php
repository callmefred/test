<?php

namespace App\Http\Controllers;

use App\Card;

use App\Note;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\http\Controllers\Controller;


class NotesController extends Controller
{

//The store function is used to create new comments in the notes table 

    public function store(Request $request, Card $card)
    {

    		$this->validate($request,
				[

					'body' => 'required'

				]);

    		$note = new Note($request->all());

    		$card->addNote($note,1);

    		return back();

    }

//The edit function is used to edit comments in the notes table 

    public function edit(Note $note)
    {

    	return view('notes.edit',compact('note'));	

    }

//The update function is used to update comments in the notes table 

   public function update(Request $request,Note $note)
    {

    	$note->update($request->all());

    	return back();

    }

//The delete function is used to delete comments in the notes table 

    public function delete(Request $request,Note $note)
    {

    	$note->delete();

    	return redirect()->action('CardsController@index');

    }




}
