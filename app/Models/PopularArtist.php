<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PopularArtist extends Model
{
    use HasFactory;
    protected $table = 'artists';
    protected $primary = 'id';
    protected $fillable = ['name','photo'];
}
