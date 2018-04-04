<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>    
        <link rel="stylesheet" href="main.css">   
    </head>
    <body>
        <div style="text-align: center"><img src="pics/technologylogo.png" alt="Logo" width="1000px" style="border-radius: 25px;" /></div>
        <div class="bodycontent">
            <div class="form-style-8">
                <h2>please complete event registration</h2>
                <form style="color: #666666" method="post" action="int_insert.php">
                  Name:
                  <input type="text" name="name" placeholder="First Name" required="required" />
                  Surname:
                  <input type="text" name="surname" placeholder="Last Name" required="required" />
                  Operation :
                  <select name="operation" required="">
                      <option value="">Please Select your Operation</option>
                      <option value="finsch">Finsch Diamond Mine</option>
                      <option value="cullinan">Cullinan Diamond Mine</option>
                      <option value="koffie">Koffiefontein Mine JV</option>
                      <option value="kimberley">Kimberley Ekapa Mining JV</option>
                      <option value="phq">Petra Head Office</option>
                      <option value="williamson">Williamson Diamond Mine</option>
                  </select>
                  Job Title:
                  <input type="text" name="jobtitle" placeholder="Job Title" />
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
