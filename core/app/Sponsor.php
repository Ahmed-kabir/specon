<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    public function sponsorType()
    {
        return $this->belongsTo(SponsorType::class, 'sponsor_id');
    }
}
