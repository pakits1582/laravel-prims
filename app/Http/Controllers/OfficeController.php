<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreOfficeRequest;
use App\Http\Requests\UpdateOfficeRequest;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOfficeRequest $request)
    {
        $officeData = $request->validated();
        $newOffice = Office::firstOrCreate(
            ['code' => $request->code, 'name' => $request->name],
            $officeData
        );

        $message = $newOffice->wasRecentlyCreated
            ? ['status' => 'success', 'alert-class' => 'green', 'message' => 'Office successfully added!']
            : ['status' => 'error', 'alert-class' => 'red', 'message' => 'Duplicate entry, office already exists!'];

        return Redirect::back()->with($message)->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Office $office)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Office $office)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOfficeRequest $request, Office $office)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Office $office)
    {
        //
    }
}
