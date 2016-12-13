<?php include ROOT.'./views/layouts/header.php' ?>
        <div class="wrapper">

            <div class="content" style="width:100%;height:80vh;">

                <h2 style="width:100%;text-align:center;">Dashboard</h2>
                <h3 style="width:100%;text-align:center;">Hello, <?php echo $user['name']; ?>!</h3>
                <ul>
                    <li><a href="/test/cabinet/edit">Edit personal data</a></li>
                    <li><a href="/test/user/history">Billing history</a></li>
                </ul>
            </div>
        </div>
