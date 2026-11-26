<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Felhasznalok extends Model
{
    use HasFactory;

    protected $table = 'felhasznalok';
    protected $primaryKey = 'felhasznalo_id';

    public $timestamps = false;

    protected $fillable = [
        'email', 'jelszo_hash', 'keresztnev', 'vezeteknev',
        'telefon', 'regisztracio_datuma', 'utolso_belepes', 'szerepkor'
    ];

    public function cimek()
    {
        return $this->hasMany(Cimek::class, 'felhasznalo_id');
    }

    public function rendelesek()
    {
        return $this->hasMany(Rendelesek::class, 'felhasznalo_id');
    }

    public function kosar()
    {
        return $this->hasMany(Kosar::class, 'felhasznalo_id');
    }

    public function ertekelesek()
    {
        return $this->hasMany(Ertekelesek::class, 'felhasznalo_id');
    }

    public function kedvencek()
    {
        return $this->hasMany(Kedvencek::class, 'felhasznalo_id');
    }
}