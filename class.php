
        <!--  -->
        <?php include"./includes/header.php"?>
        <!--  -->
        
<body>
    <div class="main-wrapper">

        <!--  -->
        <?php include"./includes/navigation.php"?>
        <!--  -->

        <div class="page-wrapper">
           <?php 
                            if(isset($_POST['save'])){
                                $source=$_GET['source'];
                            }
                            else{
                                $source='';
                            }
                        switch($source) {
                            case 'edit_class';
                            include"./includes/edit_class.php";
                            break;
                            default:
                            include"./includes/all_class.php";
                            break;
                        }
            ?>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>
