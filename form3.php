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
         	  }
             th{
                padding-right: 20px;
                margin-top: 10px;
              }
              td{
                padding-right: 20px;
                margin-top: 10px;
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
              .btn btn-info{
                ;jh;k;
              }

        </style>
</head>
<body style="color:white;">
	 <div class="container">
	 	<br>
    <form action="/action_page.php">
        <div class="form-group">
                      <label for="result">10.Result of the G.C.E.(O/L) Examination 2017:</label><br>
                      <table>
                        <tr>
                          <th>No</th>
                          <th>Subject</th>
                          <th>Grage</th>
                          <th>Examination Year</th>
                          <th>Index No</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Mathematics</td>
                          <td><select>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="S">S</option>
                            </select>
                          </td>
                          <td> 
                            <select>
                              <option>2009</option>      
                              <option>2010</option>      
                              <option>2011</option>      
                              <option>2012</option>      
                              <option>2013</option>      
                              <option>2014</option>      
                              <option>2015</option>      
                              <option>2016</option>      
                              <option>2017</option>      
                              <option>2018</option>
                            </select>
                          </td>  
                            <td><input type="text" class="form-control" id="usr" required></td>
                        </tr><tr>
                          <td>2</td>
                          <td>English Language</td>
                          <td><select>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="S">S</option>
                            </select>
                          </td>
                          <td> <select>
                              <option>2009</option>      
                              <option>2010</option>      
                              <option>2011</option>      
                              <option>2012</option>      
                              <option>2013</option>      
                              <option>2014</option>      
                              <option>2015</option>      
                              <option>2016</option>      
                              <option>2017</option>      
                              <option>2018</option>
                            </select>
                            </td>  
                            <td><input type="text" class="form-control" id="usr" required></td>
                        </tr>
                      </table>
                </div>
        <label for="course-apply">11.Document to be attached:</label>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="filename">
          <label class="custom-file-label" for="customFile">Payment voucher</label>
       </div>

       <div class="custom-file mb-3"> 
          <input type="file" class="custom-file-input" id="customFile" name="filename">
          <label class="custom-file-label" for="customFile">Bank paying receipt</label>
       </div>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="filename">
          <label class="custom-file-label" for="customFile">Certificate copy of G.C.E(A/L) 2017 Certificate</label>
       </div>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="filename">
          <label class="custom-file-label" for="customFile">Certificate copy of G.C.E(O/L) 2017 Certificate</label>
       </div>

      <!--  <input type="submit" class="btn btn-info" value="Submit Button" onclick="alert('Hello world!')"> -->
       <div class="endbtn"> 
         <a href="form2.php" class="previous">&laquo; Previous</a>
      </div>

    </form>
     
         		

           
</div>
</body>
</html> 