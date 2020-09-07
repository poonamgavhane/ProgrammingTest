<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;

class Employee extends Model
{
//    use Searchable;

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'employees_index';
    }
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

    /**
     * Get the value used to index the model.
     *
     * @return mixed
     */
    public function getScoutKey()
    {
        return $this->email;
    }
    public function  company(){
        return $this->belongsTo(Company::class);
    }

}
