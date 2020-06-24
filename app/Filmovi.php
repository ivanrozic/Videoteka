<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmovi extends Model {
    
    protected $primaryKey = 'filmovi_id';

    protected $table = 'filmovis';
    protected $fillable = ['naslov', 'godina', 'trajanje', 'slika'];

    public function getImageAttribute() {
        return $this->slika;
        }
    public function zanrovi()
    {
        return $this->hasMany('App\Zanr');
    }

}
