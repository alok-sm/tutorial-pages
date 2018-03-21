<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>A8&thinsp;&middot;&thinsp;HCI Design</title>

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

                <div>
                    <h1>A8: Test your prototype</h1>
                </div>

                <div id="brief" class="sidenav-anchor">
                    <h2>Brief</h2>
                    <p>The goal of this assignment is to test your prototype with two people to further streamline your app and inform your A/B test question and design.</p>
                </div>

                <div id="assignment" class="sidenav-anchor">
                    <h2>Assignment</h2>
                </div>
                <div id="observations" class="sidenav-anchor">
                    <h4>Step 1: Observations</h4>
                    <p>Observe <b>at least</b> two different people testing your interactive prototype. Try to find representative testers who you would expect to use your app.</p>
                    <p>One person will facilitate the test and interact with the tester, and the rest of the team will be in charge of taking notes/photos/video/etc. The facilitator should use the protocol that you developed in A7. Don't forget to have your user sign a consent form before beginning the test! This time your user will not be writing down the problems they find for you. It's your job to learn what the people testing your prototype are thinking; the feedback they provide you will be invaluable for your next iteration. Your goal is to find ways to improve your interface.</p>
                    <p>Submit your testing protocol and signed consent form for each participant. Immediately after each test, do a quick debrief with your team and write down any reactions or thoughts that came up.</p>
                    <p>Take a photo or draw a sketch of each tester using your prototype. As with the needfinding assignment, these photos <b>with captions</b> should show breakdowns and design opportunities. Contextualize them by capturing the action, e.g. using over-the-shoulder shots, and the setting. Look for other breakdowns and pain points in your interface and try to understand what the problems are and how you might fix them. When possible, modify/update your prototype before running the next participant.</p>
                </div>
                <div id="findings" class="sidenav-anchor">
                    <h4>Step 2: Compile your findings</h4>
                    <p>After testing, take some time with your team to reflect on your findings. Discuss as a team and define some general patterns in people's behavior. When you identify some interesting points, talk deeply about them&mdash;ask each other questions, recreate the different tests, analyze the decisions people made, other paths they could have taken, and so on.</p>
                    <p>Submit a detailed and understandable list of changes that you will implement as a result of your testing and discussion, with justifications. Fix the bugs that are either small and easy to fix, or too severe to ignore. Make sure that you do this before moving on to the next step of this assignment.</p>
                </div>
                <div id="altredesign" class="sidenav-anchor">
                    <h4>Step 3: Create a Meaningful Redesign</h4>
                    <p>Choose ONE component of your prototype to redesign that will resolve a breakdown or provide a potentially better solution than what was created before. To do this, make a duplicate of the specific page where the change will take place and change the route. For example, if you are redesigning a component of the homepage, keep the current homepage ("/homepage") and create a second page with a route "/homepage2". <b> Do not overwrite the current page and do not create an entirely new repository for this redesign!</b> You will be submitting both the original URL and the redesign URL.</p>
                    <p>The redesign will be used for user testing in the <a href="../A9/">next assignment</a>, which requires the use of the chi-square statistical test. Therefore, the aspect you choose to redesign must also be testable using the chi-square test, which usually tests an aspect that can be binarily classified (i.e. clicked or didn't click a button). The redesigned component must also be noticeably different from the original design&mdash;changing the background color as your redesign is not enough. <a href="https://ucsd.coursera.org/introhci-001/lecture/40">See the lecture videos for more information.</a></p>
                </div>
                <div id="OnlineTestDescription" class="sidenav-anchor">
                    <h4>Step 4: Description of Online Test</h4>
                    <p>Submit a description of the online test that you plan to run for next week's assignment; you do NOT need to run the online test yet. The description explain what the differences between your original and redesigned versions are and how the results of these changes will be measured in your online test next week. Also include possible outcomes and interpretations of your future study.</p>
                </div>
                <div id="updateddev" class="sidenav-anchor">
                    <h4>Step 5: Updated Dev Plan</h4>
                    <p>Just as we've been doing in the previous weeks, update the development plan. Add new tasks for this week and the following weeks while marking when existing tasks have been completed. Add stretch goals that you find feasible and adjust other tasks that may be out of reach.</p>
                </div>

                <div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
                    <p>Here are three student examples from last year.</p>
                    <ul>
                        <li><a href="../examples/a08example1.html">Example 1</a> - This is an example of an A+ level assignment. This group obviously put a lot of thought into their in-person test, and was able to motivate their redesign from the conclusions they drew from the in-person test.</li>
                        <li><a href="../examples/a08example2.html">Example 2</a> - This is an example of a B level assignment. This group lost points for not including their consent form for the in-person test. We also wished the feedback was more substantive beyond obvious usability bugs (one of which had been mentioned by the TA in a previous assignment). For the online test description, we were not convinced that measuring click rates was the right metric to measure success.</li>
                        <li><a href="../examples/a08example3.html">Example 3</a> - This is an example of an A level assignment. We liked the clean and well captioned photos for each participant testing their app. They also tested more than the required two users.</li>
                    </ul>
                </div>

                <div id="whatsthisfor" class="sidenav-anchor">
                    <h2><i>What’s this for? A UX agency perspective</i></h2>
                    <p><i>By Mike Davison, Community TA and UX Project Manager</i></p>
                    <p><i>Testing your high fidelity prototype with users closes the circle. It is vital to ensure your solution meets the needs identified during the first assignment, and that the agency has not simply spent months drifting further from the problem.</i></p>
                    <p><i>It also allows you third party reflection and suggestions for tweaks to the design. Everything we learn here and correct is a problem we don’t have to live with because it has already been coded and is too costly to change....it’s a valuable phase of the process.</i></p>
                    <p><i>Remember this - feedback is not criticism, feedback is not personal. User centred design works best when pride is left aside, and the feedback of others is incorporated into your design thinking!</i></p>
                </div>
                
                <div id="submit" class="sidenav-anchor">
                    <h2>Submit</h2>
                    <ul>
                        <li>Your testing protocol and signed consent forms, as well as any materials you gave to the user as part of your tests (either as text, PDF or a scanned image).</li>
                        <li>Captioned photos for each participant testing your prototype.</li>
                        <li>A detailed list of changes you will implement in your next iteration, with justifications.</li>
                        <li>The URL of the original prototype you tested and the URL of the implemented alternative redesign of one interface element.</li>
                        <li>Description of online test.</li>
                        <li>Copy of last week’s and this week’s plan submitted via PDF in a readable and easy-to-compare format. Link to Google Sheet with history should also be submitted to help with grading.</li>
                    </ul>

                    <a href="http://gradescope.com/courses/5873" class='btn btn-primary'>Submit your formatted pdf here</a>

                </div>
                <br>
                <div id="evaluation" class="sidenav-anchor">
                    <h2>Evaluation criteria &amp; Grading rubric</h2>
                    <p>The rubric below contains criteria that are worth one point each and will be graded independently and in a binary fashion.</p>
                    <div id ="rubric" class="ordered-list">
                        <?php include "rubric.html" ?>                       
                    </div>
                </div>

                <div id='self-assessment' class='sidenav-anchor'>
                    <h2>Group Evaluation, Team Evaluation</h2>
                    <p>
                        <a class="btn btn-primary" target="_blank"  href="https://docs.google.com/forms/d/14w-wx_UB_Ejogrmx1qevMB1lYCGIOwmRr6aARBweWeg/">During studio, click here to assess your group's work as a collective unit.</a></br>
                        <a class="btn btn-primary" target="_blank" style="margin-top: 10px" href="https://docs.google.com/forms/d/1q6tepXzwa9Mz5trskJWiJDWIX2LKR7UUz9Iz3os5DBM/"> During studio, click here to assess your own work and each of your team member's work.</a>
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
