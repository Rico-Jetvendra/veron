@include('pages.admin.inc.header', ['title' => 'User', 'subtitle' => 'Add'])
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-body table-responsive-sm">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter Username" id="username">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" name="pwd" placeholder="Enter password" id="pwd">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
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
