<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller {
    public function index() {
        // postsテーブルからすべてのデータを取得し、変数$postsに代入
        $posts = DB::table('posts')->get();

        // 変数$postsをpost\index.blade.phpに返す
        return view('posts.index', compact('posts'));
    }
}
