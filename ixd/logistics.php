<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Logistics: HCI Design">
   <title>IxDesign: Logistics</title>

   <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">
   <link href="css/hci.css" rel="stylesheet">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".sidenav" data-spy="scroll">

   <!-- Fixed navbar -->
   <?php include "nav.php" ?>

   <!-- this is a comment in HTML -->
   <div class="container">
     <div class="row">
        <div class="col-md-3">
            <div class="sidenav" data-spy="affix">
               <ul class="nav nav-stacked" id="sidenav-content">
               </ul>
            </div>
            <!-- /sidenav -->
        </div>
         <!-- /col-md-3 -->

        <div class="col-md-9" id="logistics">

            <div id="prereqs" class="sidenav-anchor">
               <h3>Prerequisites</h3>
               <p>You must have taken <b>CSE8A/11</b> AND (<b>DSGN1 <i> or </i> COGS1 <i> or </i> COGS187A</b>) to enroll. Students without these prerequisites will be dropped from the class and will not receive a grade. Why CSE8a/11? because all students need some programming fluency to complete the course project. While some students may do more of the programming and others more of the other pieces, every student must make a significant programming contribution to their team. Why DSGN1/COGS1/COGS187A? Because students need basic knowledge of human cognition to do HCI.</p>
            </div>

            <div id='laptop' class='sidenav-anchor'>
               <h3>Equipment</h3>
               <p><b>Bring a laptop to class, lab, &amp; studio</b> for hands-on work. If your laptop's battery won't last the entire class, arrive early so you can sit near a plug. If you do not have a laptop, or yours breaks, you can borrow one from the Biomedial Library. Restrict your laptop use to class-relevant activities like doing the exercises or taking notes. No Facebook, email, and so on. It distracts other students, not just you. We also assume all students will have access to a digital camera for assignments.</p>
            </div>

            <div id="lab" class="sidenav-anchor">
               <h3>Lab</h3>
               <p>Each week's lab will help you learn tools and techniques to implement Web applications. Lab walkthroughs will be posted on the class website the day before lab. We strongly encourage all students to attend lab in person because the teaching staff (and your peers!) can help you. However, you may choose to complete labs on your own. We work hard to make sure that labs can be completed within classtime. That said, we know that students go at different places and sometimes go slower. If you are still working at the end of classtime, just let your TA know in person (not Piazza) and we will give you additional time. Labs are individual assignments; your submission must be your own work. <b>Submissions made by 2pm will receive full credit.</b></p><p>If you can complete the stretch goal during classtime, awesome! That said, we don't expect everyone to do the stretch goals; they're there for students already familiar with the technologies who want to push themselves further. Our class has students with really widely varying prior experience with these web technologies, and stretch goals help accommodate that. We don't expect everyone to do the stretch goals. If you don't have time to do the stretch goal in class and would like to do more programming, we encourage you to spend that effort on your project.</p>
               <p><b>Heroku:</b> You are required to keep your 3 most recent labs on Heroku. Your team is required to keep the 6 most recent assignments in Heroku.</p>
            </div>

            <div id="assignments" class="sidenav-anchor">
               <h3>Assignments</h3>
               <p>In the weekly design assignments, you will progressively design and develop an interactive web application. This group project will culminate in a presentation and poster session at the end of the quarter in front of invited design jurors. Use <a href="http://gradescope.com">www.gradescope.com</a> to submit your assignments online by 11:59pm each Thursday. You should submit your assignments as a pdf or word doc. Do not spend time "beautifying" your submission.</p>
               <p><b>No late assignments will be accepted.</b> There are two reasons for this no late policy. First, to be able to provide you rapid feedback on your work, the teaching staff meets on Friday afternoon to grade. Second, you'll present your work in Friday studio every week, and you need to be prepared to participate. <!--Third, after the submission deadline, students can view each others' assignments, so that you can learn from each other.--> If there is a problem with the website that makes it so you cannot submit your assignment, you must message your TA on Piazza by 1am or else you will receive a 0. You can only do this once.</p>
               <p>If you have a question about the assignment, do not wait to ask it the night before it's due. We cannot guarantee a prompt response</p>
            </div>

            <div id="grading" class="sidenav-anchor">
                <h3>Grading</h3>

                <div id="rubric" class="sidenav-anchor">
                    <h4>Rubrics</h4>
                    <p>Each assignment has a rubric explaining how the course staff will grade your submission. These rubrics have been developed over the years to clearly describe what we think mastery of each assignment entails. <i>True</i> mastery in any field is a <a href="http://www.amazon.com/Othello-Minute-Learn-Lifetime-Master/dp/B001XHNL3W">lifelong</a> process. (We don't expect you to become <a href="http://www.nytimes.com/2014/08/10/magazine/garry-kasparov.html">Garry Kasparov</a> or <a href="http://www.newyorker.com/magazine/2015/02/23/shape-things-come">Jony Ive</a> in just 10 weeks. That will take until next quarter.) But for this course, 'mastery' means performing at the level described in the rubric. Make sure to review the entire assignment description, and especially the rubric, before starting your assignment.</p>
                </div>
								<div id="feedback" class="sidenav-anchor">
                    <h4>Feedback</h4>
                    <p>The instruction staff will necessarily need time to thoroughly evaluate each assignment, and for some assignments this can be a very time consuming process before forming teams. Our intention is to give timely and effective feedback generally by the end of the weekend after submission, but sometimes we may need an entire week to grade all of the assignments.</p>
                </div>
                <div id='self' class='sidenav-anchor'>
                   <h4>Self &amp; team assessment</h4>
                   <p>Part of being a designer - or practitioner in any field - is being able to accurately assess how well you are doing. Helping you acquire that metacognitive skill is one of the course goals, so <b>you will grade every assignment you submit</b> using the assignment rubric. This is not always an easy task and we hope that this exercise will help you improve your self-assessment skills and get you start thinking about how to evaluate your own work.</p>

                   <p>Your work is assessed in two ways. First, you’ll evaluate your own work at end of studio each week. Second, the teaching staff will assess how many of rubric items your submission meets. When both reviewers are close (within 2 pts), your grade will be the average. If the two assessments differ by  more than that, your grade will be the TA’s score.(The number you see on Gradescope is the number of rubric items that the teaching staff has assigned you. This is not the final scaled score.)</p>

                   <p>For team assignments, you will self-assess as a team and then individually assess your own and teammates performance. In general, everyone on the team will earn the same grade. However, if a majority of the team reports that an individual was more/less successful in achieving their goals, that individual's grade will be adjusted accordingly.</p>

                   <h5>How well does self-assessment work?</h5>
                   <p>Occasionally, a student will say that self-assessment feels like 'guessing'. If so, students are very good guessers. With impressive consistency, well over half of all students self-assess within 1 point of the staff grade, and well over 80% are within 2 points. </p>

                   <p>Students overwhelming report learning a lot from self assessment. Many appreciate being able to assign their own grade, but some are uncomfortable with the responsibility. There's a philosophical reason why your self-assessed grade counts: it's your life! That doesn't mean we're not paying attention. If you've been to driving school, you know that you get to drive the car, AND there's an instructor right next to you in the passenger seat. They often have a brake pedal for emergencies. This class is like that. You drive, but we're right there next to you, paying attention and correcting when necessary.</p>

                   <p>Having both self and staff assessment is more work for us, not less&mdash;that's how much we believe this will help you learn to think like a designer.</p>
                </div>

                <div id="regrades" class="sidenav-anchor">
                   <h4>Reassessment</h4>
                   <p>The teaching staff works extremely hard to evaluate fairly and return assignments quickly.
We never give 'minus points'. The teaching staff do their best to assess your work based on the provided rubrics. Occasionally we make errors, and it's important to us to correct them, which is why we have a reassessment process.
We know you work hard, and want you to receive the grade you earned. If you believe your assignment score does not match the rubric, <b>submit a regrade request on GradeScope and include an explanation, within 7 days of receiving the grade</b>. Select any rubric item(s) in contention to see the 'request regrade' button at the bottom (we recommend that multiple queries be combined in a single request). This explanation should list the score that you think is most accurate for each rubric item, and explain why that score is more accurate than the one you received. A second staff member will regrade the entire assignment to ensure quality, and their grade will be your final score. Make sure that the staff have access to all materials needed (<i>e.g.</i>, the version of your app as of the submission deadline, login information, images or physical copies of any materials shown in person but not submitted online). Requests made orally, after 7 days, or via email not be accepted. Using disrespectful language or verbally hassling your TA with grading questions automatically earns you a 0 on the assignment. You will receive your revised and <b>final</b> assessment within 72 hours of submitting your regrade request.</p>
                <p>
                  If the regrade results in a change of any rubric item (in either direction), you retain the ability to ask for a regrade on a future assignment. If the regrade does not yield any changes at all (or you earn a 0 based on tone), then you’ve used up your ability to ask for a regrade.
                </p>
                </div>

                <div id="attendance" class="sidenav-anchor">
                   <h4>Attendance &amp; Participation</h4>
                   <p>Design is a contact sport, and studio is where the action is. <b>studio attendance is mandatory</b> because sharing and discussing designs with others is central to design. To receive credit for attending, you must arrive on time (no more than 5 minutes late) and stay for the entire session.</p>
                   <p><b>You are allowed two excused absences</b> for the quarter without penalty; thereafter you will receive zero credit for any missed studio. To receive an excused absence, you must ask your studio leader in advance, and receive an acknowledgment from them. Excusable absences include family emergencies, job interviews, and presenting at a conference. It does not include wanting to leave early for long weekend or vacation. Attending another class during lecture or studio is not an excusable absence. Athletes who would like to miss more than one studio to participate in athletic competitions must ask their studio leader for permission in week 1.</p>
                </div>

                <div id="scale" class="sidenav-anchor">
                   <h4>Grade composition &amp; scale</h4> Letter grade only: the "credit/no credit" option is not available. The course grade is out of 200 points, comprising:
                   <ul>
                      <li>Ten weekly assignments: 125 points.</li>
                      <li>Four in-class quizzes: 30 points. 10 points each, drop lowest. </li>
                      <li><a href="#self">Self &amp; team assessments</a>: 10 points (1 each for A1-A10)</li>
                      <li>Submitting Lab exercises: 16 points (2 each, 9 total submissions, drop lowest)</li>
                      <li>In Class Assignments: 4 points</li>
                      <li><a href="#attendance">Participation</a>: 15 points (one unexcused studio absence: max 10. two unexcused: max 5. Three+ unexcused: no credit.) You'll earn the following fraction of your max based on your level of participation: <br>
Zero: if in any instance of course participation/correspondence a student displays rude behavior, class participation is automatically marked as zero.<br>
Low: minimal participation in class/studio, never attended any office hours, and/or extraneous laptop use in class.<br>
Mid: some participation in class/studio, attended office hours<br>
High: active participation in class/studio + attended office hours
                      </li>
                   </ul>
                   <p>At the end of the quarter, point scores are translated into letter grades in the standard way. For example 180/200 is 90% and would earn an A-. In this class, as with any, the grade you earn reflects your performance. We don’t 'mark off' for anything.</p>
               <div>

                <div id='integrity' class='sidenav-anchor'>
                    <h4>Academic Integrity</h4>
                    <p>The course staff and I work hard to help you learn computational concepts and gain the skills necessary to be a contributor in digital society. We expect your help in achieving these goals. If you cheat, you not only fail yourself (in that you won’t have gained critical skills), but you fail UCSD (by lowering the expected quality of our undergraduate degrees). I have a personal responsibility to both you and to your fellow UCSD students -- and I take it seriously. <b>So don’t cheat.</b> I will submit an allegation report on anyone I believe to be not upholding our academic integrity contract. This is processed through UCSD's Academic Integrity Office.</p>
                    <p>The following is an excerpt from the UCSD General Catalog section on Academic Dishonesty:</p>
                    <p>No student shall engage in an activity that involves attempting to receive a grade by means other than honest effort, for example:</p>
                   <ol>
                   <li>No student shall knowingly procure, provide, or accept any materials that contain questions or answers to any examination or assignment to be given at a subsequent time.</li>
                   <li>No student shall complete, in part or in total, any examination or assignment (including clicker participation) for another person.
                   <li>No student shall knowingly allow any examination or assignment to be completed, in part or in total, for himself or herself by another person.</li>
                   <li>No student shall plagiarize or copy the work of another person and submit it as his or her own work.</li>
                   <li>No student shall employ unauthorized aids in undertaking course work.</li>
                   <li>No student shall, without proper authorization, alter graded class assignments or examinations and then resubmit them for regrading.</li>
                   </ol>
                </div>

                <!--<h5>Participation Rubric</h5>
                <div>
                 <p>Mastery: Asked lots of questions. Always attended Lecture/Piazza/Studio. Provided helpful answers on the forum. Came to office hours.</p>
                 <p>Proficiency: Always attended Lecture/Studio. Was engaged in pair exercises and provided helpful feedback to peers. Occaionally have raised hand and spoken up.</p>
                 <p>Adequacy: attendance, attention, and or engagement uneven.</p>
                 <p>Nope: who? Absent, spaced-out, or doing off-topic stuff during class (like Facebook or other coursework).</p>
                </div>-->

            </div>

            <div id="faq" class="sidenav-anchor">
                <h3>Frequently asked questions</h3>
                <h4>What the course covers</h4>
                <div class="row">
                    <div class="col-md-4">
                        <strong>How much time should I expect to spend?</strong>
                    </div>
                    <div class="col-md-8">
                        <p>By university guidelines, students should plan on averaging 15 hours a week for a 5-unit class. In post-class surveys, students report spending 10-12 hours a week on this class. Some spend less; others spend more. As with any design experience, you get out what you put in. Great projects explore broadly and dive deep, and needfinding, design, implementation and evaluation take time to do well. Expect to spend a good deal of time outside of class with your team building your project. </p>
                    </div>
                </div>

                <div class="row">
                   <div class="col-md-4">
                      <strong>What's the distribution of engineering, designing thinking and psychology?</strong>
                   </div>
                   <div class="col-md-8">
                      <p>There's a healthy balance of all three. The first class each week will cover design principles and methods. The second class each week gives you practice building interactive Web applications. Friday is the time you'll have to share and give feedback on your progress.</p>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-4">
                      <strong>Are there any midterms or finals?</strong>
                   </div>
                   <div class="col-md-8">
                      <p>Nope! There are closed-note in-class quizzes&hellip;</p>
                   </div>
                </div>

                <div class='row'>
                   <div class='col-md-4'>
                      <strong>What will the quizzes cover?</strong>
                   </div>
                   <div class='col-md-8'>
                       <p>Anything in class is fair game: lecture, lab, studio, videos, & the web site (hint: including this logistics page). You may not use any outside resources during the quizzes.</p>
                   </div>
                </div>

                <div class='row'>
                   <div class='col-md-4'>
                      <strong>I'm unable to attend class on a quiz day, what should I do?</strong>
                   </div>
                   <div class='col-md-8'>
                       <p>We know that all sorts of things happen: unexpected health issues, job interviews, family emergencies, car breaks down, etc. and that there may be a quiz that you aren't able to attend or properly prepare for. To accomodate all of these issues in a scalable way, we will automatically drop your lowest quiz score. You can use this freebie in whatever way makes the most sense for your life; please do not post to Piazza about this.</p>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-4">
                      <strong>When do we form groups?</strong>
                   </div>
                   <div class="col-md-8">
                      <p>In studio on the second Friday of the quarter. You may work with anyone in your studio. Ask potential teammates two questions: 1) When are you available to meet? 2) What level of performance to you intend to achieve? Form a team with peers who have compatible answers to yours.</p>
                   </div>
                </div>

                <h4>Attendance and Waitlist</h4>
                <div class='row'>
                   <div class='col-md-4'>
                      <strong>What do I do if I'm waitlisted?</strong>
                   </div>
                   <div class='col-md-8'>
                      <p>If you are number 20 or lower on the waitlist, attend lecture. Because you won't have an account registered with the class, you cannot sign up for studio or submit work online.</p>
                      <p>If you would like to be admitted, complete the assignments and attend any studio, turning in work physically. If/when you are admitted and sign up for a studio, we will credit this work.</p>
                   </div>
                </div>

                <div class='row'>
                   <div class='col-md-4'>
                      <strong>I'm an international student. How do I get an email and ID number?</strong>
                   </div>
                   <div class='col-md-8'>
                      <p>Have your advisor email postmaster@ucsd requesting a UCSD email for you. For Web pages requiring a PID, first register for an extension ACMS Account follow this <a href="https://sdacs.ucsd.edu/~icc/exreg.php">link</a> you need this account to login to UCSD Coursera site. For assignment submission on <a href="http://www.gradescope.com">gradescope.com</a>, email your UCSD email and ID number to our <a href="mailto:dakong@ucsd.edu">Daniel Kong</a>, tell him your Studio time and your studio leader's name</p>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-4">
                      <strong>I would like to take another class that overlaps this class. What should I know?</strong>
                   </div>
                   <div class="col-md-8">
                      <p>Class attendance is required because the in-class material and exercises connect the principles taught through lecture/videos to the design project work. Often, you'll submit work in class that will count toward your participation grade. Arriving late or leaving early may prevent you from doing so. Because of the large number of students enrolled, these exercises must be done during class — we don't have the resources to make individual exceptions. However, we understand that life happens — you might have a family event, job interview, attend a conference, or get sick. If you need to miss class, you can receive attendance credit by submitting the in-lab (or in-class exercises when we have them) online anytime before then end of class.</p>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-4">
                      <strong>A personal issue (health, family event, other commitment) will take me away from class. What should I do?</strong>
                   </div>
                   <div class="col-md-8">
                      <p>Let your studio leader and your team know ASAP. The sooner we hear from you, the more we can help. If you give your team a heads-up quickly, they're sure to be empathetic. If you just disappear for a few weeks, they'll be unlikely to want you back. Even if you have a good reason, no one likes being left out in the cold.</p>

                      <p>Fairness requires us to grade on performance, not desire. Think about if this issue came up when you were about to take the SAT -- or if it came up in a job. Realistically, if you're away for more than a week, you have two choices: you can push forward and accept lower performance, or you can drop the class and retake it when you have more time. We recommend the second option whenever possible.</p>
                   </div>
                </div>

                <div class="row" id="extension" class="sidenav-anchor">
                   <div class="col-md-4">
                      <strong>Can I have an extension? I have a lot of work in other classes, I'll be out of town, I'm generally overwhelmed&hellip;</strong>
                   </div>
                   <div class="col-md-8">
                      <p>No. It's not because we're callous&thinsp;&ndash;&thinsp;we've all been in your shoes. Two reasons: 1) because sharing work in studio is integral to the class, there's no practical way to offer extensions. 2) Psychology teaches us that people consistently believe they'll have more time in the future than in the present&thinsp;&ndash;&thinsp;and that it's a fallacy. We strongly encourage you to start early so that if issues arise you're not pressed up against a deadline.<br>When you pick classes for the quarter, make sure not to overcommit. In our experience, you'll learn more and have a better resume by doing a great job in a smaller of classes, rather than trying to take as many units as humanly possible and doing a mediocre job with all of it.</p>
                   </div>
                </div>

                <h4>Teammates</h4>

                <div class="row">
                   <div class="col-md-4">
                      <strong>Our studio has one too many people to make teams of 3 (e.g., 13 or 16), or one too few people to make teams of 3 (e.g., 14). What do we do?</strong>
                   </div>

                   <div class="col-md-8">
                      <p>You have two options. If you have an extra person, one person is welcome to switch to another studio. Alternatively, the studio may include a team of 4. If you are short a person, you’re welcome to post on piazza to attract a third teammate. Alternatively, the studio may include a team of 2. In such anomalous cases, the team of 2/4 will have appropriately scaled expectations. </p>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-4">
                      <strong>My teammates and I have different project interests.</strong>
                   </div>
                   <div class="col-md-8">
                      <p>That's okay. If you happen to find a project that expresses your interests, awesome! But that's not really the point. And in some ways, it's a liability. A good designer can creatively solve <i>any</i> problem. If your design work addresses a topic that's not a particular interest of yours (and that's bound to happen quite a bit in the future), that's a great way to build your design thinking muscles because you have to learn what matters to users, rather than just relying on your internal knowledge.</p>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-4">
                      <strong>One or more of my teammates aren't pulling their weight...</strong>
                   </div>
                   <div class="col-md-8">
                      <p>In classes as in life, some team problems are inevitable. As soon as you encounter subpar performance by a teammate: talk to them and accurately record their performance in your team assessment. There are many benefits to speaking up early. First, you've made your expectations clear so your teammate can adjust their performance. Second, it's on record in case things get worse later. Past performance is the best predictor of future performance, and transparency is the best management tool. If you speak up early, we can help. If you wait until late in the quarter to speak up, you share responsibility for the problem — and there's little we can do.</p>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-4">
                      <strong>...Can I fire them or quit?</strong>
                   </div>
                   <div class="col-md-8">
                      <p>If you have a serious problem with your teammate(s), email them with your concerns, cc'ing the instructor, and requesting that the team attend office hours to discuss the issue. If this discussion doesn't ameliorate the issue, you may notify your teammate(s) via email (cc'ding the instructor) of your intention to quit/fire them unless performance improves. Finally, if performance doesn't improve, you may email your teammate(s) (cc'ing the instructor) with your resignation/firing. A teammate who quits or is fired is responsible for future assignments on their own. <a href="http://spark-public.s3.amazonaws.com/hci/other_ressources/OakleyHitchhikers2004.pdf">This short essay by Oakley et al.</a> provides great advice on diagnosing 'hitchhikers' and dealing with them effectively.</p>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-4">
                      <strong>They dropped the class!</strong>
                   </div>
                   <div class="col-md-8">
                      <p>If your teammate drops the class, the first thing you should do is post on Piazza and try to find another teammate/team. If that fails, speak with your studio leader. We'll scale expectations accordingly.</p>
                   </div>
                </div>

                <h4>Grading</h4>
                <div class='row'>
                   <div class='col-md-4'>
                      <strong>Do I have to do the stretch goal?</strong>
                   </div>
                   <div class='col-md-8'>
                      <p>Nope.</p>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-4">
                      <strong>What is the 'out of the box' column in the rubric?</strong>
                   </div>
                   <div class="col-md-8">
                      <p>Design can excel in many ways, and often the best designs are unanticipated. You can do good design by following the rules, but to achieve great design you need to transcend them. Great design is also rare. To acknowledge and encourage this, the very top score in each assignment rewards unusually creative, out-of-the-box work. About 5% of submissions earn these points. If it helps, you can think of this as kind of like an A+.</p>
                   </div>
                </div>

                <h4>Technology</h4>
                <div class="row">
                   <div class="col-md-4">
                      <strong>The class teaches node.js and Javascript. Can our group use other technologies, like Ruby or a native app?</strong>
                   </div>
                   <div class="col-md-8">
                      <p>We recommend against it. Most group problems arise when one person strongarms their teammates into using another technology. Late in the quarter, it turns out that only one person can really do the work, and that causes all the problems you can imagine. If you use node.js & Javascript, lab will teach you key techniques and the TA's will help you if you get stuck. With other technologies, you're off-piste: we can't save you, and it can get awfully cold when the sun goes down. With that information, the choice is yours.</p>
                   </div>
                </div>

                <div class='row' id='final-project'>
                    <div class='col-md-4'>
                       <strong>May I build on modules, like the ones on the jQuery website?</strong>
                    </div>
                   <div class="col-md-8">
                      <p>Yep!</p>
                   </div>
                </div>

                 <div class="row">
                   <div class="col-md-4">
                      <strong>The free Heroku account is limited to 5 apps. What do we do?</strong>
                   </div>
                   <div class="col-md-8">
                      <p>As a group, you’re required to keep the 6 most recent assignments in Heroku. You may distribute this across your three teammates, or give Heroku your credit card info to add more apps.</p>
                   </div>
                </div>

                <div class='row' id='final-project'>
                    <div class='col-md-4'>
                       <strong> Guidelines on using Wizard of Oz in the final project</strong>
                    </div>

                    <div class='col-md-8'>
                       <p>The reason we implement things is to learn about how to better design the interaction, not to do busy work. By making your project more realistic, you will uncover design issues that may not be apparent with Wizard of Oz alone. Your final project will be evaluated on the design of the interactions, and you are certain to produce a better interaction if it is more realistic. Good heuristics to decide what to implement:</p>
                       <ol>
                          <li>If you can implement it, do it</li>
                          <li>You should be focusing on the interaction design. If implementing it will take an inordinate amount of time, you should Wizard of Oz it in the most realistic way</li>
                          <li>If it would be impossible for anyone to implement it, your design is wrong</li>
                       </ol>

                       <p>To make this more concrete, consider the following two examples:
                          <ul>
                             <li>You are building a navigation application for pedestrians. This application will leverage GPS information to support wayfinding. In this instance it would be highly recommended that you implement GPS functionality for real, since it is central to the application.</li>
                             <li>You are building a social photo sharing application. Among a host of other features, you’d like this application to geotag photos if a GPS location is available. In this case, it may be appropriate to Wizard of Oz the GPS functionality, since it is not central to the application.</li>
                          </ul>
                          While implementing GPS functionality would take the same amount of effort in both cases, there is a much larger potential payoff for implementing it in the first case because it impacts a much larger portion of the interaction design.</p>
                       <p>Make sure to think about the easiest way to approximate the functionality you seek. For example, if you need basic phone call or message functionality, you may be able to make something sufficient just by using e.g., &lt;a href="sms:"&gt;Send a SMS&lt;/a></p>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-4">
                       <strong>I was thinking of designing for tablets - is this okay?</strong>
                    </div>
                    <div class="col-md-8">
                       <p>Yes, as long as you make a compelling case that your application benefits from being on a tablet and that those benefits don't extend necessarily to a desktop app or browser.</p>
                    </div>
                 </div>


                 <h4>Communication</h4>
                 <div class="row">
                    <div class="col-md-4">
                       <strong>I have a question that's not answered here. How do I contact the teaching staff?</strong>
                    </div>
                    <div class="col-md-8">
                       <p>Post it <a href="http://piazza.com/ucsd/winter2017/cogs120cse170/home">to the forum</a> — don't send email. This includes <strong>all</strong> questions about assignment clarifications and class requirements. While you may think you're the only one with this question. with nearly 300 students, someone else is bound to be interested. Answering all questions in a public place means that every student has access to the same information. It's both efficient and fair. Similarly, if you solve a problem yourself, post how you solved it. Use clear titles and tags. And we only respond to questions that ask nicely ;)</p>

                       <p>Please only mark a post as private if it contains sensitive information. All other posts should be visible to the entire class so that everyone has the same information.</p>

                       <p>If you missed class (or will miss class) and would like to find out what's covered, review the syllabus materials then ask a fellow student to fill you in. Do not send email -- it's your responsibility.</p>

                       <p>Also, you're welcome to come to office hours and ask any question you want. You can ask questions about classes, internships, design, graduate school, jobs, or simply come to say hi, listen to other students questions, or share your background and interests. Office hours are for you, and Scott and the teaching staff really value your presence and questions.</p>

                       <p>With nearly 300 students, we unfortunately cannot accommodate requests to meet outside of office hours. We trust that if your question is important, you can find a way to make the time to come to office hours.</p>
                    </div>
                 </div>

                 <div class="row">
                     <div class="col-md-4">
                        <strong>When can I expect a response by on Piazza?</strong>
                     </div>
                     <div class="col-md-8">
                       <p> We will respond to all questions on Piazza within 24hrs — please do not expect an immediate response.</p>
			            </div>
                 </div>

                  </div>
               </div>
            </div>
         </div>

         <footer style='margin-top: 20px;'>
            <br/>
            <p>
               This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a> and revised in collaboration with <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a> and the teaching staff.
            </p>
            <br/>
         </footer>


      </div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/hci.js"></script>
</body>

</html>
