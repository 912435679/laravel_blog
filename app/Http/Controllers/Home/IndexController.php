<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-11-21 0021
 * Time: 15:59
 */
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class IndexController extends Controller{

    public function index(){
        return view('home.index.index');
    }




}