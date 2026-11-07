<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Order;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/dashboard', function () {

    $usersCount = User::count();

    $ordersCount = Order::count();

    return view('users.dashboard', compact('usersCount', 'ordersCount'));

})->name('dashboard');


Route::get('/users', function () {
    $users = User::query()->get(['id', 'name', 'email','created_at']);

    return view('users.index', compact('users'));

})->name('users.index');


