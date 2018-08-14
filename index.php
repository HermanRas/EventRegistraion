<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>    
        <link rel="stylesheet" href="main.css">  
        <link rel="stylesheet" href="responsiveslides.css">   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="responsiveslides.min.js"></script>
        <script>
        $(function() {
          $(".rslides").responsiveSlides({
                auto: true,             // Boolean: Animate automatically, true or false
                speed: 500,            // Integer: Speed of the transition, in milliseconds
                timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
                pager: false,           // Boolean: Show pager, true or false
                nav: false,             // Boolean: Show navigation, true or false
                random: false,          // Boolean: Randomize the order of the slides, true or false
                pause: false,           // Boolean: Pause on hover, true or false
                pauseControls: true,    // Boolean: Pause when hovering controls, true or false
                prevText: "Previous",   // String: Text for the "previous" button
                nextText: "Next",       // String: Text for the "next" button
                maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
                navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
                manualControls: "",     // Selector: Declare custom pager navigation
                namespace: "rslides",   // String: Change the default namespace used
                before: function(){},   // Function: Before callback
                after: function(){}     // Function: After callback
              });
        });
        </script>
    </head>
    <body>
        <?php include './inc_header.php'; ?>
        <div class="bodycontent">
            <div class="form-style-8">
                <div style="text-align: center;">  
                <ul class="rslides">
                    <li>
                        <img src="pics/caro1.png" style="height: 260px; width: 670px;" alt="">
                    </li>
                    <li>
                      <img src="pics/caro2.png" style="height: 260px; width: 670px;" alt="">
                    </li>
                    <li>
                      <img src="pics/caro3.png" style="height: 260px; width: 670px;" alt="">
                    </li>
                </ul>
                <br /><br /><br />
                <h2><a href="Registration.php">VIP Invite</a></h2><br />
                <h2><a href="Team_registration.php">Team Entries</a></h2><br />
                <h2 style="background-color: green;"><a href="Agenda.pdf" style="font-style: italic;">Golf Day Information(PDF)</a></h2><br />
                <h2 style="background-color: green;"><a href="Sponsors.php" style="font-style: italic;">Sponsors</a></h2><br />
                </div></form>
            </div>
        </div>
    </body>
</html>
