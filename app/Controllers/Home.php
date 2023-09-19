<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function page() {
        return view('page');
    }

    public function tab($selectTab) {
        return view("tab-{$selectTab}", compact('selectTab'));
    }
}
