<?php

require_once("config.php");

echo session_save_path();

var_dump(session_status());

switch(session_status()){
    case PHP_SESSION_DISABLED;
    echo "Desabilitadas";
    break;
    case PHP_SESSION_NONE;
    echo "Não existem";
    break;
    case PHP_SESSION_ACTIVE;
    echo "Habilitadas";
    break;
}