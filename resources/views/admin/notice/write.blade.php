@include('admin.header')
@include('admin.sidebar')
<div class="content-wrapper" style="min-height: 464px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">공지사항 작성</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="/admin">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="/admin/notice">공지사항</a>
                        </li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                check notice
                            </h3>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="/admin/notice/add" method="POST">
                            @csrf
                            <div class="card-body">
                                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card card-primary">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="inputName">제목</label>
                                                        <input type="text" name="title" id="inputName" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputDescription">내용</label>
                                                        <textarea id="inputDescription" name="content" class="form-control" rows="4"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputClientCompany">조회수</label>
                                                        <input type="text" name="hit" id="inputClientCompany" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputClientCompany">타입</label>
                                                        <input type="text" name="kind" id="inputClientCompany" class="form-control" value="0">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">File input</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="boardfile[]" class="custom-file-input" id="exampleInputFile" multiple>
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="preview" style="width:100%; height:100px; display:none"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary">작성</button>
                                            <a href="/admin/notice" class="btn btn-secondary float-right">취소</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <script>
        $(function () {
            function readURL(input) {
                for(i = 0; i < input.files.length; i++)
                {
                    // input.files[i]
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        console.log(e)
                        vimg = $('<img>', {
                            'src' : e.target.result,
                            'width' : '100px',
                            'height' : '100px'
                        });
                        $(".preview").show();
                        $(".preview").append(vimg);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
               
            }

            $("#exampleInputFile").change(function() {
                readURL(this);
            });
        })
    </script>
</div>
@include('admin.footer')