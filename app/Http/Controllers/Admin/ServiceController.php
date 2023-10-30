<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index');
    }

    /**
     * Show form for create service
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Processing push data to table
     */
    public function store(StoreRequest $request)
    {
        echo('store service');
    }

    /**
     * Show form for edit service
     */
    public function edit($id)
    {
        return view('admin.service.edit');
    }

    /**
     * Processing update data from table
     */
    public function update(UpdateRequest $request, $id)
    {
        echo('update service');
    }

    /**
     * Delete a service
     */
    public function destroy($id = '')
    {
        echo('delete service');
    }
}
