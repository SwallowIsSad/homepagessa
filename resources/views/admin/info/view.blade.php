@include('admin.header')
@include('admin.sidebar')
<div class="content-wrapper" style="min-height: 464px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">정보공시 상세</h1>
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
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row" style="margin-bottom:20px">
                                    <div class="col-sm-12">
                                        <div>
                                            제목 <?php echo $boardList['data']->title?>
                                        </div>
                                        <div>
                                            작성일 <?php echo $boardList['data']->created_at?>
                                        </div>
                                        <div>
                                            조회수 <?php echo $boardList['data']->hit?>
                                        </div>
                                        <div>
                                            내용 <?php echo $boardList['data']->content?>
                                        </div>
                                        <div>
                                            타입 <?php echo $boardList['data']->kind?>
                                        </div>
                                        <div>
                                            첨부 파일
                                            <br>
                                            <?php
                                                foreach($boardList['data']->files as $file):
                                            ?>
                                                <img src="{{ Storage::url($file->savename) }}" alt="" style="max-width:100%">                                                
                                            <?php
                                                endforeach;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a href="/admin/info/edit/<?php echo $boardList['data']->id?>" class="btn btn-primary">수정</a>
                                        <form action="/admin/info/delete/<?php echo $boardList['data']->id?>" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger float-right" title="Delete">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="text-align:center">
                        <div class="col-12">
                            <?php if($boardList['prev'] != null):?>
                                <a href="/admin/info/view/<?php echo $boardList['prev']?>" class="btn btn-secondary">이전</a>
                            <?php endif;?>
                            <a href="/admin/info" class="btn btn-secondary">목록</a>
                            <?php if($boardList['next'] != null):?>
                                <a href="/admin/info/view/<?php echo $boardList['next']?>" class="btn btn-secondary">다음</a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@include('admin.footer')