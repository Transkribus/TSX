<!DOCTYPE html>
<html lang="en">
<?php 
$knowthyself = basename(__FILE__, '.php');
require("./head.inc.php");?>
  <body>
<?php require("./header.inc.php");?>
<!-- Bootstrap 3 panel list. -->

<div class="container-fluid">
   <div class="row">
  	<div class="col-md-3 col-md-push-9">
	    <div class="panel panel-default" id="tsx-image">
				<img src="<?php print $TSX_root;?>/images/Bentham.jpg" class="img-rounded" width="100%"/>
				<p>Jeremy Bentham</p>
	    </div> 
	</div>

  	<div class="col-md-9 col-md-pull-3">
		<div class="jumbotron">
			<h1>Welcome to TSX!</h1>
			<p>By registering an account with TSX you can do two exciting things: transcribe fascinating and valuable manuscripts written and composed by the philosopher and reformer, Jeremy Bentham (1748—1832), and be among the first volunteer transcribers to use Handwritten Text Recognition (HTR) technology in their work.</p>
			<p>TSX places you in full control of the HTR technology, and allows you to participate in several interconnected ways:</p>
			<ul>
				<li>transcribe manuscripts without any assistance from the HTR engine</li>
				<li>request a full transcript from the HTR engine of a given image, and then correct the transcript</li>
				<li>take advantage of interactive transcription in which, should you become stuck on a particular word or section of a manuscript, request suggestions from the HTR engine</li>
			</ul>
			<p>These methods of participation are more fully explained in our <a href="http://www.transcribe-bentham.da.ulcc.ac.uk/td/Getting_started_with_TSX">instructional material</a>.</p>

			<p>We hope that you will be interested in testing out this innovative technology, and welcome any questions or feedback – positive or negative – about your experience of using TSX at <a href="mailto:transcribe.bentham@ucl.ac.uk">transcribe.bentham@ucl.ac.uk</a></p>

			<p>You can also complete a short, <a href="https://opinio.ucl.ac.uk/s?s=37112">anonymous online survey</a>, which will help us to evaluate TSX more fully.</p>

			<strong>Compatibility</strong>
			<p>We recommend that you access TSX using Google’s <a href="http://www.google.com/chrome">Chrome</a> browser, running on Windows. TSX will run on Firefox, though some functionality will be unavailable (such as zooming in and out of images using the mousewheel).</p>
 
			<p>There are known issues with running TSX in Internet Explorer, and on MacOS. Future development will ensure compatibility with major browsers and operating systems. Please do accept our apologies for any inconvenience which this current incompatibility may cause.</p>

			<div class="well well-sm" style="text-align: center;">
				<strong>To begin transcribing please <span class="tsx-not-logged-in"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createAccountModal">Sign up</button> or <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Sign in</button> and </span>visit the <a href="<?php print $TSX_root;?>/desk"><button type="button" class="btn btn-primary" title="TSX Desk">TSX Desk</button></strong></a>
			</div>
		</div>


   </div>
	  	<div class="col-md-12">

			<div class="well well-sm" style="text-align: center;">

			<p>TSX was developed by the <a href="http://www.ulcc.ac.uk">University of London Computer Centre</a> and <a href="http://www.ucl.ac.uk">University College London</a> as part of the EU FP7-funded tranScriptorium consortium, which is developing innovative, efficient and cost-effective solutions for the indexing, searching, and full transcription of historic handwritten manuscript images, using modern, holistic HTR technology.</p>
			<p>tranScriptorium is led by the <a href="http://www.upv.es">Universitat Politècnica de València</a>, and has received funding from the European Union’s Seventh Framework Programme for research, technological development and demonstration under grant agreement no 600707.</p></p>
			</div>
		</div>
	</div>
</div>

<?php require("./login.inc.php");?>

<script>
	$(document).ready(function(){
//		if(window.location.host.match(/devorkin/)){
//			var data_server = "/local_data";
//		}else{
//			var data_server = "https://dbis-faxe.uibk.ac.at/TrpServerTesting/rest/";
//		}
			var data_server = "https://transkribus.eu/TrpServer/rest/";
		tsxController = new TSXController({data_server: data_server});
	});
</script>

</body>
</html>
