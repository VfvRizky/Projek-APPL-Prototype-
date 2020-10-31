<?php
          $mysqli = new mysqli("localhost", "root", "", "tugaskelompok");

          /* check connection */
          if (mysqli_connect_errno()) {
              printf("Connect failed: %s\n", mysqli_connect_error());
              exit();
          else{
          	echo "KONEKSI CONNECTED";
          }
          }
?>