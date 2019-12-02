<?php /* Smarty version Smarty-3.1.15, created on 2019-01-17 16:49:50
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/publish-write.tpl" */ ?>
<?php /*%%SmartyHeaderCode:848038095c3eb3fab817b9-03244333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '051378af37ad3345b58be2ecf5a7fad207557901' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/publish-write.tpl',
      1 => 1547656882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '848038095c3eb3fab817b9-03244333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c3eb3fb266b18_91354136',
  'variables' => 
  array (
    'translations' => 0,
    'filter_error' => 0,
    'BASE_URL' => 0,
    'THEME' => 0,
    'errors' => 0,
    'types' => 0,
    'job' => 0,
    'categories' => 0,
    'default_categ_id' => 0,
    'cities' => 0,
    'user_city' => 0,
    'ENABLE_RECAPTCHA' => 0,
    'the_captcha' => 0,
    'is_apply' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3eb3fb266b18_91354136')) {function content_5c3eb3fb266b18_91354136($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div id="content">
			<div id="job-listings"></div><!-- #job-listings -->
			<div class="steps">
				<div id="step-1" class="step-active">
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step1'];?>

				</div>
				<div id="step-2">
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step2'];?>

				</div>
				<div id="step-3">
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step3'];?>

				</div>
				<div class="clear"></div>
			</div>
			<br />
			<?php if ($_smarty_tpl->tpl_vars['filter_error']->value) {?>
			<div class="validation-failure">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />
				<?php echo $_smarty_tpl->tpl_vars['filter_error']->value;?>

			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
			<div class="validation-failure">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['form_error'];?>

			</div>
			<?php }?>

			<form id="publish_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
post/">
				<fieldset>
					<legend><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['job_details'];?>
</legend>
					<table border="0" cellspacing="2" cellpadding="2">
						<tr>
							<td colspan="2">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['name'] = 'tmp2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp2']['total']);
?>
								<input class="no-border" type="radio" name="type_id" id="type_id_<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp2']['index']]['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp2']['index']]['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['job']->value['type_id']&&!$_POST['type_id']) {?><?php if ($_smarty_tpl->getVariable('smarty')->value['section']['tmp2']['first']) {?>checked="checked"<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp2']['index']]['id']==$_smarty_tpl->tpl_vars['job']->value['type_id']) {?>checked="checked"<?php }?><?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp2']['index']]['id']==$_POST['type_id']) {?>checked="checked"<?php }?><?php }?> />
								<label for="type_id_<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp2']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp2']['index']]['var_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp2']['index']]['name'];?>
" /></label>
								<?php endfor; endif; ?>&nbsp;&nbsp;
								<select name="category_id" id="category_id" tabindex="1">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['name'] = 'tmp1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp1']['total']);
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp1']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['default_categ_id']->value!=''&&$_smarty_tpl->tpl_vars['default_categ_id']->value==$_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp1']['index']]['id']) {?>selected="selected"<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp1']['index']]['id']==$_smarty_tpl->tpl_vars['job']->value['category_id']) {?>selected="selected"<?php }?><?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp1']['index']]['id']==$_POST['category_id']) {?>selected="selected"<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp1']['index']]['name'];?>
</option>
									<?php endfor; endif; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td class="publish-label" valign="top"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['title_label'];?>
:</td>
							<td>
								<input <?php if ($_smarty_tpl->tpl_vars['errors']->value['title']) {?>class="error"<?php }?> type="text" name="title" id="title" tabindex="2" size="50" value="<?php if ($_smarty_tpl->tpl_vars['job']->value['title']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['job']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
								<?php if ($_smarty_tpl->tpl_vars['errors']->value['title']) {?><span class="validation-error"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /></span><?php }?>
								<div class="suggestion"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['title_info'];?>
</div>
							</td>
						</tr>
						<tr>
							<td class="publish-label" valign="top"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['summary_label'];?>
:</td>
							<td>
								<input <?php if ($_smarty_tpl->tpl_vars['errors']->value['title']) {?>class="error"<?php }?> type="text" name="summary" id="summary" tabindex="2" size="50" value="<?php if ($_smarty_tpl->tpl_vars['job']->value['title']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['job']->value['summary'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_POST['summary'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
								<div class="suggestion"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['summary_info'];?>
</div>
							</td>
						</tr>
						<tr>
							<td valign="top"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['location_label'];?>
:</td>
							<td>
								<select name="city_id" id="city_id" tabindex="3" <?php if ($_smarty_tpl->tpl_vars['job']->value['location_outside_ro']!=''||$_POST['location_outside_ro_where']!='') {?>disabled="disabled"<?php }?>>
									<option value="0"><?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['location_anywhere'];?>
</option>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["c"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['name'] = "c";
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cities']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["c"]['total']);
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['cities']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id'];?>
" <?php if ($_POST['city_id']==$_smarty_tpl->tpl_vars['cities']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id']||$_smarty_tpl->tpl_vars['job']->value['city_id']==$_smarty_tpl->tpl_vars['cities']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id']) {?>selected="selected"<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['user_city']->value['id']==$_smarty_tpl->tpl_vars['cities']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id']&&!$_POST['city_id']&&!$_smarty_tpl->tpl_vars['job']->value['city_id']) {?>selected="selected"<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['cities']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name'];?>
</option>
									<?php endfor; endif; ?>
								</select>
								<a id="other_location_label" href="#" onclick="Jobber.HandleLocationOutsideRo(); return false;"><?php if ($_smarty_tpl->tpl_vars['job']->value['location_outside_ro']!=''||$_POST['location_outside_ro_where']!='') {?><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['location_pick_from_list'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['other'];?>
<?php }?></a>
								<div id="location_outside_ro" <?php if ($_smarty_tpl->tpl_vars['job']->value['location_outside_ro']!=''||$_POST['location_outside_ro_where']!='') {?>style="display: block;"<?php } else { ?>style="display: none;"<?php }?>>
									<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['where'];?>
 <input type="text" name="location_outside_ro_where" id="location_outside_ro_where" size="50" maxlength="140" <?php if ($_smarty_tpl->tpl_vars['job']->value['location_outside_ro']!='') {?>value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['job']->value['location'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_POST['location_outside_ro_where']!='') {?>value="<?php echo htmlspecialchars($_POST['location_outside_ro_where'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> />
									<div class="suggestion"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['where_info'];?>
</div>
								</div>
							</td>
						</tr>
						<tr>
							<td valign="top"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['description_label'];?>
:</td>
							<td><textarea class="mceEditor <?php if ($_smarty_tpl->tpl_vars['errors']->value['description']) {?>error<?php }?>" tabindex="4" name="description" id="description" cols="80" rows="15"><?php if ($_smarty_tpl->tpl_vars['job']->value['description']) {?><?php echo $_smarty_tpl->tpl_vars['job']->value['description'];?>
<?php } else { ?><?php echo $_POST['description'];?>
<?php }?></textarea>
								<?php if ($_smarty_tpl->tpl_vars['errors']->value['description']) {?><span class="validation-error"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /></span><?php }?>
							</td>
						</tr>
					</table>
				</fieldset>
				<fieldset>
					<legend><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['company'];?>
</legend>
					<table border="0" cellspacing="2" cellpadding="2">
						<tr>
							<td class="publish-label"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['name_label'];?>
:</td>
							<td><input tabindex="6" type="text" name="company" id="company" size="40" value="<?php if ($_smarty_tpl->tpl_vars['job']->value['company']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['job']->value['company'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_POST['company'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
							</td>
						</tr> 
						<tr>
							<td valign="top"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['website_label'];?>
:</td>
							<td>http://<input tabindex="7" type="text" name="url" id="url" size="35" value="<?php if ($_smarty_tpl->tpl_vars['job']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['job']->value['url'];?>
<?php } else { ?><?php echo $_POST['url'];?>
<?php }?>" />
								<div class="suggestion"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['website_info'];?>
</div>
							</td>
						</tr>
						<tr>
							<td class="publish-label"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['email_label'];?>
<br /><strong>(<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['email_info1'];?>
)</strong>:</td>
							<td>
								<input <?php if ($_smarty_tpl->tpl_vars['errors']->value['poster_email']) {?>class="error"<?php }?> tabindex="8" type="text" name="poster_email" id="poster_email" size="40" value="<?php if ($_smarty_tpl->tpl_vars['job']->value['poster_email']) {?><?php echo $_smarty_tpl->tpl_vars['job']->value['poster_email'];?>
<?php } else { ?><?php echo $_POST['poster_email'];?>
<?php }?>" />
								<span class="validation-error"><?php if ($_smarty_tpl->tpl_vars['errors']->value['poster_email']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /><?php }?></span>
								<div class="suggestion">
									<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['email_info2'];?>

								</div>
							</td>
						</tr>
					</table>
				</fieldset>
				<?php if ($_smarty_tpl->tpl_vars['ENABLE_RECAPTCHA']->value) {?>
				<fieldset>
					<legend><?php echo $_smarty_tpl->tpl_vars['translations']->value['captcha']['captcha_title'];?>
</legend>
					
					<script type="text/javascript">
					  var RecaptchaOptions = {
					    theme : 'white',
					    tabindex : 9
					  };
					</script>
					
					<?php echo $_smarty_tpl->tpl_vars['the_captcha']->value;?>
 <span class="validation-error"><?php if ($_smarty_tpl->tpl_vars['errors']->value['captcha']) {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" /> <?php echo $_smarty_tpl->tpl_vars['errors']->value['captcha'];?>
<?php }?></span>
				</fieldset>
				<?php }?>
				<fieldset><input type="checkbox" name="apply_online" id="apply_online" class="no-border" <?php if ($_smarty_tpl->tpl_vars['job']->value['apply_online']==1||$_smarty_tpl->tpl_vars['is_apply']->value==1) {?>checked="checked"<?php }?><?php if (!isset($_smarty_tpl->tpl_vars['job']->value['apply_online'])&&!isset($_smarty_tpl->tpl_vars['is_apply']->value)) {?>checked="checked"<?php }?> /><label for="apply_online"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['apply_online'];?>
</label></fieldset>
				<fieldset><input type="submit" name="submit" id="submit" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step1_submit'];?>
" /></fieldset>
				<fieldset class="hidden">					
					<input type="hidden" name="action" <?php if ($_smarty_tpl->tpl_vars['job']->value['id']||$_SESSION['later_edit']) {?>value="edit"<?php } else { ?>value="publish"<?php }?> />
					<?php if ($_SESSION['later_edit']) {?><input type="hidden" name="auth" value="<?php echo $_SESSION['later_edit'];?>
" /><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['job']->value['id']) {?><input type="hidden" name="job_id" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" /><?php }?>
				</fieldset>
			</form>
		</div><!-- /content -->
		
		
		<script type="text/javascript">
			$(document).ready(function()
			{
				$('#title').focus();
				
				$("#publish_form").validate({
					rules: {
                        type_id: { required: true },
						title: { required: true },
						description: { required: true },
						poster_email: { required: true, email: true }
					},
					messages: {
                        type_id: ' <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />',					   
						title: ' <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />',
						description: ' <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />',
						poster_email: ' <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-delete.png" alt="" />'
					}
				});
			});
		</script>
		

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
