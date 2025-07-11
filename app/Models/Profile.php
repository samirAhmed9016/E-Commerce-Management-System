<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'image'
    ];
    public function profileable()
    {
        return $this->morphTo();
    }
}
