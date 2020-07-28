<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blogPost($id, $welcome = 1)
    {
        $pages = [
            1 => [
                'title' => 'Hello from page 1',
            ],
            2 => [
                'title' => 'Hello from page 2',
            ],
        ];
        $welcomes = [1 => '<b>hello</b>', 2 => 'Welcome to'];

        // We are exporting arrays to the views with their variables
        return view('blog-post', ['data' => $pages[$id], 'welcome' => $welcomes[$welcome]]);

    }
}
