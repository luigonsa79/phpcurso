<form
method="POST"
>
    
    <input 
    type="text"
    name="nombre"
    />

    <input 
    type="submit"
    name="enviar"
    />
</form>

<!-- envio por GET -->
<?php if(isset($_REQUEST['nombre'])):?>

    <p>Tu nombre es 
        <?php echo $_REQUEST['nombre']; ?>
    </p>

<?php endif;?>

<!-- Envio por POST -->
<?php if($_SERVER['REQUEST_METHOD'] == "POST"): ?>

    <?php echo "Enviando algo por POST" ?>

<?php endif; ?>

<input 
type="text"
placeholder="Nombre"
name="nombre"

>





