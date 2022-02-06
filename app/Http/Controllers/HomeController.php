<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use Illuminate\Support\Facades\DB;
//add model Employee
use App\Models\Employee;

class HomeController extends Controller
{
    public function home(){
        return view('pages.home') ;
    }
    public function about(){
        return view("pages.about") ;
    }
    public function service(){
        return view("pages.service") ;
    }
    public function contact(){
        return view("pages.contact") ;
    }
    public function login(){
        return view("pages.login") ;
    }
    public function employees(){
        //All
        // $employees = DB::table('employees')->get(); //select * from employees

        //only 1 
        // $employees = DB::table('employees')->first(); //select * from employees limit 1

        //some fill
        // $employees = DB::table('employees')->first(["fullname","gender",'email']);

        // $employees = DB::table('employees')->where('id',25)->get();
        // $employees = DB::table('employees')->where('id','>=',3)->get(['id','fullname','gender']);
        
        // $employees = DB::table('employees')
        // ->where('id','>=',3)
        // ->where('gender','Female')
        // ->where('age','>=',25)
        // ->get();

        // $employees = DB::table('employees')
        // ->where('id','>=',3)
        // ->where('gender','Female')
        // ->orwhere('age','>=',25)
        // ->first();
        
        // $employees = DB::table('employees')->find(25); //select * from employees where id = '3'

        // $employees =DB::table('employees')->count();

        // $employees =DB::table('employees')->max('age');
        // $employees =DB::table('employees')->min('age');
        // $employees =DB::table('employees')->avg('age');
        
        // $employees =DB::table('employees')->orderBy('age')->get();
        // $employees =DB::table('employees')->orderByDesc('age')->get(); //มากไปน้อย
        // $employees =DB::table('employees')->orderByDesc('age')->limit(2)->get();

        // add data to table ---------------------------------
        // $data = array(
        //     'fullname' => 'dog cat',
        //     'gender' => 'Male',
        //     'email' => 'DC@email.com',
        //     'tel' => '099112121',
        //     'age' => 55,
        //     'address' => '8/8 moo 2 Chiang Mai',
        //     'avatar' => 'noavatar.jpg',
        //     'status' => 1
        // );

        // $employees = DB::table('employees')->insert($data);

        // Config data in Table
        // $data = array(
        //     'email' => 'DCA123@email.com',
        //     'tel' => '0992212341',
        //     'age' => 50,
           
        // );

        // $employees = DB::table('employees')->where('id',28)->update($data);

        //Delete data 
        // $employees = DB::table('employees')->where('id',28)->delete();
        
        // return $employees ;
    }
      public function employeelist(){
       
        // $employees = Employee::all();
        // $employees = Employee::all(['id','fullname']);

        // $employees = Employee::first(['id','fullname']);

        // $employees = Employee::where('id',24)->get();

        // $data = array(
        //     'fullname' => 'dog cat',
        //     'gender' => 'Male',
        //     'email' => 'DC@email.com',
        //     'tel' => '099112121',
        //     'age' => 55,
        //     'address' => '8/8 moo 2 Chiang Mai',
        //     'avatar' => 'noavatar.jpg',
        //     'status' => 1
        // );
        
        // $employees =Employee::create($data);
        
        // $data = array(
        //     'email' => 'D112C@email.com',
        //     'tel' => '099232121',
        //     'age' => 30,
           
        // );
        
        // $employees =Employee::where('id',31)->update($data);
        
        // $employees =Employee::where('id',31)->delete();
    
        // return $employees;
    
        //Send data to View
        // $employees = Employee::all();
        $employees = Employee::paginate(3);
        return view('pages.employeelist',compact('employees'));

      }
    
}
