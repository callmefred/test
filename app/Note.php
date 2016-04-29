<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
// Sets what is fillable to prevent maas assignment
	protected $fillable = ['body'];
// returns the card the note is associated with
    public function card()
    {

    	return $this->belongsTo(Card::class);
    	
    }
// returns the user the note is associated with
    public function user()
    {

    	return $this->belongsTo(User::class);
    	
    }



}
