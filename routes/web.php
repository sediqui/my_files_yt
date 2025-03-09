<?php

use App\Http\Controllers\DashboardController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

Route::get("login", Login::class)->name("login");
Route::get("register", Register::class)->name("register");
Volt::route("dashboard", "dashboards")->name("dashboard");
