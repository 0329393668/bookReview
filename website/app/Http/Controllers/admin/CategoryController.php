<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $categories = [
            ["id" => 1, "name" => "Hành Động", "quantity" => 2],
            ["id" => 2, "name" => "Kinh Dị", "quantity" => 2],
            ["id" => 3, "name" => "Tình Cảm", "quantity" => 2],
        ];
        return view("admin.content.category.index", ["categories"=> $categories]);
    }
    function add(){
        return view("admin.content.category.addForm");
    }
}
