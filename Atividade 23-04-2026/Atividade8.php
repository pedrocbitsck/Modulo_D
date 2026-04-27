<?php
//8. Mecanismo de Busca: Crie um script que percorra uma lista de nomes de arquivos e retorne apenas aqueles que terminam com a extensão ".jpg".

$arquivos = ["foto.jpg", "doc.pdf", "imagem.jpg"];

foreach ($arquivos as $arq) {
    if (str_ends_with($arq, ".jpg")) {
        echo "$arq\n";
    }
}
?>