<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class MiRegisterController extends Controller
{
    public function add() {
      return view("registerAdmin");
    }

    public function store(Request $request) {
      $this->validate($request, [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
          'age' => "required|numeric|min:0",
      ]);

      User::create([
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => bcrypt($request['password']),
          'age' => $request["age"],
          "type" => 2
      ]);

      return redirect("/peliculas");
    }
}
