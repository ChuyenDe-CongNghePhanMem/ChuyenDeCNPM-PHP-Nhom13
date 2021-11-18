<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoPhuc extends Model
{
    private $a,$b;
    public function geta()
    {
        return $this->a;
    }
    public function getb()
    {
        return $this->b;
    }
    public function seta($c)
    {
        $this->a=$c;
    }
    public function setb($d)
    {
        $this->b=$d;
    }
    public function setab($c,$d)
    {
        $this->a=$c;
        $this->b=$d;
    }
    public function show()
    {
        echo $this->a+"i"+$this->b;
    }
}
?>