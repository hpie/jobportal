<?php /* Smarty version Smarty-3.1.15, created on 2019-01-25 16:54:43
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/publish-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11893224465c4af1fb011959-38518105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f4641c49c994133a857269e9765e1fe3419f78d' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/publish-confirmation.tpl',
      1 => 1547656882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11893224465c4af1fb011959-38518105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'translations' => 0,
    'laterEdit' => 0,
    'job_url' => 0,
    'BASE_URL' => 0,
    'postRequiresModeration' => 0,
    'CURRENT_ID' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c4af1fb0f11f2_80848715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4af1fb0f11f2_80848715')) {function content_5c4af1fb0f11f2_80848715($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div id="content">
			<div id="job-listings"></div><!-- #job-listings -->
			<div class="steps">
				<div id="step-1">
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step1'];?>

				</div>
				<div id="step-2">
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step2'];?>

				</div>
				<div id="step-3" class="step-active">
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['step3'];?>

				</div>
				<div class="clear"></div>
			</div>
			<br />
			<?php if ($_smarty_tpl->tpl_vars['laterEdit']->value) {?>
				<div class="posted-ok">
					<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['edit_success'];?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['job_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['job_url']->value;?>
</a>
				</div>
				<br />
				<p>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">&laquo; <?php echo $_smarty_tpl->tpl_vars['translations']->value['notfound']['back'];?>
</a>
				</p>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['postRequiresModeration']->value) {?>
					<div class="posted-pending">
						<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['success_message'];?>

					</div>
					<br />
					<p>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">&laquo; <?php echo $_smarty_tpl->tpl_vars['translations']->value['notfound']['back'];?>
</a>
					</p>
				<?php } else { ?>
					<div class="posted-ok">
						<strong><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['congratulations'];?>
</strong><br /><a href="<?php echo $_smarty_tpl->tpl_vars['job_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['view'];?>
</a>.
					</div>
					<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['options_title'];?>
</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['options_info'];?>
:
					</p>
					<ul>	
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
post/<?php echo $_smarty_tpl->tpl_vars['CURRENT_ID']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['edit'];?>
">&raquo; <?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['edit'];?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
deactivate/<?php echo $_smarty_tpl->tpl_vars['CURRENT_ID']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['deactivate'];?>
">&raquo; <?php echo $_smarty_tpl->tpl_vars['translations']->value['publish']['deactivate'];?>
</a></li>
					</ul>
				<?php }?>
			<?php }?>
		</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
