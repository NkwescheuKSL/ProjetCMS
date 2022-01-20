            <!-- student list -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
						<div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Notify_title</th>
                                        <th>Notify_text</th>
                                        <th>Notify_date</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $count=0;
                                    $show_all_notify = notification::find_all_notifications();
                                    while($row = mysqli_fetch_array($show_all_notify)){
                                        $notify_id =  $row['notify_id'];
                                        $notify_title =  $row['notify_title'];
                                        $notify_text =  $row['notify_text'];
                                        $notify_date =  $row['notify_date'];
                                        $count++;
                                    ?> 
                                    <tr>
                                        <td ><h2><?php echo $count ?></h2></td>
                                        <td><?php echo $notify_title ?></td>
                                        <td><?php echo $notify_text ?></td>
                                        <td><?php echo $notify_date ?></td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="actions.php?action=edit_subject&get_id=<?php echo $subject_id ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="subject.php?delete" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
						</div>
                    </div>
                </div>
            </div>
            <!-- end -->