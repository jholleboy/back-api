<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\Saques;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Nivel extends Model
{
   
   protected $primaryKey = 'id';
   
    protected $table = 'nivel';
    protected $fillable = ['Nivel',];
    public  $timestamps   = false;
    
}
