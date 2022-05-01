<?php

namespace App\Architecture\View\Controllers;

use App\Architecture\BusinessLogic\Notes\Service\CreateNoteService;
use App\Architecture\BusinessLogic\Notes\Service\DeleteNoteService;
use App\Architecture\BusinessLogic\Notes\Service\ShowNoteByUserIdService;
use App\Architecture\BusinessLogic\Notes\Service\UpdateNoteService;
use App\Architecture\DB\Mysql\Note\CreateNote;
use App\Architecture\DB\Mysql\Note\DeleteNote;
use App\Architecture\DB\Mysql\Note\ShowNoteByUserId;
use App\Architecture\DB\Mysql\Note\UpdateNote;
use App\CommandPattern\Invoker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createNoteService = new CreateNoteService(new CreateNote(), $request);

        $invoker = new Invoker();
        $invoker->addCommand($createNoteService);
        return $invoker->runCommand();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showNotesByUser($userId)
    {
        $showByUserId = new ShowNoteByUserIdService(new ShowNoteByUserId(), $userId);

        $invoker = new Invoker();
        $invoker->addCommand($showByUserId);
        return $invoker->runCommand();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        $updateNoteService = new UpdateNoteService(new UpdateNote(), $request, $uuid);

        $invoker = new Invoker();
        $invoker->addCommand($updateNoteService);
        return $invoker->runCommand();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        $deleteNoteService = new DeleteNoteService(new DeleteNote(), $uuid);

        $invoker = new Invoker();
        $invoker->addCommand($deleteNoteService);
        return $invoker->runCommand();
    }
}
