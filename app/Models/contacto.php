<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    use HasFactory;

    protected $table = 'contacto';
    protected $fillable = [
        'Nombre',
        'Ciudad',
        'Correo',
        'Celular'
    ];

    public $incrementing = true;

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
