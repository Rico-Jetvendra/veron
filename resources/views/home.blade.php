@include('inc.header', ['title' => 'Dashboard'])

<div class="b-main-slider slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="950px" data-slider-arrows="true" data-slider-buttons="true">
   <div class="sp-slides">
      <!-- Slide 1-->
      <div class="sp-slide">
         <div class="b-main-slider__item b-main-slider__item_2">
            <img class="sp-image" src="{{ asset('media/b-main-slider/1.png') }}" alt="slider"/>
            <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="200" data-hide-delay="400"><span class="b-main-slider__label">fix your auto, faster</span></div>
            <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="400" data-hide-delay="400">
               <div class="b-main-slider__title">WANT REPAIR CAR?</div>
            </div>
            <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="800" data-hide-delay="400">
               <div class="b-main-slider__info">We deliver highest level of satisfaction
                  through superior workmanship
               </div>
            </div>
         </div>
      </div>
      <!-- Slide 2-->
      <div class="sp-slide">
         <div class="b-main-slider__item b-main-slider__item_2">
            <img class="sp-image" src="{{ asset('media/b-main-slider/2.png') }}" alt="slider" />
            <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="200" data-hide-delay="400"><span class="b-main-slider__label">fix your auto, faster</span></div>
            <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="400" data-hide-delay="400">
               <div class="b-main-slider__title">WANT REPAIR CAR 123?</div>
            </div>
            <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="800" data-hide-delay="400">
               <div class="b-main-slider__info">We deliver highest level of satisfaction
                  through superior workmanship
               </div>
            </div>
         </div>
      </div>
      <!-- Slide 3-->
      <div class="sp-slide">
         <div class="b-main-slider__item b-main-slider__item_2">
            <img class="sp-image" src="{{ asset('media/b-main-slider/3.png') }}" alt="slider" />
            <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="200" data-hide-delay="400"><span class="b-main-slider__label">fix your auto, faster</span></div>
            <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="400" data-hide-delay="400">
               <div class="b-main-slider__title">WANT REPAIR CAR 123?</div>
            </div>
            <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="800" data-hide-delay="400">
               <div class="b-main-slider__info">We deliver highest level of satisfaction
                  through superior workmanship
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end b-main-slider -->
<!-- <div class="block_repairs ">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="ui-wrap-figure">
               <span class="ui-top-figure"></span>
            </div>
         </div>
      </div>
      <div class="row block_padding_top">
         <div class="col-md-6">
            <div class="block-repairs_img">
               <img src="{{ asset('media/b-gallery/bg-4.jpg') }}"/>
               <div class="block-repairs_img-hover">
                  <span>Committed To Ensure Full Safety</span>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="block-repairs_header">
               <h2>Legaster <span>Auto Repairs</span></h2>
               <span>A Trusted Name in Auto Repair Industry</span>
            </div>
            <p>Legaster is nisi aliquip consequat duis velit esse cillum dolore fugiat nulla pariatur
               excepteur sint occaecat. Lorem ipsum dolor sit amet consectetur adipisicing elit sed
               giusmod tempor incididuntu labore et dolore magna.
            </p>
            <ul class="b-about-list list-unstyled">
               <li class="b-about-list__item">
                  <i class="ic flaticon-car"></i>
                  <span class="b-about-list__inner">
                  <span class="b-about-list__title">Affordable Auto Prices</span>
                  <span class="b-about-list__info">Legaster is nisi aliquip consequat duis velit esse</span>
                  </span>
               </li>
               <li class="b-about-list__item">
                  <i class="ic flaticon-bag"></i>
                  <span class="b-about-list__inner">
                  <span class="b-about-list__title">10 Years in Business</span>
                  <span class="b-about-list__info">Legaster is nisi aliquip consequat duis velit esse</span>
                  </span>
               </li>
               <li class="b-about-list__item">
                  <i class="ic flaticon-handshake"></i>
                  <span class="b-about-list__inner">
                  <span class="b-about-list__title">Trusted by Auto Buyers</span>
                  <span class="b-about-list__info">Legaster is nisi aliquip consequat duis velit esse</span>
                  </span>
               </li>
            </ul>
         </div>
         <div class="col-md-12">
            <div class="block-repairs_stats">
               <ul>
                  <li>
                     <div class="block-repairs_stat">
                        <h2>6.2M</h2>
                        <span>Satisfy Customers</span>
                     </div>
                  </li>
                  <li>
                     <div class="block-repairs_stat">
                        <h2>3.5M</h2>
                        <span>Vehicles Repaired</span>
                     </div>
                  </li>
                  <li>
                     <div class="block-repairs_stat">
                        <h2>24/7</h2>
                        <span>Workshop Service</span>
                     </div>
                  </li>
                  <li>
                     <div class="block-repairs_stat">
                        <h2>99%</h2>
                        <span>In-Time Delivery</span>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div> -->
