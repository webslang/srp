<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patron extends Model
{
    //
    protected $fillable = ['date_created','year','branch','programs','first_name','last_name','email','patron_age','zip_code','school_attended','beginning_package','ending_package','book_reading_promise','how_did_you_hear','shirt_sizes','book_read','picture_release'];
}
