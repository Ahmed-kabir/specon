<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function speakers()
    {
        return $this->belongsTo('App\Speaker');
    }
}
