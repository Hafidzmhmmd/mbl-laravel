<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Desc extends Model
{
    protected $table = 'katalog_desc';
	protected $primaryKey = 'detailref';
    protected $fillable = [
        'desc','fungsi','jenis'
    ];
}
