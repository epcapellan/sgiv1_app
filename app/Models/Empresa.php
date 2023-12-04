<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;

    protected  $table = 'empresas';

    protected $fillable = [
        'id_provincia',
        'nombre',
        'direccion',
        'telefono',
        'telefono2',
        'extension',
        'email',
        'url',
        'rnc',
        'observacion',
        'fecha_registro',
        'estatus',
        'cambios'
    ];

    public const estatus = ['Activa', 'Inactiva', 'Suspendida'];
    public const id_provincia = [
        'Distrito Nacional',
        'Santo Domingo',
        'Santo Domingo Este',
        'Santo Domingo Norte',
        'Santo Domingo Oeste',
        'Distrito Nacional',
        'Distrito Nacional',
    ];

    public function reservacions(): HasMany
    {
        return $this->hasMany(reservacions::class);
    }
}
