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
          <a href="#">Modifier</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Modification <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>

 
      <?php
      //flash messages
      if($this->session->flashdata('flash_message')){
        if($this->session->flashdata('flash_message') == 'updated')
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Succés!</strong> organisation ajoutée avec succés.';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Ouff Erreur!</strong> Veuillez remplir les champs correctement.';
          echo '</div>';          
        }
      }
      ?>
      
      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');

      //form validation
      echo validation_errors();

      echo form_open('admin/manufacturers/update/'.$this->uri->segment(4).'', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Nom</label>
            <div class="controls">
              <input type="text" id="" name="name" value="<?php echo $manufacture[0]['name']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Téléphone</label>
            <div class="controls">
              <input type="text" id="" name="telephone" value="<?php echo $manufacture[0]['telephone']; ?>" >
              
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Email</label>
            <div class="controls">
              <input type="text" id="" name="email" value="<?php echo $manufacture[0]['email']; ?>" >
              
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Assigner À</label>
            <div class="controls">
              <input type="text" id="" name="assigner_a" value="<?php echo $manufacture[0]['assigner_a']; ?>" >
             
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Ville</label>
            <div class="controls">
              <input type="text" id="" name="ville" value="<?php echo $manufacture[0]['ville']; ?>" >
              
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Pays</label>
            <div class="controls">
              <input type="text" id="" name="pays" value="<?php echo $manufacture[0]['pays']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Site Web</label>
            <div class="controls">
              <input type="text" id="" name="site_web" value="<?php echo $manufacture[0]['site_web']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Enregistrer les changements</button>
            <button class="btn" type="reset">Annuler</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     