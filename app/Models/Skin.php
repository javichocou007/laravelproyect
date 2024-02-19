<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Skin
 *
 * @property $id
 * @property $nombre
 * @property $coleccion_id
 * @property $float
 * @property $desgaste
 * @property $precio_recomendado
 * @property $created_at
 * @property $updated_at
 *
 * @property Coleccione $coleccione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Skin extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'coleccion_id' => 'required',
		'float' => 'required',
		'desgaste' => 'required',
		'precio_recomendado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','coleccion_id','float','desgaste','precio_recomendado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function coleccione()
    {
        return $this->hasOne('App\Models\Coleccione', 'id', 'coleccion_id');
    }
    

}
