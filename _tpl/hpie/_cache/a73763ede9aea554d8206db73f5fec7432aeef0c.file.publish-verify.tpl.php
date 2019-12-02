<?php /* Smarty version Smarty-3.1.15, created on 2019-01-25 16:54:36
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/publish-verify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12971290455c4af1f4a44932-67421333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a73763ede9aea554d8206db73f5fec7432aeef0c' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/publish-verify.tpl',
      1 => 1547656882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12971290455c4af1f4a44932-67421333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'translations' => 0,
    'BASE_URL' => 0,
    'job' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c4af1f4e94405_31503269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4af1f4e94405_31503269')) {function content_5c4af1f4e94405_31503269($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div id="content">
			<div id="job-listings"></div><!-- #job-listings -->
			<div class="steps">
				<div id="step-1">
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step1'];?>

				</div>
				<div id="step-2" class="step-active">
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step2'];?>

				</div>
				<div id="step-3">
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step3'];?>

				</div>
				<div class="clear"></div>
			</div>
			
			<?php echo $_smarty_tpl->getSubTemplate ("job-details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
			<form name="publish_form" id="publish_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
publish/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
/">
				<fieldset>
					<div class="right">
						<div class="suggestion"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step2_info'];?>

						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
deactivate/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step2_cancel'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step2_cancel'];?>
</a></div>
					</div>
					<?php if ($_SESSION['later_edit']) {?>
					<input type="submit" name="submit" id="submit" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['save'];?>
" />
					<?php } else { ?>
					<input type="submit" name="submit" id="submit" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['publish'];?>
" />
					<?php }?>
					&nbsp;or&nbsp;
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
post/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['edit'];?>
</a>
				</fieldset>
			</form>
		</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
