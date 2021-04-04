<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admins/main/head'); ?>

    <body class="sidebar-enable" data-keep-enlarged="true">

        <!-- Begin page -->
        <div class="wrapper">
        <div class="row" id="body-row">
            <?php $this->load->view('admins/main/left_sidebar'); ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page w-100" style="margin-right:-250px">
                <?php
                $data = array();
                $data['main_content'] = $main_content;
                $this->load->view('admins/main/main_content', $data);
                ?>

               
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


            </div><!-- body-row END -->
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

    </body>

</html>
