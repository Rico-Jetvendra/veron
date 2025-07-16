@include('inc.header', ['title' => 'News'])

<div class="block-repair-news block_padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="block-repair-news_header">
                    <h2>{{ $news->news_title }}</h2>
                    <span>{{ date('d F Y H:i:s', strtotime($news->news_date)) }}</span>
                    <div class="decor"></div>
                </div>
            </div>

            <div class="col-xs-12 col-md-12">
                <div class="block-repair-news_post">
                    <img src="{{ asset('storage/thumbnail/' . $news->news_thumbnail) }}"/><br/>
                    {!! $news->news_content !!}<br/>
                    <b>Tags</b> :
                    <?php
                       $tags = explode(",",$news->news_tag);
                       foreach($tags as $tag){
                    ?>
                        <span class="badge"><?= $tag ?></span>
                    <?php
                       }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

@include('inc.footer')
