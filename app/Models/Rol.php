<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\CustomResetPasswordNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class Rol extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'cat_roles';
    protected $primaryKey = 'idRol';

    protected $fillable = [
        'rol',
        'eliminado',
    ];
}
