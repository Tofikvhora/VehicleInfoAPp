<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TwoWheeler extends Model
{

    protected $table = "twoWheeler";
    protected $fillable = ["brand"];
}
