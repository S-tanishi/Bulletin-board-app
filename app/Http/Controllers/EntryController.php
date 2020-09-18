<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use Dotenv\Validator;

class EntryController extends Controller
{
    public function index()
    {   //投稿一覧画面表示

        $item_list = Entry::orderBy("id", "desc")
          ->paginate(10);

        return view("list", [
            "item_list" => $item_list
        ]);
    }

    public function create(Request $request)
    {   //投稿処理
        $input = $request->only('author', 'title', 'body');

        $validator = Validator::make($input, [
            'author' => 'required|string|max:30',
            'title' => 'required|string|max:30',
            'body' => 'required|string|max:100'
        ]);

        //バリデーション失敗
        if($validator->fails())
        {
            return redirect('/')
            ->withErrors($validator);
        }

        //バリデーション成功
        $entry = new Entry();
        $entry->author = $input["author"];
        $entry->title = $input["title"];
        $entry->body = $input["body"];
        $entry->save();

        return redirect('/');
    }

    
}
