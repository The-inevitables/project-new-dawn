<?php
                                         include "db.php";

                                            $sql = "SELECT top (1) email FROM Person ";
                                            $stmt = sqlsrv_query( $conn, $sql );
                                            if( $stmt === false) {
                                                die( print_r( sqlsrv_errors(), true) );
                                            }

                                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                                                 
                                                echo "<tr><td>".$row['email']."</td><tr>";
                                            }


                                            sqlsrv_free_stmt( $stmt);

?>