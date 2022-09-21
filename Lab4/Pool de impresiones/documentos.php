<?php

    require_once ("Iimprimible.php");
    require_once ("Adocumento.php");

    class html extends Adocumento implements Iimprimible
    {
        public function procImpresion()
        {
            return $this -> data;
        }

    }

    class imagen extends Adocumento implements Iimprimible
    {
        public function procImpresion()
        {
            $procData = substr($this -> data, 0, -1);
            $procData .= ' style="width: 500px";>';
            return $procData;
        }
    }

    class tabla extends Adocumento implements Iimprimible
    {
        public function procImpresion()
        {
            $procData = "";
            $columnas = sizeof($this -> data);
            $filas = $this -> data[0];
            $filas = sizeof($filas);
            
            $procData .= "<table>
            <tbody>";

            for ($i = 0; $i < $filas; $i++)
            {
                $procData .= "<tr>";

                for ($j = 0; $j < $columnas; $j++)
                {
                    $procData .= "<td>".$this -> data[$j][$i]."</td>";
                }

                $procData .= "</tr>";
            }

            return $procData;

        }
    }

?>