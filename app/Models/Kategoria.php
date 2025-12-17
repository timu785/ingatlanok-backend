<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    // ezzel engedélyezzük a factory-k használatát, ez most nem kell, de a szokás kedvéért beraktam
    use HasFactory;
    // a kategoria tábla mely mezői tölthetőek fel tömegesen
    protected $fillable = [
        'kategoria_nev'
    ];
    // még azt kell beállítani, hogy 1 kategóriához N ingatlan tartozhat ......
    public function ingatlanok()
    {
        return $this->hasMany(Ingatlan::class, 'kategoria_id');
    }
}
