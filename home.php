<?php
include './servicos/verifica.php';
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p><a href="sair">sair</a></p>

        <p>seja bem vindo

            <?php
            $consulta = "select nomeUsuario from usuarios where loginUsuario='$login' and senhaUsuario='$senha'";
            $consulta = mysqli_query($con, $consulta);
            while ($row = mysqli_fetch_array($consulta)) {
                echo $row['nomeUsuario'];
            }
            ?>
        </p>
        primeira página do projeto.
    </body>
</html>
