<!DOCTYPE html>
<html>
	<head>
		<meta name="renderer" content="webkit" charset="utf-8">
		<meta name="author" content="Retaker">
		<meta name="keywords" content="let me baidu that for you, 让我帮你百度一下, baidu, retaker,i@retaker.me">
		<meta name="description" content="有趣的网页,装逼必备,让我帮你百度一下！,调戏小伙伴">
		<script src=killie.js></script>
		<title>让我帮你百度一下</title>
		<?php if($_GET["q"]==""){ ?>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<script type="text/javascript" src="ZeroClipboard.min.js"></script>
		<center style="margin-top:50px;">
			<div id="logo">
				<span>let me</span><span style="display:none;">baidu</span>
				<img src="bdlogo.png" id="bdlogo"/>
				<span>that for you</span>
			</div>
			<div style="height:43px;margin-top:-25px;">
				<input type="text" id="bds" autocomplete="off" maxlength="100" />
				<span class="btn_wr"><input type="submit" value="百度一下" id="su1" class="btn" onmousedown="this.className='btn btn_h'" onmouseout="this.className='btn'" onclick="showResultURL();"></span>
			</div>
			<div id="instructions">输入你的问题，然后点击 “百度一下”</div>
			<div id="link">
				<input id="resultOut" class="link copyable" readonly type="text" value="http://lmbtfy.retaker.me/?q=xxx"/>
				<div id="link_buttons"><a class="link_button" id="copy" href="#" data-clipboard-target="resultOut">复制</a>
				<a class="link_button" href="#" onclick="location.href=document.getElementById('resultOut').value;">预览</a></div>
			</div>
		</center>
		<script type="text/javascript" src="index.js"></script>
		<?php }else{ ?>
		<link rel="stylesheet" type="text/css" href="action.css">
	</head>
	<body>
		<script src="action.js"></script>
		<img id="mouse" src="mouse.png" style="position:absolute;top:0.0px;left:0.0px;z-index:99999999999;"/>
		<center style="margin-top:50px;">
			<div id="logo">
				<span>let me</span>
				<img src="bdlogo.png" id="bdlogo"/>
				<span>that for you</span>
			</div>
			<div style="height:43px;margin-top:-25px;">
				<input type="text" id="bds" autocomplete="off" readonly maxlength="100" />
				<span class="btn_wr"><input type="submit" value="百度一下" class="btn"></span>
			</div>
			<div id="instructions">首先，打开百度</div>
		</center>
		<?php } ?>
		<footer>
		<div style="display:none;">
		<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253017589'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1253017589%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
		</div>
		© 2014 retaker.me <a href="https://github.com/tutugreen/lmbtfy/">Github</a><br />
		本站与百度公司没有任何联系，baidu以及本站出现的百度公司Logo是百度公司的商标。<br />
		copyleft, all rights reversed.
	</footer>
	</body>
</html>
