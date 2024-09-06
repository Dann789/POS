<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewUser($nama, $id) {
        return view('user.profile', ['nama' => $nama, 'id' => $id]);
    }
}
