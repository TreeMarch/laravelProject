<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('admin.home',[
            'title' => "Trang Quản Trị Admin"
        ]);
    }
    public function store(){
        return view('admin.add');
    }
    public function list(){
        return view('admin.list');
    }
}
