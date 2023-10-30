<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('admin.booking.index');
    }

    /**
     * Show form for create booking
     */
    public function create()
    {
        return view('admin.booking.create');
    }

    /**
     * Processing push data to table
     */
    public function store(StoreRequest $request)
    {
        echo('store booking');
    }

    /**
     * Show form for edit booking
     */
    public function edit($id)
    {
        return view('admin.booking.edit');
    }

    /**
     * Processing update data from table
     */
    public function update(UpdateRequest $request, $id)
    {
        echo('update booking');
    }

    /**
     * Delete a booking
     */
    public function destroy($id = '')
    {
        echo('delete booking');
    }
}