<!-- <div class="block-banner">
   <div class="row">
      <div class="col-md-6">
         <div class="block-banner_banner-1">
            <h2>Our mechenics
               are always<br> busy to repair & fix
            </h2>
            <p>Nisi aliquip duis velit  exceptur sint ocecat lorem ipsm eiusmod tempor velit
               cillum dolore eu fugiat nulla pariatur.  Lorem ipsum dolor sit amets consecte
               adipisicing elit sed do eiusmod tempor incididunt.
            </p>
            <ul>
               <li><i class="fa fa-check" aria-hidden="true"></i>Mobile workshop facility</li>
               <li><i class="fa fa-check" aria-hidden="true"></i>All autos support free insured</li>
               <li><i class="fa fa-check" aria-hidden="true"></i>Licensed and well-educated mechanics</li>
               <li><i class="fa fa-check" aria-hidden="true"></i>365 Days emergency repair service</li>
               <li><i class="fa fa-check" aria-hidden="true"></i>Complete autos repair summary</li>
            </ul>
         </div>
      </div>
      <div class="col-md-2 reset_padding">
         <div class="block-banner_banner-2">
            <div class="block-banner_icon">
               <a href="#">
                  <div class="glyph-icon flaticon-steering-wheel block-banner_banner-icon"></div>
               </a>
               <span>Auto Body Repair</span>
            </div>
         </div>
      </div>
      <div class="col-md-2 reset_padding">
         <div class="block-banner_banner-3">
            <div class="block-banner_icon">
               <a href="#">
                  <div class="glyph-icon flaticon-work block-banner_banner-icon"></div>
               </a>
               <span>Full Auto Service</span>
            </div>
         </div>
      </div>
      <div class="col-md-2 reset_padding">
         <div class="block-banner_banner-4">
            <div class="block-banner_icon">
               <a href="#">
                  <div class="glyph-icon flaticon-suspension block-banner_banner-icon"></div>
               </a>
               <span>Wheels & Tyres</span>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="help-block block_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="help-block_content">
               <h3>We Offer Full Range of Services in<br>
                  Case of Any Accident & Auto Body Repair
               </h3>
               <div class="decor"></div>
               <p>Legaster is nisi aliquip consequat duis velit esse cillum dolore fugiat nulla pariatur excepteur sint aecat orem ipsum dolor
                  sit amet consectetur adipisicing elit sed eiusmod tempor incididuntu labore dolore magna aliqua
               </p>
            </div>
         </div>
         <div class="col-md-2"></div>
         <div class="col-xs-12">
            <div class="help-block_banners">
               <div class="col-md-4">
                  <div class="help-block_banner">
                     <div class="glyph-icon flaticon-steering-wheel help-block_banner-icon"></div>
                     <h3>Largest Auto Workshop</h3>
                     <p>Carentar is nisi aliquip ex consequat duis
                        velit esse cillum dolore fugiat nulla pariatur
                        excepteur sint occaecat.
                     </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="help-block_banner">
                     <div class="glyph-icon flaticon-gearshift help-block_banner-icon"></div>
                     <h3>Repairs Everything</h3>
                     <p>Carentar is nisi aliquip ex consequat duis
                        velit esse cillum dolore fugiat nulla pariatur
                        excepteur sint occaecat.
                     </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="help-block_banner">
                     <div class="glyph-icon flaticon-work help-block_banner-icon"></div>
                     <h3>Multipoint Safety Checks</h3>
                     <p>Carentar is nisi aliquip ex consequat duis
                        velit esse cillum dolore fugiat nulla pariatur
                        excepteur sint occaecat.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12">
            <div class="help-block_buttons">
               <div class="col-md-2 arrow-left">
                  <img src="{{ asset('media/b-gallery/arr-l.png') }}"/>
               </div>
               <div class="col-md-8">
                  <div class="help-block_button">
                     <a href="#" class="btn button_help">
                     <span class="filter-disc-btn pull-left">Uncover Your Auto Potential With Legaster Auto Repair</span>
                     </a>
                  </div>
               </div>
               <div class="col-md-2 arrow-right">
                  <img src="{{ asset('media/b-gallery/arr-r.png') }}"/>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> -->
