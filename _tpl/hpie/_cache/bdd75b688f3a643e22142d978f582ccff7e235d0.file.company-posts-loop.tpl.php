<?php /* Smarty version Smarty-3.1.15, created on 2019-01-20 20:45:19
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/company-posts-loop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17693312635c449087569191-80019629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdd75b688f3a643e22142d978f582ccff7e235d0' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/company-posts-loop.tpl',
      1 => 1547656880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17693312635c449087569191-80019629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'compjobs' => 0,
    'translations' => 0,
    'BASE_URL' => 0,
    'URL_JOBS_AT_COMPANY' => 0,
    'jobsat' => 0,
    'job' => 0,
    'compjob' => 0,
    'THEME' => 0,
    'URL_JOB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c4490876a7e35_83377253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4490876a7e35_83377253')) {function content_5c4490876a7e35_83377253($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/s7hpiein/public_html/jobs/_lib/smarty/libs/plugins/function.cycle.php';
?><!-- Jobs from the same company -->
<?php if (count($_smarty_tpl->tpl_vars['compjobs']->value)>1) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['recent_jobs'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOBS_AT_COMPANY']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['jobsat']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['job']->value['company'];?>
</a></strong><br />
<?php  $_smarty_tpl->tpl_vars['compjob'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['compjob']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['compjobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['compjob']->key => $_smarty_tpl->tpl_vars['compjob']->value) {
$_smarty_tpl->tpl_vars['compjob']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['compjob']->value['id']!=$_smarty_tpl->tpl_vars['job']->value['id']) {?>
	<div class="<?php echo smarty_function_cycle(array('values'=>'row,row-alt'),$_smarty_tpl);?>
">
		<span class="row-info">
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/icon-<?php echo $_smarty_tpl->tpl_vars['compjob']->value['type_var_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['compjob']->value['type_name'];?>
" />
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOB']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['compjob']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['compjob']->value['url_title'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['compjob']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['compjob']->value['title'];?>
</a> <span class="la"><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['at'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['compjob']->value['company'];?>
<?php if ($_smarty_tpl->tpl_vars['compjob']->value['is_location_anywhere']) {?>, <?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['location_anywhere'];?>
<?php } else { ?> <span class="la"><?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['in'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['compjob']->value['location'];?>
<?php }?>
		</span>
		<span class="time-posted"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/clock.gif" alt="" /> <?php echo $_smarty_tpl->tpl_vars['compjob']->value['created_on'];?>
</span>			
	</div>
<?php }?>
<?php } ?>
<br />
<?php }?>
<!-- Jobs from the same company --><?php }} ?>
