<?php /* Smarty version Smarty-3.1.15, created on 2019-01-17 16:42:44
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1329226075c40632c1b2789-77383307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05e86234402d6bf227c1095d750d632003cdb0bc' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/sitemap.tpl',
      1 => 1547656882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1329226075c40632c1b2789-77383307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'translations' => 0,
    'categories' => 0,
    'BASE_URL' => 0,
    'URL_JOBS' => 0,
    'URL_COMPANIES' => 0,
    'URL_CITIES' => 0,
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c40632c292376_74420946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c40632c292376_74420946')) {function content_5c40632c292376_74420946($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div id="content">
			<div id="job-listings"></div><!-- #job-listings -->
			<h3 class="page-heading"><?php echo $_smarty_tpl->tpl_vars['translations']->value['sitemap']['title'];?>
</h3>
			<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['sitemap']['jobs'];?>
:</h4>
			<ul>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['name'] = 'tmp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
        		<li id="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['var_name'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['var_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['var_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['name'];?>
</a></li>
				<?php endfor; endif; ?>
			</ul>
			<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['sitemap']['use'];?>
:</h4>
			<ul>
				<?php if (@constant('ENABLE_NEW_JOBS')) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
post/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job'];?>
</a></li>
				<?php }?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
widgets/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['widgets_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['widgets'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
rss/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['rss'];?>
</a></li>
			</ul>
			<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['sitemap']['more'];?>
:</h4>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_COMPANIES']->value;?>
/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['companies_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['companies'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_CITIES']->value;?>
/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['cities_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['cities'];?>
</a></li>
				<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['article']->value['url'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['page_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
				<?php } ?>
			</ul>
		</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
