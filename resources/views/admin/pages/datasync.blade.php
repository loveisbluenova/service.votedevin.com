@extends('admin.layouts.dashboard') 

@section('template_title') Data Sync 
@endsection 

@section('template_fastload_css') 
@endsection 

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Data Sync
        <small> {{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }} </small>
      </h1> {!! Breadcrumbs::render('profile_edit', $user) !!}

    </section>
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Airtable -> MySQL</h3>
            </div>
            <div class="box-body">
              <p>Please click follow button.</p>
              <a href="http://services.votedevin.com/services.php" class="btn btn-app">
                <i class="fa fa-cogs"></i> Sevices
              </a>
              <a href="http://services.votedevin.com/locations.php" class="btn btn-app">
                <i class="fa fa-location-arrow"></i> Locations
              </a>
              <a href="http://services.votedevin.com/organizations.php" class="btn btn-app">
                <i class="fa  fa-bank"></i> Organizations
              </a>
              <a href="http://services.votedevin.com/phones.php" class="btn btn-app">
                <i class="fa fa-phone"></i> Phones
              </a>
              <a href="http://services.votedevin.com/contacts.php" class="btn btn-app">
                <i class="fa fa-envelope"></i> Contact
              </a>
              <a href="http://services.votedevin.com/address.php" class="btn btn-app">
                <i class="fa fa-address-book"></i> Address
              </a>
              <a href="http://services.votedevin.com/regular.php" class="btn btn-app">
                <i class="fa fa-calendar"></i> Regular
              </a>
              <a href="http://services.votedevin.com/holiday.php" class="btn btn-app">
                <i class="fa fa-calendar-minus-o"></i> Holiday
              </a>
              <a href="http://services.votedevin.com/accessibility.php" class="btn btn-app">
                <i class="fa fa-universal-access"></i> Accessibility
              </a>
              <a href="http://services.votedevin.com/programs.php" class="btn btn-app">
                <i class="fa fa-product-hunt"></i> Program
              </a>
              <a href="http://services.votedevin.com/area.php" class="btn btn-app">
                <i class="fa fa-map-marker"></i> Sevice area
              </a>
              <a href="http://services.votedevin.com/taxonomy.php" class="btn btn-app">
                <i class="fa fa-sitemap"></i> Taxonomy
              </a>
              <a href="http://services.votedevin.com/details.php" class="btn btn-app">
                <i class="fa fa-sitemap"></i> Details
              </a>
            </div>
            <!-- /.box-body -->
          </div>
            </div>
        </div>
    </section>
</div>

@endsection 

@section('template_scripts') 
    @include('admin.structure.dashboard-scripts')

@endsection