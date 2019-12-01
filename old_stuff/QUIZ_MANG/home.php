<?php
session_start();

if(!isset($_SESSION['username']))
{
    header('location:login.php');
}

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'quizdbase');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>home page</title>
</head>
<body>
<div class="container">
<br><h1 class="text-center text-primary">Welcome to your quiz</h1><br>
<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']?></h2>



<div class="col-lg-8 m-auto d-block"> 
<div class="card">
    <h3 class="text-center card-header"> Welcome <?php echo $_SESSION['username'];?>, 
    you have to select only one out of 4. Best of luck</h3>

</div>
<br>

<form action="check.php" method="post">
<?php 
for($i=1;$i<6;$i++)
{
$q="select * from questions where qid=$i";
$query=mysqli_query($con,$q);
while($row=mysqli_fetch_array($query))
{
    ?>

    <div class="card">
        <h5 class="card-header"><?php echo $row['question'];
        ?>
        </h5>

        <?php
         $q="select * from answers where ans_id=$i";
         $query = mysqli_query($con, $q);

         while($rows = mysqli_fetch_array($query))
         {
             ?>
             <div class="card-body">
                <input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid'];?>">
                <?php echo $rows['answer']; ?>
                </div>
            <?php
         }
?>



 <?php
}
}
?>


<input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
</form>
</div>
</div><br><br>
<div class="m-auto d-block">
<a href= "logout.php" class="btn btn-primary"> LOGOUT</a>
</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>