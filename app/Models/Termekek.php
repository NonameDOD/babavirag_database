<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Termekek extends Model
{
    use HasFactory;

    protected $table = 'termekek';
    protected $primaryKey = 'termek_id';
    public $timestamps = false;

    protected $fillable = [
        'kategoria_id', 'nev', 'leiras', 'ar', 'akcios_ar',
        'cikkszam', 'suly', 'meret', 'szin', 'anyag',
        'kep_url', 'lathato', 'keszlet_mennyiseg',
        'letrehozva', 'frissitve', 'statusz'
    ];

    public function kategoria()
    {
        return $this->belongsTo(Kategoriak::class, 'kategoria_id');
    }

    public function rendelesTetelek()
    {
        return $this->hasMany(Rendeles_tetelek::class, 'termek_id');
    }

    public function kosar()
    {
        return $this->hasMany(Kosar::class, 'termek_id');
    }

    public function ertekelesek()
    {
        return $this->hasMany(Ertekelesek::class, 'termek_id');
    }

    public function kedvencek()
    {
        return $this->hasMany(Kedvencek::class, 'termek_id');
    }
}