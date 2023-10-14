<?php
    include("includes/header.php");
?>
  
    <main role="main" class="container">

        <div class="my-3 p-3 bg-white rounded box-shadow">

            <h6 class="border-bottom border-gray pb-2 mb-0">Backup panel</h6>

            <div class="media pt-3">
                <a href="includes/backup.php" class="btn btn-primary btn-sm"><strong>Backup</strong></a>
            </div>

            <br>

            <form action="includes/recover_backup.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Recover backup</label>
                    <input class="form-control form-control-sm" name="file" type="file">
                    <br>
                    <button class="btn btn-primary btn-sm" type="submit">Upload</button>
                </div>
            </form>

        </div>

    </main>

<?php
    include("includes/footer.php");
?>