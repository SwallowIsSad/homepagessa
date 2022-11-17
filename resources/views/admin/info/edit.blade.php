@include('admin.header')
@include('admin.sidebar')
<div class="content-wrapper" style="min-height: 464px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">정보공시 수정</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="/admin">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="/admin/info">정보공시</a>
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
                                check info
                            </h3>
                        </div>
                        <form action="/admin/info/edit" method="POST">
                            @csrf
                            <div class="card-body">
                                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card card-primary">
                                                <div class="card-body">
                                                    <input type="hidden" name="id" value="<?php echo $boardList['data']->id?>">
                                                    <div class="form-group">
                                                        <label for="inputName">제목</label>
                                                        <input type="text" name="title" id="inputName" class="form-control" value="<?php echo $boardList['data']->title?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputDescription">내용</label>
                                                        <textarea id="inputDescription" name="content" class="form-control" rows="4"><?php echo $boardList['data']->content?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputClientCompany">조회수</label>
                                                        <input type="text" name="hit" id="inputClientCompany" class="form-control" value="<?php echo $boardList['data']->hit?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputClientCompany">타입</label>
                                                        <input type="text" name="kind" id="inputClientCompany" class="form-control" value="<?php echo $boardList['data']->kind?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary">저장</button>
                                            <a href="/admin/info" class="btn btn-secondary float-right">취소</a>
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
</div>
@include('admin.footer')