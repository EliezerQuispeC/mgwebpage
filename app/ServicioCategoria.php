<?php

namespace mainglobal;

use Illuminate\Database\Eloquent\Model;

class ServicioCategoria extends Model
{
    protected $table = 'services_cat';

    protected $primaryKey = 'ser_cat_id';

    public $timestamps = false;

    protected $fillable = [
        'ser_cat_nam',
        'ser_cat_con'
    ];

    protected $guarded = [

    ];
}
