<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index()
    {
        return view('admin.manage.index');
    }

    /**
     * Show form for create manage
     */
    public function create()
    {
        return view('admin.manage.create');
    }

    /**
     * Processing push data to table
     */
    public function store(StoreRequest $request)
    {
        echo('store manage');
    }

    /**
     * Show form for edit manage
     */
    public function edit($id)
    {
        return view('admin.manage.edit');
    }

    /**
     * Processing update data from table
     */
    public function update(UpdateRequest $request, $id)
    {
        echo('update manage');
    }

    /**
     * Delete a manage
     */
    public function destroy($id = '')
    {
        echo('delete manage');
    }
}
