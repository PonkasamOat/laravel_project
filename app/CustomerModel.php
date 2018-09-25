<?php

namespace App;

use Illuminate\Support\Facades\DB;

class CustomerModel
{
    function select(){
    $sql = "SELECT * FROM customer";
            return DB::select($sql, []);
        }
    
}
