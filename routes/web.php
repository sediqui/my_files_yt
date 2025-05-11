<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Logout;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('index');
})->name("home");

Route::get("login", Login::class)->name("login");
Route::get("register", Register::class)->name("register");
Route::get("logout", Logout::class)->name("logout");

Route::get("profile", Profile::class)->name("profile")->middleware("auth");

Volt::route("/dashboard", "dashboards")->name("dashboard")->middleware("auth");
