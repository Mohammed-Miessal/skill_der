<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\ApplyController;
use App\Http\Controllers\DisplayAnnouncements;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified','role:admin'])->name('admin.index');


Route::middleware(['auth', 'verified', 'role:Admin'])->name('admin.')->prefix('admin')->group(function () {



    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'assignPermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

    Route::resource('skills', SkillController::class);


    Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
    Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::post('/companies/store', [CompanyController::class, 'store'])->name('companies.store');



    Route::get('/companies/show/{id}', [CompanyController::class, 'show'])->name('companies.show');
    Route::get('/companies/edit/{company}', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::put('/companies/update/{company}', [CompanyController::class, 'update'])->name('companies.update');
    Route::delete('/companies/delete/{company}', [CompanyController::class, 'destroy'])->name('companies.delete');



    // ? Announcement routes :
    Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
    Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('announcements.create');
    Route::post('/announcements/store', [AnnouncementController::class, 'store'])->name('announcements.store');
    Route::get('/announcements/show/{id}', [AnnouncementController::class, 'show'])->name('announcements.show');

    Route::get('/announcements/edit/{announcement}', [AnnouncementController::class, 'edit'])->name('announcements.edit');
    Route::put('/announcements/update/{announcement}', [AnnouncementController::class, 'update'])->name('announcements.update');
    Route::delete('/announcements/delete/{announcement}', [AnnouncementController::class, 'destroy'])->name('announcements.delete');
});


// Breeze Routes
Route::middleware('auth')->group(function () {
    Route::get('/myprofile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::get('/allannouncements', [DisplayAnnouncements::class, 'index'])->name('allannouncements.index');
Route::get('/announcements/show/{id}', [DisplayAnnouncements::class, 'show'])->name('showannouncements.show');



Route::post('/apply/{announcement}', [AnnouncementController::class, 'apply'])->name('apply');




