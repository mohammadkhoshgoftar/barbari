<?php

namespace Modules\Core\app\Http\Controllers;

use App\Http\Controllers\Controller;
class CoreController extends Controller
{
    private  string $path;
    public function __construct()
    {
        $this->path ='core::Admin.';
    }

    public function index()
    {
        return view($this->path.'dashboard');
    }

    public function sample_view(){
        return view($this->path.'sample');
    }

    public function aboutUs()
    {
        return view($this->path.'about');
    }    public function contactUs()
    {
        return view($this->path.'contactus');
    }

    /**
     * Show the form for creating a new resource.
     */

}