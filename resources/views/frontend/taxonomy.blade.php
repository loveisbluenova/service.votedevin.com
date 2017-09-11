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
                        taxonomy_detail</div>
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
                                <div class="col-lg-7" style="padding-right: 0;">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <h4>service>name</h4>
                                            <h4>service>organization</h4>
                                            <h4>service>service_taxomy</h4>
                                            <h4>service>phone</h4>
                                            <h4>service>description</h4>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-body">
                                            <h4>service>name</h4>
                                            <h4>service>organization</h4>
                                            <h4>service>service_taxomy</h4>
                                            <h4>service>phone</h4>
                                            <h4>service>description</h4>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-body">
                                            <h4>service>name</h4>
                                            <h4>service>organization</h4>
                                            <h4>service>service_taxomy</h4>
                                            <h4>service>phone</h4>
                                            <h4>service>description</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5" style="padding-left: 0;">
                                    <div class="portlet box">
                                        <div class="portlet-header">
                                                 <div class="map">
                                                  <div class="container-fluid" style="padding: 0;">
                                                   <div class="row col-md-2">
                                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31910.130369917133!2d36.80390184826668!3d-1.3157805385798884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1053bc7118e7%3A0xb365376f1d28175!2sNairobi+West%2C+Nairobi!5e0!3m2!1sen!2ske!4v1463256840401" width="460" height="250" style="border:0" allowfullscreen></iframe>
                                                   </div><!-- /.row -->
                                                  </div><!-- /.container-fluid -->
                                                 </div><!-- /.map -->
                                        </div>
                                        <div class="portlet-body">
                                            <h4>{location>address}</h4>
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