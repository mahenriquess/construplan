<script src="public/site/js/jquery-3.2.1.min.js"></script>
<script src="public/site/js/materialize.min.js"></script>
<script src="public/site/js/owl.carousel.min.js"></script>
<script src="public/site/js/scripts.js"></script>
<script defer src="public/site/js/fontawesome-all.min.js"></script>
<!--sweetalert -->
<script type="text/javascript" src="public/site/js/sweetalert/dist/sweetalert.min.js"></script>
<?php    
if(isset($_SESSION['mensagem'])): ?>
<script>
    swal({
            title: "<?= ($_SESSION['tipo'] == 'success') ? 'Tudo Certo!' : 'Ooops tem um erro!'; ?>",
            text: "<?= $_SESSION['mensagem']; ?>",   
            type: "<?= $_SESSION['tipo']; ?>",   
            showCancelButton: false,   
            confirmButtonColor: "#77dd77",   
            confirmButtonText: "Tudo bem!",   
            closeOnConfirm: true
        });
</script>
<?php
    unset($_SESSION['tipo']);
    unset($_SESSION['mensagem']);
endif;
?>