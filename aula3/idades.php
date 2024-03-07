<?php
$nome = $_POST["nome"];
$idade = $_POST["idade"];
if ($idade >= 0 and $idade <13) {
    print $idade . " e uma criança";

}else {
    if ($idade <18) {
        print $idade . " e um adolescente";
    }else {
        if ($idade <60) {
            print $idade . " e adulto (a)";

        }else {
            print $idade . " e idoso (a)";
        }
    }
}
?>