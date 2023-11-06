<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function homepage(){
        $users = [
            ["id" => 1, "name" => "Nguyễn Văn A", "position" => "Quản lý"],
            ["id" => 2, "name" => "Trịnh Thị B", "position" => "Nhân viên"],
            ["id" => 3, "name" => "Đỗ Văn C", "position" => "Nhân viên"],
        ];
        return view("admin.homepage",["users"=>$users]);
    }
}
