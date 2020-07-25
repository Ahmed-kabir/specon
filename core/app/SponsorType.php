<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SponsorType extends Model
{
    public function sponsorName()
    {
        return $this->hasMany(Sponsor::class, 'sponsor_id');
    }
}
