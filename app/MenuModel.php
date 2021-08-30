<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuModel extends Model
{
//    Soft Delete
    use softDeletes;

//    Nama Table
    protected $table = "menu";

//    Nama Primary Key
    protected $primaryKey = "menu_id";

//    Field yang bisa di isi
    protected $fillable = [
        "menu_name",
        "menu_icon"
    ];

//  Field yang di sembunyikan
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
