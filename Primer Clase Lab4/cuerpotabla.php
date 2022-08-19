<?php
            if (!empty($_POST))
            {
                print "Tabla"."<br>";

                $numero = $_POST['numero'];

                for ($i=0; $i <= 10; $i++)
                {
                    echo "<tr>";
                    echo "<td>".$numero." X ".$i."= "."</td>"."<td>".$numero*$i."</td>";
                    echo "</tr>";
                }
            }
?>