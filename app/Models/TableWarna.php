<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kain;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TableWarna extends Model
{
    use HasFactory;

    /**
     *
     */
    protected $table = 'colours';

    /**
     *
     */
    protected $fillable = [
        'type',
        'fabric_id',
        'combs'
    ];

    /**
     *
     */
    public function fabric(): HasOne
    {
        return $this->hasOne(Kain::class, 'colour_id');
    }

    /**
     *
     */
    public function toString()
    {
        $warnaArr = json_decode($this->type, true);
        $warna = '';

        if(!array_key_exists('out', $warnaArr))
        {
            extract($warnaArr);
            $warna = $type.' = '.$total.' H';
        } else {
            extract($warnaArr);
            $warna = $type.' = '.$total.' H + OUT '.$out['type'].' '.$out['total'].' H';
        }

        return $warna;
    }
}
