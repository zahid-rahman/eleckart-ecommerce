<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    //

    public function isBan(){
        return $this->approval;
    }

}
