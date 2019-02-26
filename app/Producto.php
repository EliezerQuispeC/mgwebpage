<?php

namespace mainglobal;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'pro_id';

    public $timestamps = false;

    protected $fillable = [
        'pro_nam',
        'pro_des',
        'pro_img_1',
        'pro_img_2',
        'pro_img_3',
        'pro_img_4',
        'pro_fic_tec',
        'pro_bro',
        'pro_sta',
        'pro_cat_id'
    ];

    protected $guarded = [

    ];
}
