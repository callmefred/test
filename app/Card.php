<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
//The notes function sets the association of notes to cards
    public function notes()
    {

    	return $this->hasMany(Note::class);

    }
//The addNote function sets the association of notes to user id when a note is created	
	public function addNote(Note $note, $userId)
    {

    	$note->user_id = $userId;

    	return $this->notes()->save($note);

    }

}
