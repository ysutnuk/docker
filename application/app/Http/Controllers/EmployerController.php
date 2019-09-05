<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployer;
use App\Http\Requests\UpdateEmployer;
use App\Models\Company;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $current_page = $request->page ?? 1;
        $per_page = $request->per_page ?? 10;
        Paginator::currentPageResolver(function() use($current_page){
            return $current_page;
        });

        $data['employers'] = Employer::with('company')->paginate($per_page);
        return view('employers.employersList', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['companies'] = Company::all();

        return view('employers.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmployer $request)
    {
        $data = $request->all();
        Employer::create($data);

        return redirect()->route('employers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        dd(1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['employer'] = Employer::findOrFail($id);
        $data['companies'] = Company::all();

        return view('employers.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployer $request, $id)
    {
        $employer = Employer::findOrFail($id);
        $data = $request->all();

        $employer->update($data);

        return redirect()->route('employers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employer = Employer::findOrFail($id);
        $employer->delete();

        return redirect()->route('employers.index');
    }
}
