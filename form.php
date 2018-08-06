<?php
   
// connect database
          $con= mysqli_connect("localhost","root","")or die("Unable to connect");
         mysqli_select_db($con,'mini_project');      
?> 
<html>
  <head>
      <title></title>
        <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="home.css" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <style>

              .container{
             width: 800px;
             height: 500px;
            }
              th{
                padding-right: 20px;
                margin-top: 10px;
              }
              td{
                padding-right: 20px;
                margin-top: 10px;
              }
              select {
                padding-bottom: 3px;
              }
              label{
                font-size: large;
              }
              a {
                  text-decoration: none;
                  display: inline-block;
                  padding: 8px 16px;

              }

              a:hover {
                  background-color: #ddd;
                  color: black;
              }

              .previous {
                  background-color: #f1f1f1;
                  color: black;
              }

              .next {
                  background-color: rgb(0, 0, 0);
                  color: white;
              }

              .round {
                  border-radius: 50%;
              }

     </style>
  </head>
  <body style="color:white;">
      
      <div class="container">
          <center>
            <h2>Application Form</h2>
            </center><br>

          <form action="/action_page.php">
                <div class="form-group">
                  <label for="course-apply">01.Course/s Apply:</label><br>
                    <select>
                              <option value="A">B.Sc(Special) Degree in Sport Sciences & Management (SSM)</option>
                              <option value="B">B.Sc(Special) Degree in Phyaical Education (PED)</option>
                              <option value="C">Both SSM & PED</option>
                    </select>
                   
                    <!-- <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="customRadio" name="1">
                      <label class="custom-control-label" for="customRadio">B.Sc(Special) Degree in Sport Sciences & Management (SSM)</label>
                    </div> 
                     <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="customRadio" name="2">
                      <label class="custom-control-label" for="customRadio">B.Sc(Special) Degree in Phyaical Education (PED)</label>
                    </div> 
                     <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customRadio" name="3">
                        <label class="custom-control-label" for="customRadio">Both SSM & PED</label>
                      </div>  -->
                   </div>  
                <div class="form-group">
                      <label for="name-with-initial">02.Name with initial [IN BLOCK LATTERS]:</label>
                       <input type="text" class="form-control" id="name" placeholder="Name with initial [IN BLOCK LATTERS]" required>
                </div>

                <div class="form-group">
                      <label for="full-name">03.Full name of the Applicant [IN BLOCK LATTERS]:</label>
                      <input type="text" class="form-control" id="usr" placeholder="Full name of the Applicant [IN BLOCK LATTERS]" required>
                </div>

                <div class="form-group">
                      <label for="address">04.Permanent Address:</label>
                      <input type="text" class="form-control" id="usr" placeholder="Permanent Address"  required>
                </div>

                <div class="form-group">
                      <label for="nic-no">  05.National Identity Card Number:</label>
                      <input type="text" class="form-control" id="" placeholder="National Identity Card Number" required>
                </div>
                
                <div class="endbtn"> <a href="form2.php" class="next">Next &raquo;</a></div>
               

          </form>
  </div>
</body>
</html>