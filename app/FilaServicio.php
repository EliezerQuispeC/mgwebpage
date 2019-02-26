<?php

namespace mainglobal;

use Illuminate\Database\Eloquent\Model;

class FilaServicio extends Model
{
    protected $table = 'services_row';

    protected $primaryKey = 'ser_row_id';

    public $timestamps = false;

    protected $fillable = [
        'ser_row_tit',
        'ser_row_des',
        'ser_row_img',
        'ser_id'
    ];

    protected $guarded = [

    ];
}
