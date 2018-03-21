<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>A2&thinsp;&middot;&thinsp;HCI Design</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../../css/hci.css" rel="stylesheet">
<!-- 	<link href="../../css/hci_fixed.css" rel="stylesheet">
 -->    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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
                    <ul class="nav nav-stacked" id="sidenav-content"
>                    </ul>
                </div> <!-- /sidenav -->
            </div> <!-- /col-md-3 -->
            <div class="col-md-9" id="assignment-description">
                <div class="assessmentExposition">

                    <div>
                        <h1>A2: Experience Prototyping</h1>
                    </div>

                <div id="brief" class="sidenav-anchor">
                    <h2>Brief</h2>
                    <p>In this assignment, you will act as your own prototype to understand what features and/or changes are needed to give your users the experience that your app intends to give.</p>
                </div>

		<div id="pov" class="sidenav-anchor">
                    <h4>Step 1: Iterate your Point of View</h4>
                    <p>Incorporate the feedback you received from your studio TA into a more refined POV. Does it offer a solution, or an insight? Does it relate to a legitimate user need? Does it fit with your studio brief?</p>
                </div>

                <div id="experienceprototype" class="sidenav-anchor">
                    <h4>Step 2: Experience Prototypes</h4>
                    <p>You will conduct two experience prototypes, where you simulate the experience of using the app that you will be creating. An experience prototype actively engages your users in the task that your app performs, with you acting as the facilitator/computer. This means that you are pretending to be your app and will perform all the functions that you expect your app to do. The experience prototype will give you an idea of what kinds of functionality your app will need and how it needs to be designed in order to effectively complete its intended functionality.</p>
                    <p>For example, if your app intends to help two people meet together for lunch, you should be the one communicating with both the users to set up the lunch meeting. If your intended app asks for calendar availability, suggests a time, confirms the lunch meeting, and sends a reminder, it will be your responsibility to perform all of those actions yourself. You would <i>not</i> attend the lunch itself. After the planned lunch meeting, follow up with the users to gain feedback about their experience and how you can improve your prototype. It may be helpful to prepare a few questions, such as "How did my reminders affect whether or not you showed up to the lunch meeting?" or "What interactions on my part helped you successfully have a lunch meeting and which parts did not?"</p>
										<p><span style="color:red;"> Your second experience prototype should explore a different solution to the same point of view. You must also have different users between the two iterations. Think about ways that your prototypes can address the issues that are at the core of your point of view.  Do not draw an interface.</span> After the first experience prototype, gain feedback from the users you interacted with and make some improvements to your other experience prototype.</p>
                    <p>Document your experience prototypes with about half a page each of single spaced writing. Each write-up should address the following:
                        <ul>
                            <li>Description of the app idea that you are testing</li>
                            <li>What were the steps required for planning and what was included in executing the task?</li>
                            <li>How successful was the execution? What was not?</li>
                            <li>What adjustments did you make as the facilitator after your first prototype and why? What were the differences between your first experience prototype and the second? Which one was more successful and why?</li>
                            <li>Feedback from users after each experience prototype</li>
                            <li>What did you learn from doing the experience prototype and how will you apply the knowledge to your app?</li>
                        </ul>
                    </p>
                </div>

                <div id="inspirationboard" class="sidenav-anchor">
                    <h4>Step 3: Make an Inspiration board</h4>
                    <p><b>Team Inspiration Board:</b></p>
                    <ol>
                        <li>Start an inspiration board by listing 5-10 words that relate to your design idea or point of view. These words can be anything -- from similar designs to feelings that the idea evokes.</li>
                        <li>Once you’ve listed your words, come up with at least five inspirations, and share them by providing links or images within your assignment submission. For each inspiration, give a brief (1-2 sentences) and insightful explanation of why you chose it (What did you take away from it? What did you learn from it?... In other words, why did it inspire you?). Each of these inspirations should offer a different perspective to the design you are working on.</li>
                    </ol>
                    <p>Your inspiration can be existing applications, artifacts, products, services, or anything that relates to your concept. Here, web search is your friend (useful sites include Google, the ACM Digital Library, TechCrunch...). The relationship could be very concrete or very abstract. A carrot-peeler or a measuring cup can be your inspiration for an elegant and ergonomic software interface design.</p>
                    <p>As an example, if you were making a travel app, your words could be: relaxing, paradise, getaway, Europe, blue, etc. Then, some inspirations could be tripadvisor.com, souvenirs, twitter, Bank of America mobile banking app, and so on. You should not be submitting inspirations with tripadvisor.com, travelocity.com, expedia.com, as these websites all offer the same type of services and therefore, do not add anything “diverse” to the set. While it’s true that Google has a clean minimal layout and the iPhone has a beautiful design, citing those as inspiration wouldn’t be very specific.</p>
                    <p><a href="https://drive.google.com/file/d/0B83mQAPNBiV3VEVzY2JwM1dmRFU/view?usp=sharing">Here's a concrete example</a> of an inspiration board, found below the overview section, where you can see the existing products/systems/etc. that help establish the problem space being explored.</p>
                    <p><b>Benefits of Inspiration Boards:</b></p>
                    <ul>
                        <li>Making an inspiration board helps you understand the existing landscape.
                        <li>Inspiration boards can inspire you to improve upon an existing service or go in a totally different direction.</li>
                    </ul>
                </div>

                <div id="openarea" class="sidenav-anchor">
                    <h4>Step 4: Find the Open Areas</h4>
                    <p>Make a table listing your inspirations and attributes they have. This table will serve as a competitive analysis for your prototype versus the existing products in the world. Compare each inspiration to see what attributes some inspirations are missing to get an idea of what unique features you might want to include in order to make your prototype stand apart. What areas aren't covered that you might want to focus on?</p>
                    <p>Check out <a href="http://ixd.ucsd.edu/home/w17/assignments/examples/pdfs/competitive_analysis_example.pdf">this competitive analysis</a> to get an idea of what a good example of this part might be.</p>
                </div>
                <hr>
                <div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
										<p> Examples are a great way to learn, but they are not a gold standard for this class, especially as it evolves over the years. Use these examples as a reference, see where they succeeed/breakdown, and make sure your final submissions adhere to the rubric items.</p>
                    <!--TODO -->
                </div>

                <div id="studio" class="sidenav-anchor">
                    <h2>In Studio</h2>
                    <p>During studio, click the button below to fill out the Student Code of Conduct after forming teams.</p>
                    <a href="https://docs.google.com/a/ucsd.edu/forms/d/e/1FAIpQLSfc-biCdMb_AdeLXirdrYt2BTrfBgX56bSrCioBA689RcyPwA/viewform" class="btn btn-primary">Student Code of Conduct</a>
                </div>
                <div>&nbsp;</div>

                <div id="submit" class="sidenav-anchor">
                    <h2>Assignment Submission</h2>
                    <p> Submit a single formatted pdf file with the following items concatenated within it: 
                    </p>
                    <ul>
                        <li>Write-up of experience prototypes, and your Point of View.</li>
                        <li>5-10 words that relate to your design idea.</li>
                        <li>Five existing inspirations that relate to your thinking and explanations of why you chose those designs.</li>
                        <li>Table of competitive analysis.</li>
                    </ul>
                    <a href="http://www.gradescope.com" class='btn btn-primary'>Submit your formatted pdf here</a>
                </div>
                <div></div>

                <div id="evaluation" class="sidenav-anchor">
                    <br><h2>Evaluation criteria &amp; Grading rubric</h2>
                    <p>The rubric below contains criteria that are worth one point each and will be graded independently and in a binary fashion.</p>
                    <div class="table-responsive">
                        <?php include "rubric.html" ?>
                    </div>
                </div>

                <div id='self-assessment' class='sidenav-anchor'>
                  <h3>Self Assessment</h3>
                  <a href='https://docs.google.com/forms/d/e/1FAIpQLSdfelXxm00ydEiaAJrNFAmmfwx0JKzwn3-XvvisoxOaLoKOww/viewform' class='btn btn-primary'>During studio, click here to self assess your work.</a>
                </div>

                </div>

            </div>
        </div>
    </div>

      <footer>
        <p>
          This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a>, revised in collaboration with <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a>, and the teaching staff, You can see  <a href='http://cs147.stanford.edu'>Michael's version of the course here</a>.
        </p>
      </footer>

  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/hci.js"></script>
  </body>
</html>
