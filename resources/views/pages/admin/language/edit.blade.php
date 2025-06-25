@include('pages.admin.inc.header', ['title' => 'Language', 'subtitle' => 'Edit'])
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-body table-responsive-sm">
                <form action="{{ route('language.update',  $products->product_id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_name">Language:</label>
                                <input type="text" class="form-control" name="product_name" placeholder="Enter Language" id="product_name" value="{{ $products->product_name }}">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_type">Type:</label>
                                <select name="product_type" id="product_type" class="form-control">
                                    <option value="1" {{ $products->product_type == '1' ? 'selected': '' }}>Passenger</option>
                                    <option value="2" {{ $products->product_type == '2' ? 'selected': '' }}>Radial</option>
                                    <option value="3" {{ $products->product_type == '3' ? 'selected': '' }}>Offroad</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_code">Code:</label>
                                <input type="text" class="form-control" name="product_code" placeholder="Enter Language Code" id="product_code" value="{{ $products->product_code }}">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_photo">Photo:</label>
                                <input type="file" name="product_photo" class="form-control" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="product_desc">Description:</label>
                                <textarea class="form-control" name="product_desc" placeholder="Enter Language Desc" id="product_desc" rows="5" style="resize: none;">{{ $products->product_desc }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('language.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!-- ./wrapper -->

@include('pages.admin.inc.footer')
