<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ertekelesek extends Model
{
    use HasFactory;

    protected $table = 'ertekelesek';
    protected $primaryKey = 'ertekeles_id';
    public $timestamps = false;

    protected $fillable = [
        'termek_id', 'felhasznalo_id', 'ertekeles',
        'kep_url', 'szoveg', 'datum', 'jovahagyva'
    ];

    public function termek()
    {
        return $this->belongsTo(Termekek::class, 'termek_id');
    }

    public function felhasznalo()
    {
        return $this->belongsTo(Felhasznalok::class, 'felhasznalo_id');
    }
}