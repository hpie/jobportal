<?php /* Smarty version Smarty-3.1.15, created on 2019-12-09 19:45:23
         compiled from "C:\xampp72\htdocs\jobs\_tpl\hpie\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13291683065dee56fbb79821-39866089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f71f19c25118c172e39b6d7d1a50d5b1c22a9d1' => 
    array (
      0 => 'C:\\xampp72\\htdocs\\jobs\\_tpl\\hpie\\page.tpl',
      1 => 1575873312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13291683065dee56fbb79821-39866089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'errors' => 0,
    'BASE_URL' => 0,
    'translations' => 0,
    'THEME' => 0,
    'ENABLE_RECAPTCHA' => 0,
    'the_captcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5dee56fbbd2109_50485432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dee56fbbd2109_50485432')) {function content_5dee56fbbd2109_50485432($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div id="content">
			<div id="job-listings"></div><!-- #job-listings -->
			<h3 class="page-heading"><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</h3>
			<?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

			<?php if ($_smarty_tpl->tpl_vars['page']->value['has_form']=='1') {?>
			<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
			<div class="validation-failure">
				<?php echo $_smarty_tpl->tpl_vars['errors']->value['contact_error'];?>

			</div>
			<?php } elseif ($_SESSION['contact_msg_sent']==1) {?>
			<div class="apply-status-ok">
				<?php echo $_smarty_tpl->tpl_vars['page']->value['form_message'];?>

			</div>
			<?php }?>
			<?php if ($_SESSION['contact_msg_sent']!=1) {?>
			<div id="contact-form">
				<div id="contact-form-contents">
					<form id="apply-online" method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
/">
						<label for="contact_name"><?php echo $_smarty_tpl->tpl_vars['translations']->value['contact']['name_label'];?>
:</label><br />
						<input <?php if ($_smarty_tpl->tpl_vars['errors']->value['contact_name']) {?>class="error"<?php }?> type="text" name="contact_name" id="contact_name" maxlength="50" size="30" value="<?php echo $_POST['contact_name'];?>
" />
						<span class="validation-error"><?php if ($_smarty_tpl->tpl_vars['errors']->value['contact_name']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /><?php }?></span>	
						<br /><br />
						<label for="contact_email"><?php echo $_smarty_tpl->tpl_vars['translations']->value['contact']['email_label'];?>
:</label><br />
						<input <?php if ($_smarty_tpl->tpl_vars['errors']->value['contact_email']) {?>class="error"<?php }?> type="text" name="contact_email" id="contact_email" maxlength="50" size="30" value="<?php echo $_POST['contact_email'];?>
" />
						<span class="validation-error"><?php if ($_smarty_tpl->tpl_vars['errors']->value['contact_email']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /><?php }?></span>	
						<br /><br />
						<label for="contact_msg"><?php echo $_smarty_tpl->tpl_vars['translations']->value['contact']['message_label'];?>
:</label><br />
						<textarea <?php if ($_smarty_tpl->tpl_vars['errors']->value['contact_msg']) {?>class="error"<?php }?> name="contact_msg" id="contact_msg" cols="50" rows="8"><?php echo $_POST['contact_msg'];?>
</textarea>
						<span class="validation-error"><?php if ($_smarty_tpl->tpl_vars['errors']->value['contact_msg']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /><?php }?></span>

						<?php if ($_smarty_tpl->tpl_vars['page']->value['accepts_files']=='1') {?>
						<br /><br />
						<label for="contact_attach"><?php echo $_smarty_tpl->tpl_vars['translations']->value['contact']['attachment_label'];?>
: <input type="file" name="contact_attach" id="contact_attach" /></label>
						<span class="validation-error"><?php if ($_smarty_tpl->tpl_vars['errors']->value['contact_attach']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /><?php }?></span>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['ENABLE_RECAPTCHA']->value) {?>
							<br /><br />
							<label for="recaptcha_response_field"><?php echo $_smarty_tpl->tpl_vars['translations']->value['captcha']['captcha_title'];?>
:</label><br />
							
							<script type="text/javascript">
							  var RecaptchaOptions = {
							    theme : 'white',
							    tabindex : 9
							  };
							</script>
							
							<?php echo $_smarty_tpl->tpl_vars['the_captcha']->value;?>

							<span class="validation-error"><?php if ($_smarty_tpl->tpl_vars['errors']->value['captcha']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /> <?php echo $_smarty_tpl->tpl_vars['errors']->value['captcha'];?>
<?php }?></span>
						<?php }?>
						<br /><br />
						<input type="submit" name="submit" id="submit" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['contact']['submit'];?>
" />
					</form>
				</div><!-- #contact-form-contents -->
				<?php }?>
			</div><!-- #contact-form -->
			<?php }?>
		</div><!-- /content -->
		<?php if ($_smarty_tpl->tpl_vars['page']->value['has_form']=='1') {?>
		
		<script type="text/javascript">
	 		$(document).ready(function()
			{
				$("#apply-online").validate({
					rules: {
						contact_name: { required: true },
						contact_email: { required: true, email: true },
						contact_msg: { required: true }
					},
					messages: {
						contact_name: ' <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />',
						contact_email: ' <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />',
						contact_msg: ' <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />'
					}
				});
			});
		</script>
		
		<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
