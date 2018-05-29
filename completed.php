<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>    
        <link rel="stylesheet" href="main.css">   
        <?php
        include_once './connection.php';

        $sql = "SELECT POST_ID FROM emp_reg ORDER BY POST_ID DESC LIMIT 1";
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

                <h2>THANK YOU FOR REGISTERING FOR TECHCON 2018</h2></ br>
                <b>#Registration Reference= <?php echo $id; ?></b>
            </div>
        </div>
    </body>
</html>

