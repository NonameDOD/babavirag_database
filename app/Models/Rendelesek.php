<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rendelesek extends Model
{
    use HasFactory;

    protected $table = 'rendelesek';
    protected $primaryKey = 'rendeles_id';
    public $timestamps = false;

    protected $fillable = [
        'felhasznalo_id', 'szallitasi_cim_id', 'szamlazasi_cim_id',
        'rendeles_datuma', 'statusz', 'szallitasi_koltseg',
        'szallitasi_mod', 'megjegyzes', 'szamlazas_statusza'
    ];

    public function felhasznalo()
    {
        return $this->belongsTo(Felhasznalok::class, 'felhasznalo_id');
    }

    public function szallitasiCim()
    {
        return $this->belongsTo(Cimek::class, 'szallitasi_cim_id', 'cim_id');
    }

    public function szamlazasiCim()
    {
        return $this->belongsTo(Cimek::class, 'szamlazasi_cim_id', 'cim_id');
    }

    public function tetelek()
    {
        return $this->hasMany(Rendeles_tetelek::class, 'rendeles_id');
    }

    public function fizetes()
    {
        return $this->hasOne(Fizetesek::class, 'rendeles_id');
    }
}