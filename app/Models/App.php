<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $table = 'app';
    protected $primaryKey = "id";
    protected $fillable = ['app_name', 'app_icon','app_key','is_default'];
}
