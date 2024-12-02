<?php

use Illuminate\Support\Facades\Route;
use resources\views\components;
use App\Http\Livewire\{
    AdminDashboardComponent, AdminUsersComponent, AdminRolesComponent, AdminAuditsComponent, 
    AdminEventsComponent, AdminStandardComponent, UserDashboardComponent, AdminSecurityComponent, 
    AdminProtocolsComponent, UserProblemsComponent
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Administración
Route::get('/admin/dashboard', AdminDashboardComponent::class)->middleware('auth')->name('admin.dashboard');
Route::get('/admin/users', AdminUsersComponent::class)->middleware('auth')->name('admin.users');
Route::get('/admin/audits', AdminAuditsComponent::class)->middleware('auth')->name('admin.audits');
Route::get('/admin/events', AdminEventsComponent::class)->middleware('auth')->name('admin.events');
Route::get('admin/standards', AdminStandardComponent::class)->middleware('auth')->name('admin.standards');
Route::get('admin/protocols', AdminProtocolsComponent::class)->middleware('auth')->name('admin.protocols');


// Usuarios ordinarios
//Route::get('/user/dashboard', UserDashboardComponent::class)->middleware('auth')->name('user.dashboard');
//Route::get('user/security', SecurityPolicesComponent::class)->middleware('auth')->name('user.security');
//Route::get('user/protocols', ProtocolsComponent::class)->middleware('auth')->name('user.protocols');
//Route::get('user/management', ManagementComponent::class)->middleware('auth')->name('user.management');
//Route::get('user/problems', UserProblemsComponent::class)->middleware('auth')->name('user.problems');
//Route::get('user/alerts', AlertsComponent::class)->middleware('auth')->name('user.alerts');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});