<?php

namespace App\Http\Controllers;

use App\Brandname;


class BrandnameController extends Controller
{
public function Brands(Brandname $brandname)
{
    return view('posts/topvalue')->with(['posts' => $brandname->getByBrandname()]);
}
}