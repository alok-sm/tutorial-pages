<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction">
    <title>Assignment 7: Sample Feedback</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../../css/hci.css" rel="stylesheet">
    <script src="http://cseweb.ucsd.edu/~cafraser/jquery-2.2.2.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style> 
      .row {
        padding: 10px 0px;
      }
      .star {
        cursor: pointer;
      }
    </style>
    <script>

    $(function() {
      $(".star").on("click", function() {
        var helpful_str;
        if ($(this).attr("src") == "http://cseweb.ucsd.edu/~cafraser/star.png") {
          $(this).attr("src", "http://cseweb.ucsd.edu/~cafraser/star_filled.png");
          //console.log($(this).attr("id"));
          helpful_str = "yes";

        } else {
          $(this).attr("src", "http://cseweb.ucsd.edu/~cafraser/star.png");
          helpful_str = "no";
        }
        var request = $.ajax({
          url: "a7_save.php",
          method: "GET",
          data: { id : $(this).attr("id"), helpful : helpful_str },
          dataType: "html"
        });
        
      });

      // save that someone loaded the page
      var request = $.ajax({
        url: "a7_save.php",
        method: "GET",
        data: { loadpage: true },
        dataType: "html"
      });

    });

    </script>
  </head>
  <body>

    <!-- Fixed navbar -->

  <!-- this is a comment in HTML -->
  <div class="container">

    <h1>Assignment 7: Previous Feedback</h1>
    <div id='debug'></div>
    <div>
      Here are some examples of feedback that students have previously received on assignment 7, along
      with the number of times each feedback comment was given. 
      If you find a comment helpful, click the star next to it to mark it as helpful. 
      Assignment requirements have changed slightly, so these may not directly match the feedback you will
      get this time, but they are provided here as helpful guidance.<br/><br/>
    </div>

    <div id='feedback_section'>
      <div class='row'>
        <div class='col-md-2'><b>Rubric Item</b></div>
        <div class='col-md-1'><b>Helpful?</b></div>
        <div class='col-md-8'><b>Comment</b></div>
        <div class='col-md-1'><b># Times given</b></div>
      <div>

      <?php

      function compare_lines($data1, $data2) {

        $rubric_question1 = $data1[1];
        $rubric_question2 = $data2[1];
        $times_used1 = $data1[5];
        $times_used2 = $data2[5];

        if ($rubric_question1 ==  $rubric_question2) {
          if ($times_used1 == $times_used2) {
            return 0;
          } else if ($times_used1 < $times_used2) {
            return 1;
          } else {
            return -1;
          }
        } else {
          if ($rubric_question1 < $rubric_question2) {
            return -1;
          } else {
            return 1;
          }
        }
      }


      $row = 1;
      if (($handle = fopen("a7_feedback_sheet.csv", "r")) !== FALSE) {

        $first = true;
        $previous_rubric_item = "";
        $total_data = array();
        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

          if (!$first) {

            array_push($total_data, $data);

          }
          $first = false;
        }
        fclose($handle);

        // sort the array
        usort($total_data, "compare_lines");

        foreach ($total_data as &$line) {
          
          $rubric_item = $line[3];
          if ($rubric_item == $previous_rubric_item) {
            $rubric_item = "";
          } else {
            $previous_rubric_item = $rubric_item;
          }
          $comment = $line[4];
          $times_used = $line[5];
          $id = $line[0];

          echo "<div class='row'>" .
                  "<div class='col-md-2'>" . $rubric_item . "</div>" .
                  "<div class='col-md-1' style='text-align: right;'>" .
                    "<img id='" . $id . "' class='star' src='http://cseweb.ucsd.edu/~cafraser/star.png' height='20' /></div>" .
                  "<div class='col-md-8'>" . $comment . "</div>" .
                  "<div class='col-md-1'>" . $times_used . "</div>" .
                "</div>";
        }
      }
      ?>
    </div>



  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>
