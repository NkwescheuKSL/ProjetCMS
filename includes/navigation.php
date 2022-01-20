<div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="assets/img/logo.png" width="40" height="40" alt=""> <span>UYI S.M</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                <?php
                // $count_notify = notification::notification_count();
                ?>
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">0</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                <ul class="contact-list">
                                <?php
                                    $show_all_notify = notification::find_all_notifications();
                                    while($row = mysqli_fetch_array($show_all_notify)){
                                        $notify_id =  $row['notify_id'];
                                        $notify_title =  $row['notify_title'];
                                        $notify_text =  $row['notify_text'];
                                        $notify_date =  $row['notify_date'];
                                ?> 
                                    <li>
                                        <div class="contact-cont">
                                            <div class="contact-info">
                                                <span class="contact-name text-name"> <?php echo $notify_title; ?></span>
                                                <span class="contact-name text-ellipsis"><?php echo $notify_text ?> </span>
                                                <span class="contact-date"><?php echo $notify_date; ?></span>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                </ul>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="notification.php?action=view">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>  My Profile</a>
						<a class="dropdown-item" href="settings.html"><i class="fa fa-cog"></i>  Settings</a>
						<a class="dropdown-item" href="login.html"><i class="fa fa-sign-out"></i> Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
</div>
<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="index.php"><i class="fa fa-edit"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
							<a href="#"><i class="fa fa-users"></i> <span> Students </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="student.php?source=add_student"><i class="fa fa-fw fa-plus"></i> Add Student</a></li>
                                <li><a href="student.php?source=student_list"><i class="fa fa-fw fa-bars"></i> Student List</a></li>
							</ul>
						</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-book"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="subject.php?source=add_subject"><i class="fa fa-fw fa-plus"></i> Add Subjects</a></li>
                                <li><a href="subject.php?source=subject_list"><i class="fa fa-fw fa-bars"></i> Subjects List</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-university"></i> <span> Class</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="class.php?source=update_class"><i class="fa fa-fw fa-plus"></i> Update Class</a></li>
                                <li><a href="class.php?source=class_list"><i class="fa fa-fw fa-bars"></i> Class List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="teacher.php?source=teacher_list"><i class="fa fa-user-plus"></i> <span>Teachers</span></a>
                        </li>
                        <li>
                            <a href="course.php"><i class="fa fa-user-plus"></i> <span>Add Course</span></a>
                        </li>
                        <li>
                            <a href="download.php"><i class="fa fa-download"></i> <span>Download Course</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-trophy"></i> <span> mark</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="marks.php?source=std_list"><i class="fa fa-edit"></i> Add mark</a></li>
                                <li><a href="marks.html"><i class="fa fa-bars"></i> mark Manage </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-envelope"></i> <span> Email</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="mail.html">Mail list</a></li>
                                <li><a href="mail.html">Compose Mail</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-cog"></i> <span>Settings</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="login.html"><i class="fa fa-user"></i> User info </a></li>
                                <li><a href="change-password2.html"><i class="fa fa-lock"></i> Change Password </a></li>
                                <li><a href="notification.php"><i class="fa fa-bell"></i> Notifications </a></li>
                                <li><a href="lock-screen.html"><i class="fa fa-sign-out"></i> Logout </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
</div>