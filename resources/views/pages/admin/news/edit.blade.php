@include('pages.admin.inc.header', ['title' => 'News', 'subtitle' => 'Add'])
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-body table-responsive-sm">
                <form action="{{ route('news.update',  $news->news_id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="news_title">Title:</label>
                                <input type="text" class="form-control" name="news_title" placeholder="Enter News Title" id="news_title" value="{{ $news->news_title }}">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="news_thumbnail">Thumbnail:</label>
                                <input type="file" name="news_thumbnail" id="news_thumbnail" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="news_tag">Tag:</label>
                                <input type="text" class="form-control" name="news_tag" placeholder="Enter News Code" id="news_tag" data-role="tagsinput" value="{{ $news->news_tag }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="news_content">Content</label>
                                <textarea id="news_content" name="news_content" class="form-control">
                                     {{ $news->news_content }}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('news.index') }}" class="btn btn-danger">Cancel</a>
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
<script>
    $(document).ready(function() {
        $('#news_tag').tagsinput({
            trimValue: true,
            confirmKeys: [13, 44]
        });

        $('#news_content').summernote({
            height: 300, // Set editor height
            toolbar: [
                // Customize your toolbar
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
