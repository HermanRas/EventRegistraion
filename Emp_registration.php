<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>    
        <link rel="stylesheet" href="main.css">   
    </head>
    <body>
        <?php include './inc_header.php'; ?>
        <div class="bodycontent">
            <div class="form-style-8">
                <h2>please complete event registration</h2>
                <form style="color: #666666" method="post" action="int_insert.php">
                  Name:
                  <input type="text" name="name" placeholder="First Name" required="required" />
                  Surname:
                  <input type="text" name="surname" placeholder="Last Name" required="required" />
                  Accommodation:
                   <div style="color: black; font-size: 16px;">
                       <br />
                       <input type="checkbox" name="sleepday1" value="22" /> Thursday 22 June 2018
                       <br />
                       <input type="checkbox" name="sleepdat2" value="23" /> Friday 23 June 2018
                       <br />
                       <br />
                   </div>
                  T-Shirt Size :
                  <select name="TshirtSize" required="">
                    <option value="">Please Select your T-Shirt Size</option>
                    <option value="XXXS"> XXXS (76-81cm)</option>
                    <option value="XXS"> XXS (81-86cm)</option>
                    <option value="XS"> XS (86-91cm)</option>
                    <option value="S"> S (91-96cm)</option>
                    <option value="M"> M (96-101cm)</option>
                    <option value="L"> L (101-106cm)</option>
                    <option value="XL"> XL (106-111cm)</option>
                    <option value="XXL"> XXL (111-116cm)</option>
                    <option value="XXXL"> XXXL (116-121cm)</option>
                  </select>
                  Email :
                  <input type="email" name="email" placeholder="Email" required="required" />
                  Mobile :
                  <input type="text" name="mobile" placeholder="Mobile +27 XX XXX XXXX" />
                  <input type="submit" value="Register" /> <input type="button" value="Cancel"  onclick="window.history.back();"/>
                </form>
            </div>
        </div>
    </body>
</html>
