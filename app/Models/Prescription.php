<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $guarded = [];


    public  function  doctor(){
        return $this->belongsTo(User::class,'doctor_id');
    }

    public  function  med(){
        return $this->belongsTo(Medicine::class,'medicine_id');
    }
}
