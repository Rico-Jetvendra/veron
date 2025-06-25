@include('pages.admin.inc.header', ['title' => 'Language', 'subtitle' => 'Add'])
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-body table-responsive-sm">
                <form action="{{ route('language.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_name">Language:</label>
                                <input type="text" class="form-control" name="product_name" placeholder="Enter Language" id="product_name">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_type">Type:</label>
                                <select name="product_type" id="product_type" class="form-control">
                                    <option value="1">Passenger</option>
                                    <option value="2">Radial</option>
                                    <option value="3">Offroad</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="product_code">Code:</label>
                                <input type="text" class="form-control" name="product_code" placeholder="Enter Language Code" id="product_code">
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
                                <textarea class="form-control" name="product_desc" placeholder="Enter Language Desc" id="product_desc" rows="5" style="resize: none;"></textarea>
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
