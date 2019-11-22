<?php

function result($param)
{
  header("Location: index.php?p=".$param);
}

if(isset($_POST["txt_login"]) && isset($_POST["txt_mdp"]))
{
    $login = $_POST["txt_login"];
    $mdp = $_POST["txt_mdp"];

    if($login != "1" && $mdp != "2")
    {
        result("Non");
    }
    else
    {
        result("Oui");
    }
}