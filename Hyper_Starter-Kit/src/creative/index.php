<?php include('./partials/html.html') ?>

    <head>
       <?php include("./partials/title-meta.html") ?>

       <?php include('./partials/head-css.html') ?>
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

           <?php include('./partials/menu.html') ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                       <?php include("./partials/page-title.html")      ?>

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

               <?php include('./partials/footer.html') ?>

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

       <?php include('./partials/right-sidebar.html')     ?>
        
       <?php include('./partials/footer-scripts.html') ?>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>
</html> 