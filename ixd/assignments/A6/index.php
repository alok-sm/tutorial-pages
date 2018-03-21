<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>IxD&thinsp;&middot;&thinsp;A6</title>

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

                <div>
                    <h3>A6: Meat on the bones</h3>
                </div>
                <!-- <a href="http://ixd.ucsd.edu/home/w17/assignments/A5/">&larr; A5</a>&emsp;&emsp;&emsp;&emsp;<a href="http://ixd.ucsd.edu/home/w17/assignments/A7/">A7 &rarr;</a> -->
                <div id="brief" class="sidenav-anchor">
                    <h4>Brief</h4>
                    <p>The goal for this week is for you to complete the interaction flow. Spend this week fleshing out interactive features. Don't worry about making it pretty yet&mdash;fonts, colors, and pixel-perfect layout can all come later. Also, update your development plan as you discover more about what you want to prioritize, what you can expect to implement, and what you may need to mock up</p>
                </div>

                <div id="pov" class="sidenav-anchor">
                    <h4>Step 1: Revisit POV &amp; Inspiration</h4>
                    <p>This week you will be completing core features of your app. However, it's important not to lose sight of your point of view (POV) and inspiration while implementing functionality. To keep you on track, you will revisit your POV as well as your inspirations for your app. In one paragraph, summarize your POV and the inspirations that you are using to develop your app. You may find it helpful to return to your A2 and A3 assignments to refresh your memory on the POV and inspirations, but the paragraph should contain revised and new information.</p>
                </div>
                <div id="readingjson" class="sidenav-anchor">
                    <h4>Step 2: Reading JSON data</h4>
                    <p>Your app should be able to read JSON data and use it to customize templated pages. You should have a file such as data.json that has data pre-stored, and your job is to retrieve that data and populate your app with it by manually adding new objects to the data variable. It is not required that your data.json file dynamically update with new data. Refer to <a href="http://ixd.ucsd.edu/home/w18/lab/lab4/">Lab 4</a> and <a href="http://ixd.ucsd.edu/home/w18/lab/lab5/">Lab 5</a> for help.</p>
                </div>
                <div id="functionality" class="sidenav-anchor">
                    <h4>Step 3: Unique Interactions</h4>
                    <p>What is it about your app that makes it unique? What specific features make it stand out?</p>
                    <p>Now is the time to implement the features that separate you from the other apps. Think about the core functionality of your app. What needs to be done to make its features work? In an app that manages goals and todo lists, you might be implementing the feature to make events and add/delete them from a task list. If you were developing Yelp, you might implement a feature to search for suitable restaurants based off of filter preferences and the user's location this week. With Yelp, you might also develop the review system, where users can write reviews for each place and rate it.</p>
                    <p>Your goal is to provide the users with more ways to interact with your app, including the most important interactions required for your app, by the end of this week.</p>
                </div>
                <div id="login" class="sidenav-anchor">
                    <h4>Step 4: Wizard of Oz Login</h4>
                    <p>Making a login screen will help you keep track of individual users and their unique features or progress within your app. Using <a href="https://www.youtube.com/watch?v=_lawz2ueY9M&list=PLNtQfKgd43l36p1zkq481yjwMxa1KRxsW&feature=c4-overview-vl">Wizard of Oz techniques</a>, create a fake login, which simulates the experience of logging in. You may ask for a login and password, which on submit leads the users to the first page of your app. You are not required to save the information or actually authentication via username and password. If you do use real auth, great! Just remember to include any needed login/password information in your writeup :).</p>
                </div>
                <div id="updatedevplan" class="sidenav-anchor">
                    <h4>Step 5: Update Development Plan</h4>
                    <p>Follow the development plan you created last week, and update it as you go. Include a sum of the expected and actual number of hours for each teammate in the top left hand corner. Mark tasks that have been completed and add new ones if you need to. Make sure that your next week is planned out with goals and who is responsible for each task. Re-evaluate your stretch goals and what's feasible and what isn't. You may decide that your plan is too ambitious, or you may decide that your plan is too conservative; maneuver accordingly.</p>
                </div>
                <div id="taskdescription" class="sidenav-anchor">
                    <h4>Step 6: Task Description</h4>
                    <p>Write a 2-sentence description of a task you'd like us to try without giving away the exact instructions on how to accomplish the task. For example, if you ultimately want users to visit a newsfeed page and subscribe to it, the instructions might be "find a way to keep up to date with current events outside of the app." In another example, if you were developing Uber, you might want the user to enter a destination, use the fare estimate feature, and compare UberX from Uber Black, but the instructions might say "Find the cheapest way to get home from UCSD." The task should not require the TA provide any personal information or create an account (including third party platforms). If your task requires any such information, create a dummy account or dummy information for the TA to use and add it in the description.</p>
                </div>

                <div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
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

                    <p>In this assignment, we want to emphasize the user task at this stage of development. The interface should be fluid with respect to a particular task made intuitively easy to step through as a user. For this assignment, this team would complete functionality by capturing all of the relevant information entered into the text boxes, and updating the content of each page with that new information.</p>

                    <p><a href="../examples/images/a07e1p1.mp4">GradeSource++</a>: This example project from last year abstracts GradeSource for you and works with the data to show you where you are in a class. </p>
                    <p><a href="../examples/images/a07e2p1.mp4">Balancr</a>: This app helps people balance their time between work and play. They have made their app functional: you can create a sign-up, add activities, and see it reflected on the pie chart.</p>
                    <p>For both examples above, simply imagine that the data that supports the functionality of the apps are only temporarily stored in a data variable that is pre-populated with data from a .json file.</p>
                </div>
                <div id="submit" class="sidenav-anchor">
                    <h2>Submit</h2>
                    <ul>
                        <li>One paragraph on your point of view &amp; inspirations for your app. </li>
                        <li>Write 2-3 sentences explaining what is the best way for a user to complete this task if your app did not exist. Before you submit, do a quick search for similar apps out there.  </li>
                        <li>The URL of the prototype (preferably on heroku) that you want us to see. Note: the URL must work at least until your assignment is graded. If it doesn't work, you'll receive no credit. </li>
                        <li>Readable, properly oriented snapshot of your development plan that you submitted last week. </li>
                        <li>Readable, properly oriented snapshot of your updated development plan. (<i>We recommend making a Google spreadsheet and saving it as a pdf; this gives you a snapshot for comparison.</i>)</li>
                        <li>A ~2-sentence description of the task you'd like us to try. This should include any needed login/password information.</li>
                        <li>The shared Github URL for your project.</li>
                    </ul>
                    <p>Note: since we may grade your assignment up to a few days after submission, per the honor code, we expect that the prototype URL show the state of your prototype at the time of submission. You will very likely be updating your prototype after submission, but please do so on another version.</p>
                    <a href="http://gradescope.com" class='btn btn-primary'>Submit your formatted pdf here</a>

                </div>

                <div id="evaluation" class="sidenav-anchor">
                    <h3>Evaluation Rubric</h3>
                    <p>Students earn one point for each binary criterion met.</p>
                    <div id ="rubric" class="ordered-list">
                       <ol>
												<li>Paragraph summarizes the POV and inspirations for the app, and how the app is relevant to the studio brief.</li>
												<li>Screens where reading JSON data is used are able to do so successfully and without error.</li>
												<li>JSON data used to create custom templated pages display information that is more meaningful than having pre-set data.</li>
												<li>User interface includes all applicable elements. Depending on the page, this may include navigation, content buttons, images, header, footer etc.</li>
												<li>All user interface elements function properly; they may use placeholder data.</li>
												<li>Functionality in each page does not lead to dead ends or errors. </li>
												<li>Every page performs a task that contributes to the overall goal of the app.</li>
												<li>There are no major violations to Nielsen’s heuristics.</li>
												<li>Development plan is updated, showing progress and additional tasks in the new version compared to the previous week, and includes a sum of the expected and actual number of hours for each teammate.</li>
												<li>Submission includes access to heroku dashboard and git repo. Your Heroku URL should be “a6-projectname.herokuapp.com”.</li>
												<li> 2-sentence task description provided. Task description does not give specific instructions, but describes a task that a real user might want to do.</li>
												<li>App's functionality for task described is complete in its interaction and causes no errors.</li>
											</ol>
                    </div>
                </div>

                <div id='self-assessment' class='sidenav-anchor'>
                    <h2>Group Evaluation, Team Evaluation</h2>
                    <p>
                        <a target="_blank" class="btn btn-primary" href="https://goo.gl/forms/LIqBnHJ7geNuCWdB3">During studio, click here to assess your group's work as a collective unit.</a>
                        </br>
                        <a target="_blank" class="btn btn-primary" style="margin-top:10px" href="https://goo.gl/forms/2o9LOXPLmDiPNJ2M2"> During studio, click here to assess your own work and each of your team member's work.</a>
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
