<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>    
        <link rel="stylesheet" href="main.css">   
    </head>
    <body>
        <?php include './inc_header.php'; ?>
        <div style="max-width:1100px;" class="bodycontent">
            <div style="width: 1000px;" class="form-style-8">
                <h2>please complete event registration</h2>
                <form style="color: #666666; " method="post" action="int_insert.php">
                  Team Name:
                  <input type="text" name="TeamName" placeholder="Team Name" required="required" />
                    <div class="column">
                    Player1 Name:    
                    <?php include './inc_PlayerData.php'; ?>
                    </div>
                    <div class="column">
                    Player2 Name:    
                    <?php include './inc_PlayerData.php'; ?>
                    </div>
                    <div class="column">
                    Player3 Name:    
                    <?php include './inc_PlayerData.php'; ?>
                    </div>
                    <div class="column">
                    Player4 Name:    
                    <?php include './inc_PlayerData.php'; ?>
                    </div>
                    <input type="submit" value="Register" /> <input type="button" value="Cancel"  onclick="window.history.back();"/>
                </form>
            </div>
        </div>
    </body>
</html>
