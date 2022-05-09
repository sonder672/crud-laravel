<?php

namespace App\Architecture\View\Controllers;

use App\Architecture\BusinessLogic\Notes\Service\CreateNoteService;
use App\Architecture\BusinessLogic\Notes\Service\DeleteNoteService;
use App\Architecture\BusinessLogic\Notes\Service\ShowNoteByUserIdService;
use App\Architecture\BusinessLogic\Notes\Service\ShowSpecificNote;
use App\Architecture\BusinessLogic\Notes\Service\UpdateNoteService;
use App\Architecture\DB\Eloquent\Note\ShowSpecificNote as NoteShowSpecificNote;
use App\Architecture\DB\Eloquent\Note\UpdateNote as UpdateNoteEloquent;
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

    public function create(Request $request)
    {
    }

    public function store(Request $request)
    {
        $createNoteService = new CreateNoteService(new CreateNote(), $request);

        $invoker = new Invoker();
        $invoker->addCommand($createNoteService);
        return $invoker->runCommand();
    }

    public function showNotesByUser($userId)
    {
        $showByUserId = new ShowNoteByUserIdService(new ShowNoteByUserId(), $userId);

        $invoker = new Invoker();
        $invoker->addCommand($showByUserId);
        return $invoker->runCommand();
    }

    public function edit($uuid)
    {
        $specificNote = new ShowSpecificNote($uuid, new NoteShowSpecificNote());

        $invoker = new Invoker();
        $invoker->addCommand($specificNote);
        $jsonContentToArray = json_decode($invoker->runCommand()->content(), true);
        if ($jsonContentToArray['status'] == 200)
        {
            return view('note.noteEdit', [
                'contentNote' => $jsonContentToArray['contentNote']
            ]);
        }
    }

    public function destroy($uuid)
    {
        $deleteNoteService = new DeleteNoteService(new DeleteNote(), $uuid);

        $invoker = new Invoker();
        $invoker->addCommand($deleteNoteService);
        $jsonContentToArray = json_decode($invoker->runCommand()->content(), true);
        if ($jsonContentToArray['status'] == 200)
        {
            return redirect()->back()->with('success', $jsonContentToArray['message']);
        }
    }


/* ------------------------------------------------------------------------------------------------------------------------- */
//Ejemplo de inversión de dependencias y su uso:

    public function update(Request $request, $uuid)
    {
        $updateNoteService = new UpdateNoteService(new UpdateNote(), $request, $uuid);

        $invoker = new Invoker();
        $invoker->addCommand($updateNoteService);
        $jsonContentToArray = json_decode($invoker->runCommand()->content(), true);
        if ($jsonContentToArray['status'] == 200)
        {
            return redirect()->view('note.noteCreate')->with('success', $jsonContentToArray['message']);
        }
    } 


    /* public function update(Request $request, $uuid)
    {
        $updateNoteService = new UpdateNoteService(new UpdateNoteEloquent(), $request, $uuid);

        $invoker = new Invoker();
        $invoker->addCommand($updateNoteService);
        return $invoker->runCommand();
    } */
}
