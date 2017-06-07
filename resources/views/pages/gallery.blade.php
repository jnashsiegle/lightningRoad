<div id="gallery" class="container-fluid">
    <!--gallery section -->
    @include('partials.breadcrumb')

    <div class="row-fluid">
        <div class="col-lg-12">
            <aside class="verse pullL gapR">
                <!--the following divs style the verse-->
                <div class="innerBox center-block">
                    <div class="vtext">
                        <h5 class="center-block">Discover the tools available to chase the darkness out of this present day.<br /><cite>~&lpar;Ephesians 6&colon;11&dash;18&rpar;</cite></h5>
                    </div>
                    <!--end of vtext-->
                </div>
                <!--end of innerbox-->
            </aside>
            <!--end of verse & verse styling-->
            <h1 class="text-center clearfix">Our Journey So Far</h1>
        </div>
        <!--end of col-lg-12-->
    </div>
    <!--end of row-->

    <div class="row-fluid hcenter">
        <div class="col-lg-3 col-md-4">
            <a class="gImage" title="Jerry Savelle and team praying for Rev" href="#" data-image-id="" data-toggle="modal" data-title="Lightning Road Biker Outreach" data-caption="Jerry Savelle and team praying for Rev" data-image="../images/fullsize/JerrySavelleandteamprayingforRev.jpg" data-target="#image-gallery">
                <img class="thumb img-responsive center-block" src="../images/thumbnails/JerrySavelleandteamprayingforRevT.jpg" width="220" height="165" alt="Jerry Savelle and team praying for Rev" aria-hidden="true">
            </a>
        </div>

        <div class="col-lg-3 col-md-4">
            <a class="gImage" title="Johnny Spinks" href="#" data-image-id="" data-toggle="modal" data-title="Lightning Road Biker Outreach" data-caption="Johnny Spinks speaking at the Hays County Juvenile Facility" data-image="../images/fullsize/JohnnySpinks_Jesse_HCJC_PINKGLOVES.jpg" data-target="#image-gallery">
                <img class="thumb img-responsive center-block" src="../images/thumbnails/JohnnySpinks_Jesse_HCJC_PINKGLOVEST.jpg" width="220" height="165" alt="Johnny Spinks speaking at the Hays County Juvenile Facility" aria-hidden="true">
            </a>
        </div>
        <div class="col-lg-3 col-md-4">
            <a class="gImage" title="Johnny Spinks motivating the youth" href="#" data-image-id="" data-toggle="modal" data-title="Lightning Road Biker Outreach" data-caption="Johnny Spinks motivates" data-image="../images/fullsize/JohnnySpinks_Jesse_HCJC.jpg" data-target="#image-gallery">
                <img class="thumb img-responsive center-block" src="../images/thumbnails/JohnnySpinks_Jesse_HCJCT.jpg" width="220" height="165" alt="Johnny Spinks motivating the youth" aria-hidden="true">
            </a>
        </div>
        <div class="col-lg-3 col-md-4">
            <a class="gImage" title="Blessing Colors" href="#" data-image-id="" data-toggle="modal" data-title="Lightning Road Biker Outreach" data-caption="Pastor Billy blessing colors for James at a street outreach" data-image="../images/fullsize/PastorBillyblessingolorsforJamesatstreetoutreach_SA.jpg" data-target="#image-gallery">
                <img class="thumb img-responsive center-block" src="../images/thumbnails/PastorBillyblessingolorsforJamesatstreetoutreach_SAT.jpg" width="220" height="165" alt="Pastor Billy blessing colors for James at a street outreach" aria-hidden="true">
            </a>
        </div>
        <div class="col-lg-3 col-md-4">
            <a class="gImage" title="Tough Love Rally" href="#" data-image-id="" data-toggle="modal" data-title="Lightning Road Biker Outreach" data-caption="Slow Race at Tough Love Rally" data-image="../images/fullsize/ToughLoveRally_slowrace_Tex.jpg" data-target="#image-gallery">
                <img class="thumb img-responsive center-block" src="../images/thumbnails/ToughLoveRally_slowrace_TexT.jpg" width="220" height="165" alt="Slow Race at Tough Love Rally" aria-hidden="true">
            </a>
        </div>
        <div class="col-lg-3 col-md-4">
            <a class="gImage" title="Tough Love Rally" href="#" data-image-id="" data-toggle="modal" data-title="Lightning Road Biker Outreach" data-caption="Tough Love Rally - Another View" data-image="../images/fullsize/ToughLoveRally_slowrace.jpg" data-target="#image-gallery">
                <img class="thumb img-responsive center-block" src="../images/thumbnails/ToughLoveRally_slowraceT.jpg" width="220" height="165" alt="Slow Race view at the Tough Love Rally" aria-hidden="true">
            </a>
        </div>
        <div class="col-lg-3 col-md-4">
            <a class="gImage" title="Pastor Billy at the Tough Love Rally" href="#" data-image-id="" data-toggle="modal" data-title="Lightning Road Biker Outreach" data-caption="Pastor Billy at the Tough Love Rally" data-image="../images/fullsize/ToughLoveRally_PastorBilly.jpg" data-target="#image-gallery">
                <img class="thumb img-responsive center-block" src="../images/thumbnails/ToughLoveRally_PastorBillyT.jpg" width="220" height="165" alt="Pastor Billy at the Tough Love Rally" aria-hidden="true">
            </a>
        </div>
        <div class="col-lg-3 col-md-4">
            <a class="gImage" title="Ring Toss Fun" href="#" data-image-id="" data-toggle="modal" data-title="Lightning Road Biker Outreach" data-caption="Ring toss fun at the Tough Love Rally" data-image="../images/fullsize/ToughLoveRally_Darrell_ringtoss.jpg" data-target="#image-gallery">
                <img class="thumb img-responsive center-block" src="../images/thumbnails/ToughLoveRally_Darrell_ringtossT.jpg" alt="Ring toss fun at the Tough Love Rally" width="220" height="165" aria-hidden="true">
            </a>
        </div>
    </div>
    <!--end of row-fluid-->
    <!--modal for lightbox-->
    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" aria-label="close">×</span><span class="sr-only">Close</span>
                    </button>
                    <div class="modal-title" id="image-gallery-title"></div>
                </div>
                <!--end modal header-->
                <div class="modal-body">
                    <img id="image-gallery-image" class="img-responsive" src="#" alt="" aria-hidden="true">
                </div>
                <div class="modal-footer  center-block">
                    <div class="col-xs-3 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-primary  btn-responsive pull-left" id="show-previous-image" aria-label="back">Back</button>
                    </div>
                    <div class="col-xs-6 col-md-5 col-lg-6 center-block text-center" id="image-gallery-caption">
                        This text will be overwritten by jQuery
                    </div>
                    <div class="col-xs-3 col-md-3 col-lg-2 pull-right">
                        <button type="button" id="show-next-image" class="btn btn-default btn-responsive" aria-label="next">Next</button>
                    </div>

                </div>
                <!--end modal footer-->
            </div>
            <!--end modal header-->
        </div>
        <!--end modal dialog-->
    </div>
    <!--end of modal code-->

    <div class="row-fluid">
        <div class="col-lg-12">
            <img src="../images/logos/textLogo.png" class="img-responsive pullL" alt="Lightning Road Biker Outreach" aria-hidden="true" />
            <aside class="verse pullR gapL center-block hidden-xs hidden-sm">
                <!--the following divs style the verse-->
                <div class="innerBox center-block">
                    <div class="vtext">
                        <h5 class="center-block">Show up and be counted as faithful to the cause of changing hearts, young and old.<br /><cite>~&lpar;John 20&colon;21, Acts 1&colon;8&rpar;</cite></h5>
                    </div>
                    <!--end of vtext-->
                </div>
                <!--end of inner box-->
            </aside>
            <!--end of verse center-block & verse styling-->
        </div>
        <!--end of vwrapper-->
    </div>
    <!--row-fluid-->
</div>
<!--end of container-->

