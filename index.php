<!DOCTYPE HTML>
<!--
	Photon by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>Photon by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	<style>
		#menuToggle {
			position: fixed;
			top: 20px;
			right: 20px;
			z-index: 1001;
			background-color: #fff;
			padding: 10px 15px;
			border-radius: 8px;
			box-shadow: 0 2px 6px rgba(0,0,0,0.2);
			cursor: pointer;
			font-size: 1.5em;
			user-select: none;
		}

		#navMenu {
			position: fixed;
			top: 70px;
			right: 20px;
			z-index: 1000;
			display: none;
			background: rgba(255, 255, 255, 0.95);
			padding: 15px;
			border-radius: 10px;
			box-shadow: 0 2px 6px rgba(0,0,0,0.2);
		}

		#navMenu ul {
			list-style: none;
			margin: 0;
			padding: 0;
		}

		#navMenu ul li {
			margin: 10px 0;
		}

		#navMenu ul li a {
			text-decoration: none;
			color: #333;
			font-weight: bold;
		}
	</style>
</head>
<body class="is-preload">

	<!-- Hamburger Button -->
	<div id="menuToggle">☰</div>

	<!-- Toggle Menu -->
	<nav id="navMenu">
		<ul>
			<li><a href="#header">首頁</a></li>
			<li><a href="#one">自傳</a></li>
			<li><a href="#two">興趣測驗</a></li>
			<li><a href="#three">MIS介紹</a></li>
			<li><a href="#four">興趣工作</a></li>
		</ul>
	</nav>

	<!-- 其餘內容從 header 開始 -->
	<section id="header">
		<div class="inner">
			<img src="images/notebook.png" alt="Notebook" style="width: 80px; height: auto;" />
			<h1><strong>林宜潔的個人網站</strong></h1>
			<p>我不確定未來在哪，但我願意努力走過每一步。</p><br/>
			<div class="social-vertical">
				<ul class="icons">
					<li><a href="https://www.facebook.com/profile.php?id=100009641599571" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/k._16l/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="https://github.com/kmbij/lyj" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="email.html" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
				</ul>
			</div>
			<ul class="actions special">
				<li><a href="#one" class="button scrolly">Discover</a></li>
			</ul>
		</div>
	</section>

	<!-- Section One：自傳 -->
	<section id="one" class="main style1">
		<div class="container">
			<div class="row gtr-150">
				<div class="col-6 col-12-medium">
					<header class="major"><h2>自傳</h2></header>
					<p style="font-size: 1.3em;">
						我是靜宜大學資訊管理系的林宜潔，興趣是運動、遊戲、唱歌。<br />
						我正在學習如何運用 HTML、CSS、JavaScript 打造自己的網站，透過實作累積更多作品與實力。<br /><br />
						對於未來的發展還在摸索中，但我相信只要不斷學習與嘗試，一定能走出屬於自己的路。
					</p>
				</div>
				
				<div class="col-6 col-12-medium imp-medium">
					<span class="image fit"><img src="images/林宜潔2.jpg" alt="我的照片" style="width: 70%; height: auto;" /></span>
				</div>
			</div>
		</div>
	</section>

	<!-- Section Two：興趣測驗 -->
	<section id="two" class="main style1 special" style="background-image: url('images/background.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
		<div class="container">
			<header class="major"><h2>我的生涯興趣測驗</h2></header>
			<p style="font-size: 1.5em;">R 實做型、I 研究型、A 藝術型、S 社會型、E 企業型、C 事務型</p>
			<div class="row gtr-150">
				<div class="col-6 col-11-medium">
					<span class="image fit"><img src="images/interest3.png" alt="生涯興趣圖片" /></span>
					<h3 style="font-size: 1.8em;">C 事務型 & R 實做型</h3>
					<ul class="actions special"><li><a href="interest1.html" class="button">More</a></li></ul>
				</div>
				<div class="col-6 col-12-medium">
					<span class="image fit"><img src="images/interest2.png" alt="生涯興趣圖片" /></span><br/>
					<h3 style="font-size: 1.8em;">最常從事的職務是......</h3>
					<ul class="actions special"><li><a href="interest2.html" class="button">More</a></li></ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Section Three：MIS介紹 -->
	<section id="three" class="main style2">
		<div class="container">
			<div class="row gtr-150">
				<div class="col-6 col-12-medium">
					<ul class="major-icons">
						<li><span class="icon solid style1 major fa-code"></span></li>
						<li><span class="icon solid style2 major fa-bolt"></span></li>
						<li><span class="icon solid style3 major fa-camera-retro"></span></li>
						<li><span class="icon solid style4 major fa-cog"></span></li>
						<li><span class="icon solid style5 major fa-desktop"></span></li>
						<li><span class="icon solid style6 major fa-calendar"></span></li>
					</ul>
				</div>
				<div class="col-6 col-12-medium">
					<header class="major">
						<h2><strong>關於 MIS 工作</strong></h2><br/>
						<p style="font-size: 1.5em;"><strong>主要工作</strong>：負責企業內部資訊系統建置與維護，如伺服器、網路與資料安全。</p><br/>
						<p style="font-size: 1.5em;"><strong>需求能力</strong>：具備IT基礎、資料庫管理、系統分析、問題解決能力。</p><br/>
						<p style="font-size: 1.5em;"><strong>相關證照</strong>：如MCSA、MCSE、CCNA等，有助提高薪資。</p><br/>
						<p style="font-size: 1.5em;"><strong>平均薪資</strong>：會依年資而有所不同。</p><br/>
						<p style="font-size: 1.5em;"><strong>未來發展</strong>：可轉職為資安、系統架構師或資訊主管。</p><br/>
					</header>
					<ul class="actions special" style="margin-left: -190px;">
						<li><a href="https://careermaster.1111.com.tw/detail/140402/" class="button wide" target="_blank">Learn More</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Section Four：興趣工作 -->
	<section id="four" class="main style2 special" style="padding-top: 1em;">
		<div class="container">
			<header class="major"><h2>關於自己最有興趣的MIS相關工作</h2></header>
			<ul class="actions special">
				<li><a href="job.html" class="button wide primary">Click</a></li>
			</ul>
		</div>
	</section>


	<!-- Footer -->
	<section id="footer">
		<ul class="copyright"><li>&copy; LYJie</li></ul>
	</section>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script>
		document.getElementById("menuToggle").addEventListener("click", function () {
			var menu = document.getElementById("navMenu");
			if (menu.style.display === "block") {
				menu.style.display = "none";
			} else {
				menu.style.display = "block";
			}
		});
	</script>
</body>
</html>
