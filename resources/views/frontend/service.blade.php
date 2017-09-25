@include('layouts.style')
<title>Index | Index</title>

<div>

    <!--BEGIN BACK TO TOP-->
    <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
     @include('layouts.header')
    <!--END TOPBAR-->
    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
        @include('layouts.menu')
        <!--END SIDEBAR MENU-->

        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            @include('layouts.sidebar')
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">
                        Service</div>
                </div>
                <div class="sharethis-inline-share-buttons col-md-4"></div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Dashboard</li>
                </ol>
                <div class="clearfix">
                </div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE-->
            <div id="tab-general">
                <div class="mbl">
                    <div class="col-lg-12">

                        <div class="col-md-12">
                            <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                            </div>
                        </div>

                    </div>

                    <div>

                        <div class="page-content">
                            <div class="row">
                                <div class="col-lg-8" style="padding-right: 0;">
                                    <div class="panel" style="padding-top: 20px;">
                                        <div class="panel-body">
                                            <p style="font-size: 25px;color: #357ca5;">{{$service->name}}</p>

                                            <p><code> Alternate Name:</code>{{$service->alternate_name}}</p>

                                            <p><code> Organization Name:</code><a href="/organization_{{$service->organization}}" style="color: #428bca;">{{$organization}}</a></p>

                                            <p><code> Description:</code>{!! $service->description !!}</p>

                                            <p><code> Status:</code><span class="badge badge-green">{{$service->status}}</span></p>

                                            <p><code> Taxonomy:</code>{{$taxonomy}}</p>

                                            <p><code> Url:</code><a target="blank" href="{{$service->url}}">{{$service->url}}</a></p>

                                            <p><code> Email:</code>{{$service->email}}</p>

                                            <p><code> Program:</code>{{$program}}</p>

                                            <div class="divider">
                                                <h2>Additional Info</h2>
                                                <p><code> Application Process:</code>{!! $service->application_process !!}</p>
                                                <p><code> Wait Time:</code>{{$service->wait_time}}</p>
                                                <p><code> Fees:</code>{{$service->fees}}</p>
                                                <p><code> Accreditations:</code>{{$service->accreditations}}</p>
                                                <p><code> Licenses:</code>{{$service->licenses}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" style="padding-left: 0;">
                                    <div class="portlet box">
                                        <div class="portlet-header">
                                            @if ($service_map->latitude==0 && $service_map->longitude==0)
                                              <p style="font-size: 16px; padding-right: 40px; padding-top: 60px;">There is no map data.</p>
                                            @else
                                            <div style="width: 100%; height: 300px;">

                                              {!! Mapper::render() !!}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="portlet-body">
                                            <p><code>Address:</code></p>
                                            <p><code>Contact:</code>{{$contacts}}</p>
                                            <p><code>Regular schedule:</code></p>
                                            <p><code>holiday schedule:</code></p>
                                            <h2>Details</h2>
                                            @foreach($service_details as $service_detail)
                                                <p><span class="badge badge-yellow">{{$service_detail->detail_type}}</span> {!! $service_detail->value !!}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!--BEGIN FOOTER-->
            <div id="footer">
                <div class="copyright">
                <a href="#">&copy; ThemesGround 2015. Designed by ThemesGround </a></div>
            </div>
            <!--END FOOTER-->
        </div>
        <!--END CONTENT-->

</div>
<!--END PAGE WRAPPER-->
</div>
</div>
@include('layouts.script')
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>