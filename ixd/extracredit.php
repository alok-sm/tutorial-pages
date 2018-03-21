<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Assignment">
    <title>IxD: Extra Credit</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/hci.css" rel="stylesheet">

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
    <?php include "../nav.php" ?>

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
                    <h1>Extra Credit Assignments</h1>
                    <p>You have three opportunities for extra credit. Feel free
		    to do as many as you wish. They are all group extra credit
		    opportunities. <br> All three are due on Sunday 3/19/2017 at
		    11:59pm on <a href='https://gradescope.com'>Gradescope</a>.</p>
                <!-- <a class='btn btn-primary' href='gradescope.com'>Submit</a> -->
                </div>

                <br>

                <div id="inspirations" class="sidenav-anchor">
                    <h3>Revisit Inspiration</h3>
                    <!-- <h4>(adds 1% to final grade)</h4> -->
                    <p>Before the implementation of your prototype, you compiled a list of inspirations.
Since then, your prototype has probably made so many twists and turns and transformations that it is no longer recognizable as the idea that you started off with.
To prepare for your final presentation, update your knowledge of related projects.
Related projects can be existing applications, artifacts, products, or services that relate to your concept.
Here, web search is your friend (potentially useful sites include Google, Google Scholar, the ACM Digital Library, TechCrunch, Engadget...).
Pick the five interesting projects that a juror is mostly like to ask you "How are you different from _____?"
In some cases, this might be a similar service like another to-do list, photo-sharing app, or party-finder. <!--exclude taboos!-->
In other cases, it might be repurposing general services like Google Docs or Twitter.</p>
                    <p>For each project, write a few detailed sentences that would answer juror questions like,
"Why would people use your application instead of _____?
In what situations would people use/do _____ instead of your application?"</p>

                    <ol>
											
											<li> Five projects are found with explanations of relevance and differences provided.</li>
											<li> Provided explanations are well-thought out and thorough as to why each project is relevant, and how they differ from the team's prototype.</li>
											
										</ol>
                </div>
                <br>
                
                <div id="launch" class="sidenav-anchor">
                    <h3>Publicize Your App</h3>
                    <!-- <h4>(adds 1.5% to final grade)</h4> -->
                    <p>You have done an amazing job prototyping and evaluating your application, and now it's time to see what the world thinks. Launch your app to the public. This means advertising on Google or Facebook, creating a Fan Page on Facebook, posting in the Mozilla Marketplace, or announcing on your app on social networks like Facebook and Twitter. (Posting to a UCSD mailing list is a good start, but think broader.) These are all just suggestions for what you might do. The goal of this extra credit opportunity is to expose your app to the public by any method you wish to use.</p>
                    <p>Submit any materials that show that you have widely advertised your application. This can include email receipts, screenshots of the app on a app store, or URLs to app listings. Also submit any materials necessary to show that people outside of this class and the university have started using your application as a direct result of your launch. Since this will differ between groups, we will leave up to you to decide what exactly is necessary to be submitted. The only requirement is to provide sufficient proof to show that you have launched your app to the public and that people have started using it.</p>

                    <ol>
											<li> Evidence is provided of the prototype's accessibility and more than a couple strangers (who are not people you know or in this class) have found your app and started using it.</li>
											<li> Evidence is provided that the prototype was widely noticed on social media. </li>
											<li> Submission includes longitudinal data (100+ users over 1+week over and above A9) on Woopra/Google Analytics.</li>
										</ol>
                </div>
                <br>
                
                <div id="video" class="sidenav-anchor">
                    <h3>Create a Video Demonstrating Your App</h3>
                    <!-- <h4>(adds 1.5% to final grade)</h4> -->
                    <p>Record a 1-minute video that includes the motivation behind your app (needfinding/brainstorming) and the main feature or “secret sauce” in your app.</p>
                    <p>Think of this video as a mixture of advertising and showing off all the hard work you have put into your application. <a href="http://www.youtube.com/watch?v=6NniNjKXoh8" target="_blank">Here is a great example of a video</a>, and <a href="http://hci.stanford.edu/courses/cs147/2012/show/video.php" target="_blank">here are the top 10 videos from past years</a>. Exercise your creativity as much as possible! Try to plan out your video before actually taking any footage. Storyboards are great tool to use here. This video will not be used as part of your final presentation slides, but should instead complement your poster session as well as serve as a way for you to remember your hard work in years to come. Upload these videos to YouTube.</p>
                    
										<ol>
											<li> Video is visually attractive, has mass appeal &amp; creativity.</li>
											<li> Several screens of the app are shown and linked to the motivation behind the scenario.</li>
											<li> Video effectively conveys the user-centered motivation of the app's value and walks through a scenario with the app's main features</li>
											
										</ol>
                </div>
                <br>
            </div>
        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/hci.js"></script>
  </body>
</html>
