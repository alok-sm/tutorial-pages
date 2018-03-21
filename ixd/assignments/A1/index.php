<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
<title>IxD&thinsp;&middot;&thinsp;A1</title>

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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112183456-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112183456-1');
</script>

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
                <div class="assessmentExposition">

                    <div>
                        <h3>A1: Needfinding</h3>
                    </div>
                    <!-- &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;<a href="http://ixd.ucsd.edu/home/w17/assignments/A2/">A2 &rarr;</a> -->
                <div id="brief" class="sidenav-anchor">
                    <h4>Brief</h4>
                    <p>As Yogi Berra said, you can observe a lot just by watching. Watching how people do things is a great way to learn their goals and values, and come up with design insight. We call this <b>needfinding</b>. This assignment helps you train your eyes and ears to use the world for inspiration, instead of your own thoughts and opinions. Your goal is to uncover unmet user needs, breakdowns, clever hacks, and opportunities for improvement.</p>
                </div>

                <div id="read" class="sidenav-anchor">
                    <h4>Step 1: Read the Design Briefs</h4>
                    <p>Read the <a href ="../../studio.php">design brief</a> for your studio. While you are reading through the briefs, think about anything in your daily life or in the life of your community that you can apply to that brief. Your brief will serve as a theme and yardstick for your work throughout the project sequence.</p>
                </div>

                <div id="plan" class="sidenav-anchor">
                    <h4>Step 2: Pick an Activity &amp; Make a Plan</h4>
                    <p>Ultimately you will design a Web application, but you don't need to restrict your observation to people using computers and the Web. Observe people doing tasks as they do it now, which may or may not involve digital devices. Observing the strengths and weaknesses of analog tools can inspire ideas for the digital world. Because context matters, observe and interview people in situ: their environment, tools, and activities. If you have mobility limitations, perform your observations and interviews over email, phone, Skype, and/or video chat. If the activities you are interested in are tough to observe (maybe because they're infrequent), you can augment your interviews with <a href="https://www.youtube.com/watch?v=jiA9l-gI0FE">diary studies</a>.</p>
                    <p>Make a list of types of people you might interview and situations you might observe to come up with design insights. Think about different types of everyday users, marginalized users, and extreme users. Also think about other stakeholders in the ecosystem. Think about the characteristics of these users.</p>
                    <p>For example, this <a href="https://www.youtube.com/watch?v=MjSNWhjDvQU&index=9&list=PLLssT5z_DsK_nusHL_Mjt87THSTlgrsyJ">IDEO design team</a> was asked to redesign the grocery shopping cart. Their interviewees included not just everyday users, but also extreme users like professional shoppers and other stakeholders like store managers. Often, lead users or extreme users have come up with better solutions and creative tricks. Interviewing and observing marginalized users not only helps us create more inclusive designs, it also often highlights issues that everyone has to varying degrees. </p>
                </div>

                <div id="observe" class="sidenav-anchor">
                    <h4> Step 3: Observe &amp; Interview 3 People</h4>
                    <p>Select three people to observe. Choose people who are not similar to yourself in some way (for example, they are studying different discipline, working a different type of job, have a different family situation). Your goal is to observe the successes, breakdowns, and latent opportunities that occur when computers are used, not used, or could be used to support your chosen activity. Ask them to participate in this assignment and get permission from them. Be sure you coordinate with your participants to select a time that will be rich for observations.</p>

                    <p>Your three individuals do not, however, need to be representative of "the general public". It is perfectly valid to limit your observations to a specific niche or user group, if desired.</p>

                    <p>Tell the participants to perform the task as realistically as possible, while communicating to you as appropriate. Utilize <a href="https://www.youtube.com/watch?v=8SnFEINtf4U">the strategies</a> we talked about in lecture to help you. Take detailed notes and use digital photographs or sketches to document activities, but <b>do not use a video camera</b>. Try to understand why people are doing things the way they are by asking questions like, "Are there existing solutions that people aren't using? If so, why?"</p>

                    <p>Remember, your photos or sketches are meant to highlight specific <b>breakdowns or design opportunities</b>. A <b>breakdown</b> is when a user tries to do something and fails or does not know what to do. <b>Breakdowns</b> include slips, which are accidental; mistakes, where users have the wrong mental model; awkward or long interactions that just take too many steps. To effectively do this, caption each photo to explain what is being observed and describe the breakdown or design opportunity. Keep in mind that your TA will be evaluating you on these photos and captions; ask yourself if they will be able to understand what is going on without having observed with you. Note: Using stock photos/art is plagiarism and is unacceptable.</p>

                    <p>After each observation, ask the participant questions about what you observed. It should take you approximately two hours total to make all three observations if you have planned carefully. It will take longer if you haven’t!</p>
                </div>

                <div id="identifyneeds" class="sidenav-anchor">
                    <h4>Step 4: Identify User Needs</h4>
                    <p>Use your observations and findings to brainstorm a list specific user needs: opportunities for design innovation that would enable computers to better support the activity you observed. Think back to when you asked yourself, "When, where, how, or why can’t someone use what is out there already for this activity?" What does this tell you about the unmet needs that they have? Come up with as many user needs as you can that are based off your observations--feel free to brainstorm with anyone around you to generate as many interesting ideas as possible.</p>

                    <p>After you've generated a large brainstorm list, narrow down your unmet user needs to <b>at least 15</b> most insightful ones. Each idea should be able to become the basis for a design project.</p>

                    <p>Your list should be articulated as user needs. <b>You are not looking for solutions yet: focus on user needs and goals only</b>. An example of a need might be "Sometimes, when Scott takes the Caltrain home, there is no room for his bike and he has to wait for the next one. Scott needs a way to plan what train to take based on how much room is available in the bike car".</p>

                    <p>It is helpful to use the phrases <b>"needs a way to"</b> or <b>"needs to be able to"</b> as you list your user needs.</p>
                </div>

                <div id="pov" class="sidenav-anchor">
                    <h4>Step 5: Point of View</h4>
                    <p>Based off the unmet user needs you found, write a point of view that describes a core problem in relation to the studio brief. It should address a deep user need and take on a high-level design strategy without offering any concrete solutions. Some examples are: "You are your own best cheerleader"; "The easy way isn't always the best way"; "Library books are valuable, yet underutilized"; "Sleep is hard to fix with an alarm"; "Craving brings suffering"; "Point of views don't have to be hard to write."</p>

										<p>Point of views are meant to constrain--yet stimulate--creativity, and help you make design decisions later on. Solutions should immediately come to mind when you hear them. Imagine them as your overall vision of your app, or your mission statement. In some cases, you may need to contextualize your POV, but the best ones are less than 10 words.</p>
                </div>

                <div id="needfindingtalk" class="sidenav-anchor">
                    <h4>Step 6: Prepare a Needfinding Talk</h4>
                    <p>Prepare a 1-minute talk about your needfinding approaches and results to be presented in studio. What activity did you choose to examine? How did you examine it, with what methods? What major insights or breakdowns did you discover? What promising unmet needs were identified as a result? Do not print out your sketches or pictures, just use words so as not to consume time explaining a complicated scene or sketch.</p>
                </div>

                <div>
                    <br><i><h2>What’s this for? A UX agency perspective</h2>
                    <p>by Mike Davison, Community TA and UX Project Manager</p>
                    <p>Needfinding is probably the most important part of any UX Designer's arsenal. Without it, your design team could spend months designing a solution that completely misses the point. You will be surprised at how much you can learn, especially when you vary the audience.</p>
                    <p>Take the smartphone In all likelihood, you will have seen an elderly person press the screen harder and more slowly when it does not respond as they had expected. Needfinding research has suggested that this relates to 50s, 60s and 70s technology - the technology this age group are familiar with...this technology often does yield a different result if you press harder.</p>
                    <p>Why is this useful? Well perhaps we could develop interfaces that took into account the pressure the user applies, and not just where they apply it? How could we make the interface itself easier for the elderly user? Needfinding is a very powerful way to generate ideas.</p></i>
                </div>

                <div id="examples" class="sidenav-anchor">
                    <h2>Student Examples</h2>
										<p> Examples are a great way to learn, but they are not a gold standard for this class, especially as it evolves over the years. Use these examples as a reference, see where they succeeed/breakdown, and make sure your final submissions adhere to the rubric items.</p>
                    <ul>
                        <li>These observations describe processes and highlighting design breakdowns. This example also includes a staff suggestion regarding the method used: <a href="https://d396qusza40orc.cloudfront.net/hciucsd/assignment_ressources/Student%20Examples/Assignment%201/A1Ex-Obs.pdf">Observation example</a>
                        </li>

                        <li>These user needs do not focus too much on solutions: <a href="https://d396qusza40orc.cloudfront.net/hciucsd/assignment_ressources/Student%20Examples/Assignment%201/A1Ex-Needs.pdf">User needs example</a>
                        </li>

                        <li>These photos and captions describe the activity being observed and explain the design breakdown or opportunity: <a href="https://d396qusza40orc.cloudfront.net/hciucsd/assignment_ressources/Student%20Examples/Assignment%201/A1Ex-Photos.pdf">Photos and captions example</a>
                        </li>
                    </ul>
                </div>

                <hr>
                <div id="submit" class="sidenav-anchor">
                    <h2>Assignment Submission</h2>
                    <p> Submit a single formatted pdf file with the following items concatenated within it (see the <a href="http://ixd.ucsd.edu/home/w17/assignments/A1/index.php#examples">Student Examples</a> section for how to format each item):
                    </p>
                    <ul>
                        <li>An explanation of how the activity you observed relates to the design brief for your studio.</li>
                        <li>Thorough descriptions of your observations for each of the three people observed.</li>
                        <li>A total of three or more photos or sketches of a design breakdown or opportunity from your observations, at least one photo for each person you observed. <b>Remember</b>: Each photo must have a caption that fully conveys the breakdown or opportunity.</li>
                        <li>A list of insightful unmet needs inspired by what you observed (at least 15). If you brainstormed with others, please include their names in your submission to recognize their contribution. </li>
												<li>A clearly identified POV.</li>
                    </ul>
                    <p>Submitted in studio, you are responsible for giving a prepared 1 minute summary of your findings. </p>.
                    <a href="http://www.gradescope.com" class='btn btn-primary'>Submit your formatted pdf here</a>
                </div>
                <div></div>

                <div id="evaluation" class="sidenav-anchor">
                    <h3>Evaluation Rubric</h3>
                    <p>Students earn one point for each binary criterion met.</p>
                    <div class="table-responsive">
                        <?php include "rubric.html" ?>
                    </div>
                </div>

                <div id='self-assessment' class='sidenav-anchor'>
                  <h3>Self Assessment</h3>
                  <a href='https://goo.gl/forms/kDguMPj7pGm1tS0l2' class='btn btn-primary'>During studio, click here to self assess your work.</a>
                </div>


                <div id="faq" class="sidenav-anchor">
                  <br><h3>Frequently Asked Questions</h3>

                  <div class="row">
                    <div class="col-md-4">
                        <strong>Does this assignment have to be directly related to my studio topic?</strong>
                      </div>
                      <div class="col-md-8">
                        <p> Yes, your assignments for the rest of the quarter have to relate to your studio theme. Two reasons for this: designing for a brief is how the real world works, and you will benefit much more in your studio when multiple teams work on related projects. </p>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                        <strong>Is this an individual assignment?</strong>
                      </div>
                      <div class="col-md-8">
                        <p> Yes. Each person will need to submit their own assignment, on an activity related to their studio theme. </p>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                        <strong>Do I need 15+ unmet user needs for each person I interview, or is it 15+ for all three individuals?</strong>
                      </div>
                      <div class="col-md-8">
                        <p> Submit at least 15 needs (more is fine) selected from your brainstorm. This list of unmet needs is based on the three user interviews you conduct.</p>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                        <strong>How do I find people to interview?</strong>
                      </div>
                      <div class="col-md-8">
                        <p> Finding and interviewing people in this way can be daunting at first, but it is necessary in avoiding assumptions and in getting data about real people that exist in the world. As such, learning to recruit users to interview is a key goal of this assignment, as it will be important in the real world and research. You are free to come up with whichever methods or incentives for recruiting, but we suggest that you reach out to your friend group or other students in your studio to participate in your interviews. </p>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                        <strong>How many activities do I observe?</strong>
                      </div>
                      <div class="col-md-8">
                        <p> In general, you should be observing three people performing the same activity. This can sometimes vary, depending on if your three participants are performing three different but thematically related activities. </p>
                      </div>
                  </div>


                  <div class="row">
                    <div class="col-md-4">
                        <strong>How complicated does the activity have to be to require an interview of 10-15 minutes?</strong>
                      </div>
                      <div class="col-md-8">
                        <p> See the example assignments to give you an idea of the appropriate scope of the activity. </p>
                      </div>
                  </div>



                </div>

            </div>
        </div>
    </div>
      <footer>
         <p>
            This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a>, revised in collaboration with <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a>, and the teaching staff.
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
