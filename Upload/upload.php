<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $altura = "200";
    $largura = "300";
    echo "Altura pretendida: $altura - largura pretendida: $largura <br>";

    switch ($_FILES['arquivo']['type']):
        case 'image/jpeg':
        case 'image/pjpeg':
            $imagem_temporaria = imagecreatefromjpeg($_FILES['arquivo']['tmp_name']);
            break;
        case 'image/png':
        case 'image/x-png':
            $imagem_temporaria = imagecreatefrompng($_FILES['arquivo']['tmp_name']);
            break;
        default:
            echo "Formato de imagem não suportado.";
            exit;
    endswitch;

    $largura_original = imagesx($imagem_temporaria);
    $altura_original = imagesy($imagem_temporaria);
    echo "Largura original: $largura_original - Altura original: $altura_original <br>";

    $nova_largura = $largura ? $largura : (($largura_original / $altura_original) * $altura);
    $nova_altura = $altura ? $altura : (($altura_original / $largura_original) * $largura);

    $imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
    imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);

    $nome_arquivo = 'arquivo/' . $_FILES['arquivo']['name'];

    switch ($_FILES['arquivo']['type']):
        case 'image/jpeg':
        case 'image/pjpeg':
            imagejpeg($imagem_redimensionada, $nome_arquivo);
            break;
        case 'image/png':
        case 'image/x-png':
            imagepng($imagem_redimensionada, $nome_arquivo);
            break;
    endswitch;

    echo "<img src='$nome_arquivo'>";
}




?>