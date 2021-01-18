<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
	protected $primaryKey = 'id_category';
    public $fillable = ['nama_category'];
    public $timestamps = false;
}
