<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['id'];

    public static function fetchUsers()
    {
        $url = 'https://gorest.co.in/public/v1/users';
        $response = Http::get($url); //Retrieve data from the API

        $users = json_decode($response, true)['data']; //json data into array

        foreach ($users as $user) //Loops through each user
        {
            $id = $user['id'];
            $push = User::firstOrCreate([ 'id'=>$id ]); //Temporary variable $push will check if there any records of the same id in the database if not create one
            $push->id = $user['id'];
            $push->name = $user['name'];
            $push->email = $user['email'];
            $push->gender =$user['gender'];
            $push->status = $user['status'];

            $push->save(); //Saves the record
        }
    }
}