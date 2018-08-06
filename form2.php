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
         	  	padding-top: 5px;
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
              .endbtn{
              	padding-right: 200px;
              }
              .previous {
                  background-color: #f1f1f1;
                  color: black;
              }

              .next {
                  background-color:rgb(0, 0, 0);
                  color: white;
              }

              .round {
                  border-radius: 50%;
              }

        </style>
</head>
<body style="color:white;">
	 <div class="container">
	 	<form action="/action_page.php">
            <div class="form-group">
                <label for="gender">06.District(Residence):</label><br>
                <input type="text" class="form-control" id="usr" placeholder="District(Residence)" required>
            </div>
            <div class="form-group">
                <label for="contact">07.Contact Telephone No:</label><br>
                <input type="text" class="form-control" id="usr" placeholder="Contact Telephone No" required>
            </div>
                  	
            <div class="form-group">
                <label for="gender">08.Gender:</label><br>
                <select>
                  <option value="male">male</option>
                  <option value="female">female</option>
                </select>
            </div>
                  	
            <div class="form-group">
                      <label for="result">09.Result of the G.C.E.(A/L) Examination 2017:</label><br>
                      <table>
                        <tr>
                          <th>Index No:<input type="text" class="form-control" id="usr" required></th>
                          <th>Z-Score :<input type="text" class="form-control" id="usr" required></th>
                          <th>Genaral Test Marks:<input type="text" class="form-control" id="usr" required></th>      
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <th>No</th>
                          <th>Subject</th>
                          <th>Grade</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td><input type="text" class="form-control" id="usr" required></td>
                          <td>
                            <select>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="S">S</option>
                            </select>
                            </td>
                        </tr><tr>
                          <td>2</td>
                          <td><input type="text" class="form-control" id="usr" required></td>
                          <td>
                            <select>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="S">S</option>
                            </select>
                            </td>
                        </tr><tr>
                          <td>3</td>
                          <td><input type="text" class="form-control" id="usr" required></td>
                          <td>
                            <select>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="S">S</option>
                            </select>
                            </td>
                        </tr>
                      </table>
            </div>
             <div class="endbtn"> 
              <a href="form.php" class="previous">&laquo; Previous</a>
              <a href="form3.php" class="next">Next &raquo;</a>
            </div>    
         		
      </form>
         
</div>
</body>
</html>