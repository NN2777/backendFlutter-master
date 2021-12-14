<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteApiController extends Controller
{
    public function index(){
        $notes = Note::all();
        return response()->json(['message'=>'all data successfull','data' => $notes]);
    }
    public function show($id){
        $note = Note::find($id);
        return response()->json(['message'=>'show data successfull','data' => $note]);
    }
    public function store(Request $request){
        $note = Note::create($request->all());
        return response()->json(['message'=>'insert data successfull','data' => $note]);
    }
    public function update(Request $request,$id){
        $note = Note::find($id);
        $note->update($request->all());
        return response()->json(['message'=>'edit data successfull','data' => $note]);
    }

    public function destroy($id){
        $note = Note::find($id);
        $note->delete();
        return response()->json(['message'=>'delete data successfull','data' => null]);
    }
}
