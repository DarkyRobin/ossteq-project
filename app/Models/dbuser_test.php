<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbuser_test extends Model
{
    use HasFactory;
    protected $fillable = ['textbox', 'radiobutton', 'checkbox', 'image'];
}
