<?php

namespace App\Modules\Content\Http\Controllers;
use \App\Page;

class ContentAPIController
{

    public function getItem(Request $request)
    {
        $items = new \App\ContentAPIResponse();
        return $items->getItem($request);
    }

    public function getItems(Request $request)
    {
        $items = new \App\ContentAPIResponse();
        return $items->getItems($request);
    }

}