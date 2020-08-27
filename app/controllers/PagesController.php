<?php

namespace App\Controllers;

use App\Core\App;


class PagesController
{
    /**
     * Show the administrative home page.
     */

    public function index()
    {

        return view('index');

    }

}
