@include('pages.admin.inc.header', ['title' => 'User', 'subtitle' => ''])

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row card">
            <div class="card-header">
                <a href="{{ route('user.create') }}" class="btn btn-success" title="Add New"><i class="fas fa-plus"></i></a>
            </div>
            <div class="card-body table-responsive-sm">
                <table id="myTable" class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($users as $user){
                        ?>
                            <tr>
                                <td><?= $user->username ?></td>
                                <td>
                                    <a href="{{ route('user.edit', ['user' => $user->user_id]) }}" class="btn btn-warning" title="Edit"><i class="fas fa-edit" style="color:white;"></i></a>
                                    <button type="button" class="btn btn-danger" title="Delete" onclick="openDeleteModal('{{ $user->user_id }}', '{{ $user->username }}')"><i class="fas fa-trash"></i></button>
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
            <h4 class="modal-title">Delete User</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <input type="hidden" name="user_id" id="user_id" value="">
            Are you sure to delete <span id="deleteRecord"> </span>?
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="deleteUser()">Delete</button>
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

  function openDeleteModal(id, user){
    $('#user_id').val(id);
    $('#deleteRecord').html(user);
    $('#myModal').modal('show');
  }

  function deleteUser(){
    var id = $('#user_id').val();

    $.ajax({
        url: 'veron/user/'+id,
        method: 'DELETE',
        cache: false,
        data: { _token: "{{ csrf_token() }}" },
        success: function(response) {
            console.log('Data received:', response);
            window.location.replace("{{ route('user.index') }}");
        },
        error: function(xhr, status, error) {
            console.error('AJAX error:', status, error);
            // Handle the error appropriately
        }
    });

    $('#myModal').modal('hide');
  }
</script>
