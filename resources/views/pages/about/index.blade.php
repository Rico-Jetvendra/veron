@include('inc.header', ['title' => 'About'])

<div class="section-bg section-bg_dark section-bg_60 section-bg-08">
    <div class="bg-inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ui-block-title">
                        <ol class="breadcrumb">
                            <li><a href="/">{{ __('about.bread1') }}</a></li>
                            <li class="active">{{ __('about.bread2') }}</li>
                        </ol>
                        <h1 class="ui-title-page">{{ __('about.bread3') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="l-content">
    <div class="container">
        <div class="block-repairs_header" style="text-align: justify;">
            <h2>{{ __('about.about') }} <span>{{ __('about.us') }}</span></h2>
            <ul>
                <li>
                    <span>{{ __('about.about1') }}</span>
                </li>
                <li>
                    <span>{{ __('about.about2') }}</span>
                </li>
                <li>
                    <span>{{ __('about.about3') }}<span>
                </li>
                <li>
                    <span>{{ __('about.about4') }}<span>
                </li>
                <li>
                    <span>{{ __('about.about5') }}</span>
                </li>
                <li>
                    <span>{{ __('about.about6') }}</span>
                </li>
                <li>
                    <span>{{ __('about.about7') }}</span>
                </li>
                <li>
                    <span>{{ __('about.about8') }}</span>
                </li>
            </ul>
            <h2>{{ __('about.vision') }} & <span>{{ __('about.mission') }}</span></h2>
            <label><h3>{{ __('about.vision') }}</h3></label>
            <ul>
                <li>
                    <span>{{ __('about.vision1') }}</span>
                </li>
                <li>
                    <span>{{ __('about.vision2') }}</span>
                </li>
            </ul>
            <label><h3>{{ __('about.mission') }}</h3></label>
            <ul>
                <li>
                    <span>{{ __('about.mission1') }}</span>
                </li>
                <li>
                    <span>{{ __('about.mission2') }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@include('inc.footer')
