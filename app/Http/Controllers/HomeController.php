<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Ai the Label";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Ai the Label";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "Pieces of (he)arts made only for you with small hands and a big heart ♡";
        $viewData["author"] = "Ai the Label by Ayin";
        return view('home.about')->with("viewData", $viewData);
    }
}
