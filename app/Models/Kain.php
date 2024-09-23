<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PosisiWarna;
use App\Models\TableWarna;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kain extends Model
{
    use HasFactory;

    /**
     *
     */
    protected $fillable = [
        'name',
        'colour_id'
    ];

    /**
     *
     */
    protected $table = 'fabrics';

    /**
     *
     */
    public function colour(): BelongsTo
    {
        return $this->belongsTo(TableWarna::class);
    }
}
