<?php

namespace App\Architecture\View\Controllers;

use App\Architecture\BusinessLogic\Notes\Dto\AddNoteDto;
use App\Architecture\BusinessLogic\Notes\Dto\DeleteNoteDto;
use App\Architecture\BusinessLogic\Notes\Dto\UpdateNoteDto;
use App\Architecture\BusinessLogic\Notes\Service\NoteService;
use App\Architecture\DB\Mysql\NotesDB;
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
        $createNote = new AddNoteDto(
            $request->title,
            $request->content,
            $request->userId
        );
        $AddNoteService = new NoteService( new NotesDB() );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $UpdateNoteDto = new UpdateNoteDto(
            $uuid,
            $request->title,
            $request->content,
            $request->userId
        );
        $updateNoteService = new NoteService( new NotesDB() );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteNoteDto = new DeleteNoteDto($id);
        
        $DestroyNoteService = new NoteService( new NotesDB () );
    }
}
