<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(){
        $notes = Note::all();
        return view('notes.index',compact(['notes']));
    }

    public function create(){
        return view('notes.create');
    }

    public function store(Request $request){
        Note::create($request->all());
        return redirect('/notes');
    }

    public function edit($id){
        $note = Note::find($id); 
        return view('notes.edit',compact(['note']));
    }

    public function update(Request $request,$id){
        $note = Note::find($id);
        $note->update($request->all());
        return redirect('/notes');
    }

    public function destroy($id){
        $note = Note::find($id);
        $note->delete();
        return redirect('/notes');
    }
}
