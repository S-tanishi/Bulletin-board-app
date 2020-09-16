<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class EntryController extends Controller
{
    public function index()
    {   //投稿一覧画面表示
        dd(Entry::all());
    }

    public function create()
    {   //投稿処理
        echo "create";
    }
}
