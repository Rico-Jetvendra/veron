@include('inc.header', ['title' => 'News'])
<div class="section-bg section-bg_dark section-bg_60 section-bg-08">
    <div class="bg-inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ui-block-title">
                        <ol class="breadcrumb">
                            <li><a href="/">{{ __('newslist.bread1'); }}</a></li>
                            <li class="active">{{ __('newslist.bread2'); }}</li>
                        </ol>
                        <h1 class="ui-title-page">{{ __('newslist.bread3'); }}</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
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
                            <div class="col-md-4">
                                <img src="{{ asset('storage/thumbnail/' . $new->news_thumbnail) }}" style="object-fit: contain;"/>
                            </div>
                            <div class="col-md-8">
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
            <div class="col-xs-12 col-md-12">
                <!-- Pagination links -->
                <div class="mt-4 mx-auto">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@include('inc.footer')
