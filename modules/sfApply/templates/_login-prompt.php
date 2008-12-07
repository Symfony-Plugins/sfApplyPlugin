<?php echo form_tag('@sf_guard_signin',
  array('name' => 'sf_guard_signin', 'id' => 'sf_guard_signin')) ?>

  <fieldset>

    <div class="form-row" id="sf_guard_auth_username">
      <?php
      echo form_error('username'), 
      label_for('username', __('Username:')),
      input_tag('username', $sf_data->get('sf_params')->get('username'));
      ?>
    </div>

    <div class="form-row" id="sf_guard_auth_password">
      <?php
      echo form_error('password'), 
        label_for('password', __('Password:')),
        input_password_tag('password');
      ?>
    </div>
    <div class="form-row" id="sf_guard_auth_remember">
      <?php
        echo label_for('remember', __('Remember me?')),
        checkbox_tag('remember');
      ?>
    </div>
  </fieldset>
  <?php 
  echo submit_tag(__('sign in'))
  ?>
  <p>
  <?php echo link_to(__('Reset Your Password'), 'sfApply/resetRequest')  ?>
  </p>
  <p>
  <?php
  echo link_to(__('Create a New Account'), '@apply')
  ?>
  </p>
</form>
