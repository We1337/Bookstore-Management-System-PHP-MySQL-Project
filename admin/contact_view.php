<?php
    include("includes/header.php");
    include("../includes/connection.php");
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Contact</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Contact List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Mobile No</th>
                                            <th>E-Mail Address</th>
                                            <th>Message</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $book_q = "SELECT * FROM contact";

                                            $book_res = mysqli_query($link, $book_q);

                                            $count = 1;

                                            while($book_row = mysqli_fetch_assoc($book_res))
                                            {
                                                echo '
                                                    <tr class="odd gradeX">
                                                        <td>'.$count.'</td>
                                                        <td>'.$book_row['c_fnm'].'</td>
                                                        <td>'.$book_row['c_mno'].'</td>
                                                        <td>'.$book_row['c_email'].'</td>
                                                        <td>'.$book_row['c_msg'].'</td>
                                                        <td>'.@date("d-M-y",$book_row['c_time']).'</td>
                                                        <td align="center"><a style="color: red;" href="process_contact_del.php?id='.$book_row['c_id'].'">x</a></td>
                                                    </tr>';
                                                $count++;
                                            }

                                        ?>
                                            
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div> 
        </div>
        <!-- /#page-wrapper -->
<?php
    include("includes/footer.php");
?>