<?php /* Smarty version Smarty-3.1.15, created on 2019-01-20 20:45:19
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/job-details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7515461555c449087349272-08885467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acd4d9935eafe62c5d768a57f4b9a83503f51d1f' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/job-details.tpl',
      1 => 1547656881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7515461555c449087349272-08885467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'translations' => 0,
    'job' => 0,
    'translator' => 0,
    'CURRENT_PAGE' => 0,
    'URL_JOB' => 0,
    'BASE_URL' => 0,
    'THEME' => 0,
    'ENABLE_RECAPTCHA' => 0,
    'the_captcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c449087565768_41866880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c449087565768_41866880')) {function content_5c449087565768_41866880($_smarty_tpl) {?>			<div id="job-details">
				<?php if ($_SESSION['apply_successful']&&$_SESSION['apply_successful']==1) {?>
				<div class="apply-status-ok">
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['success'];?>

				</div>
				<?php }?>
				<?php if (($_smarty_tpl->tpl_vars['job']->value['days_old']>@constant('OLD_JOB_NOTIFY'))&&(@constant('OLD_JOB_NOTIFY')>0)) {?>
				<div id="old-ad">
					<?php echo $_smarty_tpl->tpl_vars['translator']->value->translate("apply.old_ad",@constant('OLD_JOB_NOTIFY'));?>

				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['CURRENT_PAGE']->value==$_smarty_tpl->tpl_vars['URL_JOB']->value) {?>
				<div id="applied-to-job">
					<?php echo $_smarty_tpl->tpl_vars['job']->value['applied_count'];?>

					<?php if ($_smarty_tpl->tpl_vars['job']->value['applied_count']!=1) {?>
					<p><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['applicants'];?>
</p>
					<?php } else { ?>
					<p><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['applicant'];?>
</p>
					<?php }?>
				</div>
				<?php }?>
				<h2>
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-<?php echo $_smarty_tpl->tpl_vars['job']->value['type_var_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['job']->value['type_name'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
 
				</h2>
				<p>
					<span class="fading"><?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['preposition_at'];?>
</span>
					<?php if ($_smarty_tpl->tpl_vars['job']->value['url']&&$_smarty_tpl->tpl_vars['job']->value['url']!='http://') {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['job']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['company'];?>
</a>
					<?php } else { ?>
					<strong><?php echo $_smarty_tpl->tpl_vars['job']->value['company'];?>
</strong>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['job']->value['is_location_anywhere']) {?>
					<strong>(<?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['location_anywhere'];?>
)</strong>
					<?php } else { ?>
					<span class="fading"><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['in'];?>
</span> <strong><?php echo $_smarty_tpl->tpl_vars['job']->value['location'];?>
</strong>
					<?php }?>
				</p>
				<div id="job-description">
				<?php echo $_smarty_tpl->tpl_vars['job']->value['description'];?>

				</div>
				<br />
				<?php if ($_smarty_tpl->tpl_vars['job']->value['apply_online']==1&&$_smarty_tpl->tpl_vars['CURRENT_PAGE']->value!='verify') {?>
					<div id="apply_online_now"><a href="#" onclick="$('#apply-online').toggle(); window.location.href = '#apply'; return false;"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['apply_message'];?>
</a></div>
					<?php if ($_SESSION['apply_successful']&&$_SESSION['apply_successful']==-1) {?>
					<div class="validation-failure">
						<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />
						<?php if ($_SESSION['apply_allowed']&&$_SESSION['apply_allowed']==-1) {?>
							<?php echo $_smarty_tpl->tpl_vars['translator']->value->translate("apply.error_apply_timeout_not_passed",@constant('MINUTES_BETWEEN_APPLY_TO_JOBS_FROM_SAME_IP'));?>

						<?php } elseif ($_SESSION['apply_mail_sent']&&$_SESSION['apply_mail_sent']==-1) {?>
							<?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['error_sending_mail'];?>

						<?php } elseif ($_SESSION['apply_errors']['apply_cv']) {?>
							<?php echo $_SESSION['apply_errors']['apply_cv'];?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['errro_apply_data_invalid'];?>

						<?php }?>
					</div>
					<?php }?>
			
					<div id="apply-online" <?php if ($_SESSION['apply_successful']&&$_SESSION['apply_successful']==-1) {?>style="display: block;"<?php } else { ?>style="display: none;"<?php }?>>
						<form id="frm-apply-online" method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
apply-online/">
							<table>
								<tr>
									<td><label for="apply_name"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['name_label'];?>
:</label></td>
									<td>
										<input <?php if ($_SESSION['apply_errors']['apply_name']) {?>class="error"<?php }?> type="text" name="apply_name" id="apply_name" maxlength="50" size="30" value="<?php echo $_SESSION['apply_fields']['apply_name'];?>
" />
										<span class="validation-error"><?php if ($_SESSION['apply_errors']['apply_name']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /><?php }?></span>	
									</td>
								</tr>
								<tr>
									<td><label for="apply_email"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['email_label'];?>
:</label></td>
									<td>
										<input <?php if ($_SESSION['apply_errors']['apply_email']) {?>class="error"<?php }?> type="text" name="apply_email" id="apply_email" maxlength="50" size="30" value="<?php echo $_SESSION['apply_fields']['apply_email'];?>
" />
										<span class="validation-error"><?php if ($_SESSION['apply_errors']['apply_email']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /><?php }?></span>	
									</td>
								</tr>
								<tr>
									<td valign="top"><label for="apply_msg"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['message_label'];?>
:</label></td>
									<td>
										<textarea <?php if ($_SESSION['apply_errors']['apply_msg']) {?>class="error"<?php }?> name="apply_msg" id="apply_msg" cols="60" rows="15"><?php echo $_SESSION['apply_fields']['apply_msg'];?>
</textarea>
										<span class="validation-error"><?php if ($_SESSION['apply_errors']['apply_msg']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /><?php }?></span>	
									</td>
								</tr>
								<tr>
									<td valign="top"><label for="apply_cv"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['cv_label'];?>
:</label></td>
									<td>
										<input type="file" name="apply_cv" id="apply_cv" />
										<span class="validation-error"><?php if ($_SESSION['apply_errors']['apply_cv']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" title="<?php echo $_SESSION['apply_errors']['apply_cv'];?>
" /><?php }?></span>	
										<div class="suggestion"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['cv_info'];?>
</div>
									</td>
								</tr>
								<?php if ($_smarty_tpl->tpl_vars['ENABLE_RECAPTCHA']->value) {?>
									<tr>
										<td valign="top"><label>Anti-Spam</label></td>
										<td>
											
											<script type="text/javascript">
											  var RecaptchaOptions = {
											    theme : 'white',
											    tabindex : 9
											  };
											</script>
											
											<?php echo $_smarty_tpl->tpl_vars['the_captcha']->value;?>
 <span class="validation-error"><?php if ($_SESSION['apply_errors']['captcha']) {?>
											<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /> <?php echo $_SESSION['apply_errors']['captcha'];?>
<?php }?></span>
										</td>
									</tr>
								<?php }?>
								<tr><td colspan="2">&nbsp;</td></tr>
								<tr>
									<td colspan="2">
										<input type="submit" name="submit" id="submit" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['submit'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['or'];?>

										<a href="#" onclick="$('#apply-online').toggle(); return false;"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['cancel'];?>
</a>
									</td>
								</tr>
							</table>
							<input type="hidden" name="job_id" id="job_id" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" />
						</form>
					</div><!-- #apply-online -->
				<?php }?>
			<br /><?php echo $_smarty_tpl->getSubTemplate ("company-posts-loop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div><!-- #job-details -->

	<script type="text/javascript">
	$(document).ready(function() { 

<?php if ($_SESSION['apply_successful']&&$_SESSION['apply_successful']==-1) {?>
	
		if (document.getElementById("apply_name"))
		{
			window.location.href = "#apply";
			document.getElementById("apply_name").focus();	
		}
	
<?php }?>

	$("#frm-apply-online").validate({
		rules: {
			apply_name: { required: true },
			apply_email: { required: true, email: true },
			apply_msg: { required: true },
			apply_cv: { accept: "pdf|rtf|doc|odt" }
		},
		messages: {
			apply_name: ' <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />',
			apply_email: ' <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />',
			apply_msg: ' <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />',
			apply_cv: ' <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />'
		}
	});
	}); 
	</script>
<?php }} ?>
