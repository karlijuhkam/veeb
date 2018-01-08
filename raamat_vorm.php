<?php

function raamatuvorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Pealkiri: <input type="text" name="title"><br />
            Autor: <input type="text" name="author"><br />
            Trükikoda: <input type="text" name="print"><br />
            Seisund: <input type="text" name="status"><br />
            <input type="submit" value="Salvesta!"> 
        </form>
    ';
}

function salvestaRaamat($raamat, $failinimi){
    if(file_exists($failinimi) and is_file($failinimi) and is_writable($failinimi)){
        $fail = fopen($failinimi, 'a') or die('Probleem faili avamisega');
        foreach ($raamat as $element){
            fwrite($fail, $element."\n");
        }
        fwrite($fail, "----\n");
        fclose($fail);
        echo 'Andmed on sisestatud<br />';
    } else {
        echo 'Probleem failiga '.$failinimi.'<br />';
    }
}

function looAndmed($failinimi){
    if(file_exists($failinimi) and is_file($failinimi) and is_writable($failinimi)){
        $fail = fopen($failinimi, 'r');
        echo '<table border="1">';
            echo '<tr>';
                echo '<th></th>';
                echo '<th></th>';
                echo '<th></th>';
                echo '<th></th>';
            echo '</tr>';
            while (feof($fail)){

            }
    }
}

?>