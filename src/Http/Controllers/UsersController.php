<?php

namespace JSystems\NewGame\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;

class UsersController extends Controller
{
    public static function index()
    {
        $Users = config('jsystems.config.user_table');
        return response()->json($Users::all()->toArray());
    }
}