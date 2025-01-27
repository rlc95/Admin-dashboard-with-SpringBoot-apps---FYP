<?php

namespace App\Http\Controllers\Config\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

//Models
use App\Models\Admin;

class AdminController extends Controller
{
    public function signUp(Request $request){ 
        return view('pages.config.login');
        
    }

    

    public function dashboard(Request $request){ 
        return view('pages.config.dashboard');
        
    }

    public function indexauthorty(Request $request , $id){
        
        return view('pages.config.home.authority_home');

    }


    public function authorityCheck(Request $req){

        // return dd("hi");
        $inputuname =$req->uname;
        $inputPasswd=$req->password;
       
        $this->validate($req, [

            'uname' => 'required|min:5',
            'password' => 'required|alphaNum|min:5'

        ]);

        
        /*
        $Admin = DB::table('admins')->where([['admins.uname',$inputuname],['admins.password',$inputPasswd]])
        //$Admin = Admin::where([ ['admins.uname',$inputuname],['admins.password',$inputPasswd]])
                ->leftJoin('user_roles', 'user_roles.uri', 'admins.rti')
                ->first();
        */

        $URI = ''.env('API_ENDPOINT1').'admin/getAdminByUsername/'.$inputuname.'';
        
        $client = new \GuzzleHttp\Client();
        $request = $client->get($URI);
        $response = $request->getBody()->getContents();
        $json = json_decode($response);

    

        if ($json->uname != null) {

            if ($inputPasswd == $json->password) {
                
                
                $URI = ''.env('API_ENDPOINT1').'admin/getUserRole/'.$json->rti.'';
        
                $client = new \GuzzleHttp\Client();
                $request = $client->get($URI);
                $response = $request->getBody()->getContents();
                $Admin = json_decode($response);
                
                if($Admin->urn == 'admin'){

                    $req->session()->put( 'userRoleID' , $json->uri );
                    return view('pages.config.home.home')->with('Admin',$json);
    
                }else{
    
                    $req->session()->put( 'userRoleID' , $json->uri );
                    return view('pages.config.home.authority_home')->with('Admin',$json);
    
                }
                
            
            }else{

                return redirect()->back()->withErrors([
                    'password' => 'Wrong password',
                ]);
            }
            
            
            //return \Redirect::route('route-name-here');
        }
        
        // Authentication failed
        
        return redirect()->back()->withErrors([
            'uname' => 'Wrong User name',
        ]);


        /*
        if($Admin){

            if($Admin->urn == 'admin'){

                $request->session()->put( 'userRoleID' , $Admin->uri );
                return view('pages.config.home.home')->with('Admin',$Admin);

            }else{

                $request->session()->put( 'userRoleID' , $Admin->uri );
                return view('pages.config.home.authority_home')->with('Admin',$Admin);

            }

            
        
        }else{
        
            return back()->with('error','Wrong Login Details');
        }
        */

    }


    public function adminlogout(){

        //Auth::logout();
        if(session()->has('userRoleID'))
        {

            session()->pull('userRoleID');
        }
        return redirect('/login');

    }


    public function authrtylogout(){

        //Auth::logout();
        if(session()->has('userRoleID'))
        {

            session()->pull('userRoleID');
        }
        return redirect('/login');

    }









}