<?php

namespace Unm\Laravel\Tumblr;

use App, Input, View, Redirect, Config;
use Illuminate\Routing\Controllers;

class TumblrController extends \BaseController {

    public function index()
    {
        $t = App::make('tumblr');

        dd($t->getUserInfo());

//        foreach ($t->getUserInfo()->user->blogs as $blog) {
//            echo $blog->name . "\n";
//        }


        return View::make('tumblr::index');
    }

}
