<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PDF;

class CRUDController extends Controller
{
    //
    public function index(){
        return view('addData');
    }
    public function createdata(Request $request){
     
    
       $name = $request->name;
       $gender = $request->gender;
       $nohp = $request->nohp;
       $email = $request->email;
       $salary = $request->salary;
       
       $this->validate($request,[
		'img' => 'required|image',
        'name'=> 'required|max:255',
        'gender'=> 'required',
        'nohp'=> 'required|regex:/^[0-9]+$/',
        'email'=>'required|email',
        'salary'=>'required'
        
	]);
    $img = $request->file('img')->getClientOriginalName();
       $path = $request->file('img')->storeAs('public/images',$img);
        DB::table('employees')->insert([
            'name' => $name,
            'gender' => $gender,
            'no_hp' => $nohp,
            'email' => $email,
            'salary' => $salary, 
            'photo' => 'storage/images/'.$img
        ]);
        return Redirect::route('home');
    }

    public function deletedata($id){
        $emmployee = Employees::find($id);
    	$emmployee->delete();
        return back();
    }

    public function editdata($id){
        $employee = Employees::where('id',$id)->first();
        $gender = gender::all();
        $data['gender'] = $gender;
        $data['employees'] = $employee;
        return view('editData',$data);
    }

    public function updatedata(Request $request){
      
      //  Employees::where('id', $request->id)->update(request()->all());
      $this->validate($request,[
        'name'=> 'required|max:255',
        'gender'=> 'required',
        'nohp'=> 'required|regex:/^[0-9]+$/',
        'email'=>'required|email',
        'salary'=>'required'
        
	]);
        $employee = Employees::where('id',$request->id)->first();

        $employee->name = $request->name;
        $employee->gender = $request->gender;
        $employee->no_hp = $request->nohp;
        $employee->email = $request->email;
        $employee->salary = $request->salary;
      //  $employee->photo = $request->img;
        $employee->photo = $request->img ? $request->img : $employee->photo;

        $employee->save();
        return Redirect::route('home');
    }

    public function exportdata(){
        $getEmployee= Employees::all();
        // $data = [
        //     'title' => 'Welcome to ItSolutionStuff.com',
        //     'date' => date('m/d/Y')
        // ];
        $data ['employees']=$getEmployee;
          
        $pdf = PDF::loadView('exportall', $data);
    
        return $pdf->download('data-karyawan.pdf');
    
    }

    public function exportperemployee($id){
       
        $getEmployee= Employees::where('id',$id)->first();
       

        $data = [
            'name' => $getEmployee->name,
            'nohp' => $getEmployee->no_hp,
            'gender' => $getEmployee->gender,
            'email' => $getEmployee->email,
            'salary' => $getEmployee->salary,
            'photo' => $getEmployee->photo,
        ];
          
        $pdf = PDF::loadView('exportperemployee', $data);
    
        return $pdf->download('data-karyawan.pdf');
    }
}
