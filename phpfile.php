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

    $bno = $_POST["bno"];
    $select6="delete from baby where bno=$bno";

    $result = mysqli_query($connection, $select6);
    if($result){
        echo "deleted successfully";
    } else
    echo "cant delete";

    $hno = $_POST["hno"];
    $select7="delete from hospital where hno=$hno";

    $result = mysqli_query($connection, $select7);
    if($result){
        echo "deleted successfully";
    } else
    echo "cant delete";

    $hno = $_POST["vno"];
    $select8="delete from vaccination where vno=$vno";

    $result = mysqli_query($connection, $select8);
    if($result){
        echo "deleted successfully";
    } else
    echo "cant delete";

    $eno = $_POST["eno"];
    $select9="delete from employee where eno=$eno";

    $result = mysqli_query($connection, $select9);
    if($result){
        echo "deleted successfully";
    } else
    echo "cant delete";

    $vno = $_POST["vno"];
    $bno = $_POST["bno"];
    $select10="delete from receive where bno=$bno and vno=$vno";

    $result = mysqli_query($connection, $select10);
    if($result){
        echo "deleted successfully";
    } else
    echo "cant delete";

    $bno = $_POST["bno"];
    $bname = $_POST["bname"];
    $select11="update baby set bname=$bname where bno=$bno";

    $result = mysqli_query($connection, $select11);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $bno = $_POST["bno"];
    $age = $_POST["age"];
    $select12="update baby set age=$age where bno=$bno";

    $result = mysqli_query($connection, $select12);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $bno = $_POST["bno"];
    $mothername = $_POST["mothername"];
    $select13="update baby set mothername=$mothername where bno=$bno";

    $result = mysqli_query($connection, $select13);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $bno = $_POST["bno"];
    $fathername = $_POST["fathername"];
    $select14="update baby set fathername=$fathername where bno=$bno";

    $result = mysqli_query($connection, $select14);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $bno = $_POST["bno"];
    $weight = $_POST["weight"];
    $select15="update baby set weight=$weight where bno=$bno";

    $result = mysqli_query($connection, $select15);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $bno = $_POST["bno"];
    $height = $_POST["height"];
    $select16="update baby set height=$height where bno=$bno";

    $result = mysqli_query($connection, $select16);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $bno = $_POST["bno"];
    $height = $_POST["height"];
    $select17="update baby set height=$height where bno=$bno";

    $result = mysqli_query($connection, $select17);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $bno = $_POST["bno"];
    $gender = $_POST["gender"];
    $select18="update baby set gender=$gender where bno=$bno";

    $result = mysqli_query($connection, $select18);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $hno = $_POST["hno"];
    $hname = $_POST["hname"];
    $select19="update hospital set hname=$hname where hno=$hno";

    $result = mysqli_query($connection, $select19);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $hno = $_POST["hno"];
    $location = $_POST["location"];
    $select20="update hospital set location=$location where hno=$hno";

    $result = mysqli_query($connection, $select20);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $hno = $_POST["hno"];
    $phone = $_POST["phone"];
    $select21="update hospital set phone=$phone where hno=$hno";

    $result = mysqli_query($connection, $select21);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $vno = $_POST["vno"];
    $vname = $_POST["vname"];
    $select22="update vaccination set vname=$vname where vno=$vno";

    $result = mysqli_query($connection, $select22);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";


    $vno = $_POST["vno"];
    $preventdisease = $_POST["preventdisease"];
    $select23="update vaccination set preventdisease=$preventdisease where vno=$vno";

    $result = mysqli_query($connection, $select23);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $vno = $_POST["vno"];
    $agefordose = $_POST["agefordose"];
    $select24="update vaccination set agefordose=$agefordose where vno=$vno";

    $result = mysqli_query($connection, $select24);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $eno = $_POST["eno"];
    $ename = $_POST["ename"];
    $select25="update vaccination set agefordose=$agefordose where vno=$vno";

    $result = mysqli_query($connection, $select25);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

    $eno = $_POST["eno"];
    $ename = $_POST["ename"];
    $select26="update vaccination set agefordose=$agefordose where vno=$vno";

    $result = mysqli_query($connection, $select26);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";


    $vno = $_POST["vno"];
    $bno = $_POST["bno"];
    $date = $_POST["date"];
    $select27="update receive set =$date where vno=$vno and bno=$bno";

    $result = mysqli_query($connection, $select27);
    if($result){
        echo "updated successfully";
    } else
    echo "cant update";

mysqli_close($connection);
?>
