<?php /* Smarty version Smarty-3.1.15, created on 2019-01-16 22:24:08
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9623973015c3e1051057de5-75357374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15c58f926ff54cbdc16d6716c2077d0b1896cfeb' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/home.tpl',
      1 => 1547656881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9623973015c3e1051057de5-75357374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c3e1051139639_42698918',
  'variables' => 
  array (
    'page' => 0,
    'spotlight_jobs' => 0,
    'translations' => 0,
    'BASE_URL' => 0,
    'THEME' => 0,
    'job' => 0,
    'URL_JOB' => 0,
    'latest_jobs' => 0,
    'URL_JOBS' => 0,
    'most_applied_to_jobs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3e1051139639_42698918')) {function content_5c3e1051139639_42698918($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/s7hpiein/public_html/jobs/_lib/smarty/libs/plugins/function.cycle.php';
?><?php if ($_smarty_tpl->tpl_vars['page']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

	<br />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['spotlight_jobs']->value) {?>
	<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['spotlight_jobs'];?>
</h2>
	
	<?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['spotlight_jobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
		<div class="row-spot">
			<span class="row-info">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-<?php echo $_smarty_tpl->tpl_vars['job']->value['type_var_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['job']->value['type_name'];?>
" />
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOB']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['url_title'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
</a> <span class="la"><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['at'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['job']->value['company'];?>
<?php if ($_smarty_tpl->tpl_vars['job']->value['is_location_anywhere']) {?>, <?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['location_anywhere'];?>
<?php } else { ?> <span class="la"><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['in'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['job']->value['location'];?>
<?php }?>
			</span>
			<span class="spotlight-image"></span>
		</div>
	<?php } ?>
	<br />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['latest_jobs']->value) {?>
	<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['recent_jobs'];?>
</h2>
	
	<?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latest_jobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
		<div class="<?php echo smarty_function_cycle(array('values'=>'row,row-alt'),$_smarty_tpl);?>
">
			<span class="row-info">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-<?php echo $_smarty_tpl->tpl_vars['job']->value['type_var_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['job']->value['type_name'];?>
" />
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOB']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['url_title'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
</a> <span class="la"><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['at'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['job']->value['company'];?>
<?php if ($_smarty_tpl->tpl_vars['job']->value['is_location_anywhere']) {?>, <?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['location_anywhere'];?>
<?php } else { ?> <span class="la"><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['in'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['job']->value['location'];?>
<?php }?>
			</span>
			<span class="time-posted"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/clock.gif" alt="" /> <?php echo $_smarty_tpl->tpl_vars['job']->value['created_on'];?>
</span>
		</div>
	<?php } ?>
	
	<div id="view_all">
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['view_all_jobs'];?>
</a>
	</div>
	<br />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['most_applied_to_jobs']->value) {?>
	<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['popular_jobs'];?>
</h2>
	
	<?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['most_applied_to_jobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
		<div class="<?php echo smarty_function_cycle(array('values'=>'row,row-alt'),$_smarty_tpl);?>
">
			<span class="row-info">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-<?php echo $_smarty_tpl->tpl_vars['job']->value['type_var_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['job']->value['type_name'];?>
" />
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOB']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['url_title'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
</a> <span class="la"><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['at'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['job']->value['company'];?>
<?php if ($_smarty_tpl->tpl_vars['job']->value['is_location_anywhere']) {?>, <?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['location_anywhere'];?>
<?php } else { ?> <span class="la"><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['in'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['job']->value['location'];?>
<?php }?>
			</span>
			<span class="time-posted"><strong><?php echo $_smarty_tpl->tpl_vars['job']->value['apps'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['applicants'];?>
</span>			
		</div>
	<?php } ?>
	<br />
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['latest_jobs']->value&&!$_smarty_tpl->tpl_vars['most_applied_to_jobs']->value) {?>
	<p>
		<?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['no_jobs'];?>
.<br />
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
post/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job'];?>
</a>?
	</p>
<?php }?>
<?php }} ?>
