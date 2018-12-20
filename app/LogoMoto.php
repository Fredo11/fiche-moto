<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogoMoto extends Model
{
    protected $table = 'logo_moto';

    protected $fillable = ['title', 'logo'];
}
