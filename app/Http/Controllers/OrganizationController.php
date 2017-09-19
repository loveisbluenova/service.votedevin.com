<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Logic\User\UserRepository;
use App\Models\Post;
use App\Models\Taxonomy;
use App\Models\Service;
use App\Models\Location;
use App\Models\Organization;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $services = Service::all();
        $locations = Location::all();
        $taxonomys = Taxonomy::all();
        $organizations = Organization::all();
        $service_type_name = '&nbsp;';
        $location_name = '&nbsp;';
        $organization_name = 'All';
        $service_type_name = '&nbsp;';
        $service_name = '&nbsp;';
        $filter = collect([$service_type_name, $location_name, $organization_name, $service_name]);

        return view('frontend.organization', compact('services','locations','organizations', 'taxonomys','filter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find($id)
    {
        $services = Service::all();
        $locations = Location::all();
        $taxonomys = Taxonomy::all();
        $organizations = Organization::all();
        $organization = Organization::where('organization_id','=',$id)->first();
        $service_type_name = '&nbsp;';
        $location_name = '&nbsp;';
        $organization_name = '&nbsp;';
        $service_name = Service::where('service_id','=', $id)->value('name');
        $filter = collect([$service_type_name, $location_name, $organization_name, $service_name]);
        return view('frontend.service', compact('services','locations','organizations', 'taxonomys','service_name','service','organization','filter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
