 <?php $this->load->view('manager/common/header'); ?>

 <style>
     ::-webkit-input-placeholder {
         color: Grey !important;
     }

     ::-moz-placeholder {
         color: Grey !important;
     }

     ::-ms-placeholder {
         color: Grey !important;
     }

     ::placeholder {
         color: Grey !important;
     }

     .red-border {
         border: 1px solid red !important;
     }
 </style>


 <div class="container">


     <div id="form_div" class="card-body bg-custom3 my-2">

         <div id="alert" class="alert alert-danger" role="alert" style="display:none;">
             Failure Start Date cannot be greater than current date!!
         </div>

         <div id="alert1" class="alert alert-danger" role="alert" style="display:none;">
             Failure End Date cannot be greater than current date!!
         </div>

         <div id="alert3" class="alert alert-danger" role="alert" style="display:none;">
             End date should be greater than start date!!
         </div>
         <!-- Nested Row within Card Body -->
         <div class="row">
             <div class="col-lg-12">

                 <div class="card bg-custom3">
                     <div class="card-header bg-custom1">
                         <div class="row">
                             <div class="col-sm-11">
                                 <h1 class="h4 text-white">Add Failure Details</h1>
                             </div>
                             <!-- <div class="col-sm-1">
                                 <a class="form-control form-control-user bg-light text-center" style="border:grey solid 1px" onclick="hide_form_div()">
                                     <i class="fas fa-angle-up"></i>
                                 </a>

                             </div> -->
                         </div>
                     </div>

                     <div class="card-body">
                         <form class="user" role="form" id="update_form" method="post" action="<?= base_url(); ?>Manager/<?php if ($update == "No") {
                                                                                                                                echo 'add_data';
                                                                                                                            } else {
                                                                                                                                echo 'Update_data';
                                                                                                                            } ?>/<?php if (isset($selected_controller_data['Controller_type'])) {
                                                                                                                                        echo $selected_controller_data['ID'];
                                                                                                                                    } else {
                                                                                                                                        echo "";
                                                                                                                                    }; ?>">
                             <input id='isUpdate' type="text" value="<?php echo $update; ?>" style="display:none;">
                             <div class="form-group row">
                                 <div class="col-sm-3 mb-1">
                                     <input type="text" class="form-control form-control-user bg-light" name="id" id="id" placeholder="ID" value="<?php if (isset($selected_controller_data['ID'])) {
                                                                                                                                                        echo $selected_controller_data['ID'];
                                                                                                                                                    } else {
                                                                                                                                                        echo "";
                                                                                                                                                    }; ?>" disabled>
                                 </div>
                                 <div class="col-sm-3 mb-1">
                                     <input type="text" class="form-control form-control-user bg-light" name="Controller_type" id="Controller_type" placeholder="Controller Type" value="<?php if (isset($selected_controller_data['Controller_type'])) {
                                                                                                                                                                                                echo $selected_controller_data['Controller_type'];
                                                                                                                                                                                            } else {
                                                                                                                                                                                                echo "";
                                                                                                                                                                                            }; ?>" disabled>
                                 </div>
                                 <div class="col-sm-3 mb-1">
                                     <input type="text" class="form-control form-control-user bg-light" name="ESWB" id="ESWB" placeholder="ESWB" value="<?php if (isset($selected_controller_data['ESWB'])) {
                                                                                                                                                            echo $selected_controller_data['ESWB'];
                                                                                                                                                        } else {
                                                                                                                                                            echo "";
                                                                                                                                                        }; ?>" disabled>
                                 </div>
                                 <div class="col-sm-3 mb-1">
                                     <input type="text" class="form-control form-control-user bg-light" name="Name" id="Name" placeholder="Name" value="<?php if (isset($selected_controller_data['Controller_Name'])) {
                                                                                                                                                            echo $selected_controller_data['Controller_Name'];
                                                                                                                                                        } else {
                                                                                                                                                            echo "";
                                                                                                                                                        }; ?>" disabled>
                                 </div>
                             </div>
                             <hr>
                             <div class="form-group row">
                                 <div class="col-sm-6">
                                     <h6>&nbsp;Enter Failure Start Date</h6>
                                 </div>

                                 <div class="col-sm-6">
                                     <h6>&nbsp;Enter Failure End Date</h6>
                                 </div>

                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-6">
                                     <input type="date" class="form-control form-control-user" name="failure_start_date" id="Failure_start_date" placeholder="Failure Start Date*" value="<?php if (isset($selected_controller_data['Failure_start_date'])) {
                                                                                                                                                                                                echo $selected_controller_data['Failure_start_date'];
                                                                                                                                                                                            } else {
                                                                                                                                                                                                echo "";
                                                                                                                                                                                            }; ?>" <?php if ($update == "Yes") { ?> readonly <?php } ?>>
                                 </div>

                                 <div class="col-sm-6">
                                     <input type="date" class="form-control form-control-user" name="failure_end_date" id="Failure_end_date" placeholder="Failure End Date*" value="<?php if (isset($selected_controller_data['Failure_end_date'])) {
                                                                                                                                                                                        echo $selected_controller_data['Failure_end_date'];
                                                                                                                                                                                    } else {
                                                                                                                                                                                        echo "";
                                                                                                                                                                                    }; ?>">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-4 mb-1">
                                     <h6>&nbsp;TBF: (Days)</h6>
                                 </div>

                             </div>
                             <div class="form-group row">

                                 <div class="col-sm-4">
                                     <input type="text" class="form-control form-control-user" value="<?php if (isset($selected_controller_data['TBF'])) {
                                                                                                            echo $selected_controller_data['TBF'];
                                                                                                        } else {
                                                                                                            echo "";
                                                                                                        }; ?>" name="TBF" id="TBF" placeholder="TBF*">
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-sm-4 mb-1">
                                     <h6>&nbsp;TCM: (Days)</h6>
                                 </div>
                                 <div class="col-sm-4 mb-1">
                                     <h6>&nbsp;TCM Description:</h6>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-4 mb-1">
                                     <input type="text" class="form-control form-control-user" value="<?php if (isset($selected_controller_data['TCM'])) {
                                                                                                            echo $selected_controller_data['TCM'];
                                                                                                        } else {
                                                                                                            echo "";
                                                                                                        }; ?>" name="TCM" id="TCM" placeholder="TCM*">
                                 </div>

                                 <div class="col-sm-8">
                                     <input type="text" class="form-control form-control-user" value="<?php if (isset($selected_controller_data['TCM_Desc'])) {
                                                                                                            echo $selected_controller_data['TCM_Desc'];
                                                                                                        } else {
                                                                                                            echo "";
                                                                                                        }; ?>" name="TCM_Desc" id="TCM_Desc" placeholder="Description">
                                 </div>

                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-4 mb-1">
                                     <h6>&nbsp;TPM: (Days)</h6>
                                 </div>
                                 <div class="col-sm-4 mb-1">
                                     <h6>&nbsp;TPM Description:</h6>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-4">
                                     <input type="text" class="form-control form-control-user" value="<?php if (isset($selected_controller_data['TPM'])) {
                                                                                                            echo $selected_controller_data['TPM'];
                                                                                                        } else {
                                                                                                            echo "";
                                                                                                        }; ?>" name="TPM" id="TPM" placeholder="TPM*">
                                 </div>

                                 <div class="col-sm-8 mb-1">
                                     <input type="text" class="form-control form-control-user" value="<?php if (isset($selected_controller_data['TPM_Desc'])) {
                                                                                                            echo $selected_controller_data['TPM_Desc'];
                                                                                                        } else {
                                                                                                            echo "";
                                                                                                        }; ?>" name="TPM_Desc" id="TPM_Desc" placeholder="Description">
                                 </div>

                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-4 mb-1">
                                     <h6>&nbsp;ALDT: (Days)</h6>
                                 </div>
                                 <div class="col-sm-4 mb-1">
                                     <h6>&nbsp;ALDT Description:</h6>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-4 mb-1">
                                     <input type="text" class="form-control form-control-user" value="<?php if (isset($selected_controller_data['ADLT'])) {
                                                                                                            echo $selected_controller_data['ADLT'];
                                                                                                        } else {
                                                                                                            echo "";
                                                                                                        }; ?>" name="ADLT" id="ADLT" placeholder="ADLT*">
                                 </div>

                                 <div class="col-sm-8 mb-1">
                                     <input type="text" class="form-control form-control-user" value="<?php if (isset($selected_controller_data['ADLT_Desc'])) {
                                                                                                            echo $selected_controller_data['ADLT_Desc'];
                                                                                                        } else {
                                                                                                            echo "";
                                                                                                        }; ?>" name="ADLT_Desc" id="ADLT_Desc" placeholder="Description">
                                 </div>

                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-4 mb-1">
                                     <h6>&nbsp;TTR: (Days)</h6>
                                 </div>

                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-4 mb-1">
                                     <input type="text" class="form-control form-control-user" value="<?php if (isset($selected_controller_data['TTR'])) {
                                                                                                            echo $selected_controller_data['TTR'];
                                                                                                        } else {
                                                                                                            echo "";
                                                                                                        }; ?>" name="TTR" id="TTR" placeholder="TTR*">
                                 </div>

                             </div>

                             <div class="form-group row justify-content-center">
                                 <div class="col-sm-4">
                                     <button type="button" class="btn btn-primary btn-user btn-block" id="update_btn">
                                         <!-- <i class="fab fa-google fa-fw"></i>  -->
                                         Submit Data
                                     </button>
                                     <div id="error" style="color:red; display:none;">
                                         <span>Please check errors above in red highlighted!</span>
                                     </div>
                                 </div>

                             </div>
                         </form>
                     </div>
                 </div>


             </div>
         </div>
     </div>

 </div>

 </div>

 <script src="<?php echo base_url(); ?>assets/swal/swal.all.min.js"></script>
 <?php if ($this->session->flashdata('success')) : ?>
     <script>
         Swal.fire(
             '<?php echo $this->session->flashdata('success'); ?>',
             '',
             'success'
         );
     </script>
 <?php endif; ?>

 <?php if ($this->session->flashdata('failure')) : ?>
     <script>
         Swal.fire(
             '<?php echo $this->session->flashdata('failure'); ?>',
             '',
             'error'
         );
     </script>
 <?php endif; ?>

 <?php $this->load->view('common/footer'); ?>

 <script>
     var check_start_date = 0;
     var check_end_date = 0;
     var check_end_date_2 = 0;

     $('#Failure_start_date').on('focusout', function() {

         var start_date = $('#Failure_start_date').val();

         var fullDate = new Date()

         var twoDigitMonth = ((fullDate.getMonth() + 1) === 1) ? (fullDate.getMonth() + 1) : '0' + (fullDate.getMonth() + 1);
         var twoDigitDay;

         if (fullDate.getDate() >= 10) {
             twoDigitDay = fullDate.getDate();
         } else {
             twoDigitDay = "0" + fullDate.getDate();
         }

         var currentDate = fullDate.getFullYear() + "-" + twoDigitMonth + "-" + twoDigitDay;
         if (start_date > currentDate) {
             check_start_date = 1;
             $('#alert').show();
         } else {
             check_start_date = 0;
             $('#alert').hide();
         }

         var sensor_id = $('#id').val();
         var isUpdate = $('#isUpdate').val();
         if (isUpdate == 'No') {
             if (start_date != null) {
                 $.ajax({
                     url: '<?= base_url(); ?>Technician/get_TBF',
                     method: 'POST',
                     data: {
                         'start_data': start_date,
                         'sensor_id': sensor_id
                     },
                     success: function(data) {
                         $('#TBF').val(data);
                     },
                     async: false
                 });
             }
         }
     });

     $('#Failure_end_date').on('focusout', function() {
         var end_date = $('#Failure_end_date').val();
         var start_date = $('#Failure_start_date').val();

         if (end_date != null && end_date != '') {
             var fullDate = new Date()
             var twoDigitMonth = ((fullDate.getMonth() + 1) === 1) ? (fullDate.getMonth() + 1) : '0' + (fullDate.getMonth() + 1);
             var twoDigitDay;

             if (fullDate.getDate() >= 10) {
                 twoDigitDay = fullDate.getDate();
             } else {
                 twoDigitDay = "0" + fullDate.getDate();
             }
             var currentDate = fullDate.getFullYear() + "-" + twoDigitMonth + "-" + twoDigitDay;

             if (end_date > currentDate) {
                 check_end_date = 1;
                 $('#alert1').show();
             } else {
                 check_end_date = 0;
                 $('#alert1').hide();
             }

             if (end_date < start_date) {
                 check_end_date_2 = 1;
                 $('#alert3').show();
             } else {
                 $('#alert3').hide();
                 check_end_date_2 = 0;
             }
         }

         var end_date = $('#Failure_end_date').val();
         var e_d = new Date(end_date);
         var start_date = $('#Failure_start_date').val();
         var s_d = new Date(start_date);

         if (start_date != null && end_date != null) {
             var diffTime = Math.abs(e_d - s_d);
             var TTR = Math.ceil(diffTime / 1000 / 60 / 60 / 24);
             document.getElementById("TTR").value = TTR;
         } else {
             document.getElementById("TTR").value = 0.00;
         }


     });

     $('#update_btn').on('click', function() {
         //alert('javascript working');
         $('#update_btn').attr('disabled', true);
         var validate = 0;

         var TBF = $('#TBF').val();
         var TCM = $('#TCM').val();
         var TPM = $('#TPM').val();
         var ADLT = $('#ADLT').val();
         var TTR = $('#TTR').val();
         var FSD = $('#Failure_start_date').val();
         var FED = $('#Failure_end_date').val();
         //alert(TPM);

         if (TBF == '') {
             validate = 1;
             $('#TBF').addClass('red-border');
         }

         if (check_start_date == 1) {
             validate = 1;
             $('#Failure_start_date').addClass('red-border');
         }

         if (FED != '' && FED != null) {
             if (TCM == '') {
                 validate = 1;
                 $('#TCM').addClass('red-border');
             }
             if (TPM == '') {
                 validate = 1;
                 $('#TPM').addClass('red-border');
             }
             if (ADLT == '') {
                 validate = 1;
                 $('#ADLT').addClass('red-border');
             }
             if (TTR == '') {
                 validate = 1;
                 $('#TTR').addClass('red-border');
             }

             if (check_end_date == 1) {
                 validate = 1;
                 $('#Failure_end_date').addClass('red-border');
             }
             if (check_end_date_2 == 1) {
                 validate = 1;
                 $('#Failure_end_date').addClass('red-border');
             }
             if (parseInt(TCM) + parseInt(TPM) + parseInt(ADLT) != parseInt(TTR)) {
                 validate = 1;
                 $('#TCM').addClass('red-border');
                 $('#TPM').addClass('red-border');
                 $('#ADLT').addClass('red-border');
             }
         }

         if (FSD == '') {
             validate = 1;
             $('#Failure_start_date').addClass('red-border');
         }

         if (validate == 0) {
             $('#error').hide();
             $('#update_form')[0].submit();
         } else {

             $('#error').show();
             $('#update_btn').removeAttr('disabled');
         }
     });

     function hide_form_div() {
         $('#form_div').slideUp();
     }

     function hide_detail_div() {
         $('#record_detail_div').slideUp();;
     }

     var element = document.getElementById('page-top');
     element.style.paddingRight = null;
 </script>