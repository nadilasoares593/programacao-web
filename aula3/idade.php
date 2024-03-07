<?php
$nome = $_POST["nome"];
$idade = $_POST["idade"];
if ($idade >= 0 and $idade <13) {
    print $nome . " e uma criança";

}else {
    if ($idade <18) {
        print $nome . " e um adolescente";
    }else {
        if ($idade <60) {
            print $nome . " e adulto (a)";

        }else {
            print $nome . " e idodo (a)";
        }
    }
}
?>