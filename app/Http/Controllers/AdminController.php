<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        return view("admin.create");
    }

    public function store(Request $admincreate)
{
    $admincreate->validate([
        "username" => "required|max:225",
        "password" => "required|max:225",
        "firstname" => "required|max:225",
        "middlename" => "nullable|max:225",
        "lastname" => "required|max:225", 
        "department"=> "nullable|max:225",
    ]);

    $firstname = ucfirst(strtolower($admincreate->firstname));
    $middlename = ucfirst(strtolower($admincreate->middlename));
    $lastname = ucfirst(strtolower($admincreate->lastname));
       $department = ucfirst(strtolower($admincreate->department));

    $yearSuffix = now()->format('y');
    $prefix = 'witi' . $yearSuffix . '-';

    // Generate a unique admin_id
    $number = 1;
    do {
        $adminId = $prefix . str_pad($number, 3, '0', STR_PAD_LEFT);
        $exists = Admin::where('admin_id', $adminId)->exists();
        $number++;
    } while ($exists && $number <= 9999); // prevent infinite loop

    // Safety check
    if ($number > 9999) {
        return back()->withErrors(['admin_id' => 'Maximum admin_id limit reached for this year.']);
    }

    Admin::create([
        'admin_id' => $adminId,
        'username' => $admincreate->username,
        'password' => Hash::make($admincreate->password),
        'firstname' => $firstname,
        'middlename' => $middlename,
        'lastname' => $lastname,
        'department' => $department,
    ]);

    return redirect()->route('admin.create')->with('success', 'SUMAKSES');
}



    public function showadmin($admin_id)
    {
        //Find the admin_id from database
        $admin = Admin::where('admin_id', $admin_id)->firstOrFail();

        //get the session key
        $adminId = Session::get('admin_id');

            if (!$adminId) { //condition
                return redirect()->route('admin.login')->with('error', 'Please log in first.');
            }

            //admininfo for specific data
            $admininfo = Admin::where('admin_id', $adminId)->first();

            //for all data
            $alladmin = Admin::all();// not really necessasry here, for archive only
            //pass the 2 data to admin.show.blade.php
            //you can pass multiple values here, just use $admin or $admininfo
            return view('admin.show', compact('admin', 'admininfo'));
    }



    public function edit(Admin $admin)
    {

    }
    public function updateadmin(Request $request, $admin_id)
    {
        //Request is from http
        //$request is the datas from inputs
        //explainations
        //validate first all the inputs if goods
    $request->validate([
        'firstname' => 'required|max:255',
        'middlename' => 'nullable|max:255',
        'lastname' => 'required|max:255',
        'role' => 'nullable|max:255',
    ]);

    //create new variable $admin
    //controller db Admin
    //where column = 'admin_id'
    //operator from parameter => public function updateadmin(Request $request, $admin_id). This include a parameter from url
    $admin = Admin::where('admin_id', $admin_id)->firstOrFail();

    //variable on top of this
    // -> update [
        //ucfirst to capital the first letter, then strtolower the rest of text($datainput->inputnames)
    // ]
    $admin->update([
        'firstname' => ucfirst(strtolower($request->firstname)),
        'middlename' => ucfirst(strtolower($request->middlename)),
        'lastname' => ucfirst(strtolower($request->lastname)),
        'role' => $request->role,
    ]);

    return redirect()->route('admin.showadmin', $admin_id)->with('success', 'Admin updated successfully!');
     }


    public function deleteadmin($admin_id)
    {
        //variable = Admin(Model)::where(tablecolumn, paramater get method)
        $admin = Admin::where('admin_id', $admin_id)->first();

        //condition langs if wala makuha
        if (!$admin) {
            return redirect()->back()->with('error', 'Admin not found.');
        }
        //direct delete
        //note: learn the soft delete for safe deletion
        $admin->delete();

        //directing to dashboard
        return redirect()->route('admin.dashboard')->with('success', 'Admin deleted successfully.');
    }


    public function login(Admin $admin){
        return view('admin.login');
    }

    public function authenticate(Request $authadmin){
    //validate just for to check if the input is standard or may limit basta???
    $authadmin->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    //check the column from database
    //Admin is from model
    //where 'columnname', $validatevariable->userinput
    //what is first?
    $adminexist = Admin::where('username', $authadmin->username)->first();

    if ($adminexist && Hash::check($authadmin->password, $adminexist->password)) {
        Session::put('admin_id', $adminexist->admin_id);
        $admininfo = $adminexist;
        //$admininfo = Admin::get();
        //Session::put=temporary storing the key('Keyforsession', (//$checkingexistfromdatabase)->(//column_name));
        //return redirect()->route('admin.dashboard')->with('success', 'Welcome!');
        return view('admin.dashboard', compact('admininfo'));
    }

    return back()->with('error', 'Invalid credentials.');
    }

    public function dashboard(){
       $adminId = Session::get('admin_id');

        if (!$adminId) {
            return redirect()->route('admin.login')->with('error', 'Please log in first.');
        }
        $admininfo = Admin::where('admin_id', $adminId)->first();
        return view('admin/dashboard', compact('admininfo'));
    }

    public function notification (){
        $adminId = Session::get('admin_id');

        if (!$adminId) {
            return redirect()->route('admin.login')->with('error', 'Please log in first.');
        }
        $admininfo = Admin::where('admin_id', $adminId)->first();
        return view('admin/notifications', compact('admininfo'));
    }

    public function evaluation () {
        return view('admin/evaluations');
    }

    public function generateqr (){
        return view('admin/generateqr');
    }

    public function addadmin (){
        $adminId = Session::get('admin_id');

        if (!$adminId) {
            return redirect()->route('admin.login')->with('error', 'Please log in first.');
        }
        $admininfo = Admin::where('admin_id', $adminId)->first();

        $alladmin = Admin::all();
        return view('admin/addadmin', compact('admininfo', 'alladmin'));
    }

    public function adminshow(){

    }

    public function account (){
        return view('admin/account');   
    }

    public function settings (){
        return view('admin/setting');
    }

    public function callcenter () {
        return view('admin/callcenter');
    }

    public function help(){
        return view('admin/help');
    }

    public function logout (){
        Session::forget('admin_id');
        return view ('landingpage/landingpage');
    }
    //sadasdsagi

}
