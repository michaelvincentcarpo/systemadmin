 
<?php

      $servername = "localhost";
      $username = "root";
      $password = "";
      $databasename = "dbfacebook";

      $connect = mysqli_connect($servername , $username , $password , $databasename);

      if (isset($_POST['submit'])) {

         $query="select * from dbfacebook where email='".$email."' AND password'".$password."' limit 1 ";

         $run = mysqli_query($connect,$query);
            if ($run) {
               echo "login successfully";
            }
            else{
               echo "not login";
            }
         }
   ?>