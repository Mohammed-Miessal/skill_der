<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;



class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd ( $companies = Company::all());
        $companies = Company::paginate(10);
        return view('admin.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.companies.create');
    }



    public function store(StoreCompanyRequest $request)
    {
        $validatedData = $request->validated();

        $company = new Company([
            'name' => $validatedData['name'],
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('company_images', 'public');
            $company->image = basename($imagePath);
        }


        $company->save();

        return redirect()->route('admin.companies.index')->with('message', 'Company created successfully.');
    }

    public function edit(Company $company)
    {
        //
        return view('admin.companies.edit', compact('company'));
    }

    public function update(UpdateCompanyRequest $request, $id)
    {
        $validatedData = $request->validated();

        $company = Company::findOrFail($id);

        $company->name = $validatedData['name'];

        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::disk('public')->delete('company_images/' . $company->image);

            // Upload the new image
            $imagePath = $request->file('image')->store('company_images', 'public');
            $company->image = basename($imagePath);
        }

        $company->save();

        return redirect()->route('admin.companies.index')->with('message', 'Company updated successfully.');
    }


    public function destroy(Company $company)
    {
        //  dd($company);
        // //
        if ($company->image) {
            Storage::disk('public')->delete('company_images/' . $company->image);
        }


        $company->delete();

        return redirect()->route('admin.companies.index')->with('message', 'Company deleted successfully.');
    }
}
