<?php

namespace App\Http\Controllers\Config\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Google\Cloud\Firestore\FirestoreClient;
use App\Exceptions\ErrorCodeException;

use Kreait\Firebase\Facades\Firebase;
// use Kreait\Firebase;
//use Illuminate\Support\Facades\Storage;
use Kreait\Firebase\Firestore;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Auth\SignInResult\SignInResult;
use Kreait\Firebase\Exception\FirebaseException;
//use Google\Cloud\Firestore\FirestoreClient;
use Kreait\Firebase\Storage;
use Illuminate\Support\Facades\Session;
//use Session;
//Models
use App\Models\CustmrTransaction;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customer(Request $request , $id){ 
        $authortyid = $id;
        $customers = CustmrTransaction::customers($authortyid);


        //dd($customers);

        return view('pages.config.customer.customer_home')->with([
            'customers' => $customers
        ]);
    }


    public function customerStore(Request $req){
        
        $validated = $req->validate([
            'InputName' => 'required',
            'InputEmail' => 'required|email',
            'InputFulnm' => 'required',
            'InputAddrs' => 'required',
            'rdio' => 'required',
            'inputContact' => 'required|numeric',
            'InputBD' => 'required',
            'InputID' => 'required',
            'InputOcuptn' => 'required',
            'InputPasswrd' => 'required|min:6',
            'inputLicencNum' => 'required',
            'inputIssuedate' => 'required',
            'inputExpirydate' => 'required',
            //'image' => 'required'
    
        ]);


    /*
    $firestore = new FirestoreClient();

    $collection = 'Images';
    $document = 'user';

    // Assuming you have the image data in a variable called $imageData
    $imageData = file_get_contents('/path/to/image.jpg');

    $firestore->collection($collection)->document($document)->set([
        'image' => base64_encode($imageData),
    ]);
   
    */
    
    /*
        
        $input = $req->all();
        $image = $req->file('image'); //image file from frontend

          //$firestore = Firebase::firestore();
          //$student = $firestore->database()->collection('Images')->document('user');
  
          $student   = app('firebase.firestore')->database()->collection('Images')->document('user');
          $firebase_storage_path = 'Images/';
          $name     = $student->id();
          $localfolder = public_path('firebase-temp-uploads') .'/';
          $extension = $image->getClientOriginalExtension();
          $file      = $name. '.' . $extension;
          if ($image->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder.$file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            //will remove from local laravel folder
            unlink($localfolder . $file);
            Session::flash('message', 'Succesfully Uploaded');
          }

   
          

    
          // Validate the uploaded file
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the file from the request
        $file = $req->file('image');

        // Get the original file name
        $fileName = $file->getClientOriginalName();

        // Create a new instance of the Firebase Storage service
        $storage = app(Storage::class);

        // Set the path where the file will be stored in Firebase Storage
        $path = 'images/' . $fileName;
        
        
        // Upload the file to Firebase Storage
        $storage->getBucket('idify-45a09.appspot.com')
            ->upload(fopen($file->getRealPath(), 'r'), [
                'name' => $path,
            ]);

            return dd();
        // Get the public URL of the uploaded file
        $url = $storage->getBucket()
            ->object($path)
            ->signedUrl(now()->addMinutes(60));

        // Do something with the URL (e.g., store it in the database, display it to the user, etc.)

        // Return a response
        
  
        
        return response()->json(['url' => $url]);
        
    */


    /*
    $response = Http::post(env('API_ENDPOINT').'customer/saveCustomer', [
        'name' => $req->InputName,
        'fullname' => $req->InputFulnm,
        'email' => $req->InputEmail,
        'phone' => $req->inputContact,
        'address' => $req->InputAddrs,
        'nic' => $req->InputID,
        'dob' => $req->InputBD,
        'gender' => $req->rdio,
        'occupation' => $req->InputOcuptn,
        'password' => $req->InputPasswrd,
        'licencenum' => $req->inputLicencNum,
        'issued_date' => $req->inputIssuedate,
        'expiry_date' => $req->inputExpirydate,
        'a1' => $req->A1 ? $req->A1 : 0,
        'a' => $req->A ? $req->A : 0,
        'b1' => $req->B1 ? $req->B1 : 0,
        'b' => $req->B ? $req->B : 0,
        'c1' => $req->C1 ? $req->C1 : 0,
        'c' => $req->C ? $req->C : 0,
        'ce' => $req->CE ? $req->CE : 0,
        'd1' => $req->D1 ? $req->D1 : 0,
        'd' => $req->D ? $req->D : 0,
        'de' => $req->DE ? $req->DE : 0,
        'g1' => $req->G1 ? $req->G1 : 0,
        'g' => $req->G ? $req->G : 0,
        'j' => $req->J ? $req->J : 0,
    ]);
    /*
    
    /*
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

    $db = new Customer();
    $db->name = $req->InputName;
    $db->fullname = $req->InputFulnm;
    $db->email = $req->InputEmail;
    $db->phone = $req->inputContact;
    $db->address = $req->InputAddrs;
    $db->nic = $req->InputID;
    $db->dob = $req->InputBD;
    $db->gender = $req->rdio;
    $db->occupation = $req->InputOcuptn;
    $db->password = $req->InputPasswrd;
    $db->licencenum = $req->inputLicencNum;
    $db->issued_date = $req->inputIssuedate;
    $db->expiry_date = $req->inputExpirydate;
    $db->a1 = $req->A1 ? $req->A1 : 0;
    $db->a = $req->A ? $req->A : 0;
    $db->b1 = $req->B1 ? $req->B1 : 0;
    $db->b = $req->B ? $req->B : 0;
    $db->c1 = $req->C1 ? $req->C1 : 0;
    $db->c = $req->C ? $req->C : 0;
    $db->ce = $req->CE ? $req->CE : 0;
    $db->d1 = $req->D1 ? $req->D1 : 0;
    $db->d = $req->D ? $req->D : 0;
    $db->de = $req->DE ? $req->DE : 0;
    $db->g1 = $req->G1 ? $req->G1 : 0;
    $db->g = $req->G ? $req->G : 0;
    $db->j = $req->J ? $req->J : 0;


    if (!$db->save()) {
        throw new ErrorCodeException('Create users');
    }

        return redirect('home');

    
    }



    public function customerHome(Request $request){ 
        return view('pages.config.customer.addCustomer');
    }






    public function customersearch(Request $request)

    {
        $customrid = $request->id;

        $result = Customer::previewcustomers($customrid);
        
        return $result;
        
    }

    function listData(){
        return customer::all();
    }





}
