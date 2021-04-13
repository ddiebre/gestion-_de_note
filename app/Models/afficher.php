<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class afficher extends Model
{
    use HasFactory;
    protected $fillable=['niveau','name'];
}
