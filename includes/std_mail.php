<?php

$student_info = student::find_student_by_id($get_the_id);


?>
<!-- chat -->
<div class="chat-main-row">
                <div class="chat-main-wrapper">
                    <div class="col-lg-9 message-view chat-view">
                        <div class="chat-window">
                            <form action="" method="POST">
                            <div class="chat-footer">
                                <div class="message-bar">
                                    <div class="message-inner">
                                        <a class="link attach-icon" href="#" data-toggle="modal" data-target="#drag_files"><img src="assets/img/attachment.png" alt=""></a>
                                        <div class="message-area">
                                            <div class="input-group">
                                                <textarea class="form-control" placeholder="Type message..." name="mail_txt"></textarea>
                                                <span class="input-group-append">
													<button class="btn btn-primary" name="save_mail1"><i class="fa fa-send"></i></button>
												</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <div class="chat-contents">
                                <div class="chat-content-wrap">
                                     <p class="text-center">historique</p>
                                  
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 message-view chat-profile-view chat-sidebar" id="chat_sidebar">
                        <div class="chat-window video-window">
                            <div class="tab-content chat-contents">
                                <div class="content-full tab-pane show active" id="profile_tab">
                                    <div class="display-table">
                                        <div class="table-row">
                                            <div class="table-body">
                                                <div class="table-content">
                                                    <div class="chat-profile-img">
                                                        <div class="edit-profile-img">
                                                            <img src="assets/img/user.jpg" alt="">
                                                            <span class="change-img">Change Image</span>
                                                        </div>
                                                        <h3 class="user-name m-t-10 mb-0"><?php echo $student_info['student_name'];?></h3><br>
                                                        <div class="text-muted"><p>Branch : <span><?php echo $student_info['student_branch'];?></span> </p></div>
                                                        <div class="text-muted"><p>Level : <span><?php echo $student_info['student_level'];?></span></p></div>
                                                        <a href="actions.php?action=edit_student&get_id=<?php echo $student_info['student_id'] ?>" class="btn btn-primary edit-btn"><i class="fa fa-pencil"></i></a>
                                                    </div>
                                                    <div class="chat-profile-info">
                                                        <ul class="user-det-list">
                                                            <li>
                                                                <span>Username:</span>
                                                                <span class="float-right text-muted"><?php echo $student_info['student_name'];?></span>
                                                            </li>
                                                            <li>
                                                                <span>DOB:</span>
                                                                <span class="float-right text-muted"><?php echo $student_info['student_birthday'];?></span>
                                                            </li>
                                                            <li>
                                                                <span>Email:</span>
                                                                <span class="float-right text-muted"><?php echo $student_info['student_email'];?></span>
                                                            </li>
                                                            <li>
                                                                <span>Phone:</span>
                                                                <span class="float-right text-muted"> <?php echo $student_info['student_phone'];?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 </div>
<!-- end -->
