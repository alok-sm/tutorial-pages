<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Interaction Design">
    <title>IxD 2018: Final Show</title>

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
    <style>
    .judge .img-circle{
        width: 175px;
        height: 175px;
    }
    .judge {
        float: left;
        height: 250px;
        text-align: center;
    }
    .judge-title {
      font-size: 16px;
    }
    .featurette-heading{
        padding-bottom: 30px;
    }
    .lead span{
        font-weight: bold;
    }
    .lead .detail{
      font-size: 16px;
      color:#888;
      list-style-type: none;
      padding: 0px 0px 10px 168px;
    }
    @media only screen and (max-width: 768px){
        .lead .detail{
          padding-left:0px;
        }
        .judge .img-circle {
          margin-top: 30px;
          margin-right: 15px;
          margin-bottom: -50px;
        }
    }
    .caption {
      font-size: 14px;
    }
    </style>
    <body>

     <!-- Fixed navbar -->
    <?php include "../nav.php" ?>


<!-- this is a comment in HTML -->
<div class="container">
  <div class="jumbotron">
   <h3>COGS 120/CSE 170 Interaction Design</h3>
   <h1>Final Show</h1>
   <p>Friday, March 16, 5:00pm - 7:00pm</p>
   <p>At Multipurpose Room in the UCSD Student Services Center</p>
   <!-- <p><a class="btn btn-primary btn-lg" role="button">Contact me</a></p> -->
 </div>

 <div id="syllabus">
   <p class="lead">Come and check out how UCSD students envision mobile interaction. Over 60 teams will present projects across 9 project themes.</p>

   <hr>

   <div class="row">
    <div class="container">
     <div class="row featurette">
      <div class="col-md-6">
       <h3 class="featurette-heading">Agenda</h3>
        <ul class="lead">
            <p>4:30pm : Students set up posters.</p>
            <p>5:00pm : Each team presents a 30-second pitch of their work.</p>
            <p>5:45pm : Poster session and team demonstrations</p>
            <p>6:45pm : Results and Closing Remarks</p>
        </ul>
    <!--<p>
      Project themes: Accessibility for All, Automation, Democratization of Artificial Intelligence, Environmental Interactions, Mindfulness, Presenting Information, Removing Barriers to Learning, Sound Feedback, The Quantified Self </p>-->
    <p>
      <b>Name Prizes to be awarded:</b> Most Human-Centered, Most Creative, Most Elegant Solution, Best Social Impact, Best Pitch, Best Visual Design, Best Name </p>
        <ul>
            <!--<li>Most Human-Centered: </li>
            <li>Most Creative: </li>
            <li>Most Elegant Solution: </li>
            <li>Best Social Impact: </li>
            <li>Best Pitch: </li>
            <li>Best Visual Design: </li>
            <li>Best Name: </li>
            <li>Best Zombie Puns: </li>-->
        </ul>
    </div>
    <div class="col-md-5">
        <img class="featurette-image img-responsive" alt="Project themes: Accessibility for All, Automation, Democratization of Artificial Intelligence, Environmental Interactions, Mindfulness, Presenting Information, Removing Barriers to Learning, Sound Feedback, The Quantified Self" src="ixdPoster2018-02.png">
    </div>
</div>


<hr class="featurette-divider">

<!-- Three columns of text below the carousel -->
<h2 class="featurette-heading">Judges(TBD)</h2>
<div id="judgeWrapper">
</div>


  <hr class="featurette-divider">

  <h2 class="featurette-heading">Accessibility for All</h2>
  <div class="row" id="studio1">
  </div>
  <hr>
  <h2 class="featurette-heading">Automation</h2>
  <div class="row" id="studio2">
  </div>

  <hr>
  <h2 class="featurette-heading">Democratization of Artificial Intelligence</h2>
  <div class="row" id="studio3">
  </div>

  <hr>
  <h2 class="featurette-heading">Environmental Interactions</h2>
  <div class="row" id="studio4">
  </div>

  <hr>
  <h2 class="featurette-heading">Mindfulness</h2>
  <div class="row" id="studio5">
  </div>

  <hr>
  <h2 class="featurette-heading">Presenting Information</h2>
  <div class="row" id="studio6">
  </div>

  <hr>
  <h2 class="featurette-heading">Removing Barriers to Learning</h2>
  <div class="row" id="studio7">
  </div>

  <hr>
  <h2 class="featurette-heading">Sound Feedback</h2>
  <div class="row" id="studio8">
  </div>

  <hr>
  <h2 class="featurette-heading">The Quantified Self</h2>
  <div class="row" id="studio9">
  </div>



 <!-- FOOTER -->
 <footer>
  <p class="pull-right"><a href="#">Back to top</a></p>
