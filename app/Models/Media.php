<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    //protected $primaryKey = 'CiuId';

    protected $connection = 'pgsql';

    //protected $connection = 'sqlsrv';


    //public $timestamps = false;

    //protected $connection = 'sqlsrv';

    //protected $dateFormat = 'Y-m-d H:i:s.v';

    //public $incrementing = false;
}