
        <!--  -->
        <?php include"./includes/header.php"?>
        <!--  -->
        
<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
    <div class="main-wrapper">

        <!--  -->
        <?php include"./includes/navigation.php"?>
        <!--  -->

        <div class="page-wrapper">
           <?php 
                         if(isset($_GET['id'])){
                             $get_the_id=$_GET['id'];
                         }
                        else{
                             $get_the_id='';
                         }
                            if(isset($_GET['source'])){
                                $source=$_GET['source'];
                            }
                            else{
                                $source='';
                            }
                        switch($source) {
                            case 'edit_teacher';
                            include"./includes/edit_teacher.php";
                            break;
                            case 'add_teacher';
                            include"./includes/add_teacher.php";
                            break;
                            case 'profil_teacher';
                            include"./includes/profil_teacher.php";
                            break;
                            default:
                            include"./includes/all_teacher.php";
                            break;
                        }
            ?>

            <?php 

            $teacher = new teacher();
            if(isset($_POST['add_teacher'])){
    
                $teacher->teacher_name = $_POST['full_name'];
                $teacher->teacher_birthday = $_POST['birthday'];
                $teacher->teacher_gender = $_POST['gender'];
                $teacher->teacher_city = $_POST['city'];
                $teacher->teacher_email = $_POST['email'];
                $teacher->teacher_phone = $_POST['phone'];
                $teacher->teacher_password = $_POST['password'];
                $teacher->teacher_speciality= $_POST['speciality'];

                $teacher->create();
                
            }

            if(isset($_POST['modify_teacher'])){
    
                $teacher->teacher_name = $_POST['full_name'];
                $teacher->teacher_birthday = $_POST['birthday'];
                /*$teacher->teacher_gender = $_POST['gender'];*/
                $teacher->teacher_city = $_POST['city'];
                $teacher->teacher_email = $_POST['email'];
                $teacher->teacher_phone = $_POST['phone'];
                $teacher->teacher_password = $_POST['password'];
                $teacher->teacher_speciality= $_POST['speciality'];

                $teacher->update();
                
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
