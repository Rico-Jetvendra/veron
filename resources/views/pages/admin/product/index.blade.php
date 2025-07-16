@include('pages.admin.inc.header', ['title' => 'Product', 'subtitle' => ''])

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row card">
            <div class="card-header">
                <a href="{{ route('product.create') }}" class="btn btn-success" title="Add New"><i class="fas fa-plus"></i></a>
            </div>
            <div class="card-body table-responsive-sm">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Code</th>
                            <th>Product</th>
                            <th>Type</th>
                            <th>Brand</th>
                            <th>Size</th>
                            <th>Tread Depth</th>
                            <th>Road Condition</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($products as $product){
                        ?>
                            <tr>
                                <td><?= $product->product_code ?></td>
                                <td><?= $product->product_name ?></td>
                                <td>
                                    <?php
                                        switch ($product->product_type) {
                                            case '1':
                                                echo 'TBR / LTR';
                                                break;
                                            case '2':
                                                echo 'PCR';
                                                break;
                                            case '3':
                                                echo 'OTR';
                                                break;
                                        }

                                    ?>
                                </td>
                                <td>
                                    <?php
                                        switch ($product->product_brand) {
                                            case '1':
                                                echo 'Sailun';
                                                break;
                                            case '2':
                                                echo 'Neolin';
                                                break;
                                            case '3':
                                                echo 'Superfleet';
                                                break;
                                            case '4':
                                                echo 'Dynamaxx';
                                                break;
                                            case '5':
                                                echo 'Cemax';
                                                break;
                                        }

                                    ?>
                                </td>
                                <td><?= $product->product_size ?>mm</td>
                                <td><?= $product->product_tread_depth ?></td>
                                <td><?= $product->product_road_condition ?></td>
                                <td>
                                    <a href="{{ route('product.edit', ['product' => $product->product_id]) }}" class="btn btn-warning" title="Edit"><i class="fas fa-edit" style="color:white;"></i></a>
                                    <button type="button" class="btn btn-danger" title="Delete" onclick="openDeleteModal('{{ $product->product_id }}', '{{ $product->product_name }}')"><i class="fas fa-trash"></i></button>
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
            <h4 class="modal-title">Delete Product</h4>
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

  function openDeleteModal(id, product){
    $('#product_id').val(id);
    $('#deleteRecord').html(product);
    $('#myModal').modal('show');
  }

  function deleteProduct(){
    var id = $('#product_id').val();

    $.ajax({
        url: 'veron/product/'+id,
        method: 'DELETE',
        cache: false,
        data: { _token: "{{ csrf_token() }}" },
        success: function(response) {
            console.log('Data received:', response);
            window.location.replace("{{ route('product.index') }}");
        },
        error: function(xhr, status, error) {
            console.error('AJAX error:', status, error);
            // Handle the error appropriately
        }
    });

    $('#myModal').modal('hide');
  }
</script>
