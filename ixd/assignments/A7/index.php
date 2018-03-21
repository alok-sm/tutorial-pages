<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment 5">
    <title>A7&thinsp;&middot;&thinsp;HCI Design</title>

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
  <body data-spy="scroll" data-target=".sidenav" data-offset=40>

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
                <div class="sidenav-anchor">
                  <h3>A7: Ready for testing</h3>
                  <!-- <a href="http://ixd.ucsd.edu/home/w17/assignments/A6/">&larr; A6</a>&emsp;&emsp;&emsp;&emsp;<a href="http://ixd.ucsd.edu/home/w17/assignments/A8/">A8 &rarr;</a> -->
									<p>
										In this assignment, we prepare for user testing by finalizing the development of our app functionality. We continue to apply design heuristics to create an intuitive interaction. We apply templates to streamline our code. We debug. We fit the mobile form factor, but we refrain from focusing on aesthetics so that user testing doesn't nullify any work we have done. We expand the functionality of our app, if possible. We assess our progress by updating our development plan. We address bias and consistency in conducting our user testing by composing a user testing plan. We decide on design choices that are best suited for user testing.
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
												User Testing Plan
												<li>Write step-by-step instructions on how to perform testing that any student could use to do the testing without help, comprising mostly of the tasks you will ask users to do and how you will guide them if they are really stuck. In most cases, these tasks will be similar to your user task in A6</li>
												<li>Instructions describe how you will gain informed consent <a href="http://ixd.ucsd.edu/home/w17/assignments/A7/consent.pdf">using this form</a></li>
												<li>Instructions describe how your observations will be recorded</li>
												<li>Write the exact words that a facilitator will say to the testers, to ensure consistency across all tests</li>
												<li>Write a few detailed sentences why the instructions and scripts do not bias a user in one direction</li>
												<li>List three main <font color="red">research</font> questions/design choices of interest in your testing</li>
												<li>Write a few detailed sentences justifying why you are interested in your main testing questions and how you will answer them</li>
												<li>Write three interview questions you will ask the testers as part of their debriefing</li>
												<li>Plan is less than 2 pages long</li>


											<br>Complete functionality
												<li>Write a few detailed sentences assessing how ready your prototype is for user testing. If you used a different programming approach than in the labs, explain how you meet rubric items that assess code and functionality</li>
												<li>Write a few detailed sentences justifying the number of unique workflows or user tasks that your app supports</li>
                        <li>Include facebook login</li>
                        <li>Repeated header content included using partials rather than copy & paste.</li>
												<li>Your pdf should list the file path of your JSON file (or .js file that connects to MongoDB).</li>
												<li>Import data from your JSON data file. We will search for <i>require...json</i> in your code (or <i>require('mongodb').MongoClient</i> for groups using MongoDB).</li>
												<li>Use handlebars, e.g. #each loops, to template your app's pages, rather than duplicating code. We will search for "{{" in your code</li>
												<li>Utilize routes and jQuery selectors to asynchronously update your app's screens <i>where appropriate</i>. We will search for "$." and ".html" or ".append" in your code</li>
												<li>Prototype writes JSON data, which need not persist after node server restarts. We will search for ".put" or ".push" in your code</li>
												<li>In studio, we will verify that first-time users could go from screen to screen and know what functions they can perform</li>
												<li>We will test if your app is bug free and runs smoothly, so test on a separate machine/incognito</li>
												<li>We will review apps in Chrome’s mobile mode. Prototype should fit the mobile form factor on a contemporary smart phone (iPhone 7 or similar), and responsive mode in Chrome.</li>
												<li>Based on user tasks, your app has a justifiable number of unique workflows or user tasks that your app supports</li>

											<br>Development Plan
												<li>All tasks are actionable, prioritized, assigned an owner, and given a time estimate</li>
												<li>In your comments column, identify tasks that were newly added</li>
												<li>Add two new columns identifying actual time taken to complete your tasks, and actual date of completion</li>
                                                <li>Upper left hand corner shows a Sum() of expected and actual hours with a similar-ish load for each team member; outliers should be justified.</li>

											<br>Submit
												<li>Submit a clickable or easily typed link to your app of the form “a7-projectname.herokuapp.com”. If your app is changed before grading is completed, you will receive no credit for the assignment</li>
                                                <li>Add IxD teaching Heroku account ixd@ucsd.edu to your Heroku app as collaborator (Under “Access” tab in your app settings). username: ixd@ucsd.edu Invite: ixd@ucsd.edu </li>
												<li>Submit a clickable or easily typed link to your project repository on GitHub. Make sure the grader has access by the deadline</li>
												<li>Submit a clickable or easily typable link, or a readable, properly oriented, and complete snapshot of your dev plan. Make sure the grader has access</li>
										</ol>
									</p>
								</div>
                <div id="examples" class="sidenav-anchor">
                    <h3>Examples</h3>
										<p>
											Here are some examples from prior years. Note assignments change from year to year, so use these examples as a reference, see where they succeed/breakdown, and make sure your final submissions adhere to the rubric for this year.
										</p>
                                        <font color="red"><p>
                    User Testing Plans:
                                            <a href="http://ixd.ucsd.edu/home/w17/assignments/A7/plan1.pdf"> (1)</a>
											<a href="http://ixd.ucsd.edu/home/w17/assignments/A7/plan2.pdf"> (2)</a>

                                        </p></font>
                                        <p>
                    Apps:
											<a href="http://cashtree-dev.herokuapp.com" target="_blank"> (1)</a>
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

                                        <p>
                                        <font color="red">Newly added!</font>
                                        <a href="a7_feedback.php">
                    Here are some examples of feedback</a> that has previously been given on this assignment.
                                        </p>

                </div>
								<div id="submit" class="sidenav-anchor">
                    <h3>Submit</h3>
                    <a href="http://gradescope.com/courses/5873" class='btn btn-primary'>Submit your formatted pdf here</a>
								</div>
                <div id='self-assessment' class='sidenav-anchor'>
                    <h3>Self Assessment</h3>
                    <p>
                        <a class='btn btn-primary' target='_blank' href="https://goo.gl/forms/MmKp1pK14QQYN6HK2">During studio, click here to assess your group's work as a collective unit.</a>
                        </br>
                        <a style="margin-top: 10px;" class='btn btn-primary' href="https://goo.gl/forms/u4zVsP4ywAvT64oh2"> During studio, click here to assess your own work and each of your team member's work.</a>
                    </p>
                </div>
                <footer>
                  <p>This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a>, revised in collaboration with <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a>, and the teaching staff.<p>
                </footer>
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
