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
        $this->result = array_fill(0, $this->posisiWarna->seksi, []);
    }

    /**
     * Posisi selanjutnya di seksi yang sama.
     */
    public function nextPosCurrentSect(array $current)
    {
        return array_reduce($current, function($total, $curr) use($current) {
            $result = $this->posisiWarna->cones - ($total + $curr) - count($current);
            return $result;
        });
    }

    /**
     * Posisi pertama seksi pertama.
     */
    public function firstPosFirstSect(array $current)
    {
        extract($this->warna);

        $awal = (int) floor(
            (($this->posisiWarna->cones * $this->posisiWarna->seksi) - (
                ($distance * ($total - 1)) + $total
            )) / 2
        );

        $current[0] = $awal;
        foreach($current as $key => $value)
        {
            $i = $this->nextPosCurrentSect($current);

            if($i > $distance)
            {
                $current[] = $distance;

                if(($i - $distance) == 1)
                {
                    $i = null;
                } else {
                    $i = array_reduce($current, function($total, $curr) use($current) {
                        return ($total + $curr + count($current) - 1);
                    });
                    $i = $this->posisiWarna->cones - $i;
                }
            }

            $current[] = $i;
        }

        return $current;
    }

    /**
     * Posisi pertama seksi berikutnya.
     */
    public function firstPosNextSect(array $current)
    {
        extract($this->warna);

        $result = [];
        $result[0] = $distance - end($current);

        foreach($result as $key => $value)
        {
            $i = $this->nextPosCurrentSect($result);

            if($i > $distance)
            {
                $result[] = $distance;

                if(($i - $distance) == 1)
                {
                    $i = null;
                } else {
                    $i = array_reduce($result, function($total, $curr) use($current) {
                        return ($total + $curr + count($current) - 1);
                    });
                    $i = $this->posisiWarna->cones - $i;
                }
            }

            $result[] = $i;
        }

        return $result;
    }

    /**
     * Posisi seksi terakhir jika ada benang warna di OUT.
     */
    public function lastSect(array $current)
    {
        extract($this->warna);

        $result = [];
        $result[0] = $distance - end($current);

        if(array_key_exists('out', $this->warna))
        {
            $i = array_fill(0, $out['total'], 10);
            $result[] = $this->nextPosCurrentSect($result) - count($i) - (count($i) * 10);

            foreach($i as $value)
            {
                $result[] = $value;
            }
        } else {
            $result[] = $this->nextPosCurrentSect($current);
        }

        return $result;
    }

    /**
     *
     * @return array
     */
    public function hitung()
    {
        foreach($this->result as $keys => $values)
        {
            if($keys == 0)
            {
                $this->result[$keys] = $this->firstPosFirstSect($values);
            } else {
                if(array_key_exists('out', $this->warna) && ($keys == ($this->posisiWarna->seksi - 1)))
                {
                    $this->result[$keys] = $this->lastSect($this->result[$keys - 1]);
                } else {
                    $this->result[$keys] = $this->firstPosNextSect($this->result[$keys - 1]);
                }
            }
        }

        return $this->result;
    }

}
