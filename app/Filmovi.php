<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmovi extends Model {

    protected $primaryKey = 'filmovi_id';

    public function zanr() {
        return $this->belongsToMany('App\Zanr', 'filmovi_zanr', 'filmovi_id', 'zanr_id');
    }

}
