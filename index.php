<?php
	$mail = null;
	if(isset($_POST['message'])){
		if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['content'])){
			if(mail('clementloirepro@gmail.com', 'clement-loire.fr new message', 'Un e-mail à été envoyé , Nom : '.htmlspecialchars($_POST['name']).', E-mail : '.htmlspecialchars($_POST['email']).', Contenu : '.htmlspecialchars($_POST['content']))){
				$mail = 'yes';
			}else{
				$mail = 'no';
			}
		}
	}
	$skills = 
	[
		"Language"=>
		[
			["skill"=>"PHP", "color"=>"green","percentage"=>80],
			["skill"=>"YAML", "color"=>"green","percentage"=>70],
			["skill"=>"MYSQL", "color"=>"green","percentage"=>70],
			["skill"=>"JAVASCRIPT & JQUERY", "color"=>"orange","percentage"=>70],
			["skill"=>"NODEJS", "color"=>"red","percentage"=>50],
		],
		"Template engine"=>
		[
			["skill"=>"TWIG", "color"=>"orange","percentage"=>50],
		],
		"Framework PHP & CSS"=>
		[
			["skill"=>"SYMFONY", "color"=>"red","percentage"=>30],
			["skill"=>"CAKEPHP", "color"=>"red","percentage"=>10],
			["skill"=>"MATERIALIZE", "color"=>"green","percentage"=>80],
			["skill"=>"BOOTSTRAP", "color"=>"green","percentage"=>70],
		],
		"Design & Video"=>
		[
			["skill"=>"PHOTOSHOP", "color"=>"green","percentage"=>60],
			["skill"=>"PREMIERE PRO", "color"=>"green","percentage"=>70],
		],
		"Other"=>
		[
			["skill"=>"LINUX (Debian, Ubuntu, Pi, Centos)", "color"=>"green","percentage"=>60],
		],
	];

	$portfolio = 
	[
		"Personal"=>
		[
			["title"=>"Portfolio V1", "img"=>"/assets/img/perso-1.jpg", "text"=>"First version of my personal portfolio, I learn HTML & CSS with this little project.", "href"=>"http://portfolio-v1.clement-loire.fr/"],
			["title"=>"Portfolio V2", "img"=>"/assets/img/perso-2.jpg", "text"=>"Second version of my personal portfolio, I build this website to update my showcase with my last knowledge.", "href"=>"http://portfolio-v2.clement-loire.fr/"],
			["title"=>"E6 Exam - BTS SIO", "img"=>"/assets/img/e6.jpg", "text"=>"Showcase website to present my E6 exam, presentation of my projects, activities when I was in alternating degree.", "href"=>"http://e6.clement-loire.fr/"],
			["title"=>"Landing Page - Stage", "img"=>"/assets/img/landingpage.jpg", "text"=>"Before my internship at <a target='blank' href='http://www.agence-texto.fr/'>Texto l'Agence</a>, I had only simple bases in web programming. This internship introduced me to Bootsrap, Jquery, PHP, Javascript, Photoshop. I also acquired a certain logic of reflection.", "href"=>"/projects/landing-page/"],
			["title"=>"Private - Repo", "img"=>"/assets/img/private.jpg", "text"=>"I creat this repo after my 2nd portfolio version to push my projects and access it on Internet.", "href"=>"https://private.clement-loire.fr/"],
			["title"=>"Son of A Bitch", "img"=>"/assets/img/sob.jpg", "text"=>"Showcase website of a friend with a pretty crazy project.", "href"=>"http://sonofabitch.fr/"],
		],
		"Professionnel"=>
		[
			["title"=>"Tomme de Savoie", "img"=>"/assets/img/tommesavoie.jpg", "text"=>"During my internship at texto agency, I modify this website logo.", "href"=>"http://www.tomme-de-savoie.com/"],
			["title"=>"Saucisse de Morteau", "img"=>"/assets/img/saucissemorteau.jpg", "text"=>"During my internship at texto agency, I modify code on this website to make the map functionnality work.", "href"=>"http://www.saucissedemorteau.com/savoureuse/la-morteau-a-travers-les-regions"],
			["title"=>"Emmental de Savoie", "img"=>"/assets/img/emmentalsavoie.jpg", "text"=>"During my internship at texto agency, I modify this website logo", "href"=>"http://www.emmental-de-savoie.com/"],
			["title"=>"DCMedia", "img"=>"/assets/img/dcmedia.jpg", "text"=>"A confidential project entrusted by DCSolution", "href"=>"https://dcmedia.ch/"],
			["title"=>"DCSolution", "img"=>"/assets/img/incoming.png", "text"=>"DCSolution showcase website", "href"=>"http://dcsolution.ch/"],
		]
	];
	$visitLink = "Visit";
