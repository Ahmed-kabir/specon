<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function speakers()
    {
        return $this->hasOne('App\Speaker', 'id','speaker_id');
    }
    public function topicName()
    {
        return $this->hasOne('App\Topic', 'id', 'topic');

    }


}
