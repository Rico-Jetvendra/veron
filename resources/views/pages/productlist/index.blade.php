@include('inc.header', ['title' => 'Product'])
<div class="section-bg section-bg_dark section-bg_60 section-bg-08">
   <div class="bg-inner">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="ui-block-title">
                  <ol class="breadcrumb">
                     <li><a href="/">{{ __('product.bread1'); }}</a></li>
                     <li class="active">{{ __('product.bread2'); }}</li>
                  </ol>
                  <h1 class="ui-title-page">{{ __('product.bread3'); }}</h1>
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
            @php
                $productType = request()->route('productlist');
                $type = '';

                switch($productType){
                    case(1):
                        $type = 'Sailun';
                    break;
                    case(2):
                        $type ='Neolin';
                    break;
                    case(3):
                        $type = 'Superfleet';
                    break;
                    case(4):
                        $type = 'Dynamaxx';
                    break;
                    case(5):
                        $type = 'Cemax';
                    break;
                }
            @endphp
            {{ $type }}
        </h2>
        <div class="panel-group" id="accordion">
            @if(count($tbr) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">TBR / LTR</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body row">
                            @foreach($tbr as $pr)
                                <div class="col-md-4 card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{ asset('storage/uploads/' . $pr->product_photo) }}" title="{{ $pr->product_name }}" width="100px" height="150px" style="object-fit: contain;">
                                        </div>
                                        <div class="col-md-6">
                                            <label>{{ $pr->product_code }} ({{ $pr->product_size }}mm)</label><br/>
                                            {{ $pr->product_name }}
                                            <hr style="padding:0px;margin:10px 0px;"/>
                                            <table>
                                                <tr>
                                                    <td>Tread Depth</td>
                                                    <td style="padding:0px 5px;">:</td>
                                                    <td>{{ $pr->product_tread_depth }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Road Cond.</td>
                                                    <td style="padding:0px 5px;">:</td>
                                                    <td>{{ $pr->product_road_condition }}</td>
                                                </tr>
                                            </table>
                                            {{ $pr->product_desc }}<br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            @if(count($pcr) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">PCR</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse in">
                        <div class="panel-body row">
                            @foreach($pcr as $pr)
                                <div class="col-md-4 card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{ asset('storage/uploads/' . $pr->product_photo) }}" title="{{ $pr->product_name }}" width="100px" height="150px" style="object-fit: contain;">
                                        </div>
                                        <div class="col-md-6">
                                            <label>{{ $pr->product_code }} ({{ $pr->product_size }}mm)</label><br/>
                                            {{ $pr->product_name }}
                                            <hr style="padding:0px;margin:10px 0px;"/>
                                            <table>
                                                <tr>
                                                    <td>Tread Depth</td>
                                                    <td style="padding:0px 5px;">:</td>
                                                    <td>{{ $pr->product_tread_depth }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Road Cond.</td>
                                                    <td style="padding:0px 5px;">:</td>
                                                    <td>{{ $pr->product_road_condition }}</td>
                                                </tr>
                                            </table>
                                            {{ $pr->product_desc }}<br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            @if(count($otr) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">OTR</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse in">
                        <div class="panel-body row">
                            @foreach($otr as $pr)
                                <div class="col-md-4 card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{ asset('storage/uploads/' . $pr->product_photo) }}" title="{{ $pr->product_name }}" width="100px" height="150px" style="object-fit: contain;">
                                        </div>
                                        <div class="col-md-6">
                                            <label>{{ $pr->product_code }} ({{ $pr->product_size }}mm)</label><br/>
                                            {{ $pr->product_name }}
                                            <hr style="padding:0px;margin:10px 0px;"/>
                                            <table>
                                                <tr>
                                                    <td>Tread Depth</td>
                                                    <td style="padding:0px 5px;">:</td>
                                                    <td>{{ $pr->product_tread_depth }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Road Cond.</td>
                                                    <td style="padding:0px 5px;">:</td>
                                                    <td>{{ $pr->product_road_condition }}</td>
                                                </tr>
                                            </table>
                                            {{ $pr->product_desc }}<br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            @if(count($oth) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">OTHER</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse in">
                        <div class="panel-body row">
                            @foreach($oth as $pr)
                                <div class="col-md-4 card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{ asset('storage/uploads/' . $pr->product_photo) }}" title="{{ $pr->product_name }}" width="100px" height="150px" style="object-fit: contain;">
                                        </div>
                                        <div class="col-md-6">
                                            <label>{{ $pr->product_code }} ({{ $pr->product_size }}mm)</label><br/>
                                            {{ $pr->product_name }}
                                            <hr style="padding:0px;margin:10px 0px;"/>
                                            <table>
                                                <tr>
                                                    <td>Tread Depth</td>
                                                    <td style="padding:0px 5px;">:</td>
                                                    <td>{{ $pr->product_tread_depth }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Road Cond.</td>
                                                    <td style="padding:0px 5px;">:</td>
                                                    <td>{{ $pr->product_road_condition }}</td>
                                                </tr>
                                            </table>
                                            {{ $pr->product_desc }}<br/>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
      </div>
   </div>
</div>
@include('inc.footer')
