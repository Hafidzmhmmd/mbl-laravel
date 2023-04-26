<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    protected $table = 'katalog';
	// protected $primaryKey = 'content';
    protected $fillable = [
        'content','image','detailref'
    ];
}
