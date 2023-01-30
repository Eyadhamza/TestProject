<?php

namespace App\Http\Controllers;


use DataAccess\Models\BaseUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        dd(BaseUser::all());
    }
}
