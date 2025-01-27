<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;



    public static function previewcustomers($id)
    {
        /*
        $customer = Customer::selectRaw('*')
                    ->where('id',$id)
                    ->first();
        */
        
        $customer = DB::table('customers')->select('*')
                    ->where('id',$id)
                    ->first();
        

       //$customer = DB::select('SELECT customers.* FROM customers WHERE customers.id = '.$id.'');

        return response()->json([ 'data' => $customer ]);
    }

}
