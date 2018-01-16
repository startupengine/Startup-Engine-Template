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

}