</footer>

</div>


</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>

<script>

$(document).ready(function(){


   var $data=[
     {
      "name":"Jon Kies",
      "photo":"jon_kies.jpg",
      "title":"Senior Director User Experience, Qualcomm",
      "bio": "<p>Jon Kies leads Qualcomm's centralized user experience team. This inter-disciplinary group is responsible for user interface design, user research, and usability testing across a range of business units and research groups.  Some of the current focus areas include position location technologies, wearable computing, and augmented reality. Jon has held UX positions at Kyocera Wireless, Lucent Technologies, and Philips.  Jon has a B.A. in Psychology from Miami University and an M.S. and Ph.D. from Virginia Tech's Human Factors Engineering program.</p>"
    },{
      "name":"Arlene Harris",
      "photo":"Arlene_Harris.jpg",
      "title":"President and Co-Founder of DYNA, LLC.",
      "bio": "<p>Arlene Harris has over 35 years of experience as an entrepreneur, board member, and investor in successful wireless-related businesses. Arlene has received numerous awards and recognition, including being named the first female inductee into the Wireless Hall of Fame.Arlene co-founded GreatCall (the maker of Jitterbug, in partnership with Samsung)  in 2006  – the first cellular phone and service platform dedicated to providing a simple and personalized cell phone experience. Prior to GreatCall, she founded emergency phone provider SOS Wireless Communications, and billing CRMS leader Subscriber Computing (later sold to Corsair, now CyberSource). Arlene invented the world’s first over-the-air program controlled cellular application management system. She also co-founded Cellular Business Systems, Inc., which became the largest independent billing and customer service systems builder in the early U.S. cellular industry.</p>"
    },{
      "name":"Gad Shaanan",
      "photo":"Gad_Shaanan.jpg",
      "title":"President, CEO at YOFiMeter",
      "bio": "<p>Gad Shaanan is an entrepreneurial visionary with a thirty five year record of creating winning products for internationally recognized, mass-market brands. You might recognize his work best in products such as the WD-40 Smart Straw, and the Spider Boot, an anti-mine boot, displayed in the MoMA. As the visionary leader of Gad Shaanan Design, Inc., and now Gadlight, Inc., Gad’s work touches the lives of people worldwide every day. He holds numerous patents, and his success is based upon a tight integration of strategic marketing, innovative design and revolutionary engineering. He is a trusted advisor to Fortune 500 companies, distinguished by his unique perspective and strategic risk-taking; a competitive strategist in Marketing, Product Development, Engineering and Design, and a prolific inventor and expert in product definition, innovation, and operations.</p>"
    },{
      "name":"Chuck Pelly",
      "photo":"Chuck_Pelly.jpg",
      "title":"Chief Creative Officer at Intersection-Inc.",
      "bio": "<p>Chuck Pelly is a 45-year veteran of the design industry and is a world-renowned product, seating, auto and transportation designer. Chuck is co-founder of Intersection-Inc, a human-centered design consultancy and The Design Academy, its’ educational collaborator.Chuck has been awarded more than 40 U.S. and foreign patent, has received numerous awards for his design work, has taught and lectured broadly, served on many boards, has been President of the Industrial Design Society of America, and an IDSA Fellow since 1994. As a distinguished alumnus, Chuck has been involved with the Art Center College of Design in Pasadena, CA since 1968. And has received awards for his significant contributions. He is on the Executive Advisory board for UC San Diego Design Lab.</p>"
    },{
      "name":"Magaly Drant",
      "photo":"Magaly_Drant.jpg",
      "title":"Director of Engineering Operations at ServiceNow Inc.",
      "bio" : "<p>Magaly Drant has 15+ years experience in enterprise software product development, with a healthy mix of technical contribution and management.</p>"
    },{
      "name":"Jamie Lee",
      "photo":"jaime_lee.jpg",
      "title":"Senior Experience Designer, Viasat",
      "bio": "<p>Jaime Lee is a user experience practitioner and product strategist who balances a broad range of insights. She looks top-down and bottom-up, integration points, and the coexistence with multi-disciplines and thought processes, like accessibility and inclusive design, to formulate value added solutions. Jaime has a broad range of client engagements spanning startup, SMB, Fortune 500, and government clients and worked in a variety of roles in research and design in areas of digital and non-digital products and services. Jaime holds a B.A. in Cognitive Psychology and a M.S. degree in Interaction Design and Information Architecture. Her thesis in evaluating products and attached services in niche demographics underscores her ability to conceptualize user models that can be leveraged to create frameworks for productization.</p>"
    },{
      "name":"Tracie Davee",
      "photo":"tracie_davee.jpg",
      "title":"Educational Leader and Project Manager, Viasat",
      "bio": "<p>When curious people see problems to be solved and are empowered with a toolkit for success, solutions follow. Tracie has a passion for making the connections and building partnerships across departments and disciplines to impact positive change through strategic vision, team development and project implementation. She currently leads the university strategic vision and partnership development for global communications company, Viasat, headquartered in Carlsbad, CA. Prior to joining Viasat, Tracie pursued her love of education at UC San Diego for nearly 20 years in student affairs and advancement. Tracie’s educational background includes an MA from San Diego State University in postsecondary educational leadership and a BA in Communications from Purdue University in Indiana.</p>"
    }/*,{
      "name":"Sharon Carmichael",
      "photo":"sharon_carmichael.jpg",
      "title":"Senior Interaction Design Manager, Intuit",
      "bio": "<p>Sharon Carmichael is Senior Interaction Design Manager at Intuit’s Consumer Tax Group focusing on growing and mentoring an amazing team of 14 interaction designers. Prior to this role, she was Manager of User Experience at Sony Electronics. She was also Design Lead at Hewlett Packard. She actively runs the Customer Experience Special Interest Group in San Diego. She holds a BA from the University of Virginia.</p><p>She has fifteen years of experience working in the field of Human Factors, Design, Information Architecture and User Experience at both large and small companies. Sharon is a strategic user-centered designer, who creates better user experience through research, design and usability. She represents and champions user needs to both business and technical stakeholders.</p>"
    },{
      "name":"Ashley Reese",
      "photo":"ashley_reese.jpg",
      "title":"User Experience Researcher, Google",
      "bio": "<p>I'm currently a user experience researcher at Google.</p><p>My research focus is in foundational and evaluative research during early product development on both hardware and software UIs. As the primary researcher on a smartwatch application at Google, I've had the opportunity to work closely with the designer and PM to develop new features, while sharing insights with stakeholders on Google voice search, accessibility, and Android smartwatch teams.</p>"
    },{
      "name":"Chuck Longanecker",
      "photo":"chuck_longanecker.jpg",
      "title":"Founder, Digital Telepathy",
      "bio": "<p>Chuck Longanecker is the CEO and co-founder of digital-telepathy, a user-experience design company passionate about creating products, like SlideDeck, Hello Bar and Impress, that make the Web more intuitive and compelling.</p>"
    }*/

  ];

    
  for (var i=0;i<$data.length;++i){
    var $wrapper = $("<div>", {class: "row", id: "wrapper-"+i});
    var $judge = $("<div>", {id: "judge-"+i, class: "col-lg-3 judge"});
    var $photo = $("<img>",{class:"img-circle", alt:$data[i].name, src:"judges/"+$data[i].photo});
    var $bios = $("<div>", {id: "bio"+i, class: "col-lg-8 caption"});

    if ($data[i].name === "Ashley Reese") {
      $("#judgeWrapper").append("<br>");
    }
    $("#judgeWrapper").append($wrapper);
    $("#wrapper-"+i).append($judge);
    $("#judge-"+i).append($photo);
    $("#wrapper-"+i).append($bios);
    $("#bio"+i).append("<h3>"+$data[i].name+"</h3>"+"<p class=\"judge-title\"><i>"+$data[i].title+"</i></p>"+$data[i].bio);

    // $("#judgeWrapper").append($judge);
    // $("#judge-"+i).append($photo);
    // $("#judge-"+i).append("<h3>"+$data[i].name+"</h3><p>"+$data[i].title+"</p>");
    // $("#judge-"+i).append($bios);
    // $("#bio"+i).text($data[i].bio);
  }

  /*
  var $studio1=[
     {
      "name":"Buddy System",
      "link": "http://buddysystem.herokuapp.com",
      "photo":"buddy_system.png",
      "title":"Rachel Kurata, Amanda Luff, Zhihui Huang"
    },
    {
      "name":"ClassApp",
      "link": "http://classapped.herokuapp.com",
      "photo":"classapp.jpg",
      "title":"Royce Gee, Jesus Villegas"
    },{
      "name":"Flyer",
      "link": "http://flyer-dev.herokuapp.com/login",
      "photo":"flyer.png",
      "title":"Rachel Schneiderman, Daniel Kang, Joseph Anz"
    },{
      "name":"Grad Connect",
      "link": "http://gradconnect2.herokuapp.com/",
      "photo":"grad_connect.jpg",
      "title":"Bettina Dea, Jiaying He, Andrew Sie"
    },{
      "name":"Gym Buddy",
      "link": "http://gymbuddy1.herokuapp.com",
      "photo":"gym_buddy.jpg",
      "title":"Austin Tran, Nikhil Rashinkar, Aryaman Sharda"
    },{
      "name":"NoteIt",
      "link": "http://noteitucsd.herokuapp.com/",
      "photo":"noteit.jpg",
      "title":"Vickie Cheng, Jeffry Jaman, Monish Ratanji"
    },{
      "name":"Skoolio",
      "link": "http://skoolio.herokuapp.com",
      "photo":"skoolio.jpg",
      "title":"Boming Cheng, Kane Chong, Elizabeth Maraan"
    },{
      "name":"Time Slot",
      "link": "http://nacolias.ucsd.edu/time-space/",
      "photo":"time_slot.jpg",
      "title":"David Canas, Nicholas Colias, Sunbrye Ly"
    },{
      "name":"Triton Hub",
      "link": "http://tritonhub8.herokuapp.com",
      "photo":"tritonhub.jpg",
      "title":"Kellie Avery, Kate Greenshields"
    },{
      "name":"Tygo",
      "link": "http://tygo.herokuapp.com/",
      "photo":"tygo.jpg",
      "title":"Neil Gandhi, Paul Sable, Benjamin Watkins"
    },{
      "name":"UCSD:Involved",
      "link": "http://ucsdinvolved.herokuapp.com",
      "photo":"ucsd_involved.jpg",
      "title":"Christopher Matthew"
    },{
      "name":"Wold Kitchen",
      "link": "http://worldkitchen.herokuapp.com/home",
      "photo":"world_kitchen.jpg",
      "title":"Bonnie Chinh, Wenjing Fang, Celia Wong"
    },{
      "name":"Youternship",
      "link": "http://youternship.herokuapp.com/",
      "photo":"youternship.jpg",
      "title":"Allan Asis, Emily Deng, Corbin Lewis"
    }
  ];

  for (var i=0;i<$studio1.length;++i){
     var $judge=$("<div>", {id: "studio1_team_" + i, class: "col-lg-4 portfolio-item", style: "min-height: 380px;"});
     var $photo=$("<img>",{class:"img-responsive", alt:$studio1[i].name, src:"projects/"+$studio1[i].photo});
     $("#studio1").append($judge);
     $("#studio1_team_"+i).append($photo);
     $("#studio1_team_"+i).append("<h3>"+$studio1[i].name+"</h3><p>"+$studio1[i].title+"</p>");
      $("#studio1_team_"+i).append("<a href='" + $studio1[i].link + "'>"  + "link</a>");
   }

     var $studio2=[
     {
      "name":"eggsnramen",
      "link": "http://eggsnramen.herokuapp.com",
      "photo":"eggsnramen.png",
      "title":"Chloe Lopez, Joshua Miller, Peter Yao"
     },{
       "name":"Engineering Wine Society",
       "link": "http://engineeringwinesociety.herokuapp.com",
       "photo":"ews.jpg",
       "title":"Jared Arnold, Tyler Pollak, Sean Rowan"
     },{
      "name":"Learnrhelpr",
      "link": "http://learnrhelpr.herokuapp.com",
      "photo":"learnr.png",
      "title":"Kevin Mach, Kevin Nguyen, Michelle Wang"
     },{
       "name":"Musey",
       "link": "http://fiestanormal.com/musey",
       "photo":"musey.jpg",
       "title":"Ardavan Amini, Arjun Lyer, Stefan Rimola"
     },{
       "name":"Salehound",
       "link": "http://salehound.herokuapp.com",
       "photo":"salehound.jpg",
       "title":"Josef Goodyear, Christine Lao, Amon Neequay"
     },{
       "name":"Skillzone",
       "link": "http://skillzone.herokuapp.com",
       "photo":"skillzone.png",
       "title":"Simon Bui, Vivian (Duwei) Wang, John (Jingchun) Zhou"
     },{
       "name":"Scout",
       "link": "http://study-bud.herokuapp.com",
       "photo":"scout.png",
       "title":"Lucas Cycon, James Guan, Yao Lin"
     },{
       "name":"Textchange",
       "link": "textchange.herokuapp.com",
       "photo":"textchange.png",
       "title":"Kevin Ma, Justin Marquez, Emma Sayed, Kami Wan"
     },{
       "name":"Weatherwear",
       "link": "http://windydays.herokuapp.com/",
       "photo":"weatherwear.jpg",
       "title":"Tom Aaron, Clara Chao, Su Kim"
     },{
       "name":"Weyaka",
       "link": "weyaka.herokuapp.com",
       "photo":"weyaka.jpg",
       "title":"Yashna Bowen, Kathy Hoang, Wes Okuhara"
     }

  ];

  for (var i=0;i<$studio2.length;++i){
     var $judge=$("<div>", {id: "studio2_team_" + i, class: "col-lg-4 portfolio-item", style: "min-height: 380px;"});
     var $photo=$("<img>",{class:"img-responsive", alt:$studio2[i].name, src:"projects/"+$studio2[i].photo});
     $("#studio2").append($judge);
     $("#studio2_team_"+i).append($photo);
     $("#studio2_team_"+i).append("<h3>"+$studio2[i].name+"</h3><p>"+$studio2[i].title+"</p>");
     $("#studio2_team_"+i).append("<a href='" + $studio2[i].link + "'>"  + "link</a>");
   }

   var $studio3=[
     {
      "name":"CourseAssistant",
      "link": "http://catestapp.herokuapp.com/",
      "photo":"courseassistant.jpg",
      "title":"Maya Levine, William Lewis, Spencer Rothschild"
    },{
      "name":"fablr",
      "link": "http://fablr.herokuapp.com",
      "photo":"fablr.jpg",
      "title":"Saif Chaudhry, Katie Huang, Sonia Jimenez"
    },{
      "name":"feelz",
      "link": "http://feelzapp.herokuapp.com/",
      "photo":"feelz.png",
      "title":"Julia Aceves, Kevin Hsu, Mona Liu"
    },{
      "name":"GameRev",
      "link": "http://gamerev.herokuapp.com/",
      "photo":"gamerev.jpg",
      "title":"Ian Gilmore, Michael LaPlante, Chuqi Qiu, David Williams"
    },{
      "name":"Geostories",
      "link": "http://geostories3.herokuapp.com/",
      "photo":"geostories.jpg",
      "title":"Simon Hu, Joel Schow, Mateo Vargas"
    },{
      "name":"InternVibes",
      "link": "https://iveibz.herokuapp.com/",
      "photo":"internvibes.jpg",
      "title":"Andrei Khmelnitski, David Liberman, Horea Porutiu"
    },{
      "name":"Linerub",
      "link": "http://linerub.herokuapp.com",
      "photo":"linerub.jpg",
      "title":"Ming Cheng, Doris Liu, Nick Roberts"
    },{
      "name":"momentz",
      "link": "http://momentzv2.herokuapp.com/",
      "photo":"momentz.jpg",
      "title":"Aditya Bansal, Sylvia Li, Julian Ostensen"
    },{
      "name":"today",
      "link": "http://t0day.herokuapp.com/",
      "photo":"today.png",
      "title":"Jessica Cho, Kenia Duque, Steve Yoo"
    },{
      "name":"traview",
      "link": "http://traview.herokuapp.com/",
      "photo":"traview.jpg",
      "title":"Yilun Liu, Kexun Xu, Meng Zhixing"
    }
  ];

  for (var i=0;i<$studio3.length;++i){
     var $judge=$("<div>", {id: "studio3_team_" + i, class: "col-lg-4 portfolio-item", style: "min-height: 380px;"});
     var $photo=$("<img>",{class:"img-responsive", alt:$studio3[i].name, src:"projects/"+$studio3[i].photo});
     $("#studio3").append($judge);
     $("#studio3_team_"+i).append($photo);
     $("#studio3_team_"+i).append("<h3>"+$studio3[i].name+"</h3><p>"+$studio3[i].title+"</p>");
     $("#studio3_team_"+i).append("<a href='" + $studio3[i].link + "'>"  + "link</a>");

   }

   var $studio4=[
     {
       "name":"CampuStudy",
       "link": "http://campustudy3.herokuapp.com/",
       "photo":"campustudy.jpg",
       "title":"Mayreni Abajian, Molly Whitnack, Zhihui Xia"
     },{
       "name":"CourseSync",
       "link": "http://coursesync.herokuapp.com",
       "photo":"coursesync.jpg",
       "title":"Miranda Clemmons, Joseph Le, Jamie Santos"
     },{
       "name":"Grubbery",
       "link": "https://grubbery.herokuapp.com/",
       "photo":"grubbery.png",
       "title":"Shawn Chen, Vincent Chan, Jennifer Lu"
     },{
       "name":"Gruupster",
       "link": "http://cogs120g2.herokuapp.com",
       "photo":"gruupster.png",
       "title":"James Keophavone, Kenny Nieh, Steven Lim"
     },{
       "name":"Notas",
       "link": "http://justtheapp.herokuapp.com/",
       "photo":"notas.jpg",
       "title":"Shahram Jazirian, Seungeun Narm, Evonee Uribe, Marbely Villanueva"
     },{
       "name":"nuTriton",
       "link": "http://nutriton.herokuapp.com",
       "photo":"nutriton.png",
       "title":"Billy Andika, Sonal Prasad, Emily Yew"
     },{
       "name":"Seeker",
       "link": "http://myseekers.herokuapp.com/",
       "photo":"seeker.jpg",
       "title":"Yuxin Cao, Ting Wei Lin, Amber Shroyer"
     },{
       "name":"Squad",
       "link": "http://squad-base.herokuapp.com/",
       "photo":"squad.jpg",
       "title":"Alejandro Buitimea, Alexes Macedo, Roberto Reyes"
     },{
       "name":"Study Time",
       "link": "http://hci-studytime.herokuapp.com/index.html",
       "photo":"study_time.jpg",
       "title":"Talal Barakat, Qindian Chen, David Wang"
     },{
       "name":"Waitr",
       "link": "http://waitr3.herokuapp.com",
       "photo":"waitr.jpg",
       "title":"Wesley Febrian, Marshall S, William Werner"
     }
  ];

  for (var i=0;i<$studio4.length;++i){
     var $judge=$("<div>", {id: "studio4_team_" + i, class: "col-lg-4 portfolio-item", style: "min-height: 380px;"});
     var $photo=$("<img>",{class:"img-responsive", alt:$studio4[i].name, src:"projects/"+$studio4[i].photo});
     $("#studio4").append($judge);
     $("#studio4_team_"+i).append($photo);
     $("#studio4_team_"+i).append("<h3>"+$studio4[i].name+"</h3><p>"+$studio4[i].title+"</p>");
    $("#studio4_team_"+i).append("<a href='" + $studio4[i].link + "'>"  + "link</a>");
   }

   var $studio5=[
     {
       "name":"Appetit",
       "link": "http://appetitapp.herokuapp.com/",
       "photo":"appetit.jpg",
       "title":"Srishty Agrawal, David Justo, Onjira Sampoonachot"
     },{
       "name":"Be Chilled",
       "link": "http://be-chilled-v2.herokuapp.com/",
       "photo":"be_chilled.png",
       "title":"Nghi Anh Duong, Heather Rainer, Michael Lee, Anusha, Varadharajan"
     },{
       "name":"Breaktime",
       "link": "http://t1-breaktime.herokuapp.com",
       "photo":"breaktime.jpg",
       "title":"Jeremy Leu, Matthew James Monaghan, Sophia Carmen Ziogas"
     },{
       "name":"Emojiyze",
       "link": "http://emojilyze.herokuapp.com",
       "photo":"emojiyze.png",
       "title":"Nai Pun Giovanni Bosco Wong, Ayesha Kiran Mazumdar, Alicia Dan-Ha Nguyen, Anh Phi Tran"
     },{
       "name":"Emotion Notion",
       "link": "http://globalconscious.herokuapp.com/",
       "photo":"emotion_notion.png",
       "title":"Edgardo Antonio Castro, Carol Joyce Chan, Jonathan Anthony Mariano"
     },{
       "name":"Freetime",
       "link": "http://free-time.herokuapp.com/",
       "photo":"freetime.jpg",
       "title":"Muyao Wu, Michael Arian Banki, Ihab Salameh"
     },{
       "name":"Goal Patrol",
       "link": "http://goalpatrol3.herokuapp.com/index",
       "photo":"goal_patrol.png",
       "title":"Alexandra Huang, Kenny Li"
     },{
       "name":"Hana",
       "link": "http://onehana.meteor.com",
       "photo":"hana.jpg",
       "title":"Alexander Chan, Beumjoo Kim, Haoran Kuang, Isabelle Josephine Lee Pinard"
     }
  ];

  for (var i=0;i<$studio5.length;++i){
     var $judge=$("<div>", {id: "studio5_team_" + i, class: "col-lg-4 portfolio-item", style: "min-height: 380px;"});
     var $photo=$("<img>",{class:"img-responsive", alt:$studio5[i].name, src:"projects/"+$studio5[i].photo});
     $("#studio5").append($judge);
     $("#studio5_team_"+i).append($photo);
     $("#studio5_team_"+i).append("<h3>"+$studio5[i].name+"</h3><p>"+$studio5[i].title+"</p>");
     $("#studio5_team_"+i).append("<a href='" + $studio5[i].link + "'>"  + "link</a>");
   }

    var $studio6=[
    {
      "name":"Cahoots",
      "link": "http://ucsdcahoots.herokuapp.com",
      "photo":"cahoots.jpg",
      "title":"Ho-Wei Kang, Karen Kim, Ashley M. Perez"
    },{
      "name":"ClassTalk",
      "link": "http://class-talk.herokuapp.com/",
      "photo":"classtalk.jpg",
      "title":"Crystal Chung, Aurnik Narim Islam, Young Lyn Shiau"
    },{
      "name":"Flock",
      "link": "http://flockstudyapp.herokuapp.com/",
      "photo":"flock.png",
      "title":"Sachi Pitkin, Jesse Ren, Shaina Wan"
    },{
      "name":"Gradewish",
      "link": "http://gradeshiz.herokuapp.com/",
      "photo":"gradewish.jpg",
      "title":"Samuel Songhea Ko, Leland Thai Tran, Mitchell Farley Wolfe"
    },{
      "name":"I Schedule 4 U",
      "link": "http://ischedule4u.herokuapp.com/",
      "photo":"scheduler.png",
      "title":"Kenny Lee, Chris Li, Anmol Maini"
    },{
      "name":"Jfny",
      "link": "http://jfny.azurewebsites.net/",
      "photo":"jfny.jpg",
      "title":"Jesse Bishop, Fairy Bui, Ny Saechao"
    },{
      "name":"NOATS",
      "link": "http://noats170.herokuapp.com",
      "photo":"noats.png",
      "title":"Ryan Khalili, Nishat Rustagi, Vincent Xiao"
    },{
      "name":"PodCats",
      "link": "http://sdpodcats.herokuapp.com",
      "photo":"podcats.png",
      "title":"Christine Do, Jesse Qin, Brian Soe"
    },{
      "name":"Respect",
      "link": "http://respect.herokuapp.com",
      "photo":"respect.jpg",
      "title":"Thomas Chang, Alex Stolzoff, Akshat Vasavada"
    },{
      "name":"Studybuddy",
      "link": "http://thestudybuddyapptwo.herokuapp.com",
      "photo":"studybuddy.png",
      "title":"John Gamboa, Vilan Le, Ray Yada"
    },{
      "name":"TritonShare",
      "link": "http://tritonshare.herokuapp.com",
      "photo":"triton_share.png",
      "title":"Olivia Castaneda, Kyle So, Louis Mun"
    }
  ];

  for (var i=0;i<$studio6.length;++i){
     var $judge=$("<div>", {id: "studio6_team_" + i, class: "col-lg-4 portfolio-item", style: "min-height: 380px;"});
     var $photo=$("<img>",{class:"img-responsive", alt:$studio6[i].name, src:"projects/"+$studio6[i].photo});
     $("#studio6").append($judge);
     $("#studio6_team_"+i).append($photo);
     $("#studio6_team_"+i).append("<h3>"+$studio6[i].name+"</h3><p>"+$studio6[i].title+"</p>");
     $("#studio6_team_"+i).append("<a href='" + $studio6[i].link + "'>"  + "link</a>");
   }

   var $studio7=[
    {
      "name":"Drink Buddy",
      "link": "http://drink-buddy.herokuapp.com/",
      "photo":"drink_buddy.jpg",
      "title":"Rachel Kim, Jason O'Connor, Mikaela Oen"
    },{
      "name":"i am here for",
      "link": "http://iamherefor.com",
      "photo":"i_am_here_for.png",
      "title":"Xiaohui Tong, Pin Wang, Yijun Zhang"
    },{
      "name":"iFridge",
      "link": "http://ifridge.herokuapp.com/",
      "photo":"ifridge.jpg",
      "title":"Zhiyue Jin, Jingyuan Liu, Jiayi Tao"
    },{
      "name":"Meet Up Now",
      "link": "http://meetupnowexpress.herokuapp.com/",
      "photo":"meet_up_now.png",
      "title":"Ganesh Datta, Elliot Humphrey, Jake Prasad"
    },{
      "name":"Mood Map",
      "link": "http://mood-map.herokuapp.com/",
      "photo":"mood_map.jpg",
      "title":"Yenhsia Lin, Christian Memjie, Joanne Wu"
    },{
      "name":"Pair Fit",
      "link": "http://pairfit.herokuapp.com",
      "photo":"pairfit.png",
      "title":"Nancy Acosta, Pritika Natraj, Andrew Simon"
    },{
      "name":"Shutter Space",
      "link": "http://shutterspace.herokuapp.com",
      "photo":"shutter_space.jpg",
      "title":"John Chin, Stephanie Liang, Jane Ryu"
    },{
      "name":"Tea Chat",
      "link": "http://www.teachat.us",
      "photo":"tea_chat.png",
      "title":"Daniel Kao, Crystal Kwok, Daphne Liu"
    },{
      "name":"Uber Hungry",
      "link": "http://uberhungry.herokuapp.com",
      "photo":"uber_hungry.jpg",
      "title":"Robert Asami, Abbas Dharamsey, Oscar Otega"
    }
  ];

  for (var i=0;i<$studio7.length;++i){
     var $judge=$("<div>", {id: "studio7_team_" + i, class: "col-lg-4 portfolio-item", style: "min-height: 380px;"});
     var $photo=$("<img>",{class:"img-responsive", alt:$studio7[i].name, src:"projects/"+$studio7[i].photo});
     $("#studio7").append($judge);
     $("#studio7_team_"+i).append($photo);
     $("#studio7_team_"+i).append("<h3>"+$studio7[i].name+"</h3><p>"+$studio7[i].title+"</p>");
     $("#studio7_team_"+i).append("<a href='" + $studio7[i].link + "'>"  + "link</a>");
   }

*/
});


</script>

</body>
</html>
