<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    /**
     * Show form for create category
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Processing push data to table
     */
    public function store(StoreRequest $request)
    {
        echo('store category');
    }

    /**
     * Show form for edit category
     */
    public function edit($id)
    {
        return view('admin.category.edit');
    }

    /**
     * Processing update data from table
     */
    public function update(UpdateRequest $request, $id)
    {
        echo('update category');
    }

    /**
     * Delete a category
     */
    public function destroy($id = '')
    {
        echo('delete category');
    }
}
