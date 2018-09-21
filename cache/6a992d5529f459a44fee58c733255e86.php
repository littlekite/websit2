<!doctype html>
<html>
<head>
    <title>小风筝_个性自定义</title>
    <meta charset="utf-8">
    <meta name="keywords" content="个性签名，好听的网名，好看的头像，微信封面，最新动态，免费设计" />
    <meta name="description" content="小风筝是一家专业设计个人资料的网站，这里可以找到或者定制个性的网名、头像、签名、封面、评论、留言、动态等等，让你在qq,微信等社交软件或者游戏中个性独特，光彩出众，风格或是有趣的、或是伤感的、或是霸气的、或是搞笑的，自定义自己的style！" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link href="/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/groupkit.css">
<link rel="stylesheet" href="/js/vendors/layui/css/layui.css"  media="all">
</head>
<body class="home">
    <div class="status-bar">
    <div class="content">
        <div class="order">
            <span class="title">欢迎来到小风筝！</span>
        </div>
        <div class="cboth"></div>
    </div>
</div>
<div class="header">
    <h1><a href="/">小风筝</a></h1>
</div>
    <div class="main">
        <div class="content">
            <div class="layui-row layui-col-space15 navi">
                 <div class="layui-col-md12">
                 <div class="layui-row" style="text-align: center;">
                        <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
                            <a href="/">
                                <span class="icon"><i class="fa fa-fw" <?php if(MOUDEL_NAME== 'home'): ?>style="color:#ED227B"<?php endif; ?> >&#xf015;</i></span>
                                <span class="title" <?php if(MOUDEL_NAME== 'home'): ?>style="color:#ED227B"<?php endif; ?>>首页</span>
                            </a>
                        </div>
                        <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
                            <a href="/wangming/">
                                <span class="icon"><i class="fa fa-fw" <?php if(MOUDEL_NAME== 'wangming'): ?>style="color:#ED227B"<?php endif; ?>>&#xf031;</i></span>
                                <span class="title" <?php if(MOUDEL_NAME== 'wangming'): ?>style="color:#ED227B"<?php endif; ?>>网名</span>
                            </a>
                        </div>
                        <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
                            <a href="/touxiang/">
                                <span class="icon"><i class="fa fa-fw" <?php if(MOUDEL_NAME== 'touxiang'): ?>style="color:#ED227B"<?php endif; ?>>&#xf007;</i></span>
                                <span class="title" <?php if(MOUDEL_NAME== 'touxiang'): ?>style="color:#ED227B"<?php endif; ?>>头像</span>
                            </a>
                        </div>
                        <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
                            <a href="/qianming/">
                                <span class="icon"><i class="fa fa-fw" <?php if(MOUDEL_NAME== 'qianming'): ?>style="color:#ED227B"<?php endif; ?>>&#xf040;</i></span>
                                <span class="title" <?php if(MOUDEL_NAME== 'qianming'): ?>style="color:#ED227B"<?php endif; ?>>签名</span>
                            </a>
                        </div>
                 </div>
                 <div class="layui-row" style="text-align: center;">
                        <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
                            <a href="#">
                                <span class="icon"><i class="fa fa-fw">&#xf03e;</i></span>
                                <span class="title">封面</span>
                            </a>
                        </div>
                        <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
                            <a href="#">
                                <span class="icon"><i class="fa fa-fw fa-drupal"></i></span>
                                <span class="title">表情</span>
                            </a>
                        </div>
                        <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
                            <a href="#">
                                <span class="icon"><i class="fa fa-fw fa-stumbleupon-circle"></i></span>
                                <span class="title">搭配</span>
                            </a>
                        </div>
                        <div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
                            <a href="#">
                                <span class="icon"><i class="fa fa-fw">&#xf085;</i></span>
                                <span class="title">自定义</span>
                            </a>
                        </div>
                 </div>
                 </div>
            </div>
        </div>
        <div class="content">
               <div class="layui-row layui-col-space5">
                <div class="layui-col-md12">
                  <div class="layui-card">
                    <div class="layui-card-header">网名</div>
                    <div class="layui-card-body" style="font-size: 16px;">
                      <?php foreach($netname as $k=>$r): ?>
                        <?php if($k%4==0): ?>
                        <div class="layui-row" style="margin: 15px;">
                        <div class="layui-col-xs6 layui-col-sm4 layui-col-md3">
                        <?php echo $r['name']; ?>
                        </div>
                        <?php else: ?>
                        <div class="layui-col-xs6 layui-col-sm4 layui-col-md3">
                        <?php echo $r['name']; ?>
                        </div>
                        <?php endif; ?>
                        <?php if($k%4==3): ?>
                        </div>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>
               <div class="layui-row layui-col-space5">
                <div class="layui-col-md12">
                  <div class="layui-card">
                    <div class="layui-card-header">头像</div>
                    <div class="layui-card-body">
                        <?php foreach($headpic as $k=>$r): ?>
                            <?php if($k%4==0): ?>
                            <div class="layui-row layui-col-space10" style="margin-bottom: 15px;">
                            <div class="layui-col-xs6 layui-col-sm4 layui-col-md3">
                            <img src="<?php echo $r['headpic']; ?>" style="width: 150px;height: 150px;margin-left: auto;margin-right: auto;" />
                            </div>
                            <?php else: ?>
                            <div class="layui-col-xs6 layui-col-sm4 layui-col-md3">
                            <img src="<?php echo $r['headpic']; ?>" style="width: 150px;height: 150px;margin-left: auto;margin-right: auto;" />
                            </div>
                            <?php endif; ?>
                            <?php if($k%4==3): ?>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>
               <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                  <div class="layui-card">
                    <div class="layui-card-header">签名</div>
                    <div class="layui-card-body">
                        <?php foreach($sign as $k=>$r): ?>
                            <div style="font-size:18px ;font-weight: bold;text-align: left;margin-bottom: 25px;">
                            <?php echo $r['sign']; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                  </div>
                </div>
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
            <li class="last-li">时间轴：<a href="/others/timeshaft.html">大事记</a></li>
        </ul>
        <div class="cboth"></div>
    </div>
</div>
<script src="/js/vendors/layui/layui.js" charset="utf-8"></script>
</body>
</html>