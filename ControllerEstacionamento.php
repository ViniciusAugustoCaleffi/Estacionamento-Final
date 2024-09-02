
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    
</body>
</html>
<?php


        namespace Projeto\ProjetoEstacionamento\PHP;
            require_once('Mensalista.php');

            use  Projeto\ProjetoEstacionamento\PHP\ControllerMensalista;
            use  Projeto\ProjetoEstacionamento\PHP\Mensalista;
        
 
 
                

                        try{
                            $mensalista1 = new Mensalista(
                            $nome     = $_POST['nome'];
                            $telefone        = $_POST['telefone'];
                            $endereco       = $_POST['endereco'];
                            $carro   = $_POST['carro'];
                            $placa   = $_POST['placa'];
                            $cor      = $_POST['cor'];
                            $dtpagamento    = $_POST['dtpagamento'];
                            $vlmensal      = $_POST['vlmensal']);
                            }catch (Exception $erro){
                                echo $erro;
                            }



                </button><br><br>
                <?php  echo $mensalista1->imprimir().
        
                ?>
            </form>
        </body>
    </HTML>

 