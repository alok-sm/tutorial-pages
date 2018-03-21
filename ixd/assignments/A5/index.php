<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment 5">
    <title>A5&thinsp;&middot;&thinsp;Ix Design</title>

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
                  <h3>A5: Skeleton and a plan</h3>
                  <!-- <a href="http://ixd.ucsd.edu/home/w17/assignments/A4/">&larr; A4</a>&emsp;&emsp;&emsp;&emsp;<a href="http://ixd.ucsd.edu/home/w17/assignments/A6/">A6 &rarr;</a> -->
									<p>
									In this assignment, we evaluate whether we are straying from the high-level vision of our studio brief. We recognize how proper planning helps us prioritize tasks and clarify the roles of team members, keeping us focused and preventing “scope creep.” We learn to classify essential vs. non-essential functionality. We balance the low-cost fidelity of digital wireframes/mockups against time constraints to concretize our idea. We develop a feel for a “flowing” interaction using an html skeleton. Lastly, we lay the foundation and make our first online deployment.
									</p>
									<p>
									The following rubric items are independently assessed. In general, evaluation works such that if the student/team meets, for instance, 9 out of 10 rubric items, then they have earned a grade of 90%. The assignment will not be graded unless it is submitted on a single, well-formatted, and easily readable pdf.
									</p>
									<p>
									This assignment requires one submission per: <b>team</b> <!-- <b>individual</b> -->
									</p>
                                    <p>
									Optional project starter code (same tech stack as labs): <a href="https://github.com/DesignAtLarge/ixd-skeleton">https://github.com/DesignAtLarge/ixd-skeleton</a>
									</p>
                        <h3>Evaluation Rubric</h3>
                        <p>Students earn 1/2 point for each binary criterion met.</p>
									<p>
										<ol>
											Revisit the Brief
											<li>Write a few detailed sentences identifying your point of view, user base, and core interaction</li>
											<li>Write a few detailed sentences how your point of view, user base, and core interaction align with your studio brief</li>
											<li>Write a few detailed sentences justifying whether or not you will change your point of view, user base, and/or core interaction, and if so what changes will you make?</li>
											<br>Development Plan
											<li>Create a column on a spreadsheet listing approximately 50-100 actionable steps necessary to complete the entirety of your app development, with future assignments as a rough guide.</li>
											<li>In four adjacent columns, assign realistic time estimates, a deadline, an “owner” responsible for completing each task, and identify tasks involving essential vs. non-essential functionality by assigning “high, medium, low” priority</li>
											<li>Internally verify the prioritization is accurate, write justifications in a comments column, if needed, and identify potential obstacles or outside constraints, e.g. midterms, in the same column</li>
											<li>Submit a clickable or easily typable link to, or a readable and complete snapshot of, your plan. Make sure the grader has access</li>
											<br>Wireframes (Can have color)
											<li>Create a digital, non-functional wireframe/mockup of your home screen (no login screens)</li>
											<li>Visualize all potential interactions via content/buttons/text boxes/functions for your home screen wireframe</li>
											<li>Constrain time spent on home screen wireframe by leaving out minor details and styling</li>
											<li>Create a digital, non-functional wireframe/mockup of your next highest priority screen (no login screens)</li>
											<li>Visualize all potential interactions via content/buttons/text boxes/functions for your second wireframe</li>
											<li>Constrain time spent on your second wireframe by leaving out minor details and styling</li>
                                            <li>Content of both wireframes should be specific and not placeholders (eg. Lorem Ipsum) </li>
											<li>Submit a readable and complete snapshot of both wireframes</li>
											<br>Screens (no color)
                                            <li>Screens are HTML. The reason to omit color at this stage is to use the other visual tools available to you: scale, relationships, spacing, layout, etc. Once you get those right, then you can add color.</li>
											<li>Establish filesharing and source control architecture via github and submit a clickable or easily typed link to your project repository. Make sure the grader has access to this link
											<li>Based on the wireframe, use the content in the labs to code up a semi-functional home screen</li>
											<li>Include all content/buttons/text boxes/functions sketched out in the home screen wireframe </li>
											<li>Link all interactive functions on the home screen to placeholder html pages where applicable</li>
											<li>Create a “flowing” sense by providing escape routes and removing dead ends</li>
											<li>Based on the wireframe, use the content in the labs to code up a semi-functional second screen, linking to the html skeleton where applicable</li>
											<li>Include all content/buttons/text boxes/functions sketched out in the second screen wireframe</li>
                                            <li>Link all interactive functions on the second screen to placeholder html pages where applicable</li>
											<li>Submit a clickable or easily typed link to your online deployed home screen and second screen</li>
									</p>
                                        </ol>
								</div>
                <div id="examples" class="sidenav-anchor">
                    <h3>Examples</h3>
										<p>
											Here are some examples from prior years. Note assignments change from year to year, so use these examples as a reference, see where they succeed/breakdown, and make sure your final submissions adhere to the rubric for this year.
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
                    Wireframe Examples:
                                            <a href="./good_wireframe_example.pdf" target="_blank"> (1)</a>
                                            <a href="./good_wireframe_example_2.pdf" target="_blank"> (2)</a>
                                            <a href="./wireframe3.jpg" target="_blank"> (3)</a>
                    </p>
                    <p>
                    Skeleton Example:
                                            <a href="./nav_skeleton_example.m4v" target="_blank"> (1)</a>
                    </p>
                </div>
								<div id="submit" class="sidenav-anchor">
                    <h3>Submit</h3>
                    <a href="http://gradescope.com/courses/5873" class='btn btn-primary'>Submit your formatted pdf here</a>
								</div>
                <div id='self-assessment' class='sidenav-anchor'>
                    <h3>Self Assessment</h3>
                    <p>
                        <a class='btn btn-primary' target='_blank' href="https://goo.gl/forms/Sw1gdEQOr9aAhCa32">During studio, click here to assess your group's work as a collective unit.</a>
                        </br>
                        <a style="margin-top: 10px;" class='btn btn-primary' href="https://goo.gl/forms/GPSGrRDyjKyUved12"> During studio, click here to assess your own work and each of your team member's work.</a>
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
