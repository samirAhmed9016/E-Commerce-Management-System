<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class test extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'status',
        'show',
    ];
    public function getCreatedAtAttribute($value)
    {
        return date('m/D', strtotime($value));
    }
    public function getUpdatedAtAttribute($value)
    {
        return date('m/D', strtotime($value));
    }
    public function getDeletedAtAttribute($value)
    {
        return date('m/D', strtotime($value));
    }
}
