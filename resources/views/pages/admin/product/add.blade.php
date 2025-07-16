@include('pages.admin.inc.header', ['title' => 'Product', 'subtitle' => 'Add'])
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-body table-responsive-sm">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_name">Name:</label>
                                <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name" id="product_name">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_code">Code:</label>
                                <input type="text" class="form-control" name="product_code" placeholder="Enter Product Code" id="product_code">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_brand">Brand:</label>
                                <select name="product_brand" id="product_brand" class="form-control">
                                    <option value="1">Sailun</option>
                                    <option value="2">Neolin</option>
                                    <option value="3">Superfleet</option>
                                    <option value="4">Dynamaxx</option>
                                    <option value="5">Cemax</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_type">Type:</label>
                                <select name="product_type" id="product_type" class="form-control">
                                    <option value="">----- Select Product Type -----</option>
                                    <option value="1">TBR / LTR</option>
                                    <option value="2">PCR</option>
                                    <option value="3">OTR</option>
                                    <option value="4">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_size">Size:</label>
                                <input type="number" class="form-control" name="product_size" placeholder="Enter Product Size" id="product_size">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_tread_depth">Tread Depth:</label>
                                <input type="text" class="form-control" name="product_tread_depth" placeholder="Enter Product Tread Depth" id="product_tread_depth">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_road_condition">Road Condition:</label>
                                <input type="text" class="form-control" name="product_road_condition" placeholder="Enter Product Road Condition" id="product_road_condition">
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
                                <textarea class="form-control" name="product_desc" placeholder="Enter Product Desc" id="product_desc" rows="5" style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('product.index') }}" class="btn btn-danger">Cancel</a>
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
