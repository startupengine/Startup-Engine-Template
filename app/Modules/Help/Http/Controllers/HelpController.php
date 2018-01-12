<?php

namespace App\Modules\Help\Http\Controllers;
use \App\Page;

class HelpController
{
    public function index() {
        $page =  Page::where('slug', '=', 'help')->first();
        if ($page == null) {
            abort(404);
        }
        return view('blog::index')->with('page', $page);
    }

    public function getPage($slug) {
        $item =  Post::where('slug', '=', 'help')->andWhere('slug', '=', $slug)->first();
        if ($item == null) {
            abort(404);
        }
        return view('help.view')->with('item', $item);
    }

}