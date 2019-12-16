<?php

namespace Modules\AdminModule\Entities;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";
    protected $fillable = ['cate_id','name','note'];
    public $timestamps = false;
    public $incrementing = false;
    public function news(){
        return $this->belongsTo('Modules\AdminModule\Entities\News','cate_id');
    }

}
