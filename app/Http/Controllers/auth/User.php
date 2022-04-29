<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessLogic\User\Dto\RegisterUserDto;

class User extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $contra = $request->$password;
        $hashedPassword = Hash::make($contra);
        $UserRegisert = new RegisterUserDto(
            $request->id, $request->name, $request->lastname,
            $request->age, $request->email, $hashedPassword
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $UserLogin = new RegisterUserDto(
            $request->email, $request->password
        );
    }
}