<div class="info-block block_padding">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="info-block_header">
               <h2>{{ __('header.types') }}  <span>{{ __('header.tire') }}</span></h2>
               <span>{{ __('header.tire_types') }}</span>
               <div class="decor"></div>
            </div>
         </div>
         <div class="col-xs-12">
            <div class="info-block_choose">
               <div class="col-md-3">
                  <div class="info-block_choose-item">
                      <img src="{{ asset('media/b-icons/truck.png') }}" width="200" height="200">
                     <span style="margin-top:10px;">TRUCKS</span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="info-block_choose-item">
                      <img src="{{ asset('media/b-icons/dump-truck.png') }}" width="200" height="200">
                     <span style="margin-top:10px;">DUMP TRUCKS</span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="info-block_choose-item">
                      <img src="{{ asset('media/b-icons/tractor.png') }}" width="200" height="200">
                     <span style="margin-top:10px;">TRACTORS</span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="info-block_choose-item">
                      <img src="{{ asset('media/b-icons/concrete-truck.png') }}" width="200" height="200">
                     <span style="margin-top:10px;">CONCRETE TRUCKS</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12">
            <div class="block_banners">
               <div class="col-md-4">
                  <a href="#" class="block_banner_link">
                     <div class="block_banner">
                        <div class="glyph-icon flaticon-suspension info-block_banner-icon"></div>
                        <div class="block-banner_content" style="text-align: justify;">
                           <h3>TBR (Truck & Bus Radial) / LTR (Light Truck Radial)</h3>
                           <span>{{ __('header.tbr') }}</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-4">
                  <a href="#" class="block_banner_link">
                     <div class="block_banner">
                        <div class="glyph-icon flaticon-suspension info-block_banner-icon"></div>
                        <div class="block-banner_content" style="text-align: justify;">
                           <h3>PCR (Passenger Car Radial)</h3>
                           <span>{{ __('header.pcr') }} </span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-4">
                  <a href="#" class="block_banner_link">
                     <div class="block_banner">
                        <div class="glyph-icon flaticon-suspension info-block_banner-icon"></div>
                        <div class="block-banner_content" style="text-align: justify;">
                           <h3>OTR (Off-The-Road)</h3>
                           <span>{{ __('header.otr') }}</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- <div class="recent-block block_padding">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="recent-block_header">
               <h2>Recent Auto <span>Projects</span></h2>
               <span>At workshop vehicle body repair & all related fixes</span>
               <div class="decor"></div>
            </div>
            <div class="recent-block_gallery">
               <div class="col-md-6">
                  <div class="col-md-12 gallery_item">
                     <img src="{{ asset('media/b-gallery/car_5.jpg') }}"/>
                  </div>
                  <div class="col-md-12 gallery_item">
                     <img src="{{ asset('media/b-gallery/1.jpg') }}"/>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="col-md-12 gallery_item">
                     <img src="{{ asset('media/b-gallery/bg-2.jpg') }}"/>
                  </div>
                  <div class="col-md-12 gallery_item">
                     <img src="{{ asset('media/b-gallery/2.jpg') }}"/>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12">
            <div class="recent-block_button">
               <a href="#">
               <i class="fa fa-arrow-right" aria-hidden="true"></i>
               <span>MORE PROJECTS</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div> -->
<!-- <div class="contact-block block_padding">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="contact-block_header">
               <span>Does your auto needs better repair experts?</span>
               <h2>HIGH-QUALITY & WELL TRAINED REPAIR CENTRES </h2>
            </div>
            <div class="contact-block_content">
               <div class="contact-block_number">
                  <p>Call us & Get Free Estimate <span>1.800.12345</span></p>
               </div>
               <div class="contact-block_button">
                  <button type="button" class="btn button_contact" title="number"/>
                  <span class="filter-disc-btn pull-left">Schedule Checkup</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> -->
