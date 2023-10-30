<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        return view('admin.staff.index');
    }

    /**
     * Show form for create staff
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Processing push data to table
     */
    public function store(StoreRequest $request)
    {
        echo('store staff');
    }

    /**
     * Show form for edit staff
     */
    public function edit($id)
    {
        return view('admin.staff.edit');
    }

    /**
     * Processing update data from table
     */
    public function update(UpdateRequest $request, $id)
    {
        echo('update staff');
    }

    /**
     * Delete a staff
     */
    public function destroy($id = '')
    {
        echo('delete staff');
    }
}
