<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Introduction to Human-Computer Interaction: Assignment 4">
		<title>IxD&thinsp;&middot;&thinsp;A4</title>

		<!-- Bootstrap -->
		<link href="../../css/bootstrap.min.css" rel="stylesheet">
		<link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../../css/hci.css" rel="stylesheet">
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112183456-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-112183456-1');
		</script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body data-spy="scroll" data-target=".sidenav" data-offset=65>

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
					<div>
						<h3>A4: Show Your Flow: Get Feedback</h3>
					</div>
                    <!-- <a href="http://ixd.ucsd.edu/home/w17/assignments/A3/">&larr; A3</a>&emsp;&emsp;&emsp;&emsp;<a href="http://ixd.ucsd.edu/home/w17/assignments/A5/">A5 &rarr;</a> -->
					<div id="brief" class="sidenav-anchor">
						<h4>Brief</h4>
						<p>In this assignment, you will conduct heuristic evaluations (HEs) of <b>another</b> team's paper prototype. The heuristic evaluations will be a way to highlight usability issues in your rapid electronic prototypes. Heuristic evaluations will follow the <a href="http://www.nngroup.com/articles/how-to-conduct-a-heuristic-evaluation/" target="_blank">"How to Conduct a Heuristic Evaluation"</a> and <a href="http://www.nngroup.com/articles/ten-usability-heuristics/" target="_blank">"Ten Usability Heuristics"</a> readings by Jakob Nielsen. For a thorough explanation of the heuristic evaluation process, see the course <a href="https://www.youtube.com/watch?v=J09MeSfOTJE&index=14&list=PLLssT5z_DsK_nusHL_Mjt87THSTlgrsyJ" target="_blank">videos.</a></p>
					</div>
					<div>
						<p><b>Note:</b> You will be given time both in studio (week 3) and in class on Tuesday to do Steps 1 and 2, but it is also recommended that you complete this over the weekend, if possible.</p>
					</div>
					<div>
						<p><b>Note:</b> As you develop your team's app, focus on <b>satisfaction</b>, and iterate through design approaches to get there. Refrain from advocating for any one particular design.</p>
					</div>
					<div id="evaluate" class="sidenav-anchor">
						<h4>Step 1: (Individual) Evaluate</h4>
						<p>This part will be <i><b>completed individually</b></i>. You will be assigned a group to evaluate. Meet with the group and go through their prototype (i.e. pressing buttons) in any order you prefer, jotting down as many problems as you can. Don't try to be "nice" by not reporting problems--everything you write will help the group improve their interface. Try to make comparative feedback as well by noting if certain problems are found across both prototypes or just in one. If a problem exists in only one prototype, note which one by using the labels Prototype #1 and Prototype #2. You should highlight enough similarities and differences between the two prototypes so that the group receiving your feedback will understand the advantages and drawbacks of each design and know which designs they should implement in the coming weeks. </p>

						<p>Use Nielsen's heuristics as a guide and specify what heuristic(s) each problem is related to. If you come across problems that don't fall neatly into particular heuristics, mark that no heuristics apply. Be sure to also use <a href="http://www.nngroup.com/articles/how-to-rate-the-severity-of-usability-problems/" target="_blank">Nielsen's Severity Ratings for Usability Problems</a> to add a severity rating for every problem discussed in your heuristic evaluation.</p>

						<p>As an evaluator, you should spend <i>about 20 minutes</i> reviewing both prototypes. <b> Do not wait until the last day to do your evaluations. You submission will not be accepted if you fail to find a team to evaluate by the deadline.</b></p>
					</div>

					<div id="evalutionsessions" class="sidenav-anchor">
						<h4>Step 2: (Team) Conduct</h4>
						<p>This part will be <i><b>completed as a team</b></i>, though only two team members need to be present. Your team will conduct three Heuristic Evaluation sessions with three different assigned evaluators who will test out your prototypes. Before meeting the evaluators, your team should know the flow of your prototype and be able to quickly find/move the pieces of your prototype to simulate the experience of using an app.</p>
						<p>For each HE session, your team members should have specific roles:
							<ol>
								<li><b>Facilitator:</b> This team member will greet the evaluator, explain how the session works, and give a brief introduction to your prototypes. Once the session starts, this person will observe and take notes/pictures.</li>
								<li><b>Computer:</b> This team member will be the computer that manipulates the prototype pieces. (i.e. When the evaluator presses a button on the prototype, the computer will change the prototype pieces to show what the app should do next)</li>
							</ol>
						</p>
						<p>Have a copy of Nielsen's heuristics ready for the evaluator to refer to. You may provide evaluators with <a href="http://ixd.ucsd.edu/home/w17/assignments/HeuristicsWorksheet.pdf">this worksheet</a> to fill out while evaluating. You may also want to create a Google spreadsheet containing the heuristics with three tabs (1 for each evaluator) so the evaluator can write their feedback directly to you. A spreadsheet shared with your team and the evaluators is recommended because it makes it easier for the evaluator to do their assignment and for you to improve your design.</p>
						<p>Each HE session, where one evaluator evaluates both prototypes, should take 20 minutes. Therefore, the three HE sessions from three evaluators should take about a total of one hour.</p>
					</div>

					<div id="consolidation" class="sidenav-anchor">
						<h4>Step 3: (Individual) Consolidation</h4>
						<p>Think about the general characteristics of the UI you evaluated, and suggest potential improvements to address major usability problems that you identified. Decide which problems are most important, then brainstorm potential solutions for the individual you evaluated.</p>

						<p>Finally, distill all of this down to one paragraph where you address the major problems you all identified, as well as the potential solutions. Include a sentence or two reflecting on what kinds of things you found heuristic evaluation valuable for, and what kinds of things it's not very useful for. This is done individually.</p>

						<span style="color:red;"><p>In addition, write another paragraph, or make a list of changes, that you would make to your prototypes based on your experience evaluating another team's prototypes, and the feedback you received from other teams evaluating your prototypes. Each individual submits a paragraph, but also take the opportunity to discuss your findings with your team.</p></span>
					</div>

					<div id="createhome" class="sidenav-anchor">
						<h4>Step 4: (Team) Create a Video Prototype </h4>
						<p>Create a 1-minute video prototype that demonstrates a scenario where your app might be used and the potential users that might use it. The video is forward-looking: it should illustrate the features that your team <i>plans</i> to implement and how those features will be used. The beauty of having our screens at the sketch level is that you should be able to fold in at least some of the HE feedback before making your video. We'll play each group's video prototypes during studio next week!</p>
						<p>The <a href="https://drive.google.com/open?id=0B19kcnfzmiipZnpNQzdUTU9JZ0E">Walkabout</a> video is a good example of a video prototype that highlights all of the team's intended features and the ways users can interact with those features.</p>
					</div>

					<div id="examples" class="sidenav-anchor">
						<h2>Student Examples</h2>
						<p> Examples are a great way to learn, but they are not a gold standard for this class, especially as it evolves over the years. Use these examples as a reference, see where they succeeed/breakdown, and make sure your final submissions adhere to the rubric items.</p>
						<p><a href="http://ixd.ucsd.edu/home/w17/assignments/examples/a04example1.html">Example 1</a> - This student did a thorough heuristic evaluation with comparitive feedback.</p>
						<p><a href="http://ixd.ucsd.edu/home/w17/assignments/examples/a04example2.html">Example 2</a> - This is a weak example of a heuristic evaluation, as it wasn’t very thorough. Problems are listed for each prototype, and the heuristics and severity scores are identified. This example would have benefitted more from comparison of the prototypes. </p>
					</div>

					<div id="submit" class="sidenav-anchor">
						<h2>Submit</h2>
						<p> This assignment will be <b>submitted individually</b>, in a single formatted pdf file with the following items:</p>
						<ul>
							<li>A typed heuristic evaluation of another group's two paper prototypes. This comprises a list of usability issues you found, along with their severity, for each prototype.</li>
							<li>A paragraph addressing the major problems identified with the prototypes and potential solutions, as well as thoughts about heuristic evaluations.</li>
							<li>A paragraph/list of changes that your team plans to implement based off evaluator feedback and experience from evaluating others. Each member of your team could submit the same list in their own submission. </li>
							<li>A link to the team's video prototype. Each member of your team should submit the same link in their own submission.</li>
						</ul>
						<p><a href="http://www.gradescope.com" class='btn btn-primary'>Submit your formatted pdf here</a></p>
					</div>

					<div id="evaluation" class="sidenav-anchor">
						<h3>Evaluation Rubric</h3>
						<p>Students earn one point for each binary criterion met.</p>
						<div class="table-responsive">
							<?php include "rubric.html" ?>
						</div>

					</div>
					<div id='self-assessment' class='sidenav-anchor'>
						<h2>Self Assessment</h2>
						<a class='btn btn-primary' href="https://goo.gl/forms/pBWBabKFZ6wIB5sp1">During studio, click here to evaluate your work.</a>
                        <br/><br/>
						<h2>Team Assessment</h2>
						<a class='btn btn-primary' href="https://goo.gl/forms/Ylsd9UtX9TYnIKIG2">During studio, click here to self assess your team.</a>
			<br/><br/>
						<h2>Mid-quarter evaluation</h2>
						<a class='btn btn-primary' href="https://goo.gl/forms/SnOF7tZm2ZN9jxmH2">During studio, click here to evaluate the course.</a>
					</div>
				</div>
			</div>
		</div>
		<br>
		<footer>
			<p>This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a>, revised in collaboration with <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a>, and the teaching staff.<p>
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../../js/bootstrap.min.js"></script>
		<script src="../../js/hci.js"></script>
	</body>
</html>
