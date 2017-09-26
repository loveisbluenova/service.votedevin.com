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

class TaxonomyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $locations = Location::all();
        $taxonomys = Taxonomy::all();
        $organizations = Organization::all();
        $taxonomies = Taxonomy::where('parent_name', '=', '')->get();
        $service_name = '&nbsp;';
        return view('frontend.taxonomy', compact('services','locations','organizations', 'taxonomys','service_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function find($id)
    {
        //
    }

}
