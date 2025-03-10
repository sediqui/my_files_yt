<?php

use App\Http\Controllers\DashboardController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("login", Login::class)->name("login");
Route::get("register", Register::class)->name("register");
Volt::route("dashboard", "dashboards")->name("dashboard")->middleware("auth");

Volt::route("profile", "profiles")->name("profile")->middleware("auth");
