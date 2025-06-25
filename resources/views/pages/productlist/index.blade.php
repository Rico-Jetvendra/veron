@include('inc.header', ['title' => 'Contact'])
<div class="section-bg section-bg_dark section-bg_60 section-bg-08">
    <div class="bg-inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ui-block-title">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Tire List</li>
                        </ol>
                        <h1 class="ui-title-page">Tires Listing</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="l-content">
    <div class="container">
        <div class="block-repairs_header row">
            <h2>
                @switch($product[0]->product_type)
                    @case(1)
                        <h2>Passenger</h2>
                    @break
                    @case(2)
                        <h2>Radial</h2>
                    @break
                    @case(3)
                        <h2>Offroad</h2>
                    @break
                @endswitch
            </h2>
            <?php foreach($product as $pr){ ?>
                <div class="col-md-4 card">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('storage/uploads/' . $pr->product_photo) }}" title="{{ $pr->product_name }} - {{ $pr->product_brand }}" width="150px" height="150px">
                        </div>
                        <div class="col-md-6">
                            <label>{{ $pr->product_code }} ({{ $pr->product_size }}mm)</label><br/>
                            {{ $pr->product_name }} - {{ $pr->product_brand }}
                            <hr style="padding:0px;margin:10px 0px;"/>
                            <table>
                                <tr>
                                    <td>Tread Depth</td>
                                    <td style="padding:0px 5px;">:</td>
                                    <td>{{ $pr->product_tread_depth }}</td>
                                </tr>
                                <tr>
                                    <td>Road Condition</td>
                                    <td style="padding:0px 5px;">:</td>
                                    <td>{{ $pr->product_road_condition }}</td>
                                </tr>
                            </table>
                            {{ $pr->product_desc }}<br/>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
@include('inc.footer')
