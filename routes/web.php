<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::resource('comments', CommentController ::class);

