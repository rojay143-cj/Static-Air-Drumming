<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\home_Controller;
use Illuminate\Support\Facades\Route;


Route::get('/',[home_Controller::class, 'getHome'])->name('home');
Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');
