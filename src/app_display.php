<?php
include 'app_connect.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Display Data</title>
        <link rel="stylesheet" href="styles/display.css">
    </head>
    <body>
        <div class="page">
            <div class="btn-design1">
                <button><a href="appointment.php" id="btn1">Add User</a></button>
            </div>
            <table class="tbl">
                <tr>
                    <th>no</th>
                    <th>donorID</th>
                    <th>name</th>
                    <th>age</th>
                    <th>weight</th>
                    <th>email</th>
                    <th>type</th>
                    <th>date</th>
                    <th>operations</th>
                </tr>
                    <?php
                        $sql="select * from appointment";
                        $result=mysqli_query($con,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $no=$row['no'];
                                $donorID=$row['donorID'];
                                $name=$row['name'];
                                $age=$row['age'];
                                $weight=$row['weight'];
                                $email=$row['email'];
                                $type=$row['type'];
                                $date=$row['date'];

                                echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$donorID.'</td>
                                <td>'.$name.'</td>
                                <td>'.$age.'</td>
                                <td>'.$weight.'</td>
                                <td>'.$email.'</td>
                                <td>'.$type.'</td>
                                <td>'.$date.'</td>
                                <td>
                                    <button class="btn-design2"><a href="app_update.php? updateno='.$no.'" id="btn2">Update</a></button>
                                    <button class="btn-design3"><a href="app_delete.php? deleteno='.$no.'" id="btn3">Delete</a></button>
                                </td>
                                </tr>';
                            }
                        }

                    ?>

                    
                </tr>
            </table>
        </div>
    </body>
</html>