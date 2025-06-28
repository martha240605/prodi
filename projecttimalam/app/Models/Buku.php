<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "bukus";
    protected $primaryKey = "id";
    protected $fillable = ['id','isbn','judul','tahun','penulis','penerbit','cover'];
}
