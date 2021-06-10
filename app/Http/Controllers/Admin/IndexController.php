<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class IndexController extends Controller
{
    public function index() {

        return view('admin.index');
    }
}
