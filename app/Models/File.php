<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $table='files';
    protected $primarykey='id';
    protected $fillable = [
        'name',
        'cliente_id'
    ];
    protected $guarded=[];
    public $timestamps=true;
}