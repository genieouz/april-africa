    <div class="container top">
      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li>
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">Nouveau</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Ajouter <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>

      <?php
      //flash messages
      if(isset($flash_message)){
        if($flash_message == TRUE)
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Bien enregistré!</strong> nouvelle organisation créée avec succés.';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Ouf Erreur!</strong> veuillez remplir les champs requis svp';
          echo '</div>';          
        }
      }
      ?>
      
      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');

      //form validation
      echo validation_errors();
      
      echo form_open('admin/manufacturers/add', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Nom</label>
            <div class="controls">
              <input type="text" id="" name="name" value="<?php echo set_value('name'); ?>" >
              
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Telephone</label>
            <div class="controls">
              <input type="text" id="" name="telephone" value="<?php echo set_value('telephone'); ?>" >
              
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Email</label>
            <div class="controls">
              <input type="text" id="" name="email" value="<?php echo set_value('email'); ?>" >
              
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Assigner À</label>
            <div class="controls">
              <input type="text" id="" name="assigner_a" value="<?php echo set_value('assigner_a'); ?>" >
              
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Ville</label>
            <div class="controls">
              <input type="text" id="" name="ville" value="<?php echo set_value('ville'); ?>" >
              
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Pays</label>
            <div class="controls">
              <input type="text" id="" name="pays" value="<?php echo set_value('pays'); ?>" >
              
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Site Web</label>
            <div class="controls">
              <input type="text" id="" name="site_web" value="<?php echo set_value('site_web'); ?>" >
              
            </div>
          </div>
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Enregistrer les changements</button>
            <button class="btn" type="reset">Annuler</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     