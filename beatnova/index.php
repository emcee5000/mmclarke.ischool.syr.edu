<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>#beatnova</title>
<style type="text/css">


.woork{
	color:#444;
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
	font-size:12px;
	width:600px;
	margin: 0 auto;
}

.title{
	color:#ffffff;
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
	font-size:18px;
	margin: 10px,10px;
}

.twitter_container{
	color:#444;
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
	font-size:12px;
	width:550px;
	margin: 0 auto;
	background:#f26522;
	padding:8px;
}
.twitter_container a{
	color:#0066CC;
}
.twitter_status{
	height:60px;
	padding:6PX;
	border-bottom:solid 1px #DEDEDE;
	background:#FFF;
}
.twitter_image{
	float:left; 
	margin-right:14px;
	border:solid 2px #DEDEDE;
	width:50px;
	height:50px;
}
.twitter_small{
 font-size:11px;
 padding-top:4px;
 color:#999;
 display:block;
}
#twitter-results{padding-top:8px;}
body {
	background-image: url(images/BeatNova.gif);
}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">

  $(document).ready(function(){

   var twitterq = '';

   

  function displayTweet(){

	var i= 0;

	var limit = $("#twitter-results > div").size();

	var myInterval = window.setInterval(function () {

	var element =  $("#twitter-results div:last-child");

	$("#twitter-results").prepend(element);

	element.fadeIn("slow");

	i++;

	if(i==limit){

		 window.setTimeout(function () {

		 clearInterval(myInterval);

		 });

		}

		

	},2000);

  }

 	

	

	$(document).ready(function() {

		twitterq = $('#twitterq').attr('value');

			

		$.ajax({

			type: "POST",

			url: "search.php",

			cache: false,

			data: "twitterq="+ twitterq,

			success: function(html){

				$("#twitter-results").html(html);

				displayTweet();

			}

		});

		return false;

		});

	

});

  

</script>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-403457-10");
pageTracker._trackPageview();
} catch(err) {}</script>

</head>

<body>
<div class="twitter_container">
<p class="title">Thanks for helping us #beatnova!!!</p>
<div id="twitter-results"></div>
</div>
</body>
</html>
