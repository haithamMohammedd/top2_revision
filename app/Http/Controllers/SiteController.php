<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index() {
        return 'index page';
    }

    public function services() {
        return 'services page';
    }

    public function about() {
        return 'about page';
    }

    public function contact() {
        return 'contact page';
    }

    function user($name='Boy') {
        return 'welcome => ' . $name;
    }


}
