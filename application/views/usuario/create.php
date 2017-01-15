<?php echo validation_errors('<div class="alert alert-danger">',"</div>"); ?>

<?php echo form_open('usuario/add', ['class' => 'form-horizontal']); ?>
<?php $label_atr = ['class' => 'col-sm-2 control-label']; ?>
    <div class="form-group">
        <?php echo form_label('Nombre de usuario: ', 'username', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'username', 'class' => 'form-control', 'placeholder' => 'Apodo del usuario', 'value' => set_value('username')]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Password: ', 'password', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'No vale 1234']); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Confirmar Password: ', 'password_confirm', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'password_confirm', 'class' => 'form-control', 'placeholder' => 'Pon lo mismo que arriba']); ?>
        </div>
    </div>
    <div class="form-group">
    <?php echo form_label('Correo electrónico: ', 'email',$label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'email',  'class' => 'form-control', 'placeholder' => 'Introduce un correo válido', 'value' => set_value('email')]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Nombre: ', 'first_name', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'first_name', 'class' => 'form-control', 'placeholder' => 'Nombre', 'value' => set_value('first_name')]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Apellidos: ', 'last_name', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'last_name', 'class' => 'form-control', 'placeholder' => 'Apellidos', 'value' => set_value('last_name')]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Fecha de nacimiento: ', 'date_of_birth', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'date_of_birth', 'class' => 'form-control', 'placeholder' => 'Año-Mes-Día', 'value' => set_value('date_of_birth')]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Direccion: ', 'address', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'address', 'class' => 'form-control', 'placeholder' => 'Dirección', 'value' => set_value('address')]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Teléfono: ', 'phone', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'phone',  'class' => 'form-control', 'placeholder' => 'Número de teléfono', 'value' => set_value('phone')]); ?>
        </div>
    </div>
    <div class="form-group">
        <div class = "col-md-2">
            <?php echo form_submit('Alta', 'Enviar', ['class'=>'btn btn-primary']); ?>
        </div>
    </div>
<?php echo form_close(); ?>