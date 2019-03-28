<?php 
/*  echo 3**4;
exit;*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <title>Test</title>

  </head>
  <body>
    <button type="button" class="test" name="" onclick="confirm_div()">Test</button>

    <div class="popup" style="display: none;">
      <div class="title"></div>
      <button id="yes">Yes</button>
      <button id="no">No</button>
    </div>
   
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">

     function confirm_box(msg){
      
        $(".title").html(msg);
        $(".popup").show();
        $("#yes").click(function(callback){
         // cons
          callback();
        });

        $("#no").click(function(){
         $(".popup").hide();

       });
      
      }

      //$("body").on("click",".test",function(){
        function confirm_div(){
        confirm_box("test", function(){
            console.log("hey");
          }
          );
      }
      //});
    </script>
    
</body>
</html>