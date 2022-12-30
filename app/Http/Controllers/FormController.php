<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $name = $request->input('Name');
        $email = $request->input('emailAddress');
        $phone = $request->input('phoneNumber');
        $businessName = $request->input('BusinessName');
        if ($request->hasfile('businessLogo')) {
            $image = $request->businessLogo;
            $namewithextension = $image->getClientOriginalName(); //Name with extension 'filename.jpg'
           // $name = explode('.', $namewithextension)[0]; // Filename 'filename'
            $extension = $image->getClientOriginalExtension(); //Extension 'jpg'
            $uploadname = time() . '.' . $extension;
            $image->move(public_path() . '/uploads/', $uploadname);
        }else {
            $uploadname = "NULL";
        }
        //$logo = $request->hasFile('businessLogo');
        $businessAddress = $request->input('businessAddress');
        $website = $request->input('websiteURL');
        $location = $request->input('location');
        $data=array('name'=>$name,'email'=>$email,'phone'=>$phone,'business_name'=>$businessName,'logo'=>$uploadname,'business_address'=>$businessAddress,'website'=>$website,'cordinates'=>$location);
        DB::table('business')->insert($data);        
       return "sucess";
    }
}