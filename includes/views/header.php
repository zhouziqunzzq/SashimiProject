<div class="headerBar">
	<span class="headerLeft">
		<a href="/"><img src="/img/logo.png" id="headerLogo"/></a>
		<ul class="headerUL">
<?php if(isset($_SESSION['logined'])) echo"			<li class=\"headerLI\"><a href=\"/\" class=\"headerA\" id=\"getFish\">仓库</a></li>"; ?>
<?php if(isset($_SESSION['logined'])) echo"			<li class=\"headerLI\"><a href=\"/\" class=\"headerA\" id=\"fireFish\">扭蛋</a></li>"; ?>
		</ul>
	</span>
	<span class="headerRight">
<?php if(isset($_SESSION['logined'])) echo"		<a href=\"/auth/logout.php\" class=\"headerA\">登出</a>"; else if(strstr($_SERVER["REQUEST_URI"],"/auth/register.php")==NULL) echo"		<a href=\"/auth/register.php\" class=\"headerA\">注册</a>"; ?>
	</span>
</div>