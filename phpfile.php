<?php
    // include "./pages/db/connection.php";-for connecting database
    //or
    // $connection = mysqli_connect($server, $username, $password, $db);
    //or
    

    $connection = mysqli_connect("localhost", "root","","babyvaccination");

    
    $bno = $_POST["bno"];
    $bname = $_POST["bname"];
    $age = $_POST["age"];
    $mothername = $_POST["mothername"];
    $fathername = $_POST["fathername"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $gender = $_POST["gender"];

    $select1 =
    "insert into baby (bno, bname, age, mothername, fathername, height, weight, gender) 
    values('$bno','$bname', '$age','$mothername','$fathername','$height','$weight','$gender')";

    $result = mysqli_query($connection, $select1);
    if($result){
        echo "Successfully inserted";
    } else
        echo "Not inserted successfully";

    $hno = $_POST["hno"];
    $hname = $_POST["hname"];
    $location = $_POST["location"];
    $phone = $_POST["phone"];
    
    $select2 =
    "insert into hospital (hno, hname, location, phone) 
    values('$hno','$hname', '$location','$phone')";
    
    $result = mysqli_query($connection, $select2);
    if($result){
        echo "Successfully inserted";
    } else
    echo "Not inserted successfully";


    $vno = $_POST["vno"];
    $vname = $_POST["vname"];
    $preventdisease = $_POST["preventdisease"];
    $agefordose = $_POST["agefordose"];
    $hno = $_POST["hno"];
    
    $select3 =
    "insert into vaccination (vno, vname, preventdisease, agefordose, hno ) 
    values('$vno','$vname', '$preventdisease','$agefordose','$hno')";
    
    $result = mysqli_query($connection, $select3);
    if($result){
        echo "Successfully inserted";
    } else
    echo "Not inserted successfully";

    $eno = $_POST["eno"];
    $ename = $_POST["ename"];
    $age = $_POST["age"];
    $designation = $_POST["designation"];
    $gender = $_POST["gender"];
    $hno =$_POST["hno"];
    
    $select4 =
    "insert into employee (eno, ename, age, designation, gender, hno ) 
    values('$eno','$ename', '$age','$designation','$gender','$hno')";
    
    $result = mysqli_query($connection, $select4);
    if($result){
        echo "Successfully inserted";
    } else
    echo "Not inserted successfully";

    $vno = $_POST["vno"];
    $bno = $_POST["bno"];
    $date = $_POST["date"];

    $select5 =
    "insert into receive (vno, bno, date) 
    values('$vno','$bno', '$date')";
    
    $result = mysqli_query($connection, $select5);
    if($result){
        echo "Successfully inserted";
    } else
    echo "Not inserted successfully";


mysqli_close($connection);
?>
