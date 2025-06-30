@include('inc.header', ['title' => 'Contact'])

<div class="section-bg section-bg_dark section-bg_60 section-bg-08">
    <div class="bg-inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ui-block-title">
                        <ol class="breadcrumb">
                            <li><a href="/">{{ __('contact.home') }}</a></li>
                            <li class="active">{{ __('contact.contact') }}</li>
                        </ol>
                        <h1 class="ui-title-page">{{ __('contact.contact') }} {{ __('contact.us') }}</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="l-content">
    <div class="container">
        <section class="section-contacts">
            <h2 class="ui-title-block">{{ __('contact.header1') }} <span class="text-primary">{{ __('contact.you') }}</span></h2>
            <div class="ui-subtitle">{{ __('contact.header2') }}</div>
            <div class="ui-decor"></div>
        </section>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('contact.store') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">{{ __('contact.name') }}</label>
                                <input class="form-control" type="text" placeholder="ex: John Doe" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" placeholder="ex: example@example.com" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">{{ __('contact.phone') }}</label>
                                <input class="form-control" type="text" placeholder="ex: 081234567890" id="phone" name="phone" onchange="checkPhone(this.value)" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">{{ __('contact.message') }}</label>
                                <textarea class="form-control" placeholder="{{ __('contact.message') }}" id="message" name="message" required style="width:100%;height:200px;resize:none;"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="captcha">Captcha</label>
                                <input class="form-control" type="text" placeholder="Captcha" id="captcha" name="captcha" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label for=""></label>
                            <div class="row">
                                <div class="col-sm-10">
                                    <img src="{{ captcha_src() }}" alt="CAPTCHA">
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" onclick="refreshCaptcha()">↻</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-bdr-prim" value="send message">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div id="map" style="height: 75vh;"></div>

                <label>{{ __('contact.main_office') }}:</label> <br/>
                <label>Komp. Pergudangan Prima Centre 1 Blok. D29-30 Jl. Pesing Poglar No. 11</label><br/>
                <label>Telp. (021) 29518999 (hunting) </label> <br/>
                <label>Fax. (021) 29518991 </label> <br/>
                <label>Jakarta Barat 11710 Indonesia</label>
            </div>
        </div>
    </div>
</div>
@include('inc.footer')
<script>
    function checkPhone(val){
        var regex = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4,5})(?: *x(\d+))?\s*$/;
        match = regex.test(val);
        if(!match){
            $('#phone').val('');
        }
    }

    function refreshCaptcha() {
        fetch('/refresh-captcha')
            .then(res => res.json())
            .then(data => {
                document.querySelector('img[alt="CAPTCHA"]').src = data.captcha;
            });
    }

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
