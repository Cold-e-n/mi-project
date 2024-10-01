<?php

namespace App\Helpers;

use App\Models\Kain;
use App\Models\PosisiWarna;


/**
 *
 */
class PerhitunganWarna
{
    /**
     *
     */
    protected Kain $kain;

    /**
     *
     */
    protected PosisiWarna $posisiWarna;

    /**
     *
     */
    protected $warna;

    /**
     *
     */
    protected array $result;

    /**
     *
     */
    public function __construct(Kain $kain, PosisiWarna $posisiWarna)
    {
        $this->kain = $kain;
        $this->posisiWarna = $posisiWarna;
        $this->warna = json_decode($kain->colour->type, true);
        $this->result = array_fill(1, $this->posisiWarna->seksi, []);
    }

    /**
     * Menentukan posisi pertama.
     */
    public function firstPos()
    {
        extract($this->warna);

        $n = (int) floor(
            (($this->posisiWarna->cones * $this->posisiWarna->seksi) - (
                ($distance * ($total - 1)) + $total
            )) / 2
        );

        return $n;
    }

    /**
     * Posisi selanjutnya di seksi yang sama.
     */
    public function nextPosCurrentSect(array $current)
    {
        $n = $this->posisiWarna->cones - array_sum($current) - count($current);

        return $n;
    }

    /**
     * Posisi seksi pertama.
     */
    public function firstPosFirstSect(array $current)
    {
        extract($this->warna);

        $n = $this->firstPos();
        $current[0] = $n;

        return $current;
    }

    /**
     * Posisi pertama seksi berikutnya.
     */
    public function posNextSect($current)
    {
        extract($this->warna);

    }

    /**
     * Posisi seksi terakhir jika ada benang warna di OUT.
     */
    public function lastSect(array $current)
    {
        extract($this->warna);

    }

    /**
     *
     * @return array
     */
    public function hitung()
    {
        foreach($this->result as $keys => $values)
        {
            if ($keys == 1)
            {
                $this->result[$keys] = $this->firstPosFirstSect($values);
            } else {
                $this->result[$keys] = $this->posNextSect($this->result[$keys - 1]);
            }
        }

        return $this->result;
    }

}
