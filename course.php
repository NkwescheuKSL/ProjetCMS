<?php include"./includes/header.php"?>
<?php include"./includes/navigation.php"?>
<body>

<div class="main-wrapper">

<!--  -->
<?php include"./includes/navigation.php"?>
<!--  -->

<div class="page-wrapper">

               <!-- add_subject -->
               <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add course</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject_code">Subject code <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="subject_code">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="filiere">Filiere</label>
                                        <input class="form-control" type="text" name="filiere" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="titre">Titre</label>
                                        <input class="form-control" type="text" name="titre" >
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-5">
                                <div class="form-group">
                                    <label for="images">Film_img</label>
                                    <input type="file" name="images">
                                </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group semester-select">
										<label class="gen-label">Level:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="level" class="form-check-input" value="1">1
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="level" class="form-check-input" value="2">2
											</label>
										</div>
									</div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="add_course">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end --> 
            <?php 
            $course_obj=new subject();
            if(isset($_POST['add_course'])){
                $course_obj->subject_code=$_POST['subject_code'];
                $course_obj->filiere=$_POST['filiere'];
                $course_obj->levels=$_POST['level'];
                $course_obj->subject_title=$_POST['titre'];
                $course_obj->pdf=$_FILES['images']['name'];
                $film_img=$_FILES['images']['name'];
                $film_img_temp=$_FILES['images']['tmp_name'];
                move_uploaded_file($film_img_temp, "./assets/course/$film_img");    
                $course_obj->create_course();     
            }


?>
</div>

</div>

</body>

            <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>