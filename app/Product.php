<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{    
     use \Dimsav\Translatable\Translatable;
     public $translatedAttributes = ['title','summary', 'description'];
     protected $fillable = ['title', 'summary', 'description','price','image_url','slug','categories_id'];
}

class ProductTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['title','summary', 'description'];

}
