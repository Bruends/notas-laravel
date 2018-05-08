<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NotesController extends Controller
{
    public function index(){
        $notes = Note::all();
        return view('index', [
            'notes' => $notes
        ]);
    }

    public function search(Request $req){
        $notes = Note::where('title', 'like', '%' . $req->title . '%')->get();
        return view('index', [
            'notes' => $notes
        ]);
    }

    // Pages
    public function pageUpdate($id){
        $note = Note::find($id);
        return view('update', [
            'note' => $note
        ]);
    }

    public function pageDelete($id){
        $note = Note::find($id);
        return view('delete', [
            'note' => $note
        ]);
    }

    // Crud 
    public function save(Request $req){
        $notes = Note::create($req->all());       
        return redirect('/');
    }

    public function update(Request $req, $id){
        $note = Note::find($id);
        $note->title = $req->title;
        $note->text = $req->text;
        $note->save();
        return redirect('/');
    }
    
    public function delete($id){
        $notes = Note::destroy($id);
        return redirect('/');
    }
}
