
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Math Game</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <meta charset="utf-8" />
</head>
<?php
    session_start();
    $score = $total = 0;
    $cAnswer = "";
?>
<body>
    <div class="container">
<form action="index.php" method="post" role="form" class="form-horizontal">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4"><h1>Math Game</h1></div>
        <div class="col-sm-4"><a href="logout.php" class="btn btn-default btn-sm">Logout</a></div>
    </div>
    <div class="row">
        <label class="col-sm-2 col-sm-offset-3"><?php $num1 = rand(0,20); echo $num1; ?></label>
        <label class="col-sm-2">
            <!--Randomly generate sign-->
            <?php 
            $sign = rand(0,1);
            if ($sign == 0) 
                echo "+";
            else echo "-"; 
            ?>
        </label>
        <label class="col-sm-2"><?php $num2 = rand(0,20); echo $num2;?></label>
        <div class="col-sm-3"></div>
    </div>
    <?php
        if ($sign == 0)
            $cAnswer = $num1 + $num2;
        else $cAnswer = $num1 - $num2;
    ?>
    <div class="form-group">
        <div class="col-sm-3 col-sm-offset-4">
            <input type="text" class="form-control" id="answer" name="answer" placeholder="Enter answer" size="6">
        </div>
        <div class="col-sm-5"></div>
    </div>
    
    <div class="row">
        <div class="col-sm-3 col-sm-offset-4">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary btn-sm">
            Submit</button>
        </div>
        <div class="col-sm-3"></div>
    </div>
</form>
<hr />
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
            </div>
    <div class="col-sm-4">
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $uAnswer = $_POST['answer'];
            $total++;
            if ($uAnswer == $cAnswer) {
                $uAnswer++;
                $equal = true;
            }
            else $equal = false;
                
            }
        
        ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <?php        
        if (isset($equal)){
            if ($equal == true)
                echo "CORRECT";
            else if ($sign == 0)
                    echo "INCORRECT, ".$num1." + ".$num2." = ".$cAnswer;
                else echo "INCORRECT, ".$num1." - ".$num2." = ".$cAnswer;
        }
        ?>
    </div>
    <div class="col-sm-4"></div>
</div>        
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">Score: <?php echo $score ?> / <?php echo $total ?></div>
    <div class="col-sm-4"></div>
</div>
    </div>
</body>
</html>