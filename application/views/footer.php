                <div class="page-footer">
                    <p class="no-s">2017 &copy; Satker P2JN Jateng.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>Navigation</h3>
                <a href="#0" class="cd-close-nav">Close</a>
            </header>
            <ul class="cd-nav list-unstyled">
                <li class="cd-selected" data-menu="index">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-menu="profile">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <p>Profile</p>
                    </a>
                </li>
                <li data-menu="inbox">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <p>Mailbox</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                        <p>Tasks</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                        <p>Settings</p>
                    </a>
                </li>
                <li data-menu="calendar">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <p>Calendar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="cd-overlay"></div>
    

        <!-- Javascripts -->
       
        <script src="<?php echo base_url(); ?>assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/modern.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/pages/table-data.js"></script>
        <script>
        $(document).ready(function() {
            $('#datePicker')
                .datepicker({
                    format: 'yyyy/mm/dd'
                })
                .on('changeDate', function(e) {
                    // Revalidate the date field
                    $('#eventForm').formValidation('revalidateField', 'date');
                });

                $('#datePicker2')
                .datepicker({
                    format: 'yyyy/mm/dd'
                })
                .on('changeDate', function(e) {
                    // Revalidate the date field
                    $('#eventForm').formValidation('revalidateField', 'date');
                });

                $('#datePicker3')
                .datepicker({
                    format: 'yyyy/mm/dd'
                })
                .on('changeDate', function(e) {
                    // Revalidate the date field
                    $('#eventForm').formValidation('revalidateField', 'date');
                });


            
        });
        </script>
        <script type="text/javascript">


    function Changes(input) {
        var fileName = document.getElementById("pic").value
        if (fileName == "") {
            alert("Browse to upload a valid File with Image extension");
            return false;
        }

          else if (fileName.split(".")[1].toUpperCase() == "JPG"){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {

                    $('#image')
                        .attr('src', e.target.result);

                };

                reader.readAsDataURL(input.files[0]);

            }
            return true;
          }
   else if (fileName.split(".")[1].toUpperCase() == "PNG"){
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                 var namagbr=document.getElementById("pic").value;
                    $('#image')
                        .attr('src', e.target.result);

                };


                reader.readAsDataURL(input.files[0]);


            }
            return true;
          }

          else if (fileName.split(".")[1].toUpperCase() == "JPEG"){
            if (input.files && input.files[0]) {
                var reader = new FileReader();

               reader.onload = function (e) {
                 var namagbr=document.getElementById("pic").value;
                    $('#image')
                        .attr('src', e.target.result);


                };


                reader.readAsDataURL(input.files[0]);


            }
            return true;
          }

        else {
            alert("File with " + fileName.split(".")[1] + " is invalid. Upload a validfile with Image extensions");
            document.getElementById("pic").value="";
            return false;
        }
        return true;



        }


</script>
<script type="text/javascript">
    
</script>
</body>
</html>