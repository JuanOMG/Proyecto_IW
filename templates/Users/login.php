<style>
h2 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>

<div class="panel">
<h2 class="text-center">Login</h2>
<?= $this->Form->create();?>

   <input type="email" placeholder="Ingrese Correo" name="email" required>
   <input type="password" placeholder="Ingrese Clave" name="password" required>
   <button name="Login" type="submit">Login</button>

<?= $this->Form->end();?>
</div>
