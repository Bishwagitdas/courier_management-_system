$(document).ready(function() {
  // toaster
  var Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 5000
  });
  //   Swal Bootstrap btn
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger"
    },
    buttonsStyling: true
  });

  // Function of Table Data Table
  function datatable(id) {
    $(id)
      .DataTable({
        responsive: true,
        lengthChange: false,
        autoWidth: false,
        retrieve: true,
        paging: true,
        buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"]
      })
      .buttons()
      .container()
      .appendTo(id + "_wrapper .col-md-6:eq(0)");
  }

  // Delete Function
  function deleteData(action, id, fetchFunction) {
    swalWithBootstrapButtons
      .fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
      })
      .then(result => {
        if (result.isConfirmed) {
          $.ajax({
            type: "POST",
            url: "lib/action.php",
            data: { action: action, id: id },
            success: function(response) {
              swalWithBootstrapButtons.fire(
                "Deleted!",
                "Your file has been deleted.",
                "success"
              );
              fetchFunction();
            }
          });
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            "Cancelled",
            "Your imaginary file is safe :)",
            "error"
          );
        }
      });
  }

  // Pickup or delivery type change

  $("#dtype").change(function() {
    if ($(this).prop("checked") == true) {
      $("#pickup_field").hide();
    } else {
      $("#pickup_field").show();
    }
  });

  // Logout Ajax request
  $("#logout").click(function(e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: { action: "logout" },
      success: function(response) {
        if (response == "logout") {
          Toast.fire({
            icon: "success",
            title: "Logout Successfully!"
          });
          setTimeout(() => {
            window.location = "index.php";
          }, 2000);
        }
      }
    });
  });

  //   Fetch Branch List
  fetchBranch();
  function fetchBranch() {
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: { action: "fetchBranch" },
      success: function(response) {
        $("#branch_list_body").html(response);
        datatable("#branch_list_table");
      }
    });
  }

  //   Add New Branch
  $("#add_branch_btn").click(function(e) {
    e.preventDefault();
    $("#add_branch_btn").val("Please Wait...");
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: $("#add_branch_form").serialize() + "&action=add_branch",
      success: function(response) {
        $("#add_branch_btn").val("Add Branch");
        $("#add_branch_form")[0].reset();
        if (response == "success") {
          $("#add_branch_modal").modal("hide");
          Toast.fire({
            icon: "success",
            title: "Branch Inserted Successfully!"
          });
        } else if (response == "error") {
          $("#add_branch_modal").modal("hide");
          Toast.fire({
            icon: "error",
            title: "Something went wrong. Please try again!"
          });
        } else {
          $("#error").show();
          $("#error").html(response);
        }
        fetchBranch();
      }
    });
  });

  //   Edit Branch
  $("body").on("click", ".editBranch", function(e) {
    e.preventDefault();
    id = $(this).attr("id");
    $.ajax({
      type: "POSt",
      url: "lib/action.php",
      data: { action: "editBranch", id: id },
      success: function(response) {
        data = JSON.parse(response);
        $("#branch_id").val(data.id);
        $("#street").val(data.street);
        $("#city").val(data.city);
        $("#state").val(data.state);
        $("#zip_code").val(data.zip_code);
        $("#country").val(data.country);
        $("#contact").val(data.contact);
      }
    });
  });

  //   Update Branch
  $("#edit_branch_btn").click(function(e) {
    e.preventDefault();
    $("#edit_branch_btn").val("Please Wait...");
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: $("#edit_branch_form").serialize() + "&action=update_branch",
      success: function(response) {
        $("#edit_branch_btn").val("Update Branch");
        $("#edit_branch_form")[0].reset();
        if (response == "success") {
          $("#edit_branch_modal").modal("hide");
          Toast.fire({
            icon: "success",
            title: "Branch Updated Successfully!"
          });
        } else if (response == "error") {
          $("#edit_branch_modal").modal("hide");
          Toast.fire({
            icon: "error",
            title: "Something went wrong. Please try again!"
          });
        } else {
          $("#error").show();
          $("#error").html(response);
        }
        fetchBranch();
      }
    });
  });

  //   Delete Branch
  $("body").on("click", ".dltBranch", function(e) {
    e.preventDefault();
    id = $(this).attr("id");
    deleteData("dltBranch", id, fetchBranch);
  });

  //   Fetch Staff
  fetchStaff();
  function fetchStaff() {
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: { action: "fetchStaff" },
      success: function(response) {
        $("#staff_list_body").html(response);
        datatable("#staff_list_table");
      }
    });
  }

  //   Add New Staff
  $("#add_staff_btn").click(function(e) {
    e.preventDefault();
    $("#add_staff_btn").val("Please Wait...");
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: $("#add_staff_form").serialize() + "&action=add_staff",
      success: function(response) {
        $("#add_staff_btn").val("Add Staff");
        $("#add_staff_form")[0].reset();
        if (response == "success") {
          $("#error").hide();
          $("#add_staff_modal").modal("hide");
          Toast.fire({
            icon: "success",
            title: "Staff Inserted Successfully!"
          });
        } else if (response == "error") {
          $("#error").hide();
          $("#add_staff_modal").modal("hide");
          Toast.fire({
            icon: "error",
            title: "Something went wrong. Please try again!"
          });
        } else if (response == "user_exists") {
          $("#error").hide();
          $("#add_staff_modal").modal("hide");
          Toast.fire({
            icon: "error",
            title: "Email already exists. Please try different Email!"
          });
        } else {
          $("#error").show();
          $("#error").html(response);
        }
        fetchStaff();
      }
    });
  });

  // Edit Staff
  $("body").on("click", ".editStaff", function(e) {
    e.preventDefault();
    id = $(this).attr("id");
    $.ajax({
      type: "POSt",
      url: "lib/action.php",
      data: { action: "editStaff", id: id },
      success: function(response) {
        data = JSON.parse(response);
        $("#staff_id").val(data.id);
        $("#firstname").val(data.firstname);
        $("#lastname").val(data.lastname);
        $("#phone").val(data.phone);
        $("#email").val(data.email);
        $("#password").val("123456");
        $("#branch_code").text(data.branch_code);
        $('#branch option[value="' + data.branch_id + '"]').prop(
          "selected",
          true
        );
      }
    });
  });

  // Update Staff
  $("#edit_staff_btn").click(function(e) {
    e.preventDefault();
    $("#edit_staff_btn").val("Please Wait...");
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: $("#edit_staff_form").serialize() + "&action=update_staff",
      success: function(response) {
        $("#edit_staff_btn").val("Update Branch");
        $("#edit_staff_form")[0].reset();
        if (response == "success") {
          $("#edit_staff_modal").modal("hide");
          Toast.fire({
            icon: "success",
            title: "Staff Updated Successfully!"
          });
        } else if (response == "error") {
          $("#edit_staff_modal").modal("hide");
          Toast.fire({
            icon: "error",
            title: "Something went wrong. Please try again!"
          });
        } else {
          $("#error").show();
          $("#error").html(response);
        }
        fetchStaff();
      }
    });
  });

  // Delete Staff
  $("body").on("click", ".dltStaff", function(e) {
    e.preventDefault();
    id = $(this).attr("id");
    deleteData("dltStaff", id, fetchStaff);
  });

  // Fetch Parcels
  fetchParcels();
  function fetchParcels() {
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: { action: "fetchParcels" },
      success: function(response) {
        $("#parcel_list_body").html(response);
        datatable("#parcel_list_table");
      }
    });
  }

  var i = 1;
  // Add Dynamically Input Field
  $("#add_field").click(function(e) {
    e.preventDefault();
    i++;
    var html =
      '<tr id="row' +
      i +
      '"><td><div class="form-group"><input type="text" name="weight[]" class="form-control"></div></td><td><div class="form-group"><input type="text" name="height[]" class="form-control"></div></td><td><div class="form-group"><input type="text" name="length[]" class="form-control"></div></td><td><div class="form-group"><input type="text" name="width[]" class="form-control"></div></td><td><div class="form-group"><input type="text" name="price[]" class="form-control price"></div></td><td><button type="button" name="remove" id="' +
      i +
      '" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>';
    $("#dynamically_add").append(html);
  });

  // Remove Dynamically Input Field
  $(document).on("click", ".btn_remove", function() {
    var button_id = $(this).attr("id");
    $("#row" + button_id + "").remove();
  });

  // Sum All Price
  $(document).on("keyup", ".price", function() {
    var sum = 0;
    $(".price").each(function() {
      quantity = parseInt($(this).val());
      if (!isNaN(quantity)) {
        sum += quantity;
      }
    });
    $("#total").text(sum);
  });

  // Add Parcel
  $("#add_parcel_btn").click(function(e) {
    e.preventDefault();
    $("#add_parcel_btn").val("Please Wait...");
    type = $("#dtype").val();
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: $("#add_parcel_form").serialize() + "&action=add_parcels",
      success: function(response) {
        $("#add_parcel_btn").val("Add Parcels");
        $("#add_parcel_form")[0].reset();

        $("#error").hide();
        $("#add_parcels_modal").modal("hide");
        Toast.fire({
          icon: "success",
          title: "Parcels Inserted Successfully!"
        });
        fetchParcels();
        // console.log(response);
      }
    });
  });

  // View Parcel By Id
  $("body").on("click", ".viewParcel", function() {
    id = $(this).attr("id");
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: { action: "viewParcel", id: id },
      success: function(response) {
        data = JSON.parse(response);
        $("#reference_number").text(data.reference_number);
        $("#sender_name").text(data.sender_name);
        $("#sender_contact").text(data.sender_contact);
        $("#sender_address").text(data.sender_address);
        $("#recipient_name").text(data.recipient_name);
        $("#recipient_contact").text(data.recipient_contact);
        $("#recipient_address").text(data.recipient_address);
        $("#type").html(data.type);
        $("#from_branch").text(data[0].address);
        if (data[1] === undefined) {
          $("#to_branch").html(
            '<strong class="text-danger">This Parcel is Delivery Type. No pickup branch</strong>'
          );
        } else {
          $("#to_branch").text(data[1].address);
        }
        $("#status").html(data.status);
        $("#weight").text(data.weight);
        $("#height").text(data.height);
        $("#length").text(data.length);
        $("#width").text(data.width);
        $("#price").text(data.price);
        console.log(data);
      }
    });
  });

  // Delete Parcel By Id
  $("body").on("click", ".dltParcel", function(e) {
    e.preventDefault();
    id = $(this).attr("id");
    deleteData("dltParcel", id, fetchParcels);
  });

  // Edit Status
  $("body").on("click", ".updateStatus", function() {
    id = $(this).attr("id");
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: { action: "updateStatus", id: id },
      success: function(response) {
        data = JSON.parse(response);
        $("#UpdateStatusid").val(data.id);
        $('#UpdateStatus option[value="' + data.status + '"]').prop(
          "selected",
          true
        );
      }
    });
  });

  // Update Status
  $("#update_status_btn").click(function(e) {
    e.preventDefault();
    $("#update_status_btn").val("Please Wait...");
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: $("#update_status_form").serialize() + "&action=update_status",
      success: function(response) {
        $("#update_status_btn").val("Add");
        $("#update_status_form")[0].reset();
        $("#UpdateStatusModal").modal("hide");
        Toast.fire({
          icon: "success",
          title: "Parcels Status Updated Successfully!"
        });
        fetchParcels();
      }
    });
  });

  // Edit Parcel
  $("body").on("click", ".editParcel", function() {
    id = $(this).attr("id");
    $("#edit_dtype").change(function() {
      if ($(this).prop("checked") == true) {
        $("#edit_pickup_field").hide();
      } else {
        $("#edit_pickup_field").show();
      }
    });
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: { action: "editParcel", id: id },
      success: function(response) {
        data = JSON.parse(response);
        $("#edit_id").val(data.id);
        $("#edit_sender_name").val(data.sender_name);
        $("#edit_sender_contact").val(data.sender_contact);
        $("#edit_sender_address").val(data.sender_address);
        $("#edit_recipient_name").val(data.recipient_name);
        $("#edit_recipient_contact").val(data.recipient_contact);
        $("#edit_recipient_address").val(data.recipient_address);
        if (data.type == 2) {
          $("#edit_type").text("Pickup");
          $("#edit_pickup_field").show();
        } else {
          $("#edit_type").text("Deliver");
          $("#edit_pickup_field").hide();
        }
        $('#edit_from_branch option[value="' + data.from_branch_id + '"]').prop(
          "selected",
          true
        );
        $('#edit_to_branch option[value="' + data.to_branch_id + '"]').prop(
          "selected",
          true
        );
        // $("#edit_dtype").val(data.type);
        $("#edit_dtype[value='" + data.type + "']").prop("checked", true);
        $("#edit_weight").val(data.weight);
        $("#edit_height").val(data.height);
        $("#edit_length").val(data.length);
        $("#edit_width").val(data.width);
        $("#edit_price").val(data.price);
        // console.log(data);
      }
    });
  });

  // Update Parcel
  $("#edit_parcel_btn").click(function(e) {
    e.preventDefault();
    $("#edit_parcel_btn").val("Please Wait...");
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: $("#edit_parcel_form").serialize() + "&action=update_parcel",
      success: function(response) {
        $("#edit_parcel_btn").val("Update Branch");
        $("#edit_parcel_form")[0].reset();
        $("#edit_parcel_modal").modal("hide");
        Toast.fire({
          icon: "success",
          title: "Parcel Updated Successfully!"
        });
        fetchParcels();
        // console.log(response);
      }
    });
  });

  // Tracking Parcel By tacking number
  $("#tracking_btn").click(function(e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: $("#tracking_form").serialize() + "&action=track_parcel",
      success: function(response) {
        if (response == "not_found") {
          Toast.fire({
            icon: "error",
            title: "Wrong Tracking Number. Please write right tracking number!"
          });
          $("#tracking_form")[0].reset();
        } else {
          $(".timeline").html(response);
          $("#tracking_form")[0].reset();
        }
      }
    });
  });

  // Fetch System Setting
  fetchSystemSetting();
  function fetchSystemSetting() {
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      data: { action: "fetchSystemSetting" },
      success: function(response) {
        data = JSON.parse(response);
        $("#name").val(data.name);
        $("#email").val(data.email);
        $("#contact").val(data.contact);
        $("#address").val(data.address);
        $("#old_cover").val(data.cover_img)
        if (data.cover_img != null) {
          $("#coverPic").attr("src", "assets/dist/img/" + data.cover_img + "");
        } else {
          $("#coverPic").attr("src", "assets/dist/img/cover.jpg");
        }
      }
    });
  }

  // Update System Setting
  $("#setting_form").submit(function(e) {
    e.preventDefault();
    $("#setting_btn").val("Please Wait...");
    $.ajax({
      type: "POST",
      url: "lib/action.php",
      processData: false,
      contentType: false,
      cache: false,
      data: new FormData(this),
      success: function(response) {
        $("#setting_btn").val("Update");
        if(response == 'success'){
          Toast.fire({
            icon: "success",
            title: "System Setting Updated Successfully!"
          });
        }else{
          $("#error").show();
          $("#error").html(response);
        }
        fetchSystemSetting();
        
      }
    });
  });
});
