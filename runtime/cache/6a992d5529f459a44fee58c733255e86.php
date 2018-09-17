<!doctype html>
<html>
<head>
    <title>小风筝_个性自定义</title>
    <meta charset="utf-8">
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/groupkit.css">
    <link rel="stylesheet" type="text/css" href="js/vendors/slick/slick.css"/>
</head>
<body class="home">
    <div class="status-bar">
    <div class="content">
        <div class="order">
            <span class="title">BateVersion-0.1</span>
                <span class="percentage">
                    <span class="bar" style="width: 20%"></span>
                </span>
            <span>20%</span>
        </div>
        <div class="cboth"></div>
    </div>
</div>
<div class="header">
    <h1><a href="#">小风筝</a></h1>
</div>
    <div class="main">
        <div class="content">
            <ul class="entry-points">
                <li class="first-li">
                    <a href="#">
                        <span class="icon"><i class="fa fa-fw">&#xf031;</i></span>
                        <span class="title">网名</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-fw">&#xf007;</i></span>
                        <span class="title">头像</span>
                    </a>
                </li>
                <li class="last-li">
                    <a href="#">
                        <span class="icon"><i class="fa fa-fw">&#xf040;</i></span>
                        <span class="title">签名</span>
                    </a>
                </li>
                <li class="last-li">
                    <a href="#">
                        <span class="icon"><i class="fa fa-fw">&#xf03e;</i></span>
                        <span class="title">封面</span>
                    </a>
                </li>
                <div class="cleft"></div>
                <li class="last-li">
                    <a href="#">
                        <span class="icon"><i class="fa fa-fw">&#xf028;</i></span>
                        <span class="title">动态</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-fw">&#xf075;</i></span>
                        <span class="title">评论</span>
                    </a>
                </li>
                <li class="last-li">
                    <a href="template-double.php">
                        <span class="icon"><i class="fa fa-fw">&#xf002;</i></span>
                        <span class="title">发现</span>
                    </a>
                </li>
                <li class="last-li">
                    <a href="#">
                        <span class="icon"><i class="fa fa-fw">&#xf085;</i></span>
                        <span class="title">自定义</span>
                    </a>
                </li>
                <div class="cleft"></div>
            </ul>
            <div class="carousel">
                <div class="stage">
                    <div class="slide slide-1">
                        <?php foreach($netname as $k=>$r): ?>
                            <div style="width: 50%;font-size:18px ;font-weight: bold;text-align: center;float: left;margin-bottom: 25px;">
                            <?php echo $r['name']; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="slide slide-2">
                        <?php foreach($headpic as $k=>$r): ?>
                            <div style="width: 50%;text-align: center;float: left;margin-bottom: 25px;">
                            <img src="<?php echo $r['headpic']; ?>" style="width: 140px;height: 140px;margin-left: auto;margin-right: auto;" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="slide slide-3">
                        <?php foreach($sign as $k=>$r): ?>
                            <div style="font-size:18px ;font-weight: bold;text-align: left;margin-bottom: 25px;">
                            <?php echo $r['sign']; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="slide slide-4">
                   
                    </div>
                    <div class="slide slide-5">
                        
                    </div>
                    <div class="slide slide-6">
                        
                    </div>
                </div>
                <a href="#" id="price-tag" style="opacity: 0">
                    <span class="hand"><i class="fa fa-fw">&#xf0a4;</i></span>
                    <span class="click">换一批</span>
                    <span class="click-short">Click here</span>
                </a>
            </div>
 
        </div>
    </div>
    <div class="footer">
    <div class="content">
        <div class="copy">
            <p>小风筝是一个专业、强大的个性定制网站.</p>
        </div>
        <ul class="company-details">
            <li class="first-li">&copy; 2018 小风筝</li>
            <li>QQ: <a href="qq:+1026431088@qq.com" class="telephone"><span>1026431088</span></a></li>
            <li class="last-li">WeChat：<a href="wechat:yankuan2018">yankuan2015</a></li>
        </ul>
        <div class="cboth"></div>
    </div>
</div>
<script src="js/vendors/jquery-1.9.1.min.js"></script>
<script src="js/groupkit.js"></script>
    <script src="js/vendors/slick/slick.js"></script>
</body>
</html>