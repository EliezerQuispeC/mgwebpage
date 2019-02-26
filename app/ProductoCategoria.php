<?php

namespace mainglobal;

use Illuminate\Database\Eloquent\Model;

class ProductoCategoria extends Model
{
    protected $table = 'products_cat';

    protected $primaryKey = 'pro_cat_id';

    public $timestamps = false;

    protected $fillable = [
        'pro_cat_nam',
        'pro_cat_con'
    ];

    protected $guarded = [

    ];
}
