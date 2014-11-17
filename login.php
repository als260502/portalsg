<?php
include './bootstrap.php';
/**
 * Description of login
 *
 * @author andre
 */

if (isset($_POST['login'])){
    
    $login = new Controller\IndexController();
    
    if (!empty($_POST['name']) && !empty($_POST['senha']))
    {    
        if ($login->login($_POST['nome'], $_POST['senha']))
        {
            //header("location:")
        }
        
    }
    else
    {
        echo "<script>alert('');</sctipt>";
        return false;
    }
}
