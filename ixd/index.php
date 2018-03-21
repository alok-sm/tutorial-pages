<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Human-Computer Interaction Design">
  <title>IxD • COGS120/CSE170</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/hci.css" rel="stylesheet">
  <style type="text/css">
  .scrolloff {
    pointer-events: none;
  }
  </style>
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

<body data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- Fixed navbar -->
  <?php include "nav.php" ?>
  <div class="container">
    <div class="jumbotron" id='home'>
      <div class='row'>
        <div class='col-md-8'>
          <h1>Interaction Design</h1>
          <p>COGS120 / CSE170 &middot; Scott Klemmer &middot; Winter 2018 &middot; UCSD</p>
        </div>
        <div class='col-md-4' style="font-size: 14px; background-color: white; padding: 20px 5px;">
          <h5 style='text-align: center'>Announcements</h5>
          <ul>
            <li>
              Use <a href="http://piazza.com/ucsd/winter2018/cogs120cse170">Piazza</a> to communicate with teaching staff.
            </li>
            <li>
              Submissions open <strong>36 hours</strong> before due.
            </li>
            <li>
              Feedback and scores are availble on the following Monday at noon. Check your grade at <a href="https://docs.google.com/spreadsheets/d/1ArGonXOGq8N1uvfxyE5FOfoDz_-o3y9i07GN5dfhKHk/edit#gid=1886338047">here</a>.
            </li>
            <li>
              Register your free Invision education license at <a href="https://docs.google.com/document/d/1rvZoXycvCxSQgjzn5tsfhDUHz85A5Oxy9vlzBQ3Eej0/edit" onclick="alert('You need to sign in this Google Doc with your @ucsd.edu email.')">here</a>.
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="syllabus">
      <p class="lead">In this course, you will learn how to design technologies that bring people joy, rather than frustration. To do this, you'll learn techniques for rapidly prototyping and evaluating multiple interface alternatives — and why rapid prototyping and comparative evaluation are essential to excellent interaction design. You'll learn how to conduct fieldwork with people to help generate design ideas. You'll learn how to make paper prototypes and low-fidelity mock-ups that are interactive — and how to use these designs to get feedback from teammates, clients, and users. You'll learn principles of visual design, perception and cognition so that you can effectively organize and present information with your interfaces. And you'll learn how to perform and analyze controlled experiments online.</p>
      <p class="lead">Through a series of weekly assignments, you will complete a quarter-long project in teams of three. Each week, in small design studios, you present and discuss work with peers. The setting for the course is mobile web applications. The constraints of this small form factor set the stage for this challenge.</p>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <strong>Weekly schedule</strong>
          <p>Lecture</p>
          <span class="text-muted">
            Tuesdays 9:30am-10:50am<br>
            CICC 101 (Copley International Conference Center)
          </span>
        </div>
        <div class="col-md-4">
          <br>
          <p>Labs</p>
          <span class="text-muted">
            Thursdays 9:30am-10:50am<br>
            CICC 101 (Copley International Conference Center)
          </span>
        </div>
        <div class="col-md-4">
          <br>
          <p>Studio Section</p>
          <span class="text-muted">Fridays at CSB.<br>Learn more about studio <a href="./studio.php">here</a></span>.
          </div>
        </div>
        <br/>
        <div class="row">
          <div class='col-md-2'></div>
          <div class='col-md-8'>
            <strong>CSB (CogSci building) location</strong>
            <div id="cogsci_map">
              <iframe id="cogsci_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1675.3279750117358!2d-117.2386609963746!3d32.88082127449335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x298f7274570a6f7a!2sCognitive+Science+Building!5e0!3m2!1sen!2sus!4v1420763765089" width="760" height="300" frameborder="0" style="border:0"></iframe>
            </div>
          </div>
          <div class='col-md-2'></div>
        </div>
        <hr>
        <div class='row'>
          <h4>&nbsp;&nbsp;&nbsp;Office Hours Calendar</h4>
          <div class='col-md-2'></div>
          <div class='col-md-8'>
            <iframe src="https://calendar.google.com/calendar/b/1/embed?mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=ucsd.edu_c2c18f6b7nv34tpsj3e6eu44jc%40group.calendar.google.com&amp;color=%23865A5A&amp;ctz=America%2FLos_Angeles" style="border-width:0" width="760" height="500" frameborder="0" scrolling="no"></iframe>
          </div>
          <div class='col-md-2'></div>
        </div>
        <div class='row'>
          <div class="col-md-3">
            <strong> Monday</strong>
            <ul class="list-unstyled">
              <li>
                Evan Schmitz <span class="text-muted"> 2:00pm-3:00pm</span>
              </li>
              <li>
                Akshita Sivakumar <span class="text-muted"> 3:00pm-4:00pm</span>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <strong> Tuesday</strong>
            <ul class="list-unstyled">
              <li>
                Scott Klemmer<span class="text-muted"> 11:00am-12:00pm</span>
              </li>
              <li>
                Tricia Ngoon <span class="text-muted"> 2:00pm-3:00pm</span>
              </li>
              <li>
                Chen Yang <span class="text-muted"> 5:00pm-6:00pm</span>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <strong> Wednesday</strong>
            <ul class="list-unstyled">
                <li>
                  Sherry Ding<span class="text-muted"> 1:00pm-2:00pm
                </li>
                <li>
                  Toma Zubatiy<span class="text-muted"> 3:00pm-4:00pm</span>
                </li>
              </ul>
            </div>
            <div class='col-md-3'>
              <strong> Thursday</strong>
              <ul class='list-unstyled'>
                <li>
                  Alok Mysore
                  <span class="text-muted"> 11am-12pm</span>
                </li>
                <li>
                  Ian Drosos
                  <span class="text-muted"> 12pm-1pm</span>
                </li>
                <li>
                  Gubbala Madhuri
                  <span class="text-muted"> 4:00pm-5:00pm</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr>
        <div id="calendar" class="anchor">
          <h3>Calendar <span style='font-size:15px; '>&#8226; Follow the lab/assignment link to submit work</span> <span style='font-size:15px;'> &#8226; Bring a fully-charged laptop to each class! </span></h3>
          <table class="table">
            <thead>
              <tr>
                <th>Week</td>
                  <th>Lecture</td>
                    <th>Lab</td>
                      <th>Assignment</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <h6>1</h6></td>
                          <td>
                            <h6>January 9</h6>
                            <p><a href="lectures/IntroHCI-w18-Week1.pdf">Introduction &amp; Needfinding</a></p>
                            <ul>
                              <li>Participant Observation <a href="https://www.youtube.com/watch?v=8SnFEINtf4U&t=393s">video</a></li>
                              <li>Interviewing <a href="https://www.youtube.com/watch?v=BMQLiShR3I0">video</a></li>
                              <li>Additional Needfinding Strategies <a href="https://www.youtube.com/watch?v=jiA9l-gI0FE">video</a></li>
                              <li><a href="assignments/FreshmanExperience.pdf" target="_blank">A0: Design thinking (handout)</a></li>
                              <!-- <b>(Handout due at end of class)</b> -->
                            </ul>
                            <!-- <h6>Turn in worksheet at the start of studio.</h6> -->
                          </td>
                          <td>
                            <h6>January 11</h6>
                            <p>
                              <a href="lab/lab1/">Source control</a>
                            </p>
                          </td>
                          <td>
                            <h6>Due Thursday, 1/11, 11:59&thinsp;pm<!-- for online submission--></h6>
                            <p><a href="./assignments/A1">A1: Needfinding</a></p>
                            <h6>Turn in A0 (worksheet) at the start of studio.</h6>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h6>2</h6></td>
                            <td>
                              <h6>January 16</h6>
                              <p><a href="lectures/IntroHCI-w18-Week2.pdf">Experience Design</a></p>
                              <ul>
                                <li>Paper Prototypes and Mockups <a href="https://www.youtube.com/watch?v=lgEm67KLIIM">video</a></li>
                                <li>Faking it: Wizard of Oz <a href="https://www.youtube.com/watch?v=_lawz2ueY9M">video</a></li>
                              </li>
                            </ul>
                            <p><b>Quiz 1</b></p>
                          </td>
                          <td>
                            <h6>January 18</h6>
                            <p><a href="lab/lab2/">Styling</a></p>
                          </td>
                          <td>
                            <h6>Due Thursday, 1/18, 11:59&thinsp;pm</h6>
                            <p><a href="./assignments/A2">A2: Experience Prototypes</a></p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h6>3</h6></td>
                            <td>
                              <h6>January 23</h6>
                              <p><a href="lectures/IntroHCI-w18-Week3.pdf">Prototyping</a></p>
                              <ul>
                                <li>Heuristics: Understanding <a href="https://www.youtube.com/watch?v=gSm6bOw-KcQ&list=PLNtQfKgd43l2ybf4ukgGz5513zKBXCMgM&index=2">video</a></li>
                                <li>Heuristics: Action <a href="https://www.youtube.com/watch?v=Hi6YO1tTqTk&index=3&list=PLNtQfKgd43l2ybf4ukgGz5513zKBXCMgM">video</a></li>
                                <li>Heuristics: Feedback <a href="https://www.youtube.com/watch?v=tLFrVe4o_98&list=PLNtQfKgd43l2ybf4ukgGz5513zKBXCMgM&index=4">video</a></li>
                                <li>Watch two students
                                  <br>do Heuristic Evaluation <a href="https://www.coursera.org/learn/human-computer-interaction/lecture/JSkOZ/watch-two-students-do-heuristic-evaluation">video</a></li>
                                </ul>
                              </td>
                              <td>
                                <h6>January 25</h6>
                                <p><a href="lab/lab3/">Interactive Web pages</a></p>
                              </td>
                              <td>
                                <h6>Due Thursday, 1/25, 11:59&thinsp;pm</h6>
                                <p><a href="./assignments/A3">A3: Prototyping</a></p>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <h6>4</h6></td>
                                <td>
                                  <h6>January 30</h6>
                                  <p><a href="lectures/IntroHCI-w18-Week4.pdf">Show Your Flow: Get Feedback</a></p>
                                  <ul>
                                    <li>Video Prototyping <a href="https://www.youtube.com/watch?v=FmppiiG2t-s">video</a></li>
                                  </ul>
                                  <p><b>Quiz 2</b></p>
                                </td>
                                <td>
                                  <h6>February 1</h6>
                                  <a href="lab/lab4/">Servers</a>
                                </td>
                                <td>
                                  <h6>Due Thursday, 2/1, 11:59&thinsp;pm</h6>
                                  <p><a href="./assignments/A4">A4: Show Your Flow: Get Feedback</a></p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <h6>5</h6></td>
                                  <td>
                                    <h6>February 6</h6>
                                    <p><a href="lectures/IntroHCI-w18-Week5.pdf">Mental models &amp; distributing cognition</a></p>
                                    <ul>
                                      <li>Mental Models <a href="https://www.youtube.com/watch?v=qEjHcbjzxCw">video</a></li>
                                      <li>Distributing Cognition (Part 1) <a href="https://www.youtube.com/watch?v=xniSC7AzwwI">video</a></li>
                                      <li>Distributing Cognition (Part 2) <a href="https://www.youtube.com/watch?v=cwCKDwZ-1xQ">video</a></li>
                                    </ul>
                                  </td>
                                  <td>
                                    <h6>February 8</h6>
                                    <p><a href="lab/lab5/">Putting it together</a></p>
                                    <!-- <p><a href="#">Putting it together (Coming soon)</a></p> -->
                                  </td>
                                  <td>
                                    <h6>Due Thursday, 2/8, 11:59&thinsp;pm</h6>
                                    <p><a href="./assignments/A5">A5: Skeleton and a plan</a></p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <h6>6</h6></td>
                                    <td>
                                      <h6>February 13</h6>
                                      <p><a href="lectures/IntroHCI-2016-Week6.pdf">Visual design</a></p>
                                      <ul>
                                        <li>Visual Design <a href="https://www.youtube.com/watch?v=q8FoSUTkCl0">video</a></li>
                                        <li>Typography <a href="https://www.youtube.com/watch?v=3WDuneuBxJg">video</a></li>
                                        <li>Grids and Alignment <a href="https://www.youtube.com/watch?v=_BJOoQL80Og">video</a></li>
                                        <li>Reading and Navigating <a href="https://www.youtube.com/watch?v=j67aj9Oxa9A">video</a></li>
                                      </ul>
                                      <p><b>Quiz 3</b></p>
                                    </td>
                                    <td>
                                      <h6>February 15</h6>
                                      <p><a href="lab/lab6/">FB Login & AJAX</a></p>
                                    </td>
                                    <td>
                                      <h6>Due Thursday, 2/15, 11:59&thinsp;pm</h6>
                                      <p><a href="./assignments/A6">A6: Meat on the bones</a></p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <h6>7</h6></td>
                                      <td>
                                        <h6>February 20</h6>
                                        <p><a href="lectures/IntroHCI-2016-Week7.pdf">Running Experiments</a></p>
                                        <ul>
                                          <li>Assigning participants to conditions <a href="https://www.youtube.com/watch?v=DGJaUkPVlVw">video</a></li>
                                          <li>In-Person Experiments <a href="https://www.youtube.com/watch?v=D-JGve9goWE&index=27&list=PLLssT5z_DsK_nusHL_Mjt87THSTlgrsyJ">video</a></li>
                                          <li>Comparing rates w/CHI-Squared <a href="https://www.youtube.com/watch?v=qLCyuFZMYqY&index=31&list=PLLssT5z_DsK_nusHL_Mjt87THSTlgrsyJ">video</a></li>
                                        </ul>
                                      </p>
                                    </td>
                                    <td>
                                      <h6>February 22</h6>
                                      <p><a href="lab/lab7/">Analytics and A/B Testing</a></p>
                                      <!-- <p>If you're interested in learning databases,</p>
                                      <p><a href="lab/lab_db">Databases</a>(optional)</p> -->
                                    </td>
                                    <td>
                                      <h6>Due Thursday, 2/22, 11:59&thinsp;pm</h6>
                                      <p><a href="./assignments/A7">A7: Ready for testing</a></p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <h6>8</h6></td>
                                      <td>
                                        <h6>February 27</h6>
                                        <p><a href="lectures/IntroHCI-w17-Week8.pdf">Input</a></p>
                                        <ul>
                                          <li>Finding, Filtering &amp; Foraging <a href="https://d1b10bmlvqabco.cloudfront.net/attach/jc6osrwf7pc4o6/ixijmf8ityy4b4/jebuheam6vf5/Finding_Filtering_and_Foraging.mp4">video</a></li>
                                          <li>Designing Effective Search <a href="https://d1b10bmlvqabco.cloudfront.net/attach/jc6osrwf7pc4o6/ixijmf8ityy4b4/jebui57geuwl/Designing_Effective_Search.mp4">video</a></li>
                                        </ul>
                                      </td>
                                      <td>
                                        <h6>March 1</h6>
                                        <!-- <p><a href="lab/lab8/">Third-party APIs</a></p> -->
                                        <p><a href="lab/lab8/">APIs, Gesture, and AJAX </a></p>
                                      </td>
                                      <td>
                                        <h6>Due Thursday, 3/1, 11:59&thinsp;pm</h6>
                                        <p><a href="./assignments/A8">A8: Test your prototype</a></p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <h6>9</h6>
                                      </td>
                                      <td>
                                        <h6>March 6</h6>
                                        <p><a href="lectures/IntroHCI-w17-Week9.pdf">Presenting design work</a></p>
                                        <p>
                                          <ul>
                                            <li><a href="lectures/final_presentation.pdf">Stand and Deliver:<br>Presenting Your Design Work</a></li>
                                            <li><a href="http://www.stanford.edu/group/eweek/2010/media/Presentation_Design_handout.pdf">Presentation Design &amp; Delivery Handout</a></li>
                                          </ul>
                                        </p>
                                        <p><b>Quiz 4</b></p>
                                      </td>
                                      <td>
                                        <h6>March 8</h6>
                                        <p><a href="lab/lab9">Debugging 101</a>
                                          <br/> (submission&nbsp;required)</p>
                                          <!--<li>Chi-Squared Test</li>
                                          <li>Posters</li>
                                          <li>Open Office Hours</li>
                                        </ul>-->
                                      </td>
                                      <td>
                                        <h6>Due Thursday, 3/8, 11:59&thinsp;pm</h6>
                                        <p><a href="./assignments/A9">A9: Results!</a></p>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <h6>10</h6></td>
                                        <td>
                                          <h6>March 13</h6>
                                          <p><a href="lectures/IntroHCI-w17-Week10.pdf">Social computing</a></p>
                                        </td>

                                        <td>
                                          <h6>March 15</h6>
                                          <p><a href="./lab/lab10/index.php">Video Workshop & pitch practice (no&nbsp;submission)</p>
                                          </td>
                                          <td>
                                            <h6>Due Thursday, 3/15, 11:59&thinsp;pm</h6>
                                            <p><a href="./assignments/A10">A10: Show &amp; Tell</a></p>
                                            <h6>Friday, 3/16, 4:30&thinsp;pm</h6>
                                            <p><i><a href="./finalpresentation_wip">Final Show</a></i></p>
                                            <h6>Due Sunday, 3/18, 11:59&thinsp;pm</h6>
                                            <!--<p><a href="#">Extra Credit Work (TBD)</a></p>-->
                                            <p><a href="./assignments/extracredit.php">Extra Credit Work</a></p>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <footer>
                                    This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a>. It incorporates revisions by <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a> and many TAs. Instructors: you are welcome to use these materials for your own class, and dozens of courses around the world do. We share all course materials <a href="https://creativecommons.org/licenses/by/4.0/deed.en_US">through a CC-BY license</a>. Please let Scott know if you use them, and also any suggestions you have. We thank <a href=http://www.calit2.net/>CalIT2</a> and <a href=http://cogsci.ucsd.edu>CogSci</a> for providing our studio space.
                                  </footer>
                                  <br/>
                                  <br/>
                                </div>
                                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                                <script src="https://code.jquery.com/jquery.js"></script>
                                <!-- Include all compiled plugins (below), or include individual files as needed -->
                                <script src="js/bootstrap.min.js"></script>
                                <script>
                                $(document).ready(function() {
                                  $('#atkiinson_canvas').addClass('scrolloff');
                                  $("#cogsci_canvas").addClass('scrolloff');
                                  $("#hss_canvas").addClass('scrolloff');

                                  $('#atkinson_map').on('click', function() {
                                    $('#atkiinson_canvas').removeClass('scrolloff');
                                  });
                                  $("#atkiinson_canvas").mouseleave(function() {
                                    $('#atkiinson_canvas').addClass('scrolloff');
                                  });

                                  $('#cogsci_map').on('click', function() {
                                    $('#cogsci_canvas').removeClass('scrolloff');
                                  });
                                  $("#cogsci_canvas").mouseleave(function() {
                                    $('#cogsci_canvas').addClass('scrolloff');
                                  });

                                  $('#hss_map').on('click', function() {
                                    $('#hss_canvas').removeClass('scrolloff');
                                  });
                                  $("#hss_canvas").mouseleave(function() {
                                    $('#hss_canvas').addClass('scrolloff');
                                  });
                                });
                                </script>
                              </body>

                              </html>
