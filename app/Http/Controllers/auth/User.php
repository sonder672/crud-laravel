<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessLogic\User\Dto\RegisterUserDto;
use App\Models\BusinessLogic\User\Service\AddUserService;
use App\Models\DB\UserDB;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $userRegisterDto = new RegisterUserDto(
            $request->id,
            $request->name,
            $request->lastname,
            $request->age,
            $request->email,
            Hash::make($request->password)
        );

        $registerUserService = new AddUserService( new UserDB() );
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
            $request->id,
            $request->name,
            $request->lastname,
            $request->age,
            $request->email,
            Hash::make($request->password)
        );
    }
}
