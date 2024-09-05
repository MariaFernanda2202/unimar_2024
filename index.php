<?php
include "topo.php";
?> 
<?php
if (isset($_GET['p'])) {
    $p = $_GET['p'];
    switch ($p) {
        case 1:
            include "meio.php";
            include "consulta.php";
            include "avaliacao.php";
            break;
        case 2:
            include "dicas_curiosidade.php";
            break;
        case 3:
            include "nossa_veterinaria.php";
            break;
        case 4:
            include "login.php";
            break;
            case 5:
                include "nossaloja.php";
                break;
        default:
            include "meio.php";
            include "consulta.php";
            include "avaliacao.php";
            break;
    }
} else {
    include "meio.php";
    include "consulta.php";
    include "avaliacao.php"; //pagina default
}
?>
<?php
include "rodape.php";
?>