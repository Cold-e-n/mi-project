<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosisiWarna extends Model
{
    use HasFactory;

    /**
     *
     */
    protected $table = 'position_colours';

    /**
     *
     */
    protected $fillable = [
        'fabric_id',
        'colour_id',
        'cones',
        'seksi',
        'sisir',
        'wb_no'
    ];

}
