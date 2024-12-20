<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public function category()
    {
        return $this->belongsTo(FAQCategory::class);
    }
}
