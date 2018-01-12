<?php

namespace App\Http\Controllers;
use \App\Page;

class HelpController extends Controller
{
    public function index() {
        $page =  Page::where('slug', '=', 'help')->first();
        if ($page == null) {
            abort(404);
        }
        return view('pages.view')->with('page', $page);
    }

    public function getPage($slug) {
        $page =  Page::where('post_type', '=', 'help')->andWhere('slug', '=', $slug)->first();
        if ($page == null) {
            abort(404);
        }
        return view('help.view')->with('page', $page);
    }

    public function test() {
        return 'Help';
    }

}