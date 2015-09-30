<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Session;
use Input;
use View;
use Validator;
use Redirect;
Use File;
use Storage;
use Illuminate\Http\Request;

class MainController extends Controller 
{
	
    public function index($id)
    {
    	$customer = DB::table('customers')->where('id', $id)->first();
        $jobs = DB::table('jobs')->where('id', $id)->get();
        return view('profiles.body', ['customer' => $customer,'jobs' => $jobs]);
    }
        public function search($param, $field)
    {	
        $results = DB::table('customers')->where($param,$field)->get();
		return View::make('search')->with('results', $results);

    }
       public function jobs($custID)
    {
        $jobs = DB::table('jobs')->where('id', $custID)->get();
        return view('profiles.jobs', ['jobs' => $jobs, 'custID' => $custID]);
    }

    public function createJob(Request $request)
    {      
        $customerID =  $request->input('id');
        $label =  $request->input('label');
        $cost =  $request->input('cost');
        $year =  $request->input('year');
        $month =  $request->input('month');
        $day =  $request->input('day');
        $Service = $year . ',' . $month . ',' . $day;
        $description = $request->input('description');

        $jobID = DB::table('jobs')->insertGetId(
         ['id'=> $customerID, 'label' => $label, 'description' => $description, 'Service' => $Service, 'cost' => $cost]
      );
        $target_path = "assets/";
        $jobImage = DB::table('jobImages')->insertGetId(
            ['jobNumber'=> $jobID,  'customerID' => $customerID]
      );
        if ($request->hasFile('pic1')) 
        {
            $image1 = $request->file('pic1');
            $extension1 = $image1->getClientOriginalExtension();
            $request->file('pic1')->move($target_path, $customerID . '-' . $jobID .'-' . '0.' . $extension1 );
            DB::table('jobImages')-> where('imageID', $jobImage)->update(['label1' => $customerID . '-' . $jobID .'-' . '0.' . $extension1]);                
        }
        if ($request->hasFile('pic2')) 
        {
            $image2 = $request->file('pic2');
            $extension2 = $image2->getClientOriginalExtension();
            $request->file('pic2')->move($target_path,  $customerID . '-' . $jobID .'-' . '1.' . $extension2);
            DB::table('jobImages')-> where('imageID', $jobImage)->update(['label2' => $customerID . '-' . $jobID .'-' . '1.' . $extension2]);                
        }
        if ($request->hasFile('pic3')) 
        {
            $image3 = $request->file('pic3');
            $extension3 = $image3->getClientOriginalExtension();
            $request->file('pic3')->move($target_path,  $customerID . '-' . $jobID .'-' . '2.' . $extension3);
            DB::table('jobImages')-> where('imageID', $jobImage)->update(['label3' => $customerID . '-' . $jobID .'-' . '2.' . $extension3]);                
        }

        return redirect()->back();

}

      public function editprofile(Request $request)
    {
        $customerID =  $request->input('id');
        $name =  $request->input('name');
        $status =  $request->input('status');
        $email =  $request->input('email');
        $homePhone =  $request->input('homePhone');
        $cellPhone =  $request->input('cellPhone');
        $address =  $request->input('address');
        $town =  $request->input('town');
        $postal = $request->input('postal');

        DB::table('customers')
        -> where('id', $customerID)
        ->update(['name' => $name,'homePhone' => $homePhone, 'cellPhone' => $cellPhone, 'address' => $address, 'town' => $town, 'postal' => $postal, 'status' => $status, 'email' => $email]);                
        return redirect()->back();
    }

    public function newprofile(Request $request)
    {
        $name =  $request->input('name');
        $status =  $request->input('status');
        $email =  $request->input('email');
        $homePhone =  $request->input('homePhone');
        $cellPhone =  $request->input('cellPhone');
        $address =  $request->input('address');
        $town =  $request->input('town');
        $postal = $request->input('postal');
        
        $id = DB::table('customers')->insertGetId(
            ['name' => $name,'homePhone' => $homePhone, 'cellPhone' => $cellPhone, 'address' => $address, 'town' => $town, 'postal' => $postal, 'status' => $status]);
        return redirect()->back();
    }

    public function jobDetail($id,$custID){
        $jobs = DB::table('jobs')->where('jobNumber', $id)->get();
        return view('profiles.jobdetail', ['jobs' => $jobs, 'custID' => $custID]);
    }

    public function dashboard(){
        $customers = DB::table('customers')->where('status', 'active')->count();
        $leads = DB::table('customers')->where('status', 'lead')->count();
        $total = DB::table('customers')->count();
        $jobs = DB::table('jobs')->count();
        return view('dashboard', ['customers' => $customers, 'leads' => $leads, 'jobs' => $jobs, 'total' => $total]);
    }

    public function advSearch()
    {   
        $field = Input::get('searchValue');
        $param = Input::get('param');
        if($param == 'name' || $param == 'homePhone' || $param == 'cellPhone' || $param == 'address' || $param == 'town' || $param == 'status')
        {
            $results = DB::table('customers')->where($param,'like',"%{$field}%")->get();
            return View::make('search')->with('results', $results);
        }
        else
        {
           $results = DB::table('jobs')
           ->join('customers','jobs.id', '=', 'customers.id')
           ->where($param,'like',"%{$field}%")
           ->select('customers.name','jobs.Service','jobs.label','jobs.cost','jobs.description','jobs.id')
           ->get();
            return View::make('searchJobs')->with('results', $results); 
        }
    }

      public function editJob($jobNumber,$label,$cost,$Service,$description)
    {
        $jobNumber =  $request->input('jobNumber');
        $label =  $request->input('label');
        $cost =  $request->input('Cost');
        $Service =  $request->input('Service');
        $description =  $request->input('description');
        DB::table('jobs')-> where('jobNumber', $jobNumber)->update(['label' => $label,'cost' => $cost, 'Service' => $Service, 'description' => $description]);                
        return redirect()->back();
    }

          public function deleteJob($jobNumber)
    {
        $results = DB::table('jobImages')->where('jobNumber' , $jobNumber)->get();
        foreach($results as $result){
            if ($result->label1 != null ) 
            {
            Storage::disk('public')->delete($result->label1);
            }
            if ($result->label2 != null) 
            {
            Storage::disk('public')->delete($result->label2);
            }   
            if ($result->label3 != null) 
            {
            Storage::disk('public')->delete($result->label3);
            }
            if ($result->label4 != null) 
            {
            Storage::disk('public')->delete($result->label4);
            }
            if ($result->label5 != null) 
            {
            Storage::disk('public')->delete($result->label5);
            }
         

        }
        DB::table('jobs')->where('jobNumber', '=', $jobNumber)->delete();
        DB::table('jobImages')->where('jobNumber', '=', $jobNumber)->delete();
        return redirect()->back();

    }


}