<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<title>Open Texas Holdem Poker</title>
<link href="views/table/css/table.css" rel="stylesheet" type="text/css" />
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
        
        <div class="dealer" id="dealer"> 
        <a id="dealer" href="#" onClick="return false" onmousedown="javascript:swapContent('#flop', 'name');"><h1><center>Deal Flop</center></h1></a> 
        </div>
        
        <div class="flop" id="flop">
            
        </div>
        
        <div class="seat_1" id="seat_1"> 
        </div>  
        <div class="seat_2" id="seat_2">
        </div>
        <div class="seat_3" id="seat_3">
        </div>             
        <div class="seat_4" id="seat_4">
        </div>
        <div class="seat_5" id="seat_5">
        </div>
        <div class="seat_6" id="seat_6">
        </div>
    </div>
</body>
</html>