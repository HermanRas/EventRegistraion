<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>    
        <link rel="stylesheet" href="main.css">   
        <?php
        include_once './connection.php';
        $team = $_GET['team'];

        $sql = "SELECT POST_ID FROM team_reg WHERE Teamname = '$team' ORDER BY POST_ID DESC LIMIT 1";
        $result =$conn->query($sql);
        foreach ($result as $row)
            {
            $id =$row['post_id'];
            }

        ?>
        
    </head>
    <body>
        <?php include './inc_header.php'; ?>
        <div class="bodycontent">
            <div class="form-style-8">

                <h2>THANK YOU FOR REGISTERING !</h2></ br>
                #Registration Reference= <b><?php echo $team."_".$id; ?></b><br>
                If you have any Registration related questions please contact <br><b>Rudy Dexter - 082 900 8994</b>
            </div>
        </div>
    </body>
</html>

