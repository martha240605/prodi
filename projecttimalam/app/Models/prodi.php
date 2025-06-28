<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    protected $table = "prodis";
    protected $primaryKey = "id";
    protected $fillable = ['id','nama'];
}
