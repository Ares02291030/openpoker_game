<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<title>Open Texas Holdem Poker</title>
<link href="views/table2/css/table.css" rel="stylesheet" type="text/css" />
<head>
    <script language="JavaScript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    
    <script language="JavaScript" type="text/javascript">
        function swapContent(seat, what) {
            //$(seat).html('<img src="loader.gif"/>').show();
            var url = "";
            $.post(url, {request: what} ,function(data) {
               $(seat).html(data).show();
            });
        }
    </script>
    
    <script language="JavaScript" type="text/javascript">
          $(document).ready(function () {
              $(document).textContent(swapContent('#seat_1', 'show_hand'));
          });
    </script>  
</head>


<body class="body">   

    <div class="table">
        <div class="tournament" id="tournament">
            <?php echo 'Tournament info'; ?>
        </div>                  
        <div class="infobox" id="infobox"></div>        
        <div class="dealer" id="dealer"> 
        <a id="class" href="#" onClick="return false" onmousedown="javascript:swapContent('#infobox', 'new_game');"><div id=""><center>Start New Game</center></div></a>             
        <a id="class" href="#" onClick="return false" onmousedown="javascript:swapContent('#infobox', 'new_hand');"><div id=""><center>Deal New Hands</center></div></a> 
        <a id="class" href="#" onClick="return false" onmousedown="javascript:swapContent('#flop', 'deal_flop');"><div id=""><center>Deal Flop Cards</center></div></a> 
        <a id="class" href="#" onClick="return false" onmousedown="javascript:swapContent('#turn', 'deal_turn');"><div id=""><center>Deal Turn Card</center></div></a> 
        <a id="class" href="#" onClick="return false" onmousedown="javascript:swapContent('#river', 'deal_river');"><div id=""><center>Deal River Card</center></div></a> 

        </div>
        
        <div class="flop" id="flop"></div>
        <div class="turn" id="turn"></div>
        <div class="river" id="river"></div>
        
        <div class="seat_1" id="seat_1" style="background-image: url(<?php echo $profile_photos[0]; ?>)"> 
        </div>  
        <div class="seat_2" id="seat_2" style="background-image: url(<?php echo $profile_photos[1]; ?>)">
        </div>
        <div class="seat_3" id="seat_3" style="background-image: url(<?php echo $profile_photos[2]; ?>)">
        </div>             
        <div class="seat_4" id="seat_4" style="background-image: url(<?php echo $profile_photos[3]; ?>)">
        </div>
        <div class="seat_5" id="seat_5" style="background-image: url(<?php echo $profile_photos[4]; ?>)">
        </div>
        <div class="seat_6" id="seat_6" style="background-image: url(<?php echo $profile_photos[5]; ?>)">
        </div>

    </div>
</body>
</html>