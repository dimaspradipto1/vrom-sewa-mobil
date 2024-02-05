<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts =[
        'photos' => 'array'
    ];


    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
