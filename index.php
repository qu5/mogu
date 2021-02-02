<?php
ini_set('display_errors','Off');

function get_file($file){
    $data=file_get_contents($file);
    $linkList=array();
    $lines=explode("\n",$data);
    foreach ($lines as $line) {
        if (strlen($line)==0) continue;
        $detail = str_replace("\r", '', $line);
        array_push($linkList, $detail);
    }
    return $linkList;
}

function echo_link($list){
    for ($x = 0; $x <= count($list); $x++) {
        if ($list[$x]=="box"){
            $x++;
            echo '<section class="item card-box" id="row-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="item-tit">
                            <strong><i class="'.$list[$x+1].'"></i><a name="'.$list[$x].'"></a>'.$list[$x].'</strong>
                        </div>
                        <div class="clearfix two-list-box">
                        ';
            $x++;
            
        }else if ($list[$x]=="endbox"){
            echo '</div></div></div></section>';
        }else if ($list[$x]!=""){
            echo '<div class="col-md-3 col-sm-4 col-xs-6">
                                <a href="'.$list[$x+1].'" class="card-link" target="_blank">
                                <div class="card-tit">'.$list[$x].'</div>
                                <div class="card-desc">'.$list[$x+1].'</div>
                                </a>
                            </div>';
            $x++;
        }
    }
}

function echo_nav($list){
    for ($x = 0; $x <= count($list); $x++) {
        if ($list[$x]!=""){
            echo '<li><a href="'.$list[$x+1].'">'.$list[$x].'</a></li>';
            $x++;
        }
    }
}




?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<!-- Header -->
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>蘑菇导航</title>
<meta name="keywords" content="蘑菇导航,网址导航"/>
<meta name="description" content="这是一个简简单单的网址导航。"/>

<link rel="icon" href="/img/logo.png">

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/zui@1.9.2/dist/css/zui.lite.min.css">
<link rel="stylesheet" href=" css/style.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/all.min.css">

</head>
<body id="nav_body">
<div id="content">
    <!-- Left Bar -->
    <div class="left-bar">
        <div class="header">
            <h2>思维导图</h2>
        </div>
        <div class="menu" id="menu">
            <ul class="scrollcontent">
                <!-- Left Nav -->
                <?php
                    $list_nav=get_file("nav.txt");
                    echo_nav($list_nav);
                ?>
            </ul>
        </div>
    </div>
    <!-- Content -->
    <div class="main">
        <div class="container content-box">
            <!-- Search -->
            <section class="sousuo">
            <div class="search">
                <div class="search-box">
                    <button class="search-engine-name" id="search-engine-name">Google</button>
                    <input type="text" id="txt" class="search-input" placeholder="Hello World !"/>
                    <button class="search-btn" id="search-btn"><i class="fa fa-search"></i></button>
                </div>
                <!-- Engine  -->
                <div class="search-engine">
                    <div class="search-engine-head">
                        <strong class="search-engine-tit">Select Search Engine：</strong>
                    </div>
                    <ul class="search-engine-list">
                    </ul>
                </div>
            </div>
            </section>
            <!-- Links -->
            <?php
              $list_link=get_file("links.txt");
              echo_link($list_link);
            ?>
            <!-- Footer -->
            <footer class="footer">
            <div class="container">
                <div class="rwo">
                    <div class="col-md-12">
                        <p>
                            自豪的采用 <a href="https://github.com/qu5/nav">简单导航</a> 构建
                        </p>
                    </div>
                </div>
            </div>
            </footer>
        </div>
        <!-- Content -->
    </div>
    <div id="get-top" title="回到顶部">
        ☝
    </div>
    
    <!-- jQuery (ZUI Require jQuery) -->
    <script src="//cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

    <script src="js/main.js"></script>
    
</div>
</body>
</html>
