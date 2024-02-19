<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coleccione
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Skin[] $skins
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Coleccione extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skins()
    {
        return $this->hasMany('App\Models\Skin', 'coleccion_id', 'id');
    }
    

}
