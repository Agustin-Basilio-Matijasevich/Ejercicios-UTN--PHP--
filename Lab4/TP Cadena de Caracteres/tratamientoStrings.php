<?php

    function contPalabras ($texto) //Recibe el texto y devuelve entero => cantidad de palabras en texto
    {
        return str_word_count($texto, 0);
    }

    function contPalabrasLetra ($texto, $letra) //Recibe el texto y la letra => devuelve la cantidad de palabras que empiezan con esa letra
    {
        $array = str_word_count($texto, 1);

        $cont = 0;

        foreach ($array as $palabra)
            {
                if ($palabra[0] == $letra)
                {
                    $cont++;
                }
            }

        return $cont;

    }

    function identPalindromos ($texto)
    {
        $array = str_word_count($texto, 1);

        $arrayP;

        foreach($array as $palabra)
        {
            if($palabra == strrev ($palabra))
            {
                $arrayP[] = $palabra;
            }
        }

        return $arrayP;

    }

?>