<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'quizdbase');

    if(isset($_POST['submit']))
    {
        if(!empty($_POST['quizcheck']))
        {
            $result=0; $i=1;
            $count= count($_POST['quizcheck']);
            echo "Out of 5, you have selected ".$count." options";
            $selected = $_POST['quizcheck'];
            print_r($selected);

            $q="select * from questions";
            $query = mysqli_query($con,$q);

            while($rows = mysqli_fetch_array($query))
            {
                print_r($rows['ans_id']);

                $checked= $rows['ans_id'] == $selected[$i];

                if($checked)
                {
                    $result++;
                }
                $i++; 

            }
            echo "<br>total score is ".$result;


         }
    }

        $name= $_SESSION['username'];
        $finalresult= "insert into user(username, totalques, answerscorrect)
                        values('$name','5','$result')";
        $queryresult=mysqli_query($con,$finalresult);



?>