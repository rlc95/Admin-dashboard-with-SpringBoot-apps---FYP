<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;



    
    public static function survey()
    {
        /*
        $data =   Survey::selectRaw('id,form_data')
                 ->get();
        */

        $data = DB::table('surveys')->select('id','form_data')
                ->get();
        
        //$data = DB::select('SELECT id,form_data FROM surveys');

        return $data;
    }


}
