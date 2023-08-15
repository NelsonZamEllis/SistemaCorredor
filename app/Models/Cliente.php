<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table='clientes';
    protected $primarykey='id';
    protected $fillable=['cedula','nombre', 'telefono', 'correo', 'direccion', 'nacimiento'];
    protected $guarded=[];
    public $timestamps=true;
}
