<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zanr extends Model {

    protected $primaryKey = 'zanr_id';
    
    protected $table = 'zanrs';
    protected $fillable = ['naziv'];
    
    

}
