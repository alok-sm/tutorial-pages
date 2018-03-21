<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>IxD&thinsp;&middot;&thinsp;A8</title>

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
									<h3>A8: Test your prototype</h3>
                </div>
                <!-- <a href="http://ixd.ucsd.edu/home/w17/assignments/A7/">&larr; A7</a>&emsp;&emsp;&emsp;&emsp;<a href="http://ixd.ucsd.edu/home/w17/assignments/A9/">A9 &rarr;</a> -->
                <p>
									In this assignment, we test our prototypes with real users. We capture our observations and reflect on our findings. As a result, we further streamline, debug, and expand our app. We identify and justify a design choice that A/B testing could help us make, and is suitable for our statistical test of choice. We implement both A and B versions of our design choice to which we randomly assign testers when we run our online experiment. We interpret the potential results of our experiment before doing any data collection. We assess our progress by updating our development plan.
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
                        <font size="3">User Testing</font>
                            <li>Submit updated protocol. Test <i> at least </i> three people using a protocol with clear, specific steps.</li>
                            <li>Write a 2-3 sentences justifying why you chose these people to test, e.g. are they from your user base?</li>
                            <li>Submit a digital copy of your consent forms for all testers, <b>signed prior to testing</b></li>
                            <li>Write a detailed record of your observations for each test</li>
                            <li>Take a photo or draw a sketch of each tester using your prototype, preferably over-the-shoulder shots of the interface</li>
                            <li>Like for needfinding, write captions for the photos, identifying breakdowns and successes, as well as tester actions</li>
                            <li>After each test, debrief with your team and write a few detailed sentences summarizing and reflecting on your findings</li>
                            <li>After each test, compile a list of changes as a result of your debriefing and, when possible, modify/update your prototype before running the next test</li>
                            <li>After finishing all testing, write a few detailed sentences for three general patterns you found in tester behavior and speculate why they had these patterns</li>
                        <br><font size="3">Prepare for A/B Testing</font>
                            <li>No usability bugs or console errors when reviewing the application.</li>
                            <li>Write 2-3 sentences identifying one component on one page of your prototype that you want to redesign, ideally you're uncertain if the redesign is better and an online experiment could inform your final choice</li>
                            <li>Write 2-3 sentences justifying your choice of component</li>
                            <li>Implement both A (original) and B (redesigned) versions of your design in the same repo, accessible through different routes, e.g. "/page_A" and "/page_B"</li>
                            <li>Write 2-3 sentences justifying A and B designs are different enough to test, as superficial changes are not accepted</li>
                            <li>Write 2-3 sentences how the results of these changes will be measured in your online test next week, e.g. clicked or didn't click a button</li>
                            <li>Write 2-3 sentences explaining why the measure is appropriate for a chi-squared test -- <a href ="https://www.youtube.com/watch?v=qLCyuFZMYqY&index=31&list=PLLssT5z_DsK_nusHL_Mjt87THSTlgrsyJ">see video here for help </a>. If you plan to use a different statistic, explain why it's appropriate</li>
                            <li>Write 2-3 sentences suggesting why your A design might turn out to be the better design</li>
                            <li>Write 2-3 sentences suggesting why your B design might turn out to be the better design</li>
                        <br><font size="3">Development Plan</font>
                            <li>All tasks are actionable, prioritized, assigned a single owner, given a time estimate, and have actual time spent and completion date recorded. Upper left hand corner shows a Sum() of expected and actual hours with a similar-ish load for each team member; outliers should be justified.</li>
                            <li>In your comments column, identify tasks that were newly added or removed/updated. </li>
                        <br><font size="3">Submit</font>
                            <li>Add IxD teaching Heroku account ixd@ucsd.edu to your Heroku app as collaborator (Under “Access” tab in your app settings). username: ixd@ucsd.edu Invite: ixd@ucsd.edu </li>
                            <li>Submit a clickable or easily typed link to your app of the form “a8-projectname.herokuapp.com”. <b>If your app is changed before grading is completed, you will receive no credit for the assignment</b></li>
                            <li>Submit a clickable or easily typed link to your A design app of the form “a8-projectname.herokuapp.com/path/to/page_A” and B design app of the form “a8-projectname.herokuapp.com/path/to/page_B”</li>
                            <li>Submit a clickable or easily typed link to your project repository on GitHub. Make sure the grader has access</li>
                            <li>Submit a clickable or easily typable link to -- or a readable, properly oriented, and complete snapshot of -- your dev plan. Make sure the grader has access</li>
                            <!-- <li>Submit a digital copy of your consent forms for all testers, <b>signed prior to testing</b></li> -->
                    </ol>
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
                    </p>
                    <p>
                        <a href="http://www.google.com/url?q=http%3A%2F%2Fspark-public.s3.amazonaws.com%2Fhci%2Fsource_videos%2FEvolutionOfAProjectPlan.mp4&sa=D&sntz=1&usg=AFQjCNECkSqe0VFyN4wOICycQIFhJoAslg" target="_blank"> Here is a cool video</a> of the dynamic nature of implementation plans throughout the project.
                    </p>
                </div>

                <div id="submit" class="sidenav-anchor">
                    <h3>Submit</h3>
                    <a href="http://gradescope.com/courses/5873" class='btn btn-primary'>Submit your formatted pdf here</a>
                </div>

                <br>

                <div id='self-assessment' class='sidenav-anchor'>
                    <h3>Self Assessment</h3>
                    <p>
                        <a class="btn btn-primary" target="_blank"  href="https://goo.gl/forms/arqH31B0j4XJUKpw2">During studio, click here to assess your group's work as a collective unit.</a></br>
                        <a class="btn btn-primary" target="_blank" style="margin-top: 10px" href="https://goo.gl/forms/MWNSl2FyO6MQWnjk1"> During studio, click here to assess your own work and each of your team member's work.</a>
                    </p>
                </div>
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
