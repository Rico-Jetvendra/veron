@include('inc.header', ['title' => 'Contact'])

<div class="section-bg section-bg_dark section-bg_60 section-bg-08">
    <div class="bg-inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ui-block-title">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Contact</li>
                        </ol>
                        <h1 class="ui-title-page">CONTACT US</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="l-content">
    <div class="container">
        <section class="section-contacts">
            <h2 class="ui-title-block">Always ready to help <span class="text-primary">you</span></h2>
            <div class="ui-subtitle">If you have any question or need further information, please do not hesitate to contact us. Our professional marketing team will be glad to assist you.</div>
            <div class="ui-decor"></div>
        </section>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('contact.store') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Name</label>
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
                                <label for="phone">Phone</label>
                                <input class="form-control" type="text" placeholder="ex: 081234567890" id="phone" name="phone" onchange="checkPhone(this.value)" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" placeholder="Message" id="message" name="message" required style="width:100%;height:200px;resize:none;"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="captcha">Captcha</label>
                                <input class="form-control" type="text" placeholder="Captcha" id="captcha" name="captcha" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for=""></label>
                            <div class=" row">
                                <div class="col-sm-9">
                                    <img src="{{ captcha_src() }}" alt="CAPTCHA">
                                </div>
                                <div class="col-sm-3">
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
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8446964132722!2d106.75958717453021!3d-6.151548260296151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f63349955553%3A0xd12c8f02933341f2!2sPT.%20Veron%20Indonesia!5e0!3m2!1sen!2sid!4v1747794808564!5m2!1sen!2sid" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

                <label>Main Office:</label> <br/>
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