<div class="block-repair-news block_padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="block-repair-news_header">
                    <h2>{{ __('newslist.read'); }} <span>{{ __('newslist.news'); }}</span></h2>
                    <div class="decor"></div>
                </div>
            </div>
            @foreach ($news as $new)
                <div class="col-xs-12 col-md-12">
                    <div class="block-repair-news_post">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('storage/thumbnail/' . $new->news_thumbnail) }}" width="150" height="150"/>
                            </div>
                            <div class="col-md-9">
                                <div class="block-repair-news_post_footer">
                                    <div class="post-autor">
                                        <div class="post_data">
                                            <span>{{ date('d F Y', strtotime($new->news_date)) }}</span>
                                        </div>
                                        <div class="autor">
                                            <span>{{ date('H:i:s', strtotime($new->news_date)) }}</span>
                                        </div>
                                        <div class="comments">
                                            <span>Veron</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="news-post_content">
                                    <h4><a href="{{ route('newslist.show', $new->news_id) }}" target="_blank">{{ $new->news_title }}</a></h4>
                                    <p>
                                        {{ substr(strip_tags($new->news_content), 0, 200).'......'     }}
                                        <a href="{{ route('newslist.show', $new->news_id) }}" target="_blank">{{ __('newslist.read_more'); }}</a>
                                    </p>
                                    <p>Tags :
                                        @php
                                            $tags = explode(",",$new->news_tag);
                                            foreach($tags as $tag){
                                        @endphp
                                                <span class="badge"><?= $tag ?></span>
                                        @php
                                            }
                                        @endphp
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="section-brands bg-gray">
   <div class="b-brands-slider owl-carousel owl-theme enable-owl-carousel"
      data-min480="2"
      data-min768="3"
      data-min992="6"
      data-min1200="6"
      data-pagination="false"
      data-navigation="false"
      data-auto-play="400000"
      data-stop-on-hover="true">
      <div class="b-brands-slider__item"><span class="b-brands-slider__inner"><img class="img-scale" src="{{ asset('media/product/superfleet.png') }}" alt="foto"></span></div>
      <div class="b-brands-slider__item"><span class="b-brands-slider__inner"><img class="img-scale" src="{{ asset('media/product/sailun.png') }}" alt="foto"></span></div>
      <div class="b-brands-slider__item"><span class="b-brands-slider__inner"><img class="img-scale" src="{{ asset('media/product/neolin.png') }}" alt="foto"></span></div>
      <div class="b-brands-slider__item"><span class="b-brands-slider__inner"><img class="img-scale" src="{{ asset('media/product/cemax.png') }}" alt="foto"></span></div>
      <div class="b-brands-slider__item"><span class="b-brands-slider__inner"><img class="img-scale" src="{{ asset('media/product/dynamaxx.png') }}" alt="foto"></span></div>
      <div class="b-brands-slider__item"><span class="b-brands-slider__inner"><img class="img-scale" src="{{ asset('media/product/ling_long.png') }}" alt="foto"></span></div>
   </div>
</div>
<div class="faq-block block_padding">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="ui-wrap-figure">
               <span class="ui-top-figure"></span>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12" style="margin-bottom:10px;">
               <div class="faq-block_header">
                  <center><h2>{{ __('home.our_header'); }} <span>{{ __('home.location_header'); }}</span></h2></center>
               </div>
            </div>
            <div class="col-xs-12">
                <div id="map" style="height: 75vh;"></div>
            </div>
         </div>
        </div>
    </div>
</div>
@include('inc.footer')
<script>
    const map = L.map('map').setView([-2.5, 118], 5);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    // Add static markers
    const locations = [
    { name: "Jakarta", lat: -6.151324258194178, lng: 106.76211918465744 },
    { name: "Surabaya", lat: -7.359135864960575 , lng: 112.77021222959155 },
    { name: "Lampung", lat: -5.407941863430887, lng: 105.30703477513798 },
    { name: "Palembang", lat: -2.9241356261952376, lng: 104.68738423046088 },
    { name: "Medan", lat: 3.6317703286370127, lng: 98.68188391534255 },
    { name: "Pekan Baru", lat: 0.5104495885464796, lng: 101.37782030959012 },
    { name: "Makasar", lat: -5.098597361062597, lng: 119.4885213558218 },
    { name: "Semarang", lat: -7.010513103245972, lng: 110.34239928986824 },
    { name: "Bandung", lat: -6.975513284560708, lng: 107.63670814220023 },
    { name: "Balikpapan", lat: -1.1575790103422974, lng: 116.85619389815051 }
    ];

    // Add markers
    locations.forEach(loc => {
        const marker = L.marker([loc.lat, loc.lng]).addTo(map);
        marker.bindPopup(`${loc.name}<br><a href="https://www.google.com/maps?q=${loc.lat},${loc.lng}" target="_blank">Open in Google Maps</a>`);

        // Optional: open Google Maps directly on marker click
        /*
        marker.on('click', () => {
        window.open(`https://www.google.com/maps?q=${loc.lat},${loc.lng}`, '_blank');
        });
        */
    });
</script>
