<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kedvencek extends Model
{
    use HasFactory;

    protected $table = 'kedvencek';
    protected $primaryKey = 'kedvenc_id';
    public $timestamps = false;

    protected $fillable = [
        'felhasznalo_id', 'termek_id', 'hozzaadva_datum'
    ];

    public function felhasznalo()
    {
        return $this->belongsTo(Felhasznalok::class, 'felhasznalo_id');
    }

    public function termek()
    {
        return $this->belongsTo(Termekek::class, 'termek_id');
    }
}