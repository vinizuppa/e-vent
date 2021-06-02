<?php

namespace App\Http\Controllers;

class ConfigController extends Controller
{

    /**
     * Display configurations menu
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.config.index');
    }

}
