<?php
    include("includes/header.php");
    include("../includes/connection.php");
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table action="order_process.php" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $cat_q = "SELECT * FROM category";

                                            $cat_res = mysqli_query($link, $cat_q);

                                            $count = 1;

                                            while($cat_row = mysqli_fetch_assoc($cat_res))
                                            {
                                                echo '
                                                    <tr class="odd gradeX">
                                                        <td>'.$count.'</td>
                                                        <td>'.$cat_row['cat_nm'].'</td>
                                                        <td align="center">
                                                            <a style="color: red;" href="category_edit.php?id='.$cat_row['cat_id'].'">Edit</a> &nbsp;&nbsp;
                                                            <a style="color: red;"  href="process_category_del.php?id='.$cat_row['cat_id'].'">x</a>
                                                        </td>
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