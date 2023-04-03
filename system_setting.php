<?php include 'include/header.php'; ?>

<?php include 'include/aside.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">System Setting</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">System Setting</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">System Setting</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="#" method="post" enctype="multipart/form-data" id="setting_form">
                            <div class="card-body">
                                <div class="alert alert-danger alert-dismissible show fade" id="error" style="display: none;">
                                    <button class="close" data-dismiss="alert">
                                        <span>×</span>
                                    </button>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="name" id="name" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Email <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" id="email" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Contact <span class="text-danger">*</span></label>
                                                    <input type="text" name="contact" id="contact" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Address <span class="text-danger">*</span></label>
                                                    <input type="text" name="address" id="address" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Cover Pic</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="hidden" name="old_cover" id="old_cover">
                                                    <input type="file" name="cover_pic" class="custom-file-input" id="cover_pic">
                                                    <label class="custom-file-label" for="cover_pic">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="" alt="" id="coverPic" class="img-fluid img-thumbnail">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" value="Update" class="btn btn-primary float-right" id="setting_btn">
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->




<?php include 'include/footer.php'; ?>