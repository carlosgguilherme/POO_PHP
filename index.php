<!DOCTYPE html>
<html>
    <head>  
        <meta charset="UTF-8">
        <title>Treinamento</title>
    </head>
    <body>
        <pre>   
            <?php
                require_once 'ControleRemoto.php';
                $c = new ControleRemoto();
                $c->ligar();
                $c->play(); 
                $c->abrirMenu();
                $c->maisVolume();
                

            ?> 
        </pre>
    </body>

</html> 