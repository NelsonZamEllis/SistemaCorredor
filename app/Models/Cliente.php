<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table='clientes';
    protected $primarykey='id';
    protected $fillable=['cedula','nacionalidad', 'poliza', 'nombre', 'apellido', 'telefono', 'correo', 'direccion', 'nacimiento'];
    protected $guarded=[];
    public $timestamps=true;
}
