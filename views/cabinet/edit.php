<?php include ROOT.'./views/layouts/header.php' ?>
        <div class="wrapper">

            <div class="content" style="width:100%;height:80vh;">
                <?php if($result) : ?>
                    <p>Profile edited!</p>
                <?php else : ?>
                    <?php if (isset($errors) && is_array($errors)) : ?>

                        <ul>
                            <?php foreach($errors as $error) :  ?>
                                <li class="error"> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>

                    <?php endif; ?>
                <?php endif; ?>

                <h2 style="width:100%;text-align:center;">EDIT PERSONAL INFO</h2>
                <form class="registerForm" action="#" method="post">
                    <p style="width:100%;text-align:center;">Name:</p><input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>" required>
                    <p style="width:100%;text-align:center;">Password:</p><input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>" required>
                    <button type="submit" name="submit" class="registerButton">Change</button>
                </form><br><br>
            </div>
        </div>
