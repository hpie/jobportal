<?php /* Smarty version Smarty-3.1.15, created on 2019-01-28 17:56:04
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15836389945c3e07301e0a57-61649483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12d350836170c04834b7e5045bed70328900c5e1' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/header.tpl',
      1 => 1548678360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15836389945c3e07301e0a57-61649483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c3e07302e64d4_50911543',
  'variables' => 
  array (
    'seo_title' => 0,
    'html_title' => 0,
    'seo_desc' => 0,
    'meta_description' => 0,
    'seo_keys' => 0,
    'meta_keywords' => 0,
    'BASE_URL' => 0,
    'CURRENT_PAGE' => 0,
    'current_category' => 0,
    'THEME' => 0,
    'editor' => 0,
    'translations' => 0,
    'navigation' => 0,
    'i' => 0,
    'keywords' => 0,
    'categories' => 0,
    'URL_JOBS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3e07302e64d4_50911543')) {function content_5c3e07302e64d4_50911543($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title><?php if ($_smarty_tpl->tpl_vars['seo_title']->value) {?><?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['html_title']->value;?>
<?php }?></title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['seo_desc']->value) {?><?php echo $_smarty_tpl->tpl_vars['seo_desc']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
<?php }?>" />
    <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['seo_keys']->value) {?><?php echo $_smarty_tpl->tpl_vars['seo_keys']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
<?php }?>" />
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
favicon.ico" type="image/x-icon" />
	<?php if ($_smarty_tpl->tpl_vars['CURRENT_PAGE']->value==''||$_smarty_tpl->tpl_vars['CURRENT_PAGE']->value!='jobs') {?>
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
rss/all/" />
	<?php } else { ?>
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
rss/<?php echo $_smarty_tpl->tpl_vars['current_category']->value;?>
/" />
	<?php }?>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/css/screen.css" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,700,900" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery.js" type="text/javascript"></script>
	<?php if ($_smarty_tpl->tpl_vars['editor']->value) {?>
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tiny_mce/tiny_mce.js" type="text/javascript"></script>
	<?php }?>
</head>

<body>
	<div id="container">
		<?php if ($_SESSION['status']!='') {?>
			<div id="status">
				<?php echo $_SESSION['status'];?>

			</div><!-- #status -->
		<?php }?>
		<div id="header">
			<h1 id="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['header']['title'];?>
" style="background:url(<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img.php?q=site_logo) no-repeat !important;"><?php echo $_smarty_tpl->tpl_vars['translations']->value['header']['name'];?>
</a></h1>
			<ul id="top">
				<?php if ($_smarty_tpl->tpl_vars['navigation']->value['primary']!='') {?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['name'] = 'tmp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tmp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['navigation']->value['primary']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
						<?php if (@constant('ENABLE_NEW_JOBS')||(!@constant('ENABLE_NEW_JOBS')&&$_smarty_tpl->tpl_vars['navigation']->value['primary'][$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['url']!='post')) {?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?><li>&bull;</li><?php }?>
							<li><a href="<?php if ($_smarty_tpl->tpl_vars['navigation']->value['primary'][$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['outside']!=1) {?><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['navigation']->value['primary'][$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['url'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['navigation']->value['primary'][$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['title'];?>
" ><?php echo $_smarty_tpl->tpl_vars['navigation']->value['primary'][$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['name'];?>
</a></li>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
						<?php }?>
					<?php endfor; endif; ?>
				<?php }?>
			</ul>
			<div id="the_feed">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
rss/all/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['header']['rss_title'];?>
"><i class="fa fa-rss-square" aria-hidden="true"></i></a>
			</div>
		</div><!-- #header -->
		
		<div id="box">
			<div id="search">
				<form id="search_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
search/">
					<fieldset>
						<div>
							<input type="text" name="keywords" id="keywords" maxlength="30" value="<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['translations']->value['search']['default'];?>
<?php }?>" />
							<span id="indicator" style="display: none;"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/ajax-loader.gif" alt="" /></span>
						</div>
						<div><label class="suggestionTop"><?php echo $_smarty_tpl->tpl_vars['translations']->value['search']['example'];?>
</label></div>
					</fieldset>
				</form>
			</div><!-- #search -->
			<?php if (@constant('ENABLE_NEW_JOBS')) {?>
			<div class="addJob">
				<a class="postJobBtn" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
post/"><span><?php echo $_smarty_tpl->tpl_vars['translations']->value['search']['submit'];?>
</span></a>
			</div><!-- .addJob -->
			<?php }?>
		</div><!-- #box -->
		
    <div id="categs-nav">
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
" <?php if ($_smarty_tpl->tpl_vars['current_category']->value==$_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['var_name']) {?>class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['var_name'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['name'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tmp']['index']]['name'];?>
</span><span class="cnr">&nbsp;</span></a></li>
			<?php endfor; endif; ?>
    	</ul>
	</div><!-- #categs-nav -->
	<div class="clear"></div>
		
	<div id="sidebar">
		<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div><!-- #sidebar -->
<?php }} ?>
