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

</head>


<body class="body">
    <div class="table">
        <div class="tournament" id="tournament">
            <?php echo 'Tournament info'; ?>
        </div>

        <div class="infobox" id="infobox"></div>
        <div class="dealer" id="dealer">
        <a id="class" href="#" onClick="return false" onmousedown="javascript:window.location.reload( true );"><div id=""><center>Start New Game</center></div></a>
        <a id="class" href="#" onClick="return false" onmousedown="javascript:swapContent('#infobox', 'new_hand');"><div id=""><center>Deal New Hands</center></div></a>
        <a id="class" href="#" onClick="return false" onmousedown="javascript:swapContent('#flop', 'deal_flop');"><div id=""><center>Deal Flop Cards</center></div></a>
        <a id="class" href="#" onClick="return false" onmousedown="javascript:swapContent('#turn', 'deal_turn');"><div id=""><center>Deal Turn Card</center></div></a>
        <a id="class" href="#" onClick="return false" onmousedown="javascript:swapContent('#river', 'deal_river');"><div id=""><center>Deal River Card</center></div></a>

        </div>

        <div class="flop" id="flop"></div>
        <div class="turn" id="turn"></div>
        <div class="river" id="river"></div>

|<?php $empty_seat_photo = 'http://localhost/mywork/openpoker_game/images/empty_seat.png'; ?>

        <div class="empty_seat_1" id="seat_1">
           <span class="txt_join_1">
                <a href="#" onClick="return false" onmousedown="javascript:swapContent('#seat_1', 'seat_player_1');"><center>Join Table</center></a>
            </span>
        </div>
        <div class="txt_hand_1">
                <a href="#" onClick="return false" onmousedown="javascript:swapContent('#seat_1', 'show_hand_1');"><center>Show my Hand</center></a>
        </div>
        <div class="seat_2" id="seat_2" style="background-image: url(<?php echo $empty_seat_photo; ?>)">
           <span class="txt_join_2">
                <a href="#" onClick="return false" onmousedown="javascript:swapContent('#seat_2', 'seat_player_2');"><center>Join Table</center></a>
            </span>
        </div>
        <div class="txt_hand_2">
                <a href="#" onClick="return false" onmousedown="javascript:swapContent('#seat_2', 'show_hand_2');"><center>Show my Hand</center></a>
        </div>
        <div class="seat_3" id="seat_3" style="background-image: url(<?php echo $empty_seat_photo; ?>)">
           <span class="txt_join_1">
                <a href="#" onClick="return false" onmousedown="javascript:swapContent('#seat_3', 'seat_player_3');"><center>Join Table</center></a>
            </span>
        </div>
        <div class="txt_hand_3">
                <a href="#" onClick="return false" onmousedown="javascript:swapContent('#seat_3', 'show_hand_3');"><center>Show my Hand</center></a>
        </div>
        <div class="seat_4" id="seat_4" style="background-image: url(<?php echo $empty_seat_photo; ?>)">
            <span class="txt_join_4">
                <a href="#" onClick="return false" onmousedown="javascript:swapContent('#seat_4', 'seat_player_4');"><center>Join Table</center></a>
            </span>
        </div>
        <div class="txt_hand_4">
                <a href="#" onClick="return false" onmousedown="javascript:swapContent('#seat_4', 'show_hand_4');"><center>Show my Hand</center></a>
        </div>
        <div class="seat_5" id="seat_5" style="background-image: url(<?php echo $empty_seat_photo; ?>)">
            <span class="txt_join_5">
                <a href="#" onClick="return false" onmousedown="javascript:swapContent('#seat_5', 'seat_player_5');"><center>Join Table</center></a>
            </span>
        </div>
        <div class="txt_hand_5">
                <a href="#" onClick="return false" onmousedown="javascript:swapContent('#seat_5', 'show_hand_5');"><center>Show my Hand</center></a>
        </div>
        <div class="seat_6" id="seat_6" style="background-image: url(<?php echo $empty_seat_photo; ?>)">
            <span class="txt_join_6">
                <a href="#" onClick="return false" onmousedown="javascript:swapContent('#seat_6', 'seat_player_6');"><center>Join Table</center></a>
            </span>
        </div>
        <div class="txt_hand_6">
                <a href="#" onClick="return false" onmousedown="javascript:swapContent('#seat_6', 'show_hand_6');"><center>Show my Hand</center></a>
        </div>

    </div>

</body>
</html>
