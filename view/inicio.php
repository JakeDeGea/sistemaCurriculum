<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../_css/header.css">
<link rel="stylesheet" href="../_css/dashboard.css">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
<?php require_once ("../header.php")?>
<?php require_once ("../dashboard.php")?>


<!-- Funcionalidades BOOTSTRAP E JS -->



<!--  FUNÇÕES EM JAVASCRIPT PARA DASHBOARD-->
<script>
    $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
</script>