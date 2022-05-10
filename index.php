<?php

require_once("config.php");

//Carrega um usuário
$root = new Usuario();
$root->loadbyId(3);
echo $root;
