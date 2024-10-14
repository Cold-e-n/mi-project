<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kain;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Warna extends Model
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
     * Relasi.
     */
    public function fabric(): HasOne
    {
        return $this->hasOne(Kain::class, 'colour_id');
    }

    /**
     * Nampilin spesifik data dari benang warna.
     */
    public function get($key = 'type')
    {
        $warna = json_decode($this->type, true);
        $result = '';

        extract($warna);
        if ($key == 'type')
        {
            (!array_key_exists('out', $warna)) ? $result = $type : $result = "{$type} + OUT {$out['type']}";
        } elseif ($key == 'distance') {
            $result = $distance;
        } elseif ($key == 'total') {
            $result = $total;
        }

        return $result;
    }

    /**
     * Menampilkan detail dari benang warna dalam bentuk string.
     */
    public function toString()
    {
        $warnaArr = json_decode($this->type, true);
        $warna = '';

        extract($warnaArr);

        if (!array_key_exists('out', $warnaArr))
        {
            $warna = $type.' = '.$total.' H';
        } else {
            $warna = $type.' = '.$total.' H + OUT '.$out['type'].' '.$out['total'].' H';
        }

        return $warna;
    }
}
