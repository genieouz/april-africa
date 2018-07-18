<!DOCTYPE html> 
<html lang="en-US">
  <head>
    <title>S'inscrire</title>
    <meta charset="utf-8">
    <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
  </head>
  <body>
<?php
//form validation
echo validation_errors();
?>  	
<div class="container login">
<?php
$attributes = array('class' => 'form-signin');   
echo form_open('admin/create_member', $attributes);
echo '<h2 class="form-signin-heading">Créer un compte</h2>';
echo form_input('first_name', set_value('first_name'), 'placeholder="Prénom"');
echo form_input('last_name', set_value('last_name'), 'placeholder="Nom"');
echo form_input('email_address', set_value('email_address'), 'placeholder="Email"');

echo form_input('username', set_value('username'), 'placeholder="nom d\'utilisateur"');
echo form_password('password', '', 'placeholder="mot de passe"');
echo form_password('password2', '', 'placeholder="confirmer le mot de passe"');
echo form_input('role', set_value('role'), 'placeholder="admin ou commercial ou consultant"');
echo form_submit('submit', 'S\'inscrire', 'class="btn btn-large btn-primary"');
echo form_close();
?>
</div>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.7.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>    
    