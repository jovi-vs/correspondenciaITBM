<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    protected $table = 'unidad';
    protected $fillable = ['descripcion','ubicacion'];

    public function cargos()
    {
        return $this->hasMany('App\Models\Cargo', 'cargo_id');
    }
}
