<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SiteController extends Controller {
    function Index() {
        return Inertia::render('Index');
    }
    function Page1() {
        $json = ["name" => "Bhubon", "age" => 23, "city" => "Narsingdi"];
        return Inertia::render('Page1', ['data' => $json]);
    }
    function Page2() {
        $meta = [
            "title"=>"This is title",
        ];
        return Inertia::render('Page2')->withViewData(['meta'=>$meta]);
    }
    function Page3() {
        return Inertia::render('Page3');
    }
    function Page4() {
        return Inertia::render('Page4');
    }
    function Page5() {
        return Inertia::render('Page5');
    }
}
