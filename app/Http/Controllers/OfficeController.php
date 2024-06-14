<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Http\Requests\StoreOfficeRequest;
use App\Http\Requests\UpdateOfficeRequest;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offices = Office::with(['headinfo'])->orderBy('code')->paginate(10);

        return view('offices.index', compact('offices'));
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

        return redirect()->back()->with($message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Office $office)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Office $office)
    {
        return view('offices.edit', compact('office'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOfficeRequest $request, Office $office)
    {
        $office->update($request->validated());

        return redirect()->back()->with(['status' => 'success', 'alert-class' => 'green', 'message' => 'Office successfully updated!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Office $office)
    {
        $office->delete();

        return redirect()->route('offices.index')->with(['status' => 'success', 'alert-class' => 'green', 'message' => 'Office deleted successfully!']);
    }
}
