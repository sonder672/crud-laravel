<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessLogic\Notes\Dto\AddNoteDto;
use App\Models\BusinessLogic\Notes\Dto\DeleteNote;
use App\Models\BusinessLogic\Notes\Dto\UpdateNoteDto;
use App\Models\BusinessLogic\Notes\NoteServices\AddNoteService;
use App\Models\BusinessLogic\Notes\NoteServices\UpdateNoteService;
use App\Models\BusinessLogic\Notes\NoteServices\DestroyNoteService;
use App\Models\DB\NotesDB;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $AddNoteService = new AddNoteService( new NotesDB());
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
    public function update(Request $request, $id)
    {
        $UpdateNoteDto = new UpdateNoteDto(
            $request->uuid,
            $request->title,
            $request->content,
            $request->userId
        );
        $updateNoteService = new UpdateNoteService( new NotesDB);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteNote = new DeleteNote(
            $id
        );
        $DestroyNoteService = new DestroyNoteService( new NotesDB () );
    }
}
