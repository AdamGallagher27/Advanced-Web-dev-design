<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;



class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $notes = DB::table("notes")->get();
        $notes = Note::where("user_id", Auth::id())->latest("updated_at")->paginate(5);

        
        return view("notes/index")->with("notes", $notes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("notes/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "title" => "required|max:120",
            "text" => "required"
        ]);


        Note::create([
            "user_id" => Auth::id(),
            "title" => $request->title,
            "text" => $request->text,
        ]);

        return to_route("notes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::where("id", $id)->where("user_id", Auth::id())->firstOrFail();
        return view("notes.show")->with("note", $note);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        return view("notes.edit")->with("note", $note);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        $request->validate([
            "title" => "required|max:120",
            "text" => "required"
        ]);

        $note->update([
            "user_id" => Auth::id(),
            "title" => $request->title,
            "text" => $request->text,
        ]);


        return to_route("notes.show", $note);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
