<?php

    require_once("config.php");

    $root = new Usuario();

    $root->loadbyID(4);

    echo $root;
