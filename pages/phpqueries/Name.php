<?php
                                         include "db.php";

                                            $sql = "SELECT top (1) fname, lname FROM Person ";
                                            $stmt = sqlsrv_query( $conn, $sql );
                                            if( $stmt === false) {
                                                die( print_r( sqlsrv_errors(), true) );
                                            }

                                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                                                 
                                                echo "<tr><td>".$row['fname']."  "."</td><td>".$row['lname']."<br>"."</td><tr>";                                           
                                            
                                            }


                                            sqlsrv_free_stmt( $stmt);

?>