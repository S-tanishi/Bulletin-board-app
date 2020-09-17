<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EntryController extends Controller
{
    public function index()
    {   //投稿一覧画面表示

        $item_list = Entry::all();

        return view("list", [
            "item_list" => $item_list
        ]);
    }

    public function create(Request $request)
    {   //投稿処理
        $input = $request->only('author', 'title', 'body');

        dd($input);
    }

    
}
