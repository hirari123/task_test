<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class Area extends Model
{
    public function shops()
    {
        return $this->hasMany('App\Models\Shop');
    }
}
