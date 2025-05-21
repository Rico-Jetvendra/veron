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
            <div class="col-md-8">
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
            <div class="col-md-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8446964132722!2d106.75958717453021!3d-6.151548260296151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f63349955553%3A0xd12c8f02933341f2!2sPT.%20Veron%20Indonesia!5e0!3m2!1sen!2sid!4v1747794808564!5m2!1sen!2sid" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
</script>
