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
                <form style="color: #666666" method="post" action="inc_insert.php">
                  Name:
                  <input type="text" name="name" placeholder="First Name" required="required" />
                  Surname:
                  <input type="text" name="surname" placeholder="Last Name" required="required" />
                  Company Name:
                  <input type="text" name="company" placeholder="Company Name" required="required" />
                  T-Shirt Size :
                  <select name="TshirtSize" required="">
                    <option value="">Please Select your T-Shirt Size</option>
                    <option value="S"> S </option>
                    <option value="M"> M </option>
                    <option value="L"> L </option>
                    <option value="XL"> XL </option>
                    <option value="XXL"> XXL </option>
                    <option value="XXXL"> XXXL </option>
                    <option value="XXXXL"> XXXXL </option>
                    <option value="XXXXXL"> XXXXXL </option>
                    <option value="XXXXXXL"> XXXXXXL </option>
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
