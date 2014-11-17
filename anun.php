<?php
ini_set('default_charset', 'UTF-8');
include './bootstrap.php';

use Model\Entity\Anuncio;


var_dump($_FILES);
if(isset($_POST['anuncio'])){
    
    $arquivo = upload($_FILES);
   
    if($arquivo === true){       
    
//  (new Anuncio($entityManager))->insert(array($_POST['titulo']
//                                          ,$_POST['site'] 
//                                          ,$_POST['descricao'] 
//                                          ));
//    
    echo "<script>alert('Anuncio Enviado com sucesso');history.back(1);</script>";
    }else
    echo "<script>alert('$arquivo');history.back(1);</script>";
    
    

}

 function upload($arquivo) {
        $_FILES = $arquivo;
        // Pasta onde o arquivo vai ser salvo
        $_UP ['pasta'] = './img/logos/';
        // var_dump($_FILES);
        // Tamanho máximo do arquivo (em Bytes)
        $_UP ['tamanho'] = 2024 * 2024 * 2; // 2Mb
        // Array com as extensões permitidas
        $_UP ['extensoes'] = array(
            'jpg',
            'gif',
            'png'            
        );

        // Renomeia o arquivo? (Se true, o arquivo será salvo como .csv e um nome único)
        $_UP ['renomeia'] = TRUE;

        // Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
        // Faz a verificação da extensão do arquivo
        $extensao = strtolower(end(explode('.', $_FILES ['arquivo'] ['name'])));
        if (array_search($extensao, $_UP ['extensoes']) === false) {
            return $msg = "Por favor, envie arquivos do tipo: png, gif ou jpg";
        }

        // Faz a verificação do tamanho do arquivo
        else if ($_UP ['tamanho'] < $_FILES ['arquivo'] ['size']) {
            return $msg = "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
        }

        // O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
        else {
            // Primeiro verifica se deve trocar o nome do arquivo
            if ($_UP ['renomeia'] == true) {
                // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .csv
                $dt = new DateTime('now');
                
                
                $nome_final = md5(microtime().date("dmY") . '_' . $dt->getTimestamp() ). '.'.$extensao;
            } else {
                // Mantém o nome original do arquivo
                $nome_final = $_FILES ['arquivo'] ['name'];
            }

            if (!file_exists($_UP ['pasta'] . $nome_final)) {
                // Depois verifica se é possível mover o arquivo para a pasta escolhida

                if (move_uploaded_file($_FILES ['arquivo'] ['tmp_name'], $_UP ['pasta'] . $nome_final)) {
                    // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
                    // echo "Upload efetuado com sucesso!";
                    // echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
                    // unlink($_UP['pasta'] . $nome_final);
                    return true;
                } else {
                    // Não foi possível fazer o upload, provavelmente a pasta está incorreta
                    return $msg = "Não foi possível enviar o arquivo, tente novamente";
                }
            } 
        }
        
    }

