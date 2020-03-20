<!DOCTYPE html>
<html>
<head>
	<title>Misleading Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

	<style type="text/css">
		.HomeButton{
			margin-top: 20px;
		}
		.HomeButton a{
			height: 40px;
			width: 300px;
		}
		.frontpage{
			width: 102.5vw;
			height: 100vh;
		}
		.frontcontent{
			width: 100vw;
			margin-top: 100px;
		}
		.collys{
			margin-top: 50px;
			height: 100vh;
			padding: 10px;
			text-align: center;
		}
		.item{
			display: grid;
			margin-top: 15px;
			background: #f2f2f2;
			height: auto;
			padding: 20px;
			grid-template-rows: repeat(3);
			grid-gap: 20px;
			margin-bottom: 5px;
		}
		.blackbottom{

			border-bottom: 1px solid black;
		}
		.blackbottom div{
			padding: 20px;
			background: white;
		}
		#bottom{
			grid-template-areas: ""
		}
		#projects{
			align-self: center;
		}
		.menu{
			position: fixed;
			top: 0px;
			width: 100%;
			height: 50px;
			text-align: center;
			background: white;
			cursor: pointer;
			opacity: 1;
		}
		.menuitems{
			position: fixed;
			padding: 10px;
			top: 60px;
			background: white;
			width: 100%;
		}
		.hide{
			display: none;
		}
		@media screen and (max-width: 800px){
			.collys{
				display: grid;
			}
		}

	</style>

</head>

<body>

<div id="wrap">

	<div id="mn" class="menuitems hide">
		<ul class="nav">
  <li class="nav-item active">
    <a href="#">Other Pages</a>
    <ul class="nav">
      <li class="nav-item">
        <a href="#">About</a>
      </li>
      <li class="nav-item">
        <a href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a href="#">Donate</a>
      </li>
    </ul>
  </li>
</ul>
	</div>

	<a class="menu">Show Menu</a>


<div class="frontpage hero hero-lg bg-primary header">
<div class="frontcontent hero-body">
	<span class="h2">Welcome to my webpage</span>
	<div class="HomeButton">
		<a href="#bottom" class="btn">Let me help you</a>
	</div>
</div>
</div>
<div id="bottom"></div>
<div  class="collys columns">
  <div class="column">
  	<span class="h4 ">About me</span>
  	<div class="item column">
  		<div class="blackbottom">
  			Typical Stuff To know about me.
  		</div>
  		<div class="blackbottom">
  			<div>
  				I'm familiar with...
  			</div>
  			<div>
  				<p>
  					PHP, HTML, CSS and JS. <br> (Typical Lang-o's) <br><br>

  					As well as JQuery, and Vue.js and Spectre.css.
  					<br><a>
  						Software I Use: Sublime Text
  					</a>
  					<br><br>
  					"Google is my primary resource of knowledge." ~Josh
  				</p>
  			</div>
  		</div>
  		<div class="blackbottom">
  			<div>
  				The website is &copy; Copyrighted by Josh
  			</div>
  		</div>
  	</div>
  </div>
    <div id="projects" class="column">
  	<span class="h4 ">Projects</span>
  	<div class="item column">
  		Sorry None Here
  	</div>
  </div>
</div>

	<script type="text/javascript">

		$('.menu').click(function(){
			let a = $('#mn')[0].getAttribute('class').includes('hide');
			if(a == true){
				$('#mn').removeClass('hide');
			}else{
				$('#mn').addClass('hide');
			}
		});
	</script>

</body>
</html>