<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$data=$this->setPageAttributes();
        return view('back/index',$data);
    }
    private function setPageAttributes()
    {
    	$data['active']="Business";
    	return $data;
    }
}
