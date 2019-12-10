<?php /* Smarty version Smarty-3.1.15, created on 2019-12-09 14:43:09
         compiled from "C:\xampp72\htdocs\jobs\_tpl\hpie\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2321876025dee10257508f0-84258109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38fed6f9d96eef5bcde47aba2c4afb27f8905e22' => 
    array (
      0 => 'C:\\xampp72\\htdocs\\jobs\\_tpl\\hpie\\footer.tpl',
      1 => 1575873312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2321876025dee10257508f0-84258109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation' => 0,
    'item' => 0,
    'subitem' => 0,
    'BASE_URL' => 0,
    'translations' => 0,
    'editor' => 0,
    'translationsJson' => 0,
    'current_category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5dee1025775418_82235788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dee1025775418_82235788')) {function content_5dee1025775418_82235788($_smarty_tpl) {?>	</div><!-- #container -->
	<div class="footer">
		<div id="footer-contents">
			<?php if ($_smarty_tpl->tpl_vars['navigation']->value['footer']) {?>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value['footer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<div class="footer-col">
						<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<br />
						<?php if ($_smarty_tpl->tpl_vars['item']->value['children']) {?>
							<?php  $_smarty_tpl->tpl_vars['subitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subitem']->key => $_smarty_tpl->tpl_vars['subitem']->value) {
$_smarty_tpl->tpl_vars['subitem']->_loop = true;
?>
								<a href="<?php if ($_smarty_tpl->tpl_vars['subitem']->value['outside']!=1) {?><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['subitem']->value['url'];?>
<?php if (($_smarty_tpl->tpl_vars['subitem']->value['outside']!=1)&&($_smarty_tpl->tpl_vars['subitem']->value['url']!='')) {?>/<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['subitem']->value['title'];?>
" ><?php echo $_smarty_tpl->tpl_vars['subitem']->value['name'];?>
</a><br />
							<?php } ?>
						<?php }?>
					</div>
				<?php } ?>
			<?php }?>
			<div id="footer-copyright">
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['powered_by'];?>

				<a href="http://www.softctrl.in/" title="product by">SoftCtrl</a>
			</div>
			<div class="clear"></div>
		</div><!-- #footer-contents -->
	</div><!-- .footer -->
	
	<!--[if !IE]><script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery.history.js" type="text/javascript"></script><![endif]-->
 	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery.form.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery.metadata.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/functions.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	<?php if ($_smarty_tpl->tpl_vars['editor']->value) {?>
		Jobber.InitEditor();
	<?php }?>
	

 		$(document).ready(function()
		{
			Jobber.I18n = <?php echo $_smarty_tpl->tpl_vars['translationsJson']->value;?>
;
			
		   	var keywords = $('#keywords');
		
			// setup search box
			keywords.bind('click', function() {
				if (this.value == '<?php echo $_smarty_tpl->tpl_vars['translations']->value['search']['default'];?>
')
				{
					keywords.clearFields();
				}
			});

			keywords.bind('blur', function() {  
				if (this.value == '<?php echo $_smarty_tpl->tpl_vars['translations']->value['search']['default'];?>
' || this.value == '')
				{
					this.value = '<?php echo $_smarty_tpl->tpl_vars['translations']->value['search']['default'];?>
';
				}
			});

			// setup live search
			keywords.keyup(function(key) {
				var searchKeywords = jQuery.trim(this.value);
				var len = searchKeywords.length;
	
			    if (key.keyCode != 9 && len >= 3)
				{
					$("#indicator").show();	
					clearTimeout(window.search_timer);	
					window.search_timer = setTimeout(function(){Jobber.PerformSearch('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
search/<?php echo $_smarty_tpl->tpl_vars['current_category']->value;?>
|', searchKeywords)}, 800);
			    }
			});
		});
		
		Jobber.jobber_url = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
";
	
	</script>
	
	<?php if (@constant('GOOGLE_ANALYTICS_CODE')) {?>
	<script type="text/javascript">
	
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '<?php echo @constant('GOOGLE_ANALYTICS_CODE');?>
']);
		_gaq.push(['_trackPageview']);
		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	
	</script>
	<?php }?>
</body>
</html>
<?php }} ?>
