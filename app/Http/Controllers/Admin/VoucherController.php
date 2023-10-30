<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index()
    {
        return view('admin.voucher.index');
    }

    /**
     * Show form for create voucher
     */
    public function create()
    {
        return view('admin.voucher.create');
    }

    /**
     * Processing push data to table
     */
    public function store(StoreRequest $request)
    {
        echo('store voucher');
    }

    /**
     * Show form for edit voucher
     */
    public function edit($id)
    {
        return view('admin.voucher.edit');
    }

    /**
     * Processing update data from table
     */
    public function update(UpdateRequest $request, $id)
    {
        echo('update voucher');
    }

    /**
     * Delete a voucher
     */
    public function destroy($id = '')
    {
        echo('delete voucher');
    }
}
