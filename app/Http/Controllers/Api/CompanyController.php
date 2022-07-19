<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return CompanyResource::collection(Company::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CompanyRequest $request
     * @return CompanyResource
     */
    public function store(CompanyRequest $request): CompanyResource
    {
        $company = Company::create($request->validated());

        return new CompanyResource($company);
    }

    /**
     * Display the specified resource.
     *
     * @param Company $company
     * @return CompanyResource
     */
    public function show(Company $company): CompanyResource
    {
        return new CompanyResource($company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Company $company
     * @return CompanyResource
     */
    public function update(CompanyRequest $request, Company $company): CompanyResource
    {
        $company->update($request->validated());

        return new CompanyResource($company);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Company $company
     * @return Response
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return response()->noContent();
    }
}
