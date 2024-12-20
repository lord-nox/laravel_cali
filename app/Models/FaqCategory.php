<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    public function faqs()
    {
        return $this->hasMany(FAQ::class);
    }
}
