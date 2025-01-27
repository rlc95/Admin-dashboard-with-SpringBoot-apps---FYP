<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class CustmrTransaction extends Model
{
    use HasFactory;


    public static function customers($id) //customers
    {

        /*
        return   CustmrTransaction::selectRaw('trnsid,authrtyName,trnsactn,customers.*,user_roles.*')
                 ->leftJoin('customers', 'customers.id', 'custmr_transactions.cusid')
                 ->leftJoin('user_roles', 'user_roles.uri', 'custmr_transactions.authrtyid')
                 ->where('custmr_transactions.authrtyid',$id)
                 ->get();
      
        */
         
        return DB::table('custmr_transactions')->select('trnsid','authrtyName','trnsactn','customers.*','user_roles.*')
            ->leftJoin('customers', 'customers.uid', 'custmr_transactions.cusid')
            ->leftJoin('user_roles', 'user_roles.uri', 'custmr_transactions.authrtyid')
            ->where('custmr_transactions.authrtyid',$id)
            ->get();

         

    
        //return   DB::select('SELECT trnsid,authrtyName,trnsactn,customers.*,user_roles.* FROM custmr_transactions LEFT JOIN customers ON custmr_transactions.cusid = customers.id LEFT JOIN user_roles ON custmr_transactions.authrtyid = user_roles.uri WHERE custmr_transactions.authrtyid = '.$id.' ');



    }


    


}
