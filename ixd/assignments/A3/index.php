<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment 3">
    <title>IxD&thinsp;&middot;&thinsp;A3</title>

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
                    <h3>A3: Prototyping</h3>
                </div>
                <!-- <a href="http://ixd.ucsd.edu/home/w17/assignments/A2/">&larr; A2</a>&emsp;&emsp;&emsp;&emsp;<a href="http://ixd.ucsd.edu/home/w17/assignments/A4/">A4 &rarr;</a> -->
                <div id="brief" class="sidenav-anchor">
                    <h4>Brief</h4>
                    <p>This is the first team assignment. Review and share the user needs you brainstormed. This week, your team will develop blueprints for your mobile web app by settling on a team point of view, storyboarding, and making paper prototypes.</p>
                </div>

                <div id="pov" class="sidenav-anchor">
                    <h4>Step 1: Make a Team Point of View</h4>
                    <p>By now you should be a pro at writing a point of view! As a team, think about the user need you want to address and come up with a point of view that illustrates the need and your studio brief. Remember to look at the issue from a high-level; don't try to plan out all the functionality for your app or design a solution here. Refer to previous assignments on point of view for more guidance if needed.</p>
                </div>

                <div id="storyboard" class="sidenav-anchor">
                    <h4>Step 2: Create 3 Storyboards</h4>
                    <p>Next, use your point of view and inspiration to come up with <u>three</u> <u><b>different</b></u> design ideas that address/engage your point of view to address a user need. Your setting should assume access to current tools, such as the ones from your inspiration. Illustrate each of these ideas with a storyboard.</p>

                    <p>A storyboard is a comic-strip-like set of drawings about what your interface does and how it is used to accomplish tasks in a real usage scenario. Feeling stumped about how to show your ideas visually? Check out <a href="http://books.google.com/books?id=tUwqbo48lp4C">"Understanding Comics"</a> by Scott McCloud, and Amal Dar Aziz's excellent <a href="http://spark-public.s3.amazonaws.com/hci/assignment_ressources/assignment3_storyboard_notes.pdf">Guide to Storyboarding</a>. A good storyboard should clearly demonstrate who the user is, the usage situation, and the user's motivations for using the interface. It should show what the user can accomplish with your interface, but it needn't (and often shouldn't) show a specific user interface design. For a storyboard including an app screen, the details of the screen are not relevant, but what those screens enable you to accomplish is. Check out these <a href="https://www.youtube.com/watch?v=z4glsttyxw8&index=10&list=PLLssT5z_DsK_nusHL_Mjt87THSTlgrsyJ&t=55s">lecture videos</a> to learn more.</p>

                    <p>Each storyboard should fit on <b>one</b> (single-sided) 8.5" x 11" sheet of paper and comprise of 6-8 panels. Use a thick pen like a Sharpie---ballpoint pen or pencil is not acceptable. A thick pen is a good reminder to focus on the high-level and not sweat the details at this point. (Don't worry, in a few weeks you'll have plenty of time to sweat the details.)</p>

                    <p>Remember that the three storyboards should diverge, meaning that they each represent different design ideas that address the same point of view. As an example, the following two storyboards both address the point of view "Through clever scheduling, homework doesn't have to be a time-consuming and dreaded process:" <a href="https://s3.amazonaws.com/coursera-uploads/user-c062cb137e8c3ccd320a5278/971604/asst-19/9d6cdd0a8f48a2e50db265312c8bf5be.jpeg">Storyboard 1</a>, depicts a way to prioritize tasks; <a href="https://s3.amazonaws.com/coursera-uploads/user-c062cb137e8c3ccd320a5278/971604/asst-19/59d984931b4cc72ea93c01d837076dcc.jpeg">
                    Storyboard 2</a>, depicts a way to factor in breaks.</p>
                    <p></p>
                </div>
                <div id="paperprototype" class="sidenav-anchor">
                    <h4>Step 3: Build 2 Paper Parallel Prototypes</h4>
                    <p>For this step, lay out your storyboards. Take some time to think about the different ideas you've had. Make sure you think out the strengths and weaknesses of each design, and how well they achieve the goals set out by your point of view. Buy-in and ownership are critical here.</p>

                    <p>Working as a group, make two paper prototypes. Each should clearly connect to your point of view, but in a completely different way. (Can you see we really value enumerating alternatives?) Each prototype will instantiate one of your storyboards (pick your two best storyboards). These sketch-level prototypes should show all of the important UI elements in approximate locations. They should not not show fonts, colors, or pixel-level details. Paper prototypes must be hand-drawn. No computers and printers are allowed. Again, it helps focus on the concepts, and saves you from wasting hours twiddling pixels. It also forces you to focus on the hard conceptual work of figuring out information architecture and functionality now. Years after taking this course, students often come back and tell us that paper prototyping was their favorite part of the class because of its effectiveness for rapid ideation.</p>

                    <p>The prototypes should be complete enough understand the "gist" of the app and to "run" a new user through each task. Small details that aren't very important for designing and do not affect the task (such as the copyright policy on Piazza) do not need to be included in the prototype. When you're done, everyone on your team should sign the prototypes. Your prototype interface should enable people to navigate, recover from errors, and change their mind. Check out the <a href=" http://www.youtube.com/watch?v=GrV2SZuRPv0">Hanmail video</a> for an awesome example and inspiration.</p>
                </div>
                <div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
                    <p> Examples are a great way to learn, but they are not a gold standard for this class, especially as it evolves over the years. Use these examples as a reference, see where they succeeed/breakdown, and make sure your final submissions adhere to the rubric items.</p>
                    <ul>
                        <li><a href="http://ixd.ucsd.edu/home/w17/assignments/examples/a03example1.html">Example 1</a> - This example shows two prototypes that are too similar, and a disjointed link between POV and storyboards.</li>
			<li><a href="http://ixd.ucsd.edu/home/w17/assignments/examples/a03example2.html"> Example 2</a> - This example has markedly distinct prototypes that each address the POV in their own way.</li>
                    </ul>
                </div>
                <div id="whatsthisfor" class="sidenav-anchor">
                    <h2><i>What’s this for? A UX agency perspective</i></h2>
                    <p><i>by Mike Davison, UX Project Manager</i></p>
                    <p><i>Agencies use storyboards to convey to clients potential solutions to a given problem....problems discovered during needfinding. Doing it this way allows you to tell a story and explain how a user will interact with your design, without the need to draw a single pixel or code a single line. Storyboards are generally used during the discovery phase of a project, or during pitching activities when we are trying to dazzle a client with our creative thinking!</i></p>
                </div>
                <div id="submit" class="sidenav-anchor">
                    <h2>Team Submission</h2>
                    <p>For this assignment, <b><u>ONE</u></b> person will submit the assignment for their team, listing every group member's student ID number in the assignment submission. Individual submissions will not be accepted. Meaning you must have joined a team by  this time. Remember to bring your storyboards to class.</p>
                    <p>Your write-up will contain the following in one pdf:</p>
                    <ul>
                        <li>Point of view that is the core motivation behind your app. </li>
                        <li>A comprehensive set of digital photos or scans of your three different storyboards.</li>
                        <li>A comprehensive set of digital photos or scans of both of your paper prototypes. </li>
                    </ul>
                    <a href="http://www.gradescope.com" class='btn btn-primary'>Submit your formatted pdf here</a>
                </div>
                <br><div id="evaluation" class="sidenav-anchor">
                    <h3>Evaluation Rubric</h3>
                    <p>Students earn one point for each binary criterion met.</p>
                    <div id ="rubric" class="ordered-list">
                        <?php include "rubric.html" ?>
                    </div>
                    <br>
                    <h2>Self Assessment</h2>
                    <br>
                    <a class='btn btn-primary' href="https://goo.gl/forms/nXtt99rxRmO6hKRJ2">During studio, click here to assess your group's work as a collective unit.</a>
                    </br>
                    <a style="margin-top:10px" class='btn btn-primary' href="https://goo.gl/forms/NqrxRI5aDpiY9uAI2"> During studio, click here to assess your own work and each of your team member's work.</a>
                </div>
            </div>
        </div>
        <br>
        <footer>
			<p>This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a>, revised in collaboration with <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a>, and the teaching staff.<p>
		</footer>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/hci.js"></script>
  </body>
</html>
