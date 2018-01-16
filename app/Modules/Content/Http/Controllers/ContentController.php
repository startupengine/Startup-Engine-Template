<?php

namespace App\Modules\Help\Http\Controllers;
use \App\Page;

class ContentController
{

    public function getItem($postType = null, $slug) {
        if($postType == null) {
            $postType = 'post';
        }
        $item = Post::where('type', '=', $postType)->andWhere('slug', '=', $slug)->first();
        if ($item == null) {
            abort(404);
        }
        return view('content::view')->with('item', $item);
    }

    public function getItemsByTag($tag) {
        $page = Page::where('slug', '=', 'articles')->where('status','=','PUBLISHED')->firstOrFail();
        return view('pages.view')->with('page', $page)->with('tag', $tag);
    }

}