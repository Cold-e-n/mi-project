<?php

namespace App\Helpers;

use App\Models\Warna;

/**
 *
 */
class DenahWarna
{
    /**
     *
     */
    protected $warna;

    /**
     *
     */
    protected $result;

    /**
     *
     */
    public function __construct(Warna $warna)
    {
        $this->warna = $warna;
    }

    /**
     *
     */
    public function tampil()
    {
        $warnaArr = json_decode($this->warna->type, true);
        extract($warnaArr);

        $line = array_fill(1, $total, $distance);

        $this->result = $line;
        return $this->result;
    }
}
