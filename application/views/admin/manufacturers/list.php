    <div class="container top">

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <?php echo ucfirst($this->uri->segment(2));?>
        </li>
      </ul>

      <div class="page-header users-header">
        <h2>
          <?php echo ucfirst($this->uri->segment(2));?> 
          <?php if($user['role']=="admin" || $user['role']=="commercial"): ?><a  href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>/add" class="btn btn-success">Ajouter</a><?php endif; ?>
        </h2>
      </div>
      
      <div class="row">
        <div class="span12 columns">
          <div class="well">
           
            <?php
           
            $attributes = array('class' => 'form-inline reset-margin', 'id' => 'myform');
           
            //save the columns names in a array that we will use as filter         
            $options_manufacturers = array();    
            foreach ($manufacturers as $array) {
              foreach ($array as $key => $value) {
                $options_manufacturers[$key] = $key;
              }
              break;
            }

            echo form_open('admin/manufacturers', $attributes);
     
              echo form_label('Search:', 'search_string');
              echo form_input('search_string', $search_string_selected);

              echo form_label('Order by:', 'order');
              echo form_dropdown('order', $options_manufacturers, $order, 'class="span2"');

              $data_submit = array('name' => 'mysubmit', 'class' => 'btn btn-primary', 'value' => 'Rechercher');

              $options_order_type = array('Asc' => 'Asc', 'Desc' => 'Desc');
              echo form_dropdown('order_type', $options_order_type, $order_type_selected, 'class="span1"');

              echo form_submit($data_submit);

            echo form_close();
            ?>

          </div>

          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header">#</th>
                <th class="yellow header headerSortDown">Nom</th>
                <th class="yellow header headerSortDown">Téléphone</th>
                <th class="yellow header headerSortDown">Email</th>
                <th class="yellow header headerSortDown">Assigner À</th>
                <th class="yellow header headerSortDown">Ville</th>
                <th class="yellow header headerSortDown">Pays</th>
                <th class="yellow header headerSortDown">Site Web</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($manufacturers as $row)
              {
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['telephone'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td>'.$row['assigner_a'].'</td>';
                echo '<td>'.$row['ville'].'</td>';
                echo '<td>'.$row['pays'].'</td>';
                echo '<td>'.$row['site_web'].'</td>';
                if($user['role']=="admin")
                echo '<td class="crud-actions">
                  <a href="'.site_url("admin").'/manufacturers/update/'.$row['id'].'" class="btn btn-info">modifier</a>  
                  <a href="'.site_url("admin").'/manufacturers/delete/'.$row['id'].'" class="btn btn-danger">supprimer</a>
                </td>';
                else if($user['role']=="commercial")
                  echo '<td class="crud-actions">
                  <a href="'.site_url("admin").'/manufacturers/update/'.$row['id'].'" class="btn btn-info">modifier</a>  
                  
                </td>';
                else
                  echo '<td class="crud-actions"></td>';
                echo '</tr>';
              }
              ?>      
            </tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>