<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    /**
     * Show form for create user
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Processing push data to table
     */
    public function store( $Request)
    {
        echo('store user');
    }

    /**
     * Show form for edit user
     */
    public function edit($id)
    {
        return view('admin.user.edit');
    }

    /**
     * Processing update data from table
     */
    public function update( $id)
    {
        echo('update user');
    }

    /**
     * Delete a user
     */
    public function destroy($id = '')
    {
        echo('delete user');
    }
}
