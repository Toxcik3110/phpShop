<?php include ROOT.'./views/layouts/header.php' ?>
        <div class="wrapper">

            <div class="content" style="width:100%;height:80vh;">
                <?php if($result) : ?>
                    <p>Signed up!</p>
                <?php endif; ?>
                <?php if (isset($errors) && is_array($errors) && !$result) : ?>

                    <ul>
                        <?php foreach($errors as $error) :  ?>
                            <li class="error"> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>

                <?php endif; ?>

                <h2 style="width:100%;text-align:center;">REGISTER</h2>
                <form class="registerForm" action="#" method="post">
                    <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>" required>
                    <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" pattern="[a-zA-Z][a-zA-Z0-9]+@[a-z]+.[a-z]+" required>
                    <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>" required>
                    <button type="submit" name="submit" class="registerButton">Sign up</button>
                </form><br><br>
            </div>
        </div>
