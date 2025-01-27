<?php

namespace App\Http\Controllers\Config\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Exceptions\ErrorCodeException;
use Illuminate\Support\Facades\Http;


//Models
use App\Models\AddUsers;
use App\Models\Survey;

class UserController extends Controller
{
   //Route to Users Home page
   public function userHome(Request $request){ 
    return view('pages.config.user.user_home');
    }

      
    public function userView(Request $request){ 

        $users = AddUsers::users();

        /*
        $URI = ''.env('API_ENDPOINT').'user/getAuthority';
        
        $client = new \GuzzleHttp\Client();
        $request = $client->get($URI);
        $response = $request->getBody()->getContents();
        $usr = json_decode($response,TRUE);

        $users = collect($usr);
       */

        return view('pages.config.user.user_view')->with([
            'users' => $users
             
        ]);
    }

    public function userStore(Request $req){
        
        $validated = $req->validate([
            'InputName' => 'required',
            'InputID' => 'required',
            'InputEmail' => 'required|email',
            'InputUsername' => 'required|min:5',
            'InputAddrs' => 'required',
            'InputPasswrd' => 'required|min:6',
            'inputContact' => 'required|numeric',
            'InputOcuptn' => 'required',
    
        ]);

    /*
    $response1 = Http::post(env('API_ENDPOINT1').'admin/registerUserRole', [
            'uname' => $req->InputUsername,
            'password' => $req->InputPasswrd,
            'rti' => 2
    ]);

    if ($response1->ok()) {
       
        echo $response1->body();
    
    } else {
       
       echo 'Error: ' . $response1->status();
    }
    */


    /*
    $response = Http::post(env('API_ENDPOINT').'user/saveAuthority', [
        'name' => $req->InputName,
        'username' => $req->InputUsername,
        'company_name' => $req->InputID,
        'email' => $req->InputEmail,
        'contact_num' => $req->inputContact,
        'adrss' => $req->InputAddrs,
        'occuptn' => $req->InputOcuptn,
    ]);
    
    if ($response->ok()) {
        // HTTP response status code is in the 2xx range
        echo $response->body();
        

        //return dd($response->body());
    
    } else {
        // HTTP response status code is not in the 2xx range
       //return  dd($response->status());
       echo 'Error: ' . $response->status();
    }
    */

    $db = new AddUsers();

    $db->name = $req->InputName;
    $db->username = $req->InputUsername;
    $db->company_name = $req->InputID;
    $db->email = $req->InputEmail;
    $db->contact_num = $req->inputContact;
    $db->adrss = $req->InputAddrs;
    $db->occuptn = $req->InputOcuptn;

    if (!$db->save()) {
        throw new ErrorCodeException('Create users');
    }



        return redirect('home');

    
    }



    public function usersearch(Request $request)

    {
        $userid = $request->id;

        /*

        $URI = ''.env('API_ENDPOINT').'user/getAuthority/'.$userid.'';
        
        $client = new \GuzzleHttp\Client();
        $request = $client->get($URI);
        $response = $request->getBody()->getContents();
        $result = json_decode($response,TRUE);



        //userRole Password and Username of relevant authority

        $URI = ''.env('API_ENDPOINT1').'admin/getAdminByUsername/'.$result['username'].'';
        
        $client = new \GuzzleHttp\Client();
        $request = $client->get($URI);
        $response = $request->getBody()->getContents();
        $json = json_decode($response,TRUE);

        $resultAll = array_merge($result, $json);

        */

        $result = AddUsers::previewuser($userid);
            
        return $result;
        
    }



    public function userUpdate(Request $req){
    
        $validated = $req->validate([
            'InputName' => 'required',
            'InputID' => 'required',
            'InputEmail' => 'required|email',
            'InputUsername' => 'required|min:5',
            'InputAddrs' => 'required',
            'inputContact' => 'required|numeric',
            'InputOcuptn' => 'required',
            'InputPassword' => 'required|min:6',
    
        ]);

        
        /*
        $response1 = Http::put(env('API_ENDPOINT1').'admin/updateUserRole', [
            'uri' => $req->UserRoleid,
            'uname' => $req->InputUsername,
            'password' => $req->InputPassword,
            'rti' => 2
        ]);

        if ($response1->ok()) {
       
            echo $response1->body();
    
        } else {
       
            echo 'Error: ' . $response1->status();
        }
        */
        


        
        $respData = 1;

        /*
        $response = Http::put(env('API_ENDPOINT').'user/updatAuthority', [
            'id' => $req->id,
            'name' => $req->InputName,
            'company_name' => $req->InputID,
            'email' => $req->InputEmail,
            'contact_num' => $req->inputContact,
            'adrss' => $req->InputAddrs,
            'occuptn' => $req->InputOcuptn,
            'username' => $req->InputUsername
    
        ]);
        */

        /*
        if ($response->ok()) {
            // HTTP response status code is in the 2xx range
            echo $response->body();

            return $respData;
        
        } else {
        
           echo 'Error: ' . $response->status();

           throw new ErrorCodeException('save user');
        }
        */

    $db = AddUsers::find($req->id);

    $db->name = $req->InputName;
    $db->username = $req->InputUsername;
    $db->company_name = $req->InputID;
    $db->email = $req->InputEmail;
    $db->contact_num = $req->inputContact;
    $db->adrss = $req->InputAddrs;
    $db->occuptn = $req->InputOcuptn;

    if (!$db->save()) {
        throw new ErrorCodeException('udate users');
    }
    
    
        return redirect('home');
    
    
    }



    public function searchauthrty(Request $request)
    {

        $val = $request["query"];
        $result = AddUsers::authorityAutocomplete( $val);
    

      return $result;


    }


    public function survyStore(Request $req){
        

        $collect = []; // empty array for collect customised inputs
        
        foreach($req->all() as $input_key => $input_value ){ // split input one by one
            
           if ($input_key != '_token') {
            $collect[] = array( //customised inputs
                "id" => $input_key,
                "value" => $input_value
            );
           }
            
        } 

        $result = json_encode($collect); //convert to json
        
        
        $db = new Survey();
        $db->form_data = $result;

        /*
        $response = Http::post(env('API_ENDPOINT').'survey/saveSurvey', [
            'form_data' => $result,
        ]);
        
        if ($response->ok()) {
            
            echo $response->body();
        
        } else {
            
           echo 'Error: ' . $response->status();
        }
        */

        if (!$db->save()) {
            throw new ErrorCodeException('survey');
        }



        return redirect('home');
        
    
    }


    public function survyData(Request $request){ 

        $survey = Survey::survey();

        /*

        $URI = ''.env('API_ENDPOINT').'survey/getSurvey';
        
        $client = new \GuzzleHttp\Client();
        $request = $client->get($URI);
        $response = $request->getBody()->getContents();
        $surveyData = json_decode($response,TRUE);
        $survey = collect($surveyData);

        */
       

        return view('pages.config.home.surveyData')->with([
            'survey' => $survey
        ]);
    }


}
