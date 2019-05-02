<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Patron extends Model
{
    //
    protected $fillable = ['branch','programs','first_name','last_name','email','patron_age','zip_code','school_attended','grade_level','beginning_package','ending_package','book_reading_promise','how_did_you_hear','books_read','picture_release'];

    use Searchable;

    public $asYouType = true;

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
}
