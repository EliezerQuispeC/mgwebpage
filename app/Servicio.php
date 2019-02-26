<?php

namespace mainglobal;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'services';

    protected $primaryKey = 'ser_id';

    public $timestamps = false;

    protected $fillable = [
        'ser_nam',
        'ser_des',
        'ser_img',
        'ser_bro',
        'ser_sta',
        'ser_cat_id'
    ];

    protected $guarded = [

    ];
}
