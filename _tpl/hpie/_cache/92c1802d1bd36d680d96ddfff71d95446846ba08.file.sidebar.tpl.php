<?php /* Smarty version Smarty-3.1.15, created on 2019-12-09 14:43:09
         compiled from "C:\xampp72\htdocs\jobs\_tpl\hpie\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13028409365dee1025256c04-02352873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92c1802d1bd36d680d96ddfff71d95446846ba08' => 
    array (
      0 => 'C:\\xampp72\\htdocs\\jobs\\_tpl\\hpie\\sidebar.tpl',
      1 => 1575873312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13028409365dee1025256c04-02352873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_PAGE' => 0,
    'BASE_URL' => 0,
    'translations' => 0,
    'navigation' => 0,
    'jobs_count_all' => 0,
    'jobs_count_all_categs' => 0,
    'job' => 0,
    'URL_JOBS' => 0,
    'jobs_count_per_city' => 0,
    'URL_JOBS_IN_CITY' => 0,
    'hide_other_cities_in_sidebar' => 0,
    'jobs_count_in_other_cities' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5dee10252c4d00_32597600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dee10252c4d00_32597600')) {function content_5dee10252c4d00_32597600($_smarty_tpl) {?>			<?php if ($_smarty_tpl->tpl_vars['CURRENT_PAGE']->value!='') {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['header']['title'];?>
">&laquo; <?php echo $_smarty_tpl->tpl_vars['translations']->value['header']['home'];?>
</a><br />
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['navigation']->value['secondary']!='') {?>
			<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['sidebar']['menu_title'];?>
</h4>
			<ul>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['name'] = 'tmp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['navigation']->value['secondary']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['total']);
?>
					<?php if (@constant('ENABLE_NEW_JOBS')||(!@constant('ENABLE_NEW_JOBS')&&$_smarty_tpl->tpl_vars['navigation']->value['secondary'][$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['url']!='post')) {?>
						<li><a href="<?php if ($_smarty_tpl->tpl_vars['navigation']->value['secondary'][$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['outside']!=1) {?><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['navigation']->value['secondary'][$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['url'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['navigation']->value['secondary'][$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['title'];?>
" ><?php echo $_smarty_tpl->tpl_vars['navigation']->value['secondary'][$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['name'];?>
</a></li>
					<?php }?>
				<?php endfor; endif; ?>
			<?php }?>
			</ul>
			
			<?php if ($_SESSION['last_viewed_jobs']) {?>
			<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['header']['seen_recently'];?>
</h4>
			<ul>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['last'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['last']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['last']['name'] = 'last';
$_smarty_tpl->tpl_vars['smarty']->value['section']['last']['loop'] = is_array($_loop=$_SESSION['last_viewed_jobs']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['last']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['last']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['last']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['last']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['last']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['last']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['last']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['last']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['last']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['last']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['last']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['last']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['last']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['last']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['last']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['last']['total']);
?>
				<li><a href="<?php echo $_SESSION['last_viewed_jobs'][$_smarty_tpl->getVariable('smarty')->value['section']['last']['index']]['url'];?>
">&raquo; <?php echo $_SESSION['last_viewed_jobs'][$_smarty_tpl->getVariable('smarty')->value['section']['last']['index']]['title'];?>
</a></li>
				<?php endfor; endif; ?>
			</ul>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['CURRENT_PAGE']->value=='') {?>
			<br />
			<div id="stats">
				<strong><?php echo $_smarty_tpl->tpl_vars['jobs_count_all']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['sidebar_totaljobs'];?>
</strong>
				<br />
				<?php if (@constant('SIDEBAR_SHOW_WHAT')=='categories') {?>
					<?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jobs_count_all_categs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
					<strong><?php echo $_smarty_tpl->tpl_vars['job']->value['categ_count'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['translations']->value['homepage']['sidebar_for'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['categ_varname'];?>
/"><?php echo $_smarty_tpl->tpl_vars['job']->value['categ_name'];?>
</a><br />
					<?php } ?>
				<?php } else { ?>
					<?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jobs_count_per_city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
					<strong><?php echo $_smarty_tpl->tpl_vars['job']->value['jobs_in_city'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['translations']->value['jobscity']['sidebar_jobs_in'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOBS_IN_CITY']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['city_ascii_name'];?>
/"><?php echo $_smarty_tpl->tpl_vars['job']->value['city_name'];?>
</a><br />
					<?php } ?>
					<?php if (!$_smarty_tpl->tpl_vars['hide_other_cities_in_sidebar']->value) {?>
					<strong><?php echo $_smarty_tpl->tpl_vars['jobs_count_in_other_cities']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['translations']->value['jobscity']['sidebar_jobs_in'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jobs-in-other-cities/"><?php echo $_smarty_tpl->tpl_vars['translations']->value['sidebar']['other_cities'];?>
</a>
					<?php }?>
				<?php }?>
			</div><!-- #stats -->
			<?php }?><?php }} ?>
