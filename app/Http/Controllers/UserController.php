<?php

namespace App\Http\Controllers;

use App\Detail;
use App\DetailUser;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $data = Role::find(2)->users;
        // dd($data);

        // $data = [
        //     ['price' => '3445', 'tax' => '200', 'active' => 'false'],
        //     ['price' => '3675', 'tax' => '300', 'active' => 'false'],
        //     ['price' => '3405', 'tax' => '100', 'active' => 'false'],
        //     ['price' => '3459', 'tax' => '250', 'active' => 'false']
        // ];

        // return collect($data)->average(function($value){
        //     if(!$value['active']){
        //         return null;
        //     }
        //     return $value ['price'] + $value['tax'];
        // });

        // $data = ['product' => 'fish', 'color' => 'red', 'weight' => '5kg'];

        // return collect($data)->only('product');

        //   WhereBetween
    //      $data = [
    //         ['price' => '3445', 'tax' => '200'],
    //         ['price' => '3675', 'tax' => '300'],
    //         ['price' => '3405', 'tax' => '100'],
    //         ['price' => '3459', 'tax' => '250']
    //     ];
    //     return collect($data)->whereNotBetween('tax', ['200', '300']);
     }
}
