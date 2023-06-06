<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function users()
    {
        User::fetchUsers(); //Calls the fetchUsers() method from the model

        $users = User::all(); //Retrieve all data from the database

        $title = 'USERS DATA'; //Sets title

        $headers = ['ID', 'NAME', 'EMAIL', 'GENDER', 'STATUS']; //Sets the headers in an array

        return view('welcome', compact('users', 'title', 'headers')); //Sends all variables to the welcome page
    }
}
