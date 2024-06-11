<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegistraController extends Controller
{
    public function index(){
        $students = Student::get();

        return view('students', compact('students'));
    }

    public function showRegistrationForm(){
        return view('registrationform');
    }
    // public function registrationform(Request $request){
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);

    //     User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     // Redirect user after successful registration
    //     return redirect('/dashboard');
    // }
    
    public function storeData(Request $request){

        $imageName = '';

        if($request->image){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
        }
        

        Student::create([
            'name'=>$request->name,
            'ph'=>$request->ph,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'address'=>$request->address,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'image'=> $imageName
            
        ]);

        return redirect('/students');
        
    }

    public function deleteStudent($id){

        Student::where('id', $id)->delete();

        return redirect('/students');
    }
    
    public function editStudent($id){

        $student = Student::where('id', $id)->first();

        return view('edit',compact('student'));

    }

    public function updateStudent(Request $request,$id){

        $imageName = $request->old_image;

        if($request->image){

            $oldImage = public_path('images/'.$request->old_image);

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
        }

        $student = Student::where('id', $id)->first();

        $student->update([
            'name'=>$request->name,
            'ph'=>$request->ph,
            'email'=>$request->email,
            'password'=>$request->password ? Hash::make($request->password) : $student->password,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'image'=>$imageName

        ]);
        return redirect('/students');
    }

}

