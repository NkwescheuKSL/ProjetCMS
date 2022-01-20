
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
                        if(isset($_GET['get_id'])){
                         $get_the_id=$_GET['get_id'];
                         }
                        else{
                         $get_the_id='';
                        }

                        if(isset($_GET['action'])){
                            $action=$_GET['action'];
                          }
                          else{
                             $action='';
                          }
                          switch($action) {
                            case 'edit_student';
                            include"./includes/edit_student.php";
                            break;
                            case 'student_profil';
                            include"./includes/profil_student.php";
                            break;
                            case 'edit_student';
                            include"./includes/edit_student.php";
                            break;
                            case 'edit_subject';
                            include"./includes/edit_subject.php";
                            break;
                            case 'edit_class';
                            include"./includes/edit_class.php";
                            break;
                            case 'std_list';
                            include"./includes/std_list.php";
                            break;
                            case 'add_mark';
                            include"./includes/add_mark.php";
                            break;
                            default:
                            break;
                        }

             ?>

            <?php 
            $student = new student();
            $student->id = $get_the_id;
            if(isset($_POST['modify_student'])){
                $student->student_key = $_POST['registration'];
                $student->student_name = $_POST['full_name'];
                $student->student_birthday = $_POST['birthday'];
                $student->student_city = $_POST['city'];
                $student->student_email = $_POST['email'];
                $student->student_phone = $_POST['phone'];
                $student->student_password = $_POST['password'];
                $student->update();
                
            }
            ?>
			<?php 
            $teacher = new teacher();
            $student->id = $get_the_id;
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
			

            <?php 
            $subject = new subject();
            $subject->id = $get_the_id;
            if(isset($_POST['modify_subject'])){
                $subject->subject_credit = $_POST['subject_credit'];
                $subject->subject_name = $_POST['subject_name'];
                $subject->subject_title = $_POST['subject_title'];
                $subject->subject_branch = $_POST['subject_branch'];
                $subject->branch_level = $_POST['branch_level'];
                $subject->semester = $_POST['semester'];
                $subject->teacher = $_POST['teacher'];
                $subject->update();
                
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
