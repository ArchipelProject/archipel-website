<?
    define("ARCHIPEL", 1);

    if (file_exists("maintenance-mode"))
        header('Location: maintenance.php');

?>