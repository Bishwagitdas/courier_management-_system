<?php include 'include/header.php'; ?>

<?php include 'include/aside.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Branch List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Branch List</li>
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
                            <h3 class="card-title">Branch List</h3>
                            <a href="#" class="btn btn-outline-info float-right" data-toggle="modal" data-target="#add_branch_modal"><i class="fa fa-plus-circle"></i>&nbsp;Add New</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="branch_list_table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Branch Code</th>
                                        <th>Street/Building</th>
                                        <th>City/State/Zip</th>
                                        <th>Country</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="branch_list_body">

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Branch Code</th>
                                        <th>Street/Building</th>
                                        <th>City/State/Zip</th>
                                        <th>Country</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
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

<!-- Add Branch List Modal -->
<div class="modal fade" id="add_branch_modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Branch</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="add_branch_form">
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible show fade" id="error" style="display: none;">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Street/Building <span class="text-danger">*</span></label>
                                <input type="text" name="street" class="form-control" placeholder="46/6 B">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>City <span class="text-danger">*</span></label>
                                <input type="text" name="city" class="form-control" placeholder="Dhaka">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>State <span class="text-danger">*</span></label>
                                <input type="text" name="state" class="form-control" placeholder="Dhaka">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Zip Code <span class="text-danger">*</span></label>
                                <input type="number" name="zip_code" class="form-control" placeholder="1229">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Country <span class="text-danger">*</span></label>
                                <input type="text" name="country" class="form-control" placeholder="Bangladesh">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Contact Number <span class="text-danger">*</span></label>
                                <input type="number" name="contact" class="form-control" placeholder="+88017********">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    <input type="submit" name="submit" value="Add Branch" id="add_branch_btn" class="btn btn-primary">
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Add Branch list modal -->

<!-- Edit Branch List Modal -->
<div class="modal fade" id="edit_branch_modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Branch</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="edit_branch_form">
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible show fade" id="error" style="display: none;">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                    </div>
                    <input type="hidden" name="branch_id" id="branch_id">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Street/Building <span class="text-danger">*</span></label>
                                <input type="text" name="street" id="street" class="form-control" placeholder="46/6 B">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>City <span class="text-danger">*</span></label>
                                <input type="text" name="city" id="city" class="form-control" placeholder="Dhaka">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>State <span class="text-danger">*</span></label>
                                <input type="text" name="state" id="state" class="form-control" placeholder="Dhaka">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Zip Code <span class="text-danger">*</span></label>
                                <input type="number" name="zip_code" id="zip_code" class="form-control" placeholder="1209">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Country <span class="text-danger">*</span></label>
                                <input type="text" name="country" id="country" class="form-control" placeholder="Bangladesh">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Contact Number <span class="text-danger">*</span></label>
                                <input type="text" name="contact" id="contact" class="form-control" placeholder="+88015********">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    <input type="submit" name="submit" value="Update Branch" id="edit_branch_btn" class="btn btn-primary">
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Edit Branch list modal -->



<?php include 'include/footer.php'; ?>