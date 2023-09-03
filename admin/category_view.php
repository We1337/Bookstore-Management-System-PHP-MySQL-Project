<?php
    include("includes/header.php");
    include("../includes/connection.php");
?>
        <div class="container">
            <div class="post">
                <br>
                <h2 class="title text-center">View Category</h2>
                <div class="text-center"><strong>Category List</strong></div>
                        
                <table class="table" cellspacing="0" border="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
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
                                        <td>
                                            <a class="btn btn-info btn-sm" href="category_edit.php?id='.$cat_row['cat_id'].'">Edit</a> &nbsp;&nbsp;
                                            <a class="btn btn-danger btn-sm" href="process_category_del.php?id='.$cat_row['cat_id'].'">Delate</a>
                                        </td>
                                    </tr>';

                                $count++;
                            }
                            
                        ?>
                                            
                    </tbody>
                </table>
            </div>
        </div>

<?php
    include("includes/footer.php");
?>