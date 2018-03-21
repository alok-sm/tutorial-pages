<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
		<title>IxD&thinsp;&middot;&thinsp;A10</title>

		<!-- Bootstrap -->
		<link href="../../css/bootstrap.min.css" rel="stylesheet">
		<link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../../css/hci.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body data-spy="scroll" data-target=".sidenav">
		<!--
		IntroHCI assignment template
		------------------
		To create a new assignment:
		1) Write all the HTML as you normally would underneath the #assignment-description div.
		2) Anything that you want to appear in the navbar on the left needs to be enclosed
		in a <div id="unique-id" class="sidenav-anchor">. On page load, hci.js will look up
		anything enclosed in .sidenav-anchor, find the first header (h1-h6) inside it, and add
		it to the navigation pane on the left. Make sure it has a unique div id so that there is something
		to anchor the hyperlink to.
		3) I recommend going with Bootstrap's recommendation and putting any <table class="table"> elements enclosed in a
		<div class="table-responsive">.
		-->
		<!-- Fixed navbar -->
		<?php include "../../nav.php" ?>

		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="sidenav" data-spy="affix">
						<ul class="nav nav-stacked" id="sidenav-content">
						</ul>
					</div> <!-- /sidenav -->
				</div> <!-- /col-md-3 -->
				<div class="col-md-9" id="assignment-description">
					<div id="assign_name" class="sidenav-anchor">
						<h3>A10: Show &amp; Tell</h3>
					</div>
					<a href="http://ixd.ucsd.edu/home/w17/assignments/A9/" style="text-decoration: none;">&larr; A9</a>
					<p>
						In this assignment, you will prepare presentation materials for your final presentation. Create a 30 second <i>pitch</i> of your prototype for the audience and jurors. Create a <i>slide</i> that will be displayed as a visual aid alongside your pitch. Create and present a portrait-orientation <i>poster</i> to share your process and compare with alternative approaches. Create a 1-minute <i>video</i> walkthrough of your prototype, which you will use when you discuss and demonstrate your prototype in the final poster session. Lastly, you will polish your prototype, cleaning up the interface design and squashing usability bugs.
					</p>
					<p>
						There is no dress code for the final presentations. Wear whatever you feel most comfortable in when presenting and talking to jurors.
					</p>
					<p>
						Any <i>pitch</i> that goes over 30 seconds will be cut off. While all team members must be on stage, not everyone is required to speak. Pitch should cover 1) What is the problem? 2) Why doesn’t the obvious thing available today address it? 3) What is one concrete feature of your app that achieves it. (Avoid laundry lists: “it slices, it dices, it’s a TV remote!” Privilege concrete examples over vague flowery language.)
					</p>
					<p>
						The purpose of the poster is to depict your process. We do not require them to be slickly produced. Each poster will be visited by two critics (staff and/or jurors). After the presentation, the staff will keep your poster for archiving and display. Consider the 4 ways in which you are presenting: The slide, verbal pitch, poster, and video walkthrough. Distribute layers of information across these mediums to convey the problem your prototype is addressing, and the unique proposition of your idea. While we encourage everyone to stay through the award announcements at the end of the show, you may leave after your poster has been visited by both reviewers. 
					</p>
					<p>
						You will only need to bring your poster to the final show location. We will provide all mounting supplies.
					</p>
					<p>
						The following rubric items are independently assessed. In general, evaluation works such that if the student/team meets, for instance, 9 out of 10 rubric items, then they have earned a grade of 90%. The assignment will not be graded unless it is submitted on a single, well-formatted, and easily readable PDF.
					</p>
					<p>
						This assignment requires one submission per: <b>team</b><!-- <b>individual</b> -->
					</p>
					</p>
					<h3>Evaluation Rubric</h3>
                        <p>Students earn 1/2 point for each binary criterion met.</p>
					<p>
					<p>
						<ol>
							<font size="3">Pitch</font>
								<li>Write and submit the script to your pitch</li>
								<li>Pitch is well-rehearsed, audible, and effectively utilizes, while remaining stricly, under 30 seconds</li>
								<li>Pitch conveys final point of view of prototype, portrays the underlying user needs, why they aren't met elsewhere, and <u>how</u> the prototype meets them (don't just assert that it's awesome)</li>
								<li>Pitch has a "hook," using unique and creative elements that will interest people and persuade them to find the poster. This might be an example or scenario</li>
							<br><font size="3">Slide</font>
								<li>Create a visual aid for your pitch in the form of a single slide image (1920x1080 JPG or PNG), including the final app name of your prototype, excluding any audio or animation</li>
								<li>Contains one or two screens of the user interface, illustrating the prototype's functionality</li>
								<li>Slide has a high-level overview of the prototype, and is not cluttered by having too many words or too much detail</li>
							<br><font size="3">Poster</font>
								<li>Poster illustrates your design process, e.g. design decisions, iterations, and what you learned from users</li>
								<li>Poster highlights the features that make your prototype's solution to a user problem unique, e.g. displaying the competitive analysis from previous assignments</li>
								<li>Poster communicates core features of prototype, and stands on its own without explanation</li>
								<li>Poster is 24" wide, 30" high (portrait orientation) and everything on it is visible and legible. Butcher paper will be provided for you to make your poster</li>
							<br><font size="3">Walkthrough</font>
								<li>Write and submit the script for 1 minute walkthrough of your prototype</li>
								<li>In studio, to demonstrate you are well-practiced for jurors visiting your poster and prototype, TAs will video record your walkthrough during the last studio</li>
								<li>Walkthrough fluidly demonstrates use of the prototype in a logical and sequential manner in strictly less than one minute</li>
							<br><font size="3">Post Mortem</font>
								<li>Write five to six sentences describing what you learned from working with your team, what you would do differently if you did it all again, mistaken and successful planning choices you made</li>
								<li>Final prototype meets the functionality and aesthetic requirements from all previous assignments</li>
								<li>Final prototype is bug free and has a clear interaction flow, with no major heuristic violations</li>
								<li>There are no spelling or grammatical errors in the slide, pitch, poster, walkthrough, and prototype</li>
							<br><font size="3">Development Plan</font>
								<li>Verify all tasks are actionable, prioritized, assigned an owner, given a time estimate, has actual time spent and completion date recorded, and every member of the team was assigned and completed at least one programming task</li>
								<li>In your comments column, identify tasks that were newly added or removed/updated, and add/identify any new stretch goals for development beyond the scope of the class</li>
							<br><font size="3">Submit</font>
								<li>Submit a clickable or easily typed link to your final prototype of the form “a10-projectname.herokuapp.com”. <b>If your prototype is changed before grading is completed, you will receive no credit for the assignment</b></li>
								<li>Submit a clickable or easily typed link to your project repository on GitHub. Make sure the grader has access by the deadline</li>
								<li>Submit each of the following items: zipped file of your final functional code (for archival/educational purposes), a high resolution photo/image of your poster, and your slide</li>
								<li>Submit a clickable or easily typable link to -- or a readable, properly oriented, and complete snapshot of -- your dev plan. Make sure the grader has access</li>
								<li>Make <b><tt>ixd@ucsd.edu</tt></b> a collaborator on Heroku so that we have access to your deployment history</li>
							<br><font size="3">Above and Beyond</font>
								<li>(Bonus) This point is reserved for teams with prototypes that met all of the above rubric items and went outside the box in their performance, at the discretion of the TA</li>
						</ol>
					</p>
					<div id="examples" class="sidenav-anchor">
						<h3>Student Examples</h3>
						<p>
							Here are some randomly selected examples from prior years. Note assignments change from year to year, so use these examples as a reference, see where they succeed/breakdown, and make sure your final submissions adhere to the rubric for this year.
						</p>
						<p>
							Slides:
							<a href="./a10e3p1.jpg">(1)</a>
							<a href="./a10e4p1.jpg">(2)</a>
							<a href="./a10e5p1.png">(3)</a>
						</p>
						<p>
							Posters:
							<a href="./a10e1p.JPG">(1)</a>
							<a href="./a10e2p.JPG">(2)</a>
						</p>
						<p>
							Poster session and posters: 
							<a href="./a10e6.JPG">(1)</a>
						</p>
						<p>
							Walkthroughs: 
							<a href="./Goalus.mp4">(1)</a>
							<a href="./CarSmart.mp4">(2)</a>
						</p>
						<p>    
							Final pitches:
							<a href="https://www.youtube.com/watch?v=vlteSHsVGLw&feature=youtu.be">(1)</a>
						</p>
					</div>
					
					<div id="submit" class="sidenav-anchor">
						<h3>Submit</h3>
						<a href="http://gradescope.com/" class='btn btn-primary'>Submit your formatted PDF</a><br><br>
						<a href="https://www.dropbox.com/request/gm9grZ6n08YsXYO6AmOt" class="btn btn-primary" onclick="alert
						('Please submit a single zip file with name: <TA First Name>-<Team Name>.zip (Example: Chen-Birdie.zip). Failed to rename the file will receive 0pt for the submission.');">Submit your code and poster</a>
							<br><br>
						<a href="https://docs.google.com/presentation/d/11NmthIxXzwNsKRWTn8kL3dmSiOhfuKha7f_tzRYcSXM/edit#slide=id.g35240d7ade_0_0" class="btn btn-primary" onclick="alert
						('Please do NOT remove or reorder the slide deck. Please only update your slide!);">Submit your slide</a>
						<!-- <a href="https://goo.gl/forms/CHY4H5V8FlNcuOJz2" class="btn btn-primary">Submit files (UCSD.EDU accounts)</a><br><br> -->
						<!-- <a href="https://goo.gl/forms/wyOSnjfUai7LTUNv2" class="btn btn-primary">Submit files (ENG.UCSD.EDU accounts)</a> -->
					</div>
					<!--<br>
					<div id='evals' class='sidenav-anchor'>
						<h3>Course Evaluations</h3>
						<a target="_blank" class="btn btn-primary" href="https://docs.google.com/forms/d/1VrpHtZKYlI71uAMAGVtqCv7uprclHwrzXK7mU1Kb4Og/viewform">Course Assessment</a>
						<br>
						<br>
						<a target="_blank" class="btn btn-primary" href="https://ucsdsocialsciences.co1.qualtrics.com/jfe/form/SV_9traXpqIMCkgSiN">Course Assessment for CogSci</a> (fill out even if you are not a CogSci student)
						<br>
						<br>
						<a target="_blank" class="btn btn-primary" href="https://ucsdsocialsciences.co1.qualtrics.com/jfe3/form/SV_elLqKmLSWLeyzml">TA Assessment for CogSci</a>
					</div>-->
					<br>
					<div id='self-assessment' class='sidenav-anchor'>
						<h3>Assessments</h3>
						<p>
							Must be completed in studio.
						</p>
						<a target="_blank" class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLSeAJLt1ynp3xUpflV4AmnKDYfTem9UlKE0bRWi4nCMYQ1fqZA/viewform">Team Assessment</a> (one per team, do it together)
						<br><br>
						<a target="_blank" class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLSfR_vvWhbJZZiVVaSDp0eKpm_BKX8Jq_9VQgYyBWY8V7TJqIg/viewform"> Self Assessment </a>

					</div>
				</div>
			</div>
		</div>

		<br><br>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"/></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../../js/bootstrap.min.js"/></script>
		<script src="../../js/hci.js"/></script>
	</body>
</html>
