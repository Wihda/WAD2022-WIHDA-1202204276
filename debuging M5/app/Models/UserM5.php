<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserM5 extends Model
{
    protected $table = "users";
    use HasFactory;
    public $timestamps = true;

    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'no_hp',
        'email',
        'password',
    ];
}
