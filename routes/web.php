<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DashboardstatsController;
use App\Http\Controllers\Admin\ApplyController;
use App\Http\Controllers\DisplayAnnouncementsController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::middleware(['auth', 'role:Apprenant'])->group(function () {
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',  [DashboardstatsController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/show/{id}', [DashboardstatsController::class, 'view'])->name('dashboard.show');
});

Route::middleware(['auth', 'role:Admin'])->name('admin.')->prefix('admin')->group(function () {



    Route::get('/', [IndexController::class, 'index'])->name('index');

    Route::resource('roles', RoleController::class);

    Route::resource('permissions', PermissionController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // Show Role
    Route::get('/users/{user}/role', [UserController::class, 'showRole'])->name('users.show.role');


    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');

    // Show User Permissions
    Route::get('/users/{user}/permission', [UserController::class, 'showPermission'])->name('users.show.permission');
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




Route::middleware('auth')->group(function () {
    Route::get('/myprofile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/allannouncements', [DisplayAnnouncementsController::class, 'index'])->name('allannouncements.index');
Route::get('/announcements/show/{id}', [DisplayAnnouncementsController::class, 'show'])->name('showannouncements.show');



Route::post('/apply/{announcement}', [AnnouncementController::class, 'apply'])->name('apply');
