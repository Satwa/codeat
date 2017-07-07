<!DOCTYPE html>
<html>
	<head>
		<title>CodEat!</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- author, desc.. -->
		<meta name="description" content="You run out of ideas for expanding your skills? You need some help to make them brilliant? Come and search in this awesome list of cool simple projects to build: DiY and Programming!">
    	<meta name="author" content="Joshua Tab.">

		<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css'>
		<link rel="stylesheet" href="assets/css/modal.min.css">
		<link rel="stylesheet" href="assets/css/app.css">
	</head>
	<body>
		<header>
			<h1>{CodEat}</h1>
			<h5 id="typed"></h5>
			<a href="#modal"><div id="contact"><i class="fa fa-envelope-o" aria-hidden="true"></i></div></a>
		</header>

		
		<?php
			require_once "app.php";
			$app = new App();

			$ideas = $app->getIdeas();
		?>
		
		<div class="container">
		    <ul class="timeline">
		    <?php
		    	foreach($ideas AS $idea){
					if((int)$idea->id % 2){
						echo "<li>";
					}else{
						echo "<li class='timeline-inverted'>";
					}
						echo "<div class='timeline-badge' style='background-color:#".$idea->hex."'><i class='fa ".$idea->icon."'></i></div>";
						echo "<div class='timeline-panel'>";
							echo "<div class='timeline-heading'>";
								echo "<h4 class='timeline-title'>".stripslashes($idea->title)."</h4>";
								echo "<p><small class='text-muted'><i class='fa fa-clock-o'></i> Published on ".date("d/m/y", $idea->created)." by ".$idea->author."</small></p>";
							echo "</div>";
							echo "<div class='timeline-body'>";
								echo "<p>".nl2br(stripslashes($idea->content))."</p>";
							echo "</div>";
						echo "</div>";
						echo "</li>";

				}
		    ?>
		    </ul>
		</div>
		
		<footer>
			Concept by <a href="https://www.joshua.ovh/" target="_blank">Joshua Tab.</a>, Made with <font color="red">❤</font> in France!
		</footer>
		<div id="modal">
			<div class="modal-content">
				<div class="header">
					<h2>Contact</h2>
				</div>
				<div class="copy">
					<p>You have a suggestion? You come up with a simple idea that will help people expanding their skills? You built something with these ideas? Let's send a message!</p>

					<form class="well form-horizontal" action="contact.php" method="POST" id="contact_form">
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>  
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input name="name" placeholder="Your Name" class="form-control"  type="text" required>
							    </div>
						  	</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Subject</label>  
							<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
									<input name="subject" placeholder="Subject" class="form-control" type="text" required>
							    </div>
						  	</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>  
					    	<div class="col-md-4 inputGroupContainer">
					    		<div class="input-group">
					        		<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
					  				<input name="email" placeholder="Your E-Mail Address" class="form-control" type="email" required>
					    		</div>
					  		</div>
						</div>
		
						<div class="form-group">
							<label class="col-md-4 control-label">Content</label>
						    <div class="col-md-4 inputGroupContainer">
						    	<div class="input-group">
						        	<span class="input-group-addon"><i class="fa fa-font"></i></span>
						        	<textarea class="form-control" name="comment" placeholder="Tell us" required></textarea>
						  		</div>
						  	</div>
						</div>

						<!-- Button -->
						<div class="form-group">
						 	<label class="col-md-4 control-label"></label>
							<div class="col-md-4">
								<button type="submit" class="btn btn-success"><span class="fa fa-send"></span> Send</button>
							</div>
						</div>
					</form>
				</div>
				<div class="cf footer">
					<a href="#" id="close">Close</a>
					<div style="clear:both"></div>
				</div>
			</div>
			<div id="overlay"></div>
		</div>
		<div id="cookieat"></div>

		<script
			  src="https://code.jquery.com/jquery-3.2.1.js"
			  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
			  crossorigin="anonymous"></script>
		<script src="https://use.fontawesome.com/556a5c55b1.js"></script>
		<script src="assets/js/js-cookie.js"></script>
		<script src="assets/js/typed.min.js"></script>
		<script src="assets/js/app.js"></script>
	</body>
</html>