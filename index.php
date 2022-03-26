<?php include 'includes/db.inc.php' ?>
<?php include 'includes/user.inc.php' ?>
<?php include 'includes/viewuser.inc.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <center>
            <div class="row w-100">
                <div class="col">
                    <h1>This a test database Connection</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2>
                        <?php
                            $users = new ViewUser();
                            $users->showAllUsers();                            
                        ?>

                    </h2>
                </div>
            </div>
        </center>
    </div>    

</body>
</html>