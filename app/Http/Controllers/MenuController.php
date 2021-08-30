<?php

namespace App\Http\Controllers;

use App\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
//        Get all data Menu from database
        $data = MenuModel::all();
        return $data;
    }

//    create data
    public function store(Request $request)
    {
//        Get All data from request
        $data = $request->all();
//        query create
        $create = MenuModel::insert($data);
//        check if create success or not
        if ($create) {
            return "success";
        } else {
            return "false";
        }
    }

    public function update(Request $request, $id)
    {
//        Get All data from request
        $data = $request->all();
//        query update
        $update = MenuModel::find($id)->update($data);
//        check if update success or not
        if ($update) {
            return "success";
        } else {
            return "false";
        }
    }

    public function delete($id)
    {
//        query update
        $delete = MenuModel::find($id)->delete();
//        check if delete success or not
        if ($delete) {
            return "success";
        } else {
            return "false";
        }
    }
}
