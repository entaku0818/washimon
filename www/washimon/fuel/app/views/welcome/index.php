<!DOCTYPE html>

<html lang="">
	<head>
		<meta charset="UTF-8">
		<title>わしもん</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html"></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li＞
					</ul>
						<li><a href="/YesNo">アンケート</a></li＞
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>〜働く人こそ、健康に〜</h2>
				<p>身体のコンディションが仕事のパフォーマンスを決める</p>
				<div id="call-to-action">
               <div class="helper">
                    <ul> <li>
                            <a href="#contact" class="call-to-button-transparent scroll">お問い合わせ</a>
													</li>
                    </ul>
               </div>
          </div>

			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h3>働く人ほど、不調を抱えがち<br>理由は、自身の健康に対し</h3>
						<p>
							⑴時間がない<br>							⑵どこに行けば良いか不明、探すのも面倒<br>							⑶費用をかけ（られ）ない<br>
						</p>

						身体の不調が生産性を下げると訴える
						ビジネスパーソンが増えている

						Q.どんな不調に悩んでいるか
						腰痛
						肩こり・頭痛
						疲労感・不眠

						Q.仕事にどんな影響が出るか
						集中できない
						気が散る
						イライラする



					</header>

				</div>
			</section>



		<!-- Two -->
			<section id="two" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>トレーナー紹介</h2>
						<p>わしもんに所属するプロフェッショナル</p>
					</header>
					<section class="profiles">
						<div class="row">
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/KuboWataru.png" alt="" />
								<h4>久保　亘</h4>
								<br><br><br>
								<p>パーソナルトレーナー<br>
									人の身体の歪みをみて調整できる強みを生かし、正しい歩き方、姿勢、身体の使い方などその人に合った調整方法で、体重などの数値を結果として提供している。

</p>
							</section>
							<section class="3u 6u$(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Comming Soon!</h4>
								<p></p>
							</section>
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Comming Soon!</h4>
								<p></p>
							</section>
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Comming Soon!</h4>
								<p></p>
							</section>
						</div>
					</section>
					<footer>

					</footer>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>会社案内</h2>
					</header>
				</div>
				<div class="container 50%">
						<div class="row uniform">
							<div class="12u$">
								<div class="company columns">【組織名】</div>
								<div class="company values">調律治療院</div>
								<div class="company columns">【代表者】</div>
								<div class="company values">高　真聖 </div>
								<div class="company columns">【所在地・連絡先】</div>
								<div class="company values">所在地　大和市中央林間4-15-15-604</div>
								<div class="company values">TEL　080-3344-9459　 担当 松田</div>
								<div class="company values">Mail　info@washimon.com</div>

								<div class="company columns">【ホームページ】</div>
								<div class="company values">http://www.washimon.com/</div>
								<div class="company columns">【設立】</div>
								<div class="company values">2016年5月</div>
								<div class="company columns">【事業内容】</div>
								<div class="company values">健康経営サポートサービス<div>
								<div class="company columns">【従業員数】</div>
								<div class="company values">３人（登録者除く</div>


							</div>
						</div>
				</div>
			</section>

			<section id="one" class="wrapper style1 special">
			<div id="contact">

     <!-- Title -->
     <div class="section_title">
          <h2>お問い合わせ</h2>          <div class="title_border"></div>
     </div>

     <!-- Section Intro -->

     <!-- Contact form -->
  <form class="contact-form" action="/mail/" method="post">
		 <div class="form-group">
    <label for="form_name" class="col-sm-4 control-label">名前</label>
    <div class="col-sm-8">
      <?php echo Form::input('name',Session::get_flash('name'),array('class' => 'form-control'));?>


    </div>
  	</div>

  <div class="form-group">
    <label for="" class="col-sm-4 control-label">Email</label>
    <div class="col-sm-8">
      <?php echo Form::input('email',Session::get_flash('email'),array('class' => 'form-control','placeholder' => 'mail@example.com'));?>


    </div>
  </div>

<div class="form-group">
    <label for="" class="col-sm-4 control-label">内容</label>
    <div class="col-sm-8">
      <?php echo Form::textarea('msg',Session::get_flash('msg'),array('rows'=>'6','class' => 'form-control'));?>

    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
      <?php echo Form::submit('submit', '内容確認', array('class' => 'btn btn-success'));?>

      <?php echo Form::hidden(Config::get('security.csrf_token_key'), Security::fetch_token());?>
    </div>
  </div>
  </form>
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<section class="links">
						<div class="row">

						<div class="4u$ 12u$(medium)">
							<ul class="icons">
								<!--

								<li>
									<a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
								</li>
								<li>
									<a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
								</li>
								<li>
									<a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
								</li>
							-->
							</ul>
						</div>
					</div>
				</div>
			</footer>

	</body>
</html>
