<?php

namespace App\Architecture\View\Controllers;

use App\Architecture\BusinessLogic\User\Service\AddUserService;
use App\Architecture\BusinessLogic\User\Service\LoginUserService;
use App\Architecture\DB\Mysql\User\CreateUser;
use App\Architecture\DB\Mysql\User\Login;
use App\CommandPattern\Invoker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $loginService = new LoginUserService(new Login(), $request);

        $invoker = new Invoker();
        $invoker->addCommand($loginService);
        //Content() contiene las variables enviadas desde el Servicio de BusinessLogic
        $jsonContentToArray = json_decode($invoker->runCommand()->content(), true);
        if ($jsonContentToArray['status'] == 200)
        {
            return redirect()->route('home')->with('success', $jsonContentToArray['message']);
        }
    }

    public function store(Request $request)
    {
        $createUserService = new AddUserService(new CreateUser(), $request);

        $invoker = new Invoker();
        $invoker->addCommand($createUserService);
        $jsonContentToArray = json_decode($invoker->runCommand()->content(), true);
        if ($jsonContentToArray['status'] == 200)
        {
            return redirect()->route('login')->with('success', $jsonContentToArray['message']);
        }
    }

    public function logout()
    {
        if (!session()->has('id')) {
            throw new \Exception("Inicie sesión primero");
        }

        session()->forget('id');

        return response()->json([
            'status' => 200,
            'message' => '¡Esperamos volverte a ver!'
        ]);
    }
}
