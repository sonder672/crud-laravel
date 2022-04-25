<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DB\userDB;
use Exception;

class User extends Controller
{
    protected $userDB;
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->only([
            'id',
            'name',
            'lastname',
            'age',
            'email',
            'password'
        ]);
        $result = ['status' => 200];
        try{
            $result['data'] = $this->userDB->registerUser($data);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'email',
            'password'
        ]);
        $result = ['status' => 200];
        try {
            $result['data'] = $this->NotesDB->login($data);
        } catch(Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']);
        
    }
}
