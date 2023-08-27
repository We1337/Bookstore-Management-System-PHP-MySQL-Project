<?php
    include("includes/header.php");
?>

<div id="contact">
    <div class="post">
        <h2 class="title"><a href="#">Forget Password</a></h2>
        <p class="meta"></p>
        <div class="entry">
            <?php
                if(!empty($_SESSION['error']))
                {
                    foreach($_SESSION['error'] as $er)
                    {
                        echo '<font color="red">'.$er.'</font><br>';
                    }
                    unset($_SESSION['error']);
                }
            ?>
            <form class="login" action="forget_password_process.php" method="post">
                User Name:<br>
                <?php
                    if(isset($_SESSION['error']['unm']))
                    {
                        echo '<font color="red">'.$_SESSION['error']['unm'].'</font>';
                    }
                ?>
                <input type="text" name="unm" class="txt"><br><br>

                Security Question :<br>
                <select name="question" class="txt">
                    <option>Which is your Favourite Movie?</option>
                    <option>What is your Favourite Actress?</option>
                </select>
                <br><br>

                Security Answer :<br>
                <input type="text" name="answer" class="txt">
                <?php
                    if(isset($_SESSION['error']['answer']))
                    {
                        echo '<font color="red"'.$_SESSION['error']['answer'].'</font>';
                    }
                ?>
                <br><br>

                New Password :<br>
                <input type="text" name="pwd" class="txt">
                <br><br>

                Confirm New Password :<br>
                <input type="password" name="cpwd" class="txt"><br><br>

                <input type="submit" class="btn" value="Change Password">
            </form>
        </div>
    </div>
</div>

<?php
    include("includes/footer.php");
?>