<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>IxD&thinsp;&middot;&thinsp;A9</title>

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
						<h3>A9: Results</h3>
					</div>
					<!-- <a href="http://ixd.ucsd.edu/home/w17/assignments/A8/" style="text-decoration: none;">&larr; A8</a>&emsp;&emsp;&emsp;&emsp;<a href="http://ixd.ucsd.edu/home/w17/assignments/A10/" style="text-decoration: none;">A10 &rarr;</a> -->
					<p>
						In this assignment, we use Google Analytics to run online A/B testing that you planned out in previous assignments. We statistically analyze our data. We interpret our results and use our interpretation to guide final changes to our prototypes. We reflect on the validity of our experiment. We settle on our prototype's branding, and finalize our aesthetics to reflect the essence of our design. We continue to update our dev plan, identifying new stretch goals that we might not have time for.
					</p>
					<p>
						The following rubric items are independently assessed. In general, evaluation works such that if the student/team meets, for instance, 9 out of 10 rubric items, then they have earned a grade of 90%. The assignment will not be graded unless it is submitted on a single, well-formatted, and easily readable PDF.
					</p>
					<p>
						This assignment requires one submission per: <b>team</b> <!-- <b>individual</b> -->
					</p>
					<h3>Evaluation Rubric</h3>
                        <p>Students earn 1/2 point for each binary criterion met.</p>
					<p>
						<ol>
							<font size="3">Compile and Analyze</font>
								<li>Submit screenshots of your Google Analytics page as evidence the experiment was conducted with <b>at least</b> 10 users per test condition/variant.</li>
								<li>Write a few detailed sentences explaining your recruitment process, justifying a good faith effort in obtaining your target demographic</li>
								<li>Present your raw data in a 2 column table, one column for each condition</li>
								<li>Show the correct inputs to your chi-squared or other statistical test, your calculations, the correct resulting chi-squared value or test statistic, and resultant p value. Use 3 significant digits for all numbers. <a href="https://youtu.be/w31VWtllBqE">see another video for help</a></li>
								<li>Summarize all formal and informal, quantitative or qualitative, feedback you received from online testing</li>
							<br><font size="3">Interpret and Implement</font>
								<li>Write a few detailed sentences interpreting the results of your analysis, speculating why the results are as they are</li>
								<li>Write a few detailed sentences describing the internal and external validity of the experiment</li>
								<li>Write a short paragraph delineating changes you have made, will make, or would like to make to your prototype, and mark them as such, and justify these changes based on your results (it is very rare for a test not to suggest changes)</li>
								<li>Write a few detailed sentences discussing what you learned from A/B testing and any other data generated from using Google Analytics</li>
								<li>Implement feasible changes you identified as a result of testing</li>
								<li>No usability bugs or console errors when reviewing the prototype. Prototype is polished as a result of online testing</li>
                <li>Accomplishing a goal in the app does not require unnecessary steps or processes</li>
							<br><font size="3">Branding and Aesthetics</font>
								<li>Clearly identify your prototype's final brand name and point of view to be used during your final pitch</li>
								<li>Prototype's final brand name reflects its functionality and final point of view. You are allowed to continue to tweak your app. </li>
								<li>Prototype's visual design choices about color, typography, and layout reflect user needs and final point of view</li>
								<li>Prototype is visually compelling <span style="color:tomato;">and mobile-optimized</span></li>
								<li>Prototype's visual design is consistent within and across pages</li>
								<li>Prototype has a clean look; words/buttons are not cluttered and information is not presented in such large chunks that they can be overwhelming to a user</li>
								<li>Prototype is easy to read (i.e. no white text on light background or vice versa) on all pages</li>
							<br><font size="3">Development Plan</font>
								<li>Verify all tasks are actionable, prioritized, assigned an owner<span style="color:tomato;">*</span>, given a time estimate, and have actual time spent and completion date recorded. Upper left hand corner shows a Sum() of expected and actual hours with a similar-ish load for each team member; outliers should be justified. </li>
								<li>In your comments column, identify tasks that were newly added or removed/updated, and those derived from A/B testing.</li>
								<li>Add new stretch goals for your prototype and identify them in the comments column</li>
								<span style="color:tomato;">*every member of the team was assigned and completed at least one programming task</span><br>
							<br><font size="3">Submit</font>
								<li>Submit a clickable or easily typed link to your final prototype of the form “a9-projectname.herokuapp.com”. <b>If your prototype is changed before grading is completed, you will receive no credit for the assignment</b></li>
								<li>Submit a clickable or easily typed link to your A design prototype of the form “a9-projectname.herokuapp.com/path/to/page_A” and B design prototype of the form “a9-projectname.herokuapp.com/path/to/page_B”</li>
								<li>Submit a clickable or easily typed link to your project repository on GitHub. Make sure the grader has access by the deadline</li>
								<li>Submit a clickable or easily typable link to -- or a readable, properly oriented, and complete snapshot of -- your dev plan. Make sure the grader has access</li>
								<li>Make <tt style="color:teal">ixd@ucsd.edu</tt> a collaborator for your Heroku app so that we can verify the commit that has been deployed</li>
							<br><font size="3">Above and Beyond</font>
								<li>(Optional) This point is reserved for teams with prototypes that met 90% of the rubric items and went outside the box in their performance</li>
						</ol>
						<font style="color:tomato;"> Note: for this week's studio, also draft a 30 second elevator pitch, describing your point of view, user needs, and prototype</font>
					</p>
					<div id="examples" class="sidenav-anchor">
						<h3>Student Examples</h3>
						<p>
							Here are some examples from prior years. Note assignments change from year to year, so use these examples as a reference, see where they succeed/breakdown, and make sure your final submissions adhere to the rubric for this year.
						</p>
						<p>
							User Testing and A/B Prep:
							<a href="../examples/a08example1.html">(1)</a>
							<a href="../examples/a08example2.html">(2)</a>
							<a href="../examples/a08example3.html">(3)</a>
						</p>
						<p>
							User Testing Plans:
							<a href="http://ixd.ucsd.edu/home/w17/assignments/A7/plan1.pdf"> (1)</a>
							<a href="http://ixd.ucsd.edu/home/w17/assignments/A7/plan2.pdf"> (2)</a>
						</p>
						<p>
							Apps:
							<a href="http://cashtree-dev.herokuapp.com" target="_blank"> (1)</a>
								<!-- dead link --> <!-- <a href="http://iamherefor.com/index.html" target="_blank"> (2)</a> -->
						</p>
						<p>
							App Demos (not required for this assignment):
							<a href="../examples/images/a07e1p1.mp4"> (1)</a>
							<a href="../examples/images/a07e2p1.mp4"> (2)</a>
						</p>
						<p>
							Development plans:
							<a href="https://docs.google.com/spreadsheet/ccc?key=0Ame-4omKIpLddDlvTGFqN0JqNEVXbGRGSndLc2NuTUE&usp=sharing" target="_blank"> (1)</a>
							<a href="https://docs.google.com/spreadsheet/ccc?key=0AlCum_THvFsddGJlR1FrZ2xiSzlRdFZfUHBKcm9HUVE#gid=0" target="_blank"> (2)</a>
							<a href="https://docs.google.com/spreadsheet/ccc?key=0AkDAkl06cS84dDdoWnJKNmFPLVhNTUx4Ry1mYWZob2c&hl=en_US#gid=0" target="_blank"> (3)</a>
							<a href="https://docs.google.com/spreadsheet/ccc?key=0AnCm_JDaoi7ndG5fNl92YUFrWDgwdUxyVVB2azg5SVE#gid=2" target="_blank"> (4)</a>
						</p>
						<p>
							<a href="http://www.google.com/url?q=http%3A%2F%2Fspark-public.s3.amazonaws.com%2Fhci%2Fsource_videos%2FEvolutionOfAProjectPlan.mp4&sa=D&sntz=1&usg=AFQjCNECkSqe0VFyN4wOICycQIFhJoAslg" target="_blank"> Here is a cool video</a> of the dynamic nature of implementation plans throughout the project.
						</p>
					</div>
					<br>
					<div id="submit" class="sidenav-anchor">
						<h3>Submit</h3>
						<a href="http://gradescope.com/courses/5873" class='btn btn-primary'>Submit your formatted PDF.</a>
					</div>
					<br>
					<div id='self-assessment' class='sidenav-anchor'>
						<h3>Self Assessment</h3>
                        <p>
                            Self and team assessments must be completed <b>before</b> your TA grades your assignment.
                        </p>
						<p>
							<a class="btn btn-primary" target="_blank" href="https://goo.gl/forms/v9NpGQopJkpkee5F2">Assess your group's work as a collective unit.</a></br>
							<a class="btn btn-primary" target="_blank" style="margin-top: 10px" href="https://goo.gl/forms/NCFkh8tdVHkVrKsC3">Assess your own work and each of your team member's work.</a>
						</p>
					</div>
					<br>
				</div>
			</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/hci.js"></script>
  </body>
</html>
