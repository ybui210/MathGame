
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Math Game</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="style.css" rel="stylesheet">
  <meta charset="utf-8" />
</head>
<?php
    session_start();
    if (empty($_SESSION['score']))
        $score = 0;
    else $score = $_SESSION['score'];
    if (empty($_SESSION['total']))
        $total = 0;    
    else $total = $_SESSION['total'];
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
        <label class="col-sm-2 col-sm-offset-3">
            <?php $num1 = rand(0,20); echo $num1;  ?>
        </label>
        <label class="col-sm-2">
            <!--Randomly generate sign-->
            <?php 
            $sign = rand(0,1);
            if ($sign == 0) 
                echo "+";
            else echo "-"; 
            ?>
        </label>
        <label class="col-sm-2">
            <?php $num2 = rand(0,20); echo $num2;?>
        </label>
        <div class="col-sm-3"></div>
    </div>
    
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
    <div class="col-sm-4 col-sm-offset-4 red">
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {            
            $uAnswer= trim($_POST['answer']," ");
            
            if (!is_numeric($uAnswer) || !isset($uAnswer)) {
                echo "You must enter a number for your answer.";
            } else {   
                $total++;
                $_SESSION['total'] = $total;
                if ($uAnswer == $_SESSION['canswer']) {
                    $equal = true;
                }
                else $equal = false;
            }    
        }
    
        ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4 green">
        <?php        
        if (isset($equal) && ($equal == true)) {
                $score++;
                $_SESSION['score'] = $score;
                echo "CORRECT";
            }
        ?>
    </div>
    <div class="col-sm-4 col-sm-offset-4 red">
        <?php
        if (isset($equal) && ($equal == false)) {
            echo $_SESSION['message1'];
        }
        ?>
    
    <?php
        $_SESSION['num1'] = $num1;
        $_SESSION['num2'] = $num2;        
            
    if ($sign == 0) {          
            $_SESSION['canswer'] = $num1 + $num2;
            $_SESSION['message1'] = "INCORRECT, ".$num1." + ".$num2." = ".$_SESSION['canswer'];
    }
        else {
            $_SESSION['canswer'] = $num1 - $num2;
            $_SESSION['message1']  = "INCORRECT, ".$num1." - ".$num2." = ".$_SESSION['canswer'];
        }
    
    
        ?>
    </div>
    <div class="col-sm-4"></div>
</div>        
<div class="row">
    <div class="col-sm-4 col-sm-offset-4"><?php echo "Score: ".$score." / ".$total;?></div>
</div>

    </div>
</body>
</html>
