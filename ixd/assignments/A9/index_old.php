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
                    <h3>A9: Results</h3>
                </div>
                <a href="http://ixd.ucsd.edu/home/w17/assignments/A8/">&larr; A8</a>&emsp;&emsp;&emsp;&emsp;<a href="http://ixd.ucsd.edu/home/w17/assignments/A10/">A10 &rarr;</a>
                <div id="assignment" class="sidenav-anchor">
                    <h4>Brief</h4>
                    <p>We are going to be using <a href="http://analytics.google.com/analytics/" target="_blank">Google Analytics</a> to run rate comparison you planned last week.</p>
                </div>

                <div id="plan" class="sidenav-anchor">
                    <h4>Step 1: Launch A/B Test</h4>
                    <p>Set up your A/B test with Google Analytics; refer to <a href="http://ixd.ucsd.edu/home/w17/lab/lab7/">Lab 7</a> for help. Since you will be statistically analyzing the results, recruit <strong>at least 20 users</strong>. Put another way, that means that each person on your team should recruit at least 7 people each: a couple dorm-mates and a few family members and you're basically there. You can also use social media like Facebook and Twitter to recruit. You can even recruit other people in class! Make sure to launch your test several days before the deadline. <a href=http://blog.optimizely.com/2013/04/30/71-things-to-ab-test>Here's some ideas from Optimizely for A/B testing.</a></p>
                </div>

                <div id="showwork" class="sidenav-anchor">
                    <h4>Step 2: Show your work!</h4>
                    <p>Collect your results from your A/B test which should be comparing the number of users who, for instance, either clicked through a navigational funnel or didn't, viewed a particular page or didn't, or pressed a button or didn't, in both your A and B conditions. Present your data and the results: show the inputs to your chi-squared test, your calculations, the resulting chi-squared value, and the p value. Tables of both your observed and expected values are the best way to visualize your data and calculations. <a href="http://www.houseofkaizen.com/conversion-rate-optimisation/resources/calculators/split-test-significance"> This tool</a> is a helpful resource for calculating the chi-square statistic (note that it corrects for small sample sizes). However, you <i>must</i> show your work for your calculations. <a href="https://www.youtube.com/watch?v=qLCyuFZMYqY&index=31&list=PLLssT5z_DsK_nusHL_Mjt87THSTlgrsyJ">Watch this video to see how it's done.</a> Remember that the chi-squared test compares numbers of users, not times or durations. If you find yourself using a different measure, e.g. time spent on a page, then find the appropriate statistical test to show your calculations and interpret its results. The TAs will not help with anything other than the chi-squared test, so do so at your own risk.</p>
                    <p>Next, discuss your findings in a very brief paragraph: can you draw solid conclusions or are additional experiments needed? What changes would you make based on these results? What other things would you test in the future?</p>
                </div>

                <div id="revisions" class="sidenav-anchor">
                    <h4>Step 3: List of Revisions</h4>
                    <p>What did you learn from these tests? Compile a list of revisions or improvements you would like to implement based off the results of the A/B tests. Additionally, include other revisions that your team would like to make that may not have been discovered through the user tests. Be sure to add these tasks to your development plan as well.</p>
                </div>

                <div id="fitfinish" class="sidenav-anchor">
                    <h4>Step 4: Fit and Finish</h4>
                    <p>Focus on fixing the interaction of your app based off your A/B results. Also, now is finally the time to make it pretty! Pay attention to detail and ensure that the app is optimized for a mobile interface. Your app should be completely done, both in interaction and aesthetic design by the end of this week!</p>
                </div>

                <div id="devplan" class="sidenav-anchor">
                    <h4>Step 5: Update Dev Plan</h4>
                    <p>Same drill as the other weeks, keep updating your development plan! What still needs to be accomplished and who is responsible for doing what tasks? If you have extra time, what are some stretch goals? If you're a little behind schedule, prioritize your goals and figure out what are the most important tasks.</p>
                </div>

                <div id="branding" class="sidenav-anchor">
                    <h4>Step 6: Brand Yourself</h4>
                    <p>Create a finalized app name that encompasses the function and brands the app. Branding is an important part of showing uniqueness and attracting users! </p>
                    <p><b>Note:</b> This finalized app name will be used to introduce your team during the final presentation!</p>
                </div>

                <div id="submit" class="sidenav-anchor">
                    <h2>Submit</h2>
                    <ul>

                        <li>The data that you collected. Organize this information so that we can get a sense of the raw data that you gathered. Explicitly state how many participants were in each condition. What feedback (quantitative or qualitative) did you receive? We recommend organizing this information into a table or spreadsheet. </li>
                        <li>Summary of your findings. You should present any statistical analysis that you performed, and any insights or discoveries that your test helped inform. </li>
                        <li>List of the changes you would make (as a result of the online tests). We understand that your test may have concluded only recently, and you would have had time to only make small changes. But we would like you to think about additional features or improvements that are motivated by your results. Add these to your development plan if you have time to complete them.</li>
                        <li>Your final app name. This is the name that will be used in your final presentation.</li>
                        <li>The URL of the app. Do not forget to give us login information. Note: the URL must work at least until your assignment is graded. If it doesn't work, you'll receive no credit. </li>
                        <li>PDFs of your development plan from last week and updated development plan. (<i>We recommend making a Google spreadsheet and saving it as a pdf; this gives you a snapshot for comparison.</i>)</li>
                    </ul>
                    <p>Note: since we may grade your assignment up to a few days after submission, per the honor code, we expect that the prototype URL show the state of your prototype at the time of submission. You will very likely be updating your prototype after submission, but please do so on another version.</p>
                    <a href="http://www.ucsd-hci.com" class='btn btn-primary'>Submit your formatted pdf here</a>
                </div>

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
                        <a class="btn btn-primary" target="_blank" href="https://docs.google.com/forms/d/1N3Zkc1ggX3lJc7hJTto-jIEfw2JLHACuGy7PiiLBcNE/viewform">During studio, click here to assess your group's work as a collective unit.</a></br>
                        <a class="btn btn-primary" target="_blank" style="margin-top: 20px" href="https://docs.google.com/forms/d/1YEHywUFrJDPbxXCSzoA8kYS3GB_Bq5oyi9Re2Rmr2YA/viewform"> During studio, click here to assess your own work and each of your team member's work.</a>
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
