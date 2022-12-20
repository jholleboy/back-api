<?php

namespace App\Models;
use App\Models\Nivel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\Saques;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Desenvolvedores extends Model
{
    //protected $hidden = ['nivel'];
   protected $primaryKey = 'Id';
   
    protected $table = 'desenvolvedor';
    protected $fillable = ['Nome','Nivel',];
    public  $timestamps   = false;
    
}
