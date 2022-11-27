<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model;
{
    use HasFactory;
    // protected $table = "custom_name_table";
    // protected $connection = "mongo_stage_1";
    // protected $primaryKey = "identifier";
    // protected $fillable = ["name","email","address"];
    // protected $guards = ["role"];
    // protected $timestamps = false;
    // const CREATED_AT = “tanggal_dibuat”;
    // const UPDATED_AT = “tanggal_diupdate”;
    use SoftDeletes;
}

?>