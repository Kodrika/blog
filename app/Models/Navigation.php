<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{

    public function scopeSort($query)
    {
        return $query->orderBy('sort', 'asc');
    }

}
