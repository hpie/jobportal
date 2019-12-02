<?php /* Smarty version Smarty-3.1.15, created on 2019-03-10 07:04:12
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/company.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16432369555c846994631953-29214570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '583897247dce0473ced80e5f9e33a2f7d17c8113' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/company.tpl',
      1 => 1547656880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16432369555c846994631953-29214570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_company' => 0,
    'translations' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c846994a54191_01583045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c846994a54191_01583045')) {function content_5c846994a54191_01583045($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<div id="content">
			<div id="job-listings">
				<h2>
					<?php if ($_smarty_tpl->tpl_vars['current_company']->value) {?><?php echo $_smarty_tpl->tpl_vars['translations']->value['companies']['jobs_at'];?>
 <?php echo $_smarty_tpl->tpl_vars['current_company']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['translations']->value['companies']['jobs_at_undisclosed'];?>
<?php }?>
				</h2>
				<?php echo $_smarty_tpl->getSubTemplate ("posts-loop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div><!-- #job-listings -->
		</div><!-- #content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
