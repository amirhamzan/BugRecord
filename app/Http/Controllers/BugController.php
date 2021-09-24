<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bug;

class BugController extends Controller
{
    //this function to add new record to database
    public function create(Request $request) {
        $name=$request['name'];
        $description=$request['description'];
        $date_faced_problem=$request['date_faced_problem'];

        $bug = new Bug();

        $bug->name=$name;
        $bug->description=$description;
        $bug->date_faced_problem=$date_faced_problem;

        $bug->save();

        return redirect()->back();
    }

    //this function to show record, read fron database
    public function show() {

        $bug=Bug::all();

        return view ('main', ['bug'=>$bug]);

    }
}
