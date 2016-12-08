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
        }
        .sidebar, .content {
            float: left;
            padding: 0;
            /*border: none;*/
            height: 80vh;
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
        </style>
    </head>
    <body>
        <!-- header -->
        <!-- sidepanel -->
        <div class="header">
            <div class="title">
                header
            </div>
        </div>
        <div class="wrapper">
            <div class="sidebar">
                <div class="title">
                    Категории
                </div>
                <div class="array">
                    <div class="elemV">
                        El1
                    </div>
                    <div class="elemV">
                        El2
                    </div>
                    <div class="elemV">
                        El3
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="title">
                    Content
                </div>
                <div class="array">
                    <div class="elemC">
                        T1
                    </div>
                    <div class="elemC">
                        T2
                    </div>
                    <div class="elemC">
                        T3
                    </div>
                    <div class="elemC">
                        T4
                    </div>
                    <div class="elemC">
                        T5
                    </div>
                    <div class="elemC">
                        T6
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="footer">
            <div class="title">
                footer, 2k16
            </div>
        </div>
        <!-- <footer></footer> -->
    </body>
</html>
