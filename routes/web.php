<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogisticJobController;
use App\Http\Controllers\StudentController;
use App\Models\Admin;
use App\Models\LogisticJob;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/landingpage/landingpage');
});

route::get('/admin/create', [AdminController::class,'create'])->name('admin.create');
route::post('admin/store', [AdminController::class,'store'])->name('admin.store');


route::get('/admin/login', [AdminController::class,'login'])->name('admin.login');
route::post('/admin/authenticate', [AdminController::class,'authenticate'])->name('admin.authenticate');


//student
route::get('/student/qrcode', [StudentController::class, 'qrcode'])->name('student.qrcode');


route::get('/layout/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
//dashboard
route::get('/admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
route::get('/admin/notification', [AdminController::class,'notification'])->name('admin.notification');
route::get('/admin/generate-qr', [AdminController::class,'generateqr'])->name('admin.generateQR');
route::get('/admin/evaluations', [AdminController::class,'evaluation'])->name('admin.evaluation');
route::get('/admin/add-admin', [AdminController::class,'addadmin'])->name('admin.add');
route::get('/admin/account', [AdminController::class,'account'])->name('admin.account');
route::get('/admin/settings', [AdminController::class,'settings'])->name('admin.settings');
route::get('/admin/callcenter', [AdminController::class,'callcenter'])->name('admin.callcenter');
route::get('/admin/help', [AdminController::class,'help'])->name('admin.help');
route::get('/admin/logout', [AdminController::class,'logout'])->name('admin.logout');


//admin buttons
Route::get('/admin/show/{admin_id}', [AdminController::class, 'showadmin'])->name('admin.showadmin'); //parameter {{ admin_id }}}}

Route::put('/admin/update/{admin_id}', [AdminController::class, 'updateadmin'])->name('admin.updateadmin'); // {{ parameter admin_id }}}}

Route::delete('/admin/delete/{admin_id}', [AdminController::class, 'deleteadmin'])->name('admin.deleteadmin'); //parameter {{ admin_id }}}}


//job
route::get('/job/index', [LogisticJobController::class,'jobindex'])->name('job.jobindex');


