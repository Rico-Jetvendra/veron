@include('pages.admin.inc.header', ['title' => 'News', 'subtitle' => ''])

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row card">
            <div class="card-header">
                <a href="{{ route('news.create') }}" class="btn btn-success" title="Add New"><i class="fas fa-plus"></i></a>
            </div>
            <div class="card-body table-responsive-sm">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Title</th>
                            <th>Tag</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($news as $new){
                        ?>
                            <tr>
                                <td><?= $new->news_title ?></td>
                                <td><?= $new->news_tag ?></td>
                                <td><?= $new->news_date ?></td>
                                <td>
                                    <a href="{{ route('news.edit', ['news' => $new->news_id]) }}" class="btn btn-warning" title="Edit"><i class="fas fa-edit" style="color:white;"></i></a>
                                    <button type="button" class="btn btn-danger" title="Delete" onclick="openDeleteModal('{{ $new->news_id }}', '{{ $new->news_title }}')"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!-- ./wrapper -->

<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Delete News</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <input type="hidden" name="product_id" id="product_id" value="">
            Are you sure to delete <span id="deleteRecord"> </span>?
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="deleteProduct()">Delete</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>

      </div>
    </div>
  </div>

@include('pages.admin.inc.footer')
<script>
  $(function () {
    $('#myTable').DataTable({
      "responsive": true,
    });
  });

  function openDeleteModal(id, news){
    $('#product_id').val(id);
    $('#deleteRecord').html(news);
    $('#myModal').modal('show');
  }

  function deleteProduct(){
    var id = $('#product_id').val();

    $.ajax({
        url: 'veron/news/'+id,
        method: 'DELETE',
        cache: false,
        data: { _token: "{{ csrf_token() }}" },
        success: function(response) {
            console.log('Data received:', response);
            window.location.replace("{{ route('news.index') }}");
        },
        error: function(xhr, status, error) {
            console.error('AJAX error:', status, error);
            // Handle the error appropriately
        }
    });

    $('#myModal').modal('hide');
  }
</script>
