<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AddUsers extends Model
{
    use HasFactory;

    protected $table = 'add_users';
    protected $fillable = ['id','name','idnumber','email','cntctnum','adrss','occuptn'];



    public static function users()
    {
       // DB::raw('(SELECT b.sti as sti, COUNT(b.szi) AS zone , COUNT(b.sbi) AS bins FROM ivmn_strsmasbins AS b GROUP BY b.sti ) AS bindata ');
        
        return   AddUsers::selectRaw('id,name,company_name,email,contact_num,adrss,occuptn')
                 ->get();
       

        /*
        return   DB::table('add_users')->select('id','name','idnumber','email','cntctnum','adrss','occuptn')
                 ->get();
        */

       // return  DB::select('SELECT id,add_users.name,idnumber,email,cntctnum,adrss,occuptn FROM add_users');   

        

    }

    public static function previewuser($id)
    {
        
        $user =  AddUsers::selectRaw('id,name,idnumber,email,cntctnum,adrss,occuptn')
                 ->where('id',$id)
                 ->first();
        

    
        /*
        $user = DB::table('add_users')->select('id','name','idnumber','email','cntctnum','adrss','occuptn')
                 ->where('id',$id)
                 ->first();
        */
       
        //$user = DB::select('SELECT id,add_users.name,idnumber,email,cntctnum,adrss,occuptn FROM add_users WHERE add_users.id = '.$id.'');   
        
        //$user = DB::raw("SELECT id,add_users.name,idnumber,email,cntctnum,adrss,occuptn FROM add_users WHERE add_users.id = '.$id.'");
       
        
        return response()->json([ 'data' => $user ]);
    }


    

    public static function authorityAutocomplete($val)
    {
        /*
        $data = AddUsers::where('name', 'like', "%".$val."%")->orwhere('email', 'like', "%".$val."%")
              ->selectRaw('name AS value,id AS data')->get();
        */

        
        $data = DB::table('add_users')->where('name', 'like', "%".$val."%")->orwhere('email', 'like', "%".$val."%")
              ->select('name AS value','id AS data')->get();
        
        
       // $data = DB::select('SELECT add_users.name AS value, id AS data FROM add_users WHERE add_users.name LIKE "%" '.$val.' "%" ');
            
       

        return response()->json(array("suggestions" => $data));
    }

    



}
