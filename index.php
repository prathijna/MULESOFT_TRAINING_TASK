<?php
$conn=mysqli_connect("localhost","root","","movie_database");
if($conn){
    echo"";

}else{
    echo "error";
}

$query="select * from movie_info";
$connect=mysqli_query($conn,$query);

$num=mysqli_num_rows($connect);

?>




<!DOCTYPE html>
<head>
    <title>MOVIE TABLE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <table>
        <tr>
           <th>MOVIE NAME</th>
           <th>ACTOR</th>
           <th>ACTRESS</th>
           <th>YEAR OF RELEASE</th>
           <th>DIRECTOR</th>
        </tr>
        <?php

        if($num>0)
        {
            while($data=mysqli_fetch_assoc($connect))
            {
                echo" 
                <tr>
                <td>".$data['Movie_Name']."</td>
                <td>".$data['Lead_Actor']."</td>
                <td>".$data['Actress']."</td>
                <td>".$data['Year_of_Release']."</td>
                <td>".$data['Director_Name']."</td>
                </tr>
                ";
            }
        }
        ?>
    </table>
</div>
</body>