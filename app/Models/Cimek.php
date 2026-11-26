<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cimek extends Model
{
    use HasFactory;

    protected $table = 'cimek';
    protected $primaryKey = 'cim_id';
    public $timestamps = false;

    protected $fillable = [
        'felhasznalo_id', 'iranyitoszam', 'varos', 'utca',
        'hazszam', 'emelet', 'ajto', 'alapertelmezett'
    ];

    public function felhasznalo()
    {
        return $this->belongsTo(Felhasznalok::class, 'felhasznalo_id');
    }
}