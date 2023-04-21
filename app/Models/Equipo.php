<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $id
 * @property $nombre
 * @property $estado
 * @property $nivel
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'estado' => 'required',
		'nivel' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','estado','nivel'];



}
