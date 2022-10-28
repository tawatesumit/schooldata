<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CAIB</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href=".<?php echo base_url(); ?>/public/assets/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/dist/css/radiobutton.css">
  <style type="text/css">
      .error{
          color: red;
      }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?= $this->include('layout/head') ?>
  <!-- Main Sidebar Container -->
  <?= $this->include('layout/superadminsidebar') ?>
    <!-- general form elements disabled -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/homesettings">Home</a></li>
              <li class="breadcrumb-item active">Home Settings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php 
    	//print_r($site_data['id']); die;
    ?>
    <form action="<?= base_url('homesettings/update/'.$site_data['id']); ?>" method="post" enctype="multipart/form-data">
    <section class="content" id="content">
      <div class="container-fluid">
        <?php
            if(session()->getFlashdata('status')){
          ?>
              <div id="status_div" class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= session()->getFlashdata('status'); ?></strong> 
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
              </div>
          <?php
            }
        ?>
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Update Site Details</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <?php $validation =  \Config\Services::validation(); ?>
              <div class="row">
                <div class="form-group col-sm-4">
                    <label class="col-form-label" for="inputError">Site Logo</label>
                    <input type="file" name="site_logo" id="site_logo" class="form-control" >
                    <?php 
                      if (!empty($site_data['site_logo'])) { ?>
                        <a href="<?= base_url().'/public/uploads/'.$site_data['site_logo'] ?>" target="_blank">View File</a>
                        <input type="hidden" name="old_image" value="<?= $site_data['site_logo'] ?>">
                      <?php }
                      else{ ?>
                          <p>Image not Available</p>
                      <?php }

                    ?>
                </div>
                <div class="form-group col-sm-4">
                    <label class="col-form-label" for="inputError">Site Email</label>
                    <input type="email" name="site_email" id="site_email" class="form-control" value="<?= !empty($site_data['site_email']) ? $site_data['site_email'] : ''; ?>">
                </div>
                <div class="form-group col-sm-4">
                    <label class="col-form-label" for="inputError">Site Contact</label>
                    <input type="text" name="site_contact" id="site_contact" class="form-control" value="<?= !empty($site_data['site_contact']) ? $site_data['site_contact'] : ''; ?>">
                </div>
                <div class="form-group col-sm-8">
                    <label class="col-form-label" for="inputError">Site Address</label>
                    <input type="text" name="site_address" id="site_address" class="form-control" value="<?= !empty($site_data['site_address']) ? $site_data['site_address'] : ''; ?>">
                </div>
                <div class="form-group col-sm-4">
                    <label class="col-form-label" for="inputError">Site Footer Logo</label>
                    <input type="file" name="site_footer_logo" id="site_footer_logo" class="form-control" >
                    <?php 
                      if (!empty($site_data['site_footer_logo'])) { ?>
                        <a href="<?= base_url().'/public/uploads/'.$site_data['site_footer_logo'] ?>" target="_blank">View File</a>
                        <input type="hidden" name="foot_old_image" value="<?= $site_data['site_logo'] ?>">
                      <?php }
                      else{ ?>
                          <p>Image not Available</p>
                      <?php }

                    ?>
                </div>
                <div class="form-group col-sm-12">
                    <label class="col-form-label" for="inputError">Site Footer Logo Bottom Text</label>
                    <textarea class="form-control" name="site_footerlogobottom_text" id="site_footerlogobottom_text"><?= !empty($site_data['site_footerlogobottom_text']) ? $site_data['site_footerlogobottom_text'] : ''; ?></textarea>
                </div>
                <div class="form-group col-sm-12">
                    <label class="col-form-label" for="inputError">Site Copyright</label>
                    <textarea class="form-control" name="site_copyright" id="site_copyright"><?= !empty($site_data['site_copyright']) ? $site_data['site_copyright'] : ''; ?></textarea>
                </div>
              </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info">Update Settings</button>
                  <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
                </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    </form>
    <!-- /.content -->
  </div>
    <!-- /.content-wrapper -->
    <?= $this->include('layout/footer') ?>
    <!-- <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>CIB</b>
      </div>
      <strong>Copyright &copy; 2021-2022 <a href="#"></a>.</strong> All rights reserved.
    </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>/public/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>/public/assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url(); ?>/public/assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>/public/assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>/public/assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>/public/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/public/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url(); ?>/public/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo base_url(); ?>/public/assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo base_url(); ?>/public/assets/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>/public/assets/dist/js/demo.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/dist/js/tinymce.min.js"></script>
<script type="text/javascript">
  $("#status_div").fadeIn(300).delay(1000).fadeOut(300);
</script>
<script>
      tinymce.init({
        selector: '#site_footerlogobottom_text'
        
      });
    </script>
<!-- Page specific script -->
<script>
      tinymce.init({
        selector: '#site_copyright',
        entity_encoding : 'raw',
        plugins: "code",
      });
    </script>
<!-- Page specific script -->
<script>

  $('#dateofbirth, #lastknownDate').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true
      //todayBtn: 'linked',
  });

  function oneDigit(id){
      if ($("#" + id).val().indexOf('.') != -1) {
          if ($("#" + id).val().split(".")[1].length > 1) {
              if (isNaN(parseFloat($("#" + id).val())))
                  return;
              $("#" + id).val(parseFloat($("#" + id).val()).toFixed(1));
          }
          return $("#" + id).val();
      }
  }


  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
</body>
</html>