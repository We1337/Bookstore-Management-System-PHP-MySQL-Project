<?php
    include("includes/header.php");
    include("../includes/connection.php");
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h2>Section title</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full name</th>
                        <th scope="col">User name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Password</th>
                        <th scope="col">s</th>
                        <th scope="col">s</th>
                    </tr>
                </thead>

                <?php

                    $search = $_GET['search'];
                    $blq = "SELECT * FROM `book_table` WHERE `book_name` LIKE '%$search%'";
                    $blres = mysqli_query($connection_database, $blq);

                    $count = 1;

                    while($book_row = mysqli_fetch_assoc($blres))
                    {
                        echo '
                            <tr>
                                <td>'.$count.'</td>
                                <td>'.$book_row['book_name'].'</td>
                                <td>'.$book_row['book_category'].'</td>
                                <td>'.$book_row['book_price'].'</td>';

                        echo "  <td width='120'><center><img src='../$book_row[book_img]' width='50' height='70'></center></td>";
                                                      
                        echo '
                                <td>'.@date("d-M-y",$book_row['book_time']).'</td>
                                <td align="center"><a class="btn btn-danger btn-sm" href="process_book_del.php?id='.$book_row['book_id'].'">Delate</a></td>
                                <td align="center"><a class="btn btn-info btn-sm" href="book_edit.php?id='.$book_row['book_id'].'">Edit</a></td>
                            </tr>';
                                
                            $count++;
                    }
                ?>
        


          
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
              <td>text</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


        <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    </body>
</html>