?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>Portfolio | Clément LOIRE</title>
		<meta charset="utf-8">
		<meta name="description" content="Welcome, here is my incredibly simple portfolio, you can find my resume, my portfolio, my skills and you can contact me !">
		<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/materialize.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons|Fredoka+One" rel="stylesheet">
		<link href="/assets/img/favicon.ico" rel="shortcut icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="loader">
			<div class="loader-in">
				<div class="preloader-wrapper big-custom active">
					<div class="spinner-layer spinner-red-only">
						<div class="circle-clipper left">
							<div class="circle"></div>
						</div><div class="gap-patch">
							<div class="circle"></div>
						</div><div class="circle-clipper right">
							<div class="circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<header>
			<nav class="nav-extended">
				<div class="nav-wrapper">
					<a href="/" class="brand-logo"><div class="personal-logo"><span>Clément</span>LOIRE</div></a>
					<!--<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="sass.html">Sass</a></li>
						<li><a href="badges.html">Components</a></li>
						<li><a href="collapsible.html">JavaScript</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="sass.html">Sass</a></li>
						<li><a href="badges.html">Components</a></li>
						<li><a href="collapsible.html">JavaScript</a></li>
					</ul>-->
				</div>
				<div class="nav-content">
					<ul class="tabs tabs-transparent">
						<li class="tab"><a href="#about">About me</a></li>
						<li class="tab"><a href="#skills">Skills</a></li>
						<li class="tab"><a href="#portfolio">Portfolio</a></li>
						<li class="tab"><a href="#contact" id="linkcontact">Contact</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<main>
			<div id="about">
				<div class="col s12">
					<div id="about-top">
						<div id="about-top-perso" class="circle z-depth-5"></div>
					</div>
					<div id="about-bottom" class="container">
						<p class="caption">Welcome, here is my incredibly simple portfolio, you can find my resume, my portfolio, my skills and you can contact me !</p>
						<div>
							<h2>Who am I ?</h2>
							<p>
								Clément, <span id="age">..</span> years old, <a href="https://medium.com/udacity/what-is-a-full-stack-web-developer-and-why-should-i-become-one-6e93d0c774b6" target="blank"><strong>full-stack junior web developer</strong></a>.<br>
								Since my 10 years, I wanted to create, build incredible thing, the world wide web offer this possibility, I was able to concretize this idea when I studied my <a target="blank" href="http://portfolio-v2.clement-loire.fr/public/cursus.php">professional baccalaureate SEN TR</a> with a friend who transmitted me the web basics.</p>
							<h2>What do I do ?</h2>
							<p>I am currently on a permanent contract in <a target="blank" href="http://dcsolution.ch/">DCSolution</a> as a full-stack web developer. I lead interesting projects that allow me to learn constantly.<br>In my free time, I learn new technologies to improve my skills.<br><br>I have other hobbies like bike and motorbike, work-out, swimming..</p>
						</div>
					</div>
				</div>
			</div>
			<div id="skills" class="container row">
				<h3>Skills</h3>
				<p class="caption">The colors are according to my mastery level and percentage progression is according to my knowledge level.</p>
				<?php foreach($skills as $skill=>$skillsContent){ ?>
				<div class="col s12 row">
					<h4><?=$skill;?></h4>
					<?php foreach($skillsContent as $skillsData){ ?>
					<div class="col s6">
						<h5><?=$skillsData['skill'];?></h5>
						<div class="progress">
							<div class="determinate" style="width: <?=$skillsData['percentage'];?>%;background-color: <?=$skillsData['color'];?>;"></div>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
			<div id="portfolio" class="container row">
				<h3>Portfolio</h3>
				<?php foreach($portfolio as $type=>$portfolioContent){ ?>
				<div class="col s12 row">
					<h5><?=$type;?></h5>
					<?php foreach($portfolioContent as $portfolioData){ ?>
					<div class="col s12 m6 l3">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="<?=$portfolioData['img'];?>">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4"><?=$portfolioData['title'];?><i class="material-icons right">more_vert</i></span>
								<p><a target="blank" href="<?=$portfolioData['href'];?>"><?=$visitLink;?></a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4"><?=$portfolioData['title'];?><i class="material-icons right">close</i></span>
								<p class="black-text"><?=$portfolioData['text'];?></p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
			<div id="contact" class="container">
				<h3>Contact</h3>
				<p class="caption">Do not hesitate to contact me about your projects of all kinds.</p>
				<div class="row">
					<form method="POST" class="col s12" action="/#contact">
						<div class="input-field col s6">
							<input id="email" type="email" class="validate" name="email">
							<label for="email">Email</label>
						</div>
						<div class="input-field col s6">
							<input id="text" type="text" class="validate" name="subject">
							<label for="text">Subject</label>
						</div>
						<div class="input-field col s12">
							<textarea id="textarea1" class="materialize-textarea" name="content"></textarea>
							<label for="textarea1">Message</label>
						</div>
						<div class="input-field col">
							<button class="btn waves-effect waves-light" type="submit" name="message">Send</button>
						</div>
					</form>
				</div>
				<?php if($mail == 'yes'){ ?>
				<div class="warning">
					<div class="warning-alert success">
						<span>Message sent successfully</span>
					</div>
				</div>
				<?php } ?>
				<?php if($mail == 'no'){ ?>
				<div class="warning">
					<div class="warning-alert error">
						<span>Error while sending the message</span>
					</div>
				</div>
				<?php } ?>
			</div>
		</main>
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text"><div class="personal-logo"><span>Clément</span>LOIRE</div></h5>
						<p class="grey-text text-lighten-4">I like sharing and website creation, do not hesitate to contact me for any web projects or other proposals, I am open to all.</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text"><a href="#contact" class="tocontact">Contact me</a></h5>
						<ul>
							<li><a class="grey-text text-lighten-3 tocontact" href="#contact">Email</a></li>
							<li><a class="grey-text text-lighten-3" href="https://github.com/AzeGalax">Github</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					2017 http://clement-loire.fr
				</div>
			</div>
		</footer>
	</body>
	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/materialize.js"></script>
	<script type="text/javascript" src="/assets/js/init.js"></script>
</html>