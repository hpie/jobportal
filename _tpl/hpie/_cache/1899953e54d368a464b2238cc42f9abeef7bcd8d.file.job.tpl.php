<?php /* Smarty version Smarty-3.1.15, created on 2019-01-20 20:45:19
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/job.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18872455725c4490872651b6-65353229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1899953e54d368a464b2238cc42f9abeef7bcd8d' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/job.tpl',
      1 => 1547656881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18872455725c4490872651b6-65353229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_PAGE' => 0,
    'URL_JOB' => 0,
    'back_link' => 0,
    'translations' => 0,
    'BASE_URL' => 0,
    'job' => 0,
    'translator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c4490873345c1_34146692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4490873345c1_34146692')) {function content_5c4490873345c1_34146692($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div id="content">
			<div id="job-listings"></div><!-- #job-listings -->
			<?php echo $_smarty_tpl->getSubTemplate ("job-details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php if ($_smarty_tpl->tpl_vars['CURRENT_PAGE']->value==$_smarty_tpl->tpl_vars['URL_JOB']->value) {?>
			<div id="job-bottom">
				<div id="job-post-utils">
					<a href="<?php echo $_smarty_tpl->tpl_vars['back_link']->value;?>
" title="category home">&laquo; <?php echo $_smarty_tpl->tpl_vars['translations']->value['notfound']['back'];?>
</a><br />
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['report_fake'];?>
 <a href="#" onclick="Jobber.ReportSpam('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
report-spam/', <?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
); return false;" title="report fake ad"><?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['report_it'];?>
</a>
					&nbsp;&nbsp;<span id="report-spam-response"></span><br />
					<a href="#" onclick="Jobber.SendToFriend.showHide(); return false;" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['recommend']['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['recommend']['title'];?>
</a>
				</div><!-- #job-post-utils -->
				<div id="number-views">
					<?php echo $_smarty_tpl->tpl_vars['translator']->value->translate("jobs.published_at","<strong>".((string)$_smarty_tpl->tpl_vars['job']->value['created_on'])."</strong>");?>

					<br />
					<?php echo $_smarty_tpl->tpl_vars['translator']->value->translate("jobs.viewed","<strong>".((string)$_smarty_tpl->tpl_vars['job']->value['views_count'])."</strong>");?>

				</div><!-- #number-views -->
				<div class="clear"></div>
			</div><!-- #job-bottom -->
			<div id="send-to-friend" style="display: none;">
				<form id="frm-send-to-friend" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
send-to-friend/">
					<table>
						<tr>
							<td class="send-to-friend-address-label"><label for="friend_email"><?php echo $_smarty_tpl->tpl_vars['translations']->value['recommend']['friend_email_label'];?>
:</label></td>
							<td><input type="text" name="friend_email" id="friend_email" maxlength="50" size="30" /></td>
						</tr>
						<tr>
							<td><label for="my_email"><?php echo $_smarty_tpl->tpl_vars['translations']->value['recommend']['your_email_label'];?>
:</label></td>
							<td><input type="text" name="my_email" id="my_email" maxlength="50" size="30" /></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" name="submit" id="submit" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['recommend']['submit'];?>
" />
								&nbsp;&nbsp;<span id="send-to-friend-response"></span>
							</td>
						</tr>
					</table>
				</form>
			</div><!-- #send-to-friend -->
			
			<script type="text/javascript">
				$(document).ready(function()
				{
					Jobber.SendToFriend.init();
				});
			</script>
			
			<?php }?>
		</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
