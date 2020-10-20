<?php
    if ( isset($_POST['enviar']) ) {
        if ( enviarMensagem($_POST) ) {
            $mensagem = "Mensagem enviada com sucesso.";
        } else {
            $mensagem = "Erro no envio.";
        }
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Enviar Email</title>
        
        <!-- estilo -->
        <link href="estilo.css" rel="stylesheet">
        <link href="contato.css" rel="stylesheet">
    </head>

    <body>
        <main> 
            <div id="janela_formulario">
                <form action="contato.php" method="post">
                    <input type="text" name="nome" placeholder="Digite seu nome">
                    <input type="email" name="email" placeholder="Digite seu email">
                    <label>Mensagem</label>
                    <textarea name="mensagem"></textarea>
                    <input type="submit" name="enviar" value="Enviar Mensagem">
                    
                    <?php
                        if( isset($mensagem) ) {
                            echo "<p>" . $mensagem . "</p>";
                        }
                    ?>                     
                </form>
            </div>
        </main>
    </body>
</html>

<?php
?>
