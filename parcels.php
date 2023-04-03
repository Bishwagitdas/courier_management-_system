<?php include 'include/header.php'; ?>

<?php include 'include/aside.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Parcels List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Parcels List</li>
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
                            <h3 class="card-title">Parcels List</h3>
                            <a href="#" class="btn btn-outline-info float-right" data-toggle="modal" data-target="#add_parcels_modal"><i class="fa fa-plus-circle"></i>&nbsp;Add New</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="parcel_list_table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Reference Number</th>
                                        <th>Sender Name</th>
                                        <th>Recipient Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="parcel_list_body">

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Reference Number</th>
                                        <th>Sender Name</th>
                                        <th>Recipient Name</th>
                                        <th>Status</th>
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

<!-- Add Parcel List Modal -->
<div class="modal fade" id="add_parcels_modal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Parcel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post" id="add_parcel_form">
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible show fade" id="error" style="display: none;">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="card card-success card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Sender Information</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" name="sender_name" class="form-control" placeholder="John Doe" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input type="text" name="sender_address" class="form-control" placeholder="46/6 B" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Contact <span class="text-danger">*</span></label>
                                        <input type="text" name="sender_contact" class="form-control" placeholder="+8801569****" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-danger card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Recipient Information</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" name="recipient_name" class="form-control" placeholder="John Doe" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input type="text" name="recipient_address" class="form-control" placeholder="46/6 B" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Contact <span class="text-danger">*</span></label>
                                        <input type="text" name="recipient_contact" class="form-control" placeholder="+8801569****" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Pickup/Deliver Information</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="dtype">Type</label>
                                                <input type="checkbox" name="type" id="dtype" data-bootstrap-switch data-toggle="toggle" data-on="Deliver" data-off="Pickup" class="switch-toggle status_chk" data-size="xs" data-offstyle="info" data-width="5rem" value="1">
                                                <small>Deliver = Deliver to Recipient Address</small>
                                                <small>, Pickup = Pickup to nearest Branch</small>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Branch Processed<span class="text-danger">*</span></label>
                                                <select class="form-control select2" style="width: 100%;" name="from_branch_id" required>
                                                    <option selected="selected" value="" disabled>Select Branch....</option>
                                                    <?php foreach ($branch as $value) : ?>
                                                        <option value="<?= $value['id'] ?>"><?= $value['branch_code'] ?> | <?php echo $value['street'] . ', ' . $value['city'] . ' - ' . $value['zip_code'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group" id="pickup_field">
                                                <label>Pickup Branch<span class="text-danger">*</span></label>
                                                <select class="form-control select2" style="width: 100%;" name="to_branch_id" required>
                                                    <option selected="selected" value="" disabled>Select Branch....</option>
                                                    <?php foreach ($branch as $value) : ?>
                                                        <option value="<?= $value['id'] ?>"><?= $value['branch_code'] ?> | <?php echo $value['street'] . ', ' . $value['city'] . ' - ' . $value['zip_code'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Parcel Information</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="20%">Weight</th>
                                                <th width="20%">Height</th>
                                                <th width="20%">Length</th>
                                                <th width="15%">Width</th>
                                                <th width="15%">Price</th>
                                                <th width="10%"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="dynamically_add">
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="weight[]" class="form-control" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="height[]" class="form-control" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="length[]" class="form-control" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="width[]" class="form-control" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="price[]" class="form-control price" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success btn-sm" id="add_field"><i class="fa fa-plus"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <div class="float-right mr-4">
                                        <strong class="font-weight-bold h4">Total:-</strong>
                                        <strong class="font-weight-bold h4" id="total"></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    <input type="submit" value="Add Parcel" name="submit" id="add_parcel_btn" class="btn btn-primary">
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Add Parcel list modal -->

<!-- View Parcel Modal -->
<div class="modal fade" id="view_parcel_modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Parcel Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i> Reference Number: <strong class="ml-2" id="reference_number">4728625569</strong></h5>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="callout callout-success">
                            <h5>Sender Information</h5>

                            <p><strong>Sender Name: </strong><span id="sender_name"></span></p>
                            <p><strong>Sender Contact: </strong><span id="sender_contact"></span></p>
                            <p><strong>Sender Address: </strong><span id="sender_address"></span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="callout callout-info">
                            <h5>Recipient Information</h5>

                            <p><strong>Recipient Name: </strong><span id="recipient_name"></span></p>
                            <p><strong>Recipient Contact: </strong><span id="recipient_contact"></span></p>
                            <p><strong>Recipient Address: </strong><span id="recipient_address"></span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="callout callout-danger">
                            <h5>Pickup/Delivery Information</h5>

                            <p><strong>Type: </strong><span id="type"></span></p>
                            <p><strong>From Branch: </strong><span id="from_branch"></span></p>
                            <p><strong>To Branch: </strong><span id="to_branch"></span></p>
                            <p><strong>Status: </strong><span id="status"></span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="callout callout-warning">
                            <h5>Parcel Information</h5>

                            <p><strong>Weight: </strong><span id="weight"></span></p>
                            <p><strong>Height: </strong><span id="height"></span></p>
                            <p><strong>Length: </strong><span id="length"></span></p>
                            <p><strong>Width: </strong><span id="width"></span></p>
                            <p><strong>Price: </strong><span id="price"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- View Parcel Modal -->

<!-- Edit Status Modal -->
<div class="modal fade" id="UpdateStatusModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Status</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post" id="update_status_form">
                <div class="modal-body">
                    <input type="hidden" name="id" id="UpdateStatusid" value="">
                    <div class="form-group">
                        <label for="">Update Status</label>
                        <?php $status_arr = array("Item Accepted by Courier", "Collected", "Shipped", "In-Transit", "Arrived At Destination", "Out for Delivery", "Ready to Pickup", "Delivered", "Picked-up", "Unsuccessfull Delivery Attempt"); ?>
                        <select name="status" id="UpdateStatus" class="custom-select custom-select-sm">
                            <?php foreach ($status_arr as $k => $v) : ?>
                                <option value="<?= $k ?>"><?= $v; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    <input type="submit" value="Update" name="updateStatus" id="update_status_btn" class="btn btn-primary">
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- Edit Status Modal -->

<!-- Edit Parcel List Modal -->
<div class="modal fade" id="edit_parcel_modal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Parcel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post" id="edit_parcel_form">
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible show fade" id="error" style="display: none;">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="card card-success card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Sender Information</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="hidden" name="edit_id" id="edit_id">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" name="sender_name" class="form-control" id="edit_sender_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input type="text" name="sender_address" class="form-control" id="edit_sender_address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Contact <span class="text-danger">*</span></label>
                                        <input type="text" name="sender_contact" class="form-control" id="edit_sender_contact" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-danger card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Recipient Information</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" name="recipient_name" class="form-control" id="edit_recipient_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input type="text" name="recipient_address" class="form-control" id="edit_recipient_address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Contact <span class="text-danger">*</span></label>
                                        <input type="text" name="recipient_contact" class="form-control" id="edit_recipient_contact" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Pickup/Deliver Information</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <span class="badge badge-success" id="edit_type"></span><br>
                                                <label for="dtype">Type</label>
                                                <input type="checkbox" name="type" id="edit_dtype" data-bootstrap-switch data-toggle="toggle" data-on="Deliver" data-off="Pickup" class="switch-toggle status_chk" data-size="xs" data-offstyle="info" data-width="5rem" value="1">
                                                <small>Deliver = Deliver to Recipient Address</small>
                                                <small>, Pickup = Pickup to nearest Branch</small>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Branch Processed<span class="text-danger">*</span></label>
                                                <select class="form-control select2" style="width: 100%;" name="from_branch_id" id="edit_from_branch" required>
                                                    <option selected="selected" value="" disabled>Select Branch....</option>
                                                    <?php foreach ($branch as $value) : ?>
                                                        <option value="<?= $value['id'] ?>"><?= $value['branch_code'] ?> | <?php echo $value['street'] . ', ' . $value['city'] . ' - ' . $value['zip_code'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group" id="edit_pickup_field">
                                                <label>Pickup Branch<span class="text-danger">*</span></label>
                                                <select class="form-control select2" style="width: 100%;" name="to_branch_id" id="edit_to_branch" required>
                                                    <option selected="selected" value="" disabled>Select Branch....</option>
                                                    <?php foreach ($branch as $value) : ?>
                                                        <option value="<?= $value['id'] ?>"><?= $value['branch_code'] ?> | <?php echo $value['street'] . ', ' . $value['city'] . ' - ' . $value['zip_code'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Parcel Information</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="20%">Weight</th>
                                                <th width="20%">Height</th>
                                                <th width="20%">Length</th>
                                                <th width="15%">Width</th>
                                                <th width="15%">Price</th>
                                                <th width="10%"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="dynamically_add">
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="weight[]" class="form-control" id="edit_weight" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="height[]" class="form-control" id="edit_height" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="length[]" class="form-control" id="edit_length" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="width[]" class="form-control" id="edit_width" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="price[]" class="form-control price" id="edit_price" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success btn-sm" id="add_field"><i class="fa fa-plus"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <div class="float-right mr-4">
                                        <strong class="font-weight-bold h4">Total:-</strong>
                                        <strong class="font-weight-bold h4" id="total"></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    <input type="submit" value="Update Parcel" name="submit" id="edit_parcel_btn" class="btn btn-primary">
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Edit Parcel list modal -->



<?php include 'include/footer.php'; ?>