<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function create(Request $request){
        $form = $request->all();
        return redirect('/');
    }

    public function index()
    {
        $authors = Author::simplePaginate(4);
        return view('index', ['authors' => $authors]);
    }
}
