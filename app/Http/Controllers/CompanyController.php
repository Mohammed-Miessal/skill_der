<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $companies = Company::all();
        return view('admin.companies.index', compact('companies'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        //
        $validatedData = $request->validated();

        $company = new Company([
            'name' => $validatedData['name'],
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('companies_images', 'public');
            $company->image = basename($imagePath);
        }

        // dd($company->image);

        $company->save();

        return redirect()->route('admin.companies.index')->with('message', 'Company created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //

        $validatedData = $request->validated();

        $company = Company::findOrFail($company->id);

        $company->name = $validatedData['name'];

        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::disk('public')->delete('companies_images/' . $company->image);

            // Upload the new image
            $imagePath = $request->file('image')->store('companies_images', 'public');
            $company->image = basename($imagePath);
        }

        $company->save();

        return redirect()->route('admin.companies.index')->with('message', 'Company updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
        if ($company->image) {
            Storage::disk('public')->delete('companies_images/' . $company->image);
        }

        $company->delete();

        return redirect()->route('admin.companies.index')->with('message', 'Company deleted successfully.');
    }
}
