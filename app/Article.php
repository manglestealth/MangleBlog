<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    public $timestamps = false;

    public function content()
    {
        return $this->hasOne('App\Content','aid');
    }
}
