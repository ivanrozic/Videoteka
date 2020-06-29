<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zanr extends Model {

    protected $table = 'zanrs';
    protected $primaryKey = 'zanr_id';
    protected $fillable = ['naziv'];

    public function filmovi() {
        return $this->belongsToMany('App\Filmovi', 'filmovi_zanr', 'zanr_id', 'filmovi_id');
    }

}
