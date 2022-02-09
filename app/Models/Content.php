<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public function transcript()
    {
        return $this->hasMany(Transcription::class);
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
