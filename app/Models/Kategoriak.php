<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategoriak extends Model
{
    use HasFactory;

    protected $table = 'kategoriak';
    protected $primaryKey = 'kategoria_id';
    public $timestamps = false;

    protected $fillable = [
        'nev', 'leiras', 'szulo_kategoria_id', 'sorrend'
    ];

    public function szulo()
    {
        return $this->belongsTo(Kategoriak::class, 'szulo_kategoria_id');
    }

    public function alkategoriak()
    {
        return $this->hasMany(Kategoriak::class, 'szulo_kategoria_id');
    }

    public function termekek()
    {
        return $this->hasMany(Termekek::class, 'kategoria_id');
    }
}