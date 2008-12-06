<?php use_helper('Validation') ?>
<?php echo form_tag('sfApply/resetRequest', array('name' => 'sfApplyResetRequest', 'id' => 'sfApplyResetRequest')) ?>
<p>
Forgot your password? No problem! Just enter your username and
click "Reset My Password." A link permitting you to change
your password will then be sent to the email address associated with the
account.
</p>
<div class="apply_row">
<label for="username">Username: </label>
<div class="apply_row_content">
<?php echo form_error('username') ?>
<?php echo input_tag('username') ?>
</div>
</div>
<div class="apply_submit_row">
<label></label>
<?php echo submit_tag('Reset My Password') ?>, or 
<?php echo button_to('Cancel', '@homepage') ?>
</div>
</form>

