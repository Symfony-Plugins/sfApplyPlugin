<div id="sf_apply_logged_in_as">
<p>
Logged in as <?php echo $sf_user->getGuardUser()->getUsername() ?>
</p>
<?php echo button_to('Log Out', 
  '@sf_guard_signout', array("id" => 'logout')) ?>
<?php echo button_to('Settings', 
  'sfApply/settings', array("id" => 'settings')) ?>
</div>

