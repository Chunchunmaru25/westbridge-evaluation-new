<?php

namespace App\Http\Controllers;

use App\Models\LogisticJob;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LogisticJobController extends Controller
{
    public function jobindex(){
        $adminId = Session::get('admin_id');

        if (!$adminId) {
            return redirect()->route('admin.login')->with('error', 'Please log in first.');
        }
        $admininfo = Admin::where('admin_id', $adminId)->first();
        return view('job/job/index', compact('admininfo'));
   }
}
