<html>
    <body>
    <?php
    include_once './connection.php';
        
    $sql = "SELECT * FROM vip_reg";
    $result =$conn->query($sql);
    echo "<br />Registrations format csv <br />";
    echo "vip_id, name, surname, company, jobtitle, email, mobile, office<br />";
    foreach ($result as $row)
        {
        echo $row['post_id'] .", ". $row['name'].", ".$row['surname'].", ".$row['company'].", ".$row['tshirt'].", ".$row['email'].", ".$row['mobile']."<br />";
        }
    
        
        
        
    $sql = "SELECT * FROM team_reg";
    $result =$conn->query($sql);
    echo "<br />TEAM Registrations format csv <br />";
    echo "Teamname,p1name,p1surname,p1comany,p1tshirt,p1email,p1mobile,p2name,p2surname,p2comany,p2tshirt,p2email,p2mobile,p3name,p3surname,p3comany,p3tshirt,p3email,p3mobile,p4name,p4surname,p4comany,p4tshirt,p4email,p4mobile<br />";
    foreach ($result as $row)
        {
        echo $row['Teamname'] .", ". $row['p1name'].", ".$row['p1surname'].", ".$row['p1comany'].", ".$row['p1tshirt'].", ".$row['p1email'].", ".$row['p1mobile']. $row['p2name'].", ".$row['p2surname'].", ".$row['p2comany'].", ".$row['p2tshirt'].", ".$row['p2email'].", ".$row['p2mobile']. $row['p3name'].", ".$row['p3surname'].", ".$row['p3comany'].", ".$row['p3tshirt'].", ".$row['p3email'].", ".$row['p3mobile']. $row['p4name'].", ".$row['p4surname'].", ".$row['p4comany'].", ".$row['p4tshirt'].", ".$row['p4email'].", ".$row['p4mobile']."<br />";
        }
    
    ?>
        
    </body>    
</html>
