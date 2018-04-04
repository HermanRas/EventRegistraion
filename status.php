<html>
    <body>
    <?php
    include_once './connection.php';
        
    $sql = "SELECT * FROM emp_reg";
    $result =$conn->query($sql);
    echo "<br />Employee Registrations format csv <br />";
    echo "'post_id','name','surname','operation','jobtitle','email','mobile','office'<br />";
    foreach ($result as $row)
        {
        echo "'".$row['post_id'] ."', '". $row['name']."', '".$row['surname']."', '".$row['operation']."', '".$row['jobtitle']."', '".$row['email']."', '".$row['mobile']."', '".$row['office']."'<br />";
        }
    
    ?>
        
    </body>    
</html>
