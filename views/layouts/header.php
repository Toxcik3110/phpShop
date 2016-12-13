<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- <link rel="stylesheet" href="./template/css/master.css"> -->
        <style>
        body {
            padding: 0;
            border: 0;
            margin: 0;
        }
        .header {
            width: 100%;
            height: 20vh;
            background-color: #ffaa55;
        }
        .wrapper {
            width: 100%;
            background-color: #55aaff;
        }
        .sidebar, .content {
            float: left;
            padding: 0;
            /*border: none;*/
        }
        .sidebar {
            width: 15%;
            background-color: #88dd44;
        }
        .content {
            width: 85%;
            background-color: #55aaff;
        }
        .clearfix {
            clear:both;
        }
        .footer {
            height: 10vh;
            width: 100%;
            background-color: #ffff99;
        }
        .title {
            font-size: 30pt;
            text-align: center;
            padding: 20px 0 20px 0;
        }
        .subTitle {
            font-size: 20pt;
            text-align: center;
            padding: 10px 0 10px 0;
        }
        .elemV {
            width: 100%;
            height: 5vh;
            padding: 10px 0;
            text-align: center;
        }
        .elemC {
            width: 25%;
            height: 10vh;
            padding: 50px 4%;
            text-align: center;
            display: inline-block;
        }
        a {
            text-decoration: none;
            color: black;
        }
        .pagination{
            display: inline-block;
            width: 20px;
            padding: 15px;
            text-align: center;
            font-size: 20pt;
            margin:10px;
            background-color: #ffffff;
        }
        .active {
            background-color: #ffaa55;
        }
        .registerForm>input, .registerForm>button {
            display: block;
            margin: 10px auto;
            font-size: 16pt;
        }
        ul .error {
            list-style-type: none;
            background-color: rgba(255, 0, 0, 0.54);
            width: 20%;
            font-size: 15pt;
            padding: 20px;
        }
        .headerElems {
            width: 40%;
            margin: 0 0 0 55%;
            padding: 20px;
        }
        .headerElems>li {
            display: inline;
            width: 10%;
            margin: 0 30px;
        }
        </style>
    </head>
    <body>
        <!-- header -->
        <!-- sidepanel -->
        <div class="header">
            <div class="title">
                <ul class="headerElems">
                    <li><a href="#">Cart</a></li>
                    <?php if(User::isGuest()): ?>
                    <li><a href="/test/user/login">Log in</a></li>
                    <?php else: ?>
                    <li><a href="/test/cabinet/">Dashboard</a></li>
                    <li><a href="/test/user/logout">Log out</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
