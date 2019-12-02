<?php /* Smarty version Smarty-3.1.15, created on 2019-01-16 22:24:27
         compiled from "/home/s7hpiein/public_html/jobs/_tpl/hpie/widgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10938969445c3f25f5bd5854-17622202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf58029d3cd4ddcb04209bf8dff56cb20f8a024b' => 
    array (
      0 => '/home/s7hpiein/public_html/jobs/_tpl/hpie/widgets.tpl',
      1 => 1547656882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10938969445c3f25f5bd5854-17622202',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5c3f25f6092299_42375110',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3f25f6092299_42375110')) {function content_5c3f25f6092299_42375110($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div id="content">
			<div id="job-listings"></div>
			<h3 class="page-heading">Site Widgets</h3>
			<h4>Would you like to display our latest jobs on your site?</h4>
			<p>
			There are two types of widgets you can apply:
			<ol>
				<li><strong>Get Jobs Widget</strong>: This widget is used to retrive jobs based on their category, posting duration, and job-type. You can also configure on how many jobs you want to display and order them on the basis of their publication date or even show randomly.
				<br /><br /><strong>List of parameters to be used in this implementation:</strong>
				<ul>
					<li><strong>action</strong>: "getJobs" - all jobs</li>
					<li><strong>type</strong>: "0" - all / "fulltime" / "parttime" / "freelance"</li>
					<li><strong>category</strong>: "0" - all / "programmers" / "designers" / "administrators" / "managers" / "testers" / "editors"</li>
					<li><strong>count</strong>: number of job ads to display</li>
					<li><strong>random</strong>: "1" - display randomly / "0" - display ordered by publish date (newest on top)</li>
					<li><strong>days_behind</strong>: get only jobs posted in the past X days (type "0" if you don't want to limit this)</li>
					<li><strong>response</strong>: "js" - returns jobs as JavaScript code / "json" - returns only a JSON string / "xml" - returns an XML</li>
				</ul>
				<br /><strong>Some sample codes using this</strong>: 
				<ul>
					<li>The following code displays last 5 jobs posted in the past 10 days in administrator category as fulltime and ordered by publishing date(newest on top):
					<pre>&lt;script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
api/api.php?action=getJobs<br />&amp;type=fulltime&amp;category=administrators&amp;count=5&amp;random=0&amp;days_behind=10&amp;response=js" <br />type="text/javascript"&gt;&lt;/script&gt;<br /><br />&lt;script type="text/javascript"&gt;showJobs('jobber-container', 'jobber-list');&lt;/script&gt;</pre>
					</li>
					<li>The following code displays latest 5 jobs from all categories of all types posted in last 7 days in random order:
					<pre>&lt;script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
api/api.php?action=getJobs<br />&amp;type=0&amp;category=0&amp;count=5&amp;random=1&amp;days_behind=7&amp;response=js" type="text/javascript"&gt;&lt;/script&gt;<br /><br />&lt;script type="text/javascript"&gt;showJobs('jobber-container', 'jobber-list');&lt;/script&gt;</pre>
					</li>
				</ul>
				</li>
				<br />
				<li><strong>Get Jobs by Company Widget</strong>: This widget is used to retrive jobs based on their company and their count. 
				<br /><br /><strong>List of parameters to be used in this implementation:</strong>
				<ul>
					<li><strong>action</strong>: "getJobsByCompany" - a single company's jobs</li>
					<li><strong>count</strong>: number of job ads to display</li>
					<li><strong>response</strong>: "js" - returns jobs as JavaScript code / "json" - returns only a JSON string / "xml" - returns an XML</li>
				</ul>	
				<br /><strong>A code for this get latest 10 jobs published by Google:</strong> 
				<pre>&lt;script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
api/api.php?action=getJobsByCompany<br />&amp;company=google&amp;count=10&amp;response=js" type="text/javascript"&gt;&lt;/script&gt;<br /><br />&lt;script type="text/javascript"&gt;showJobs('jobber-container', 'jobber-list');&lt;/script&gt;</pre>
				</li>
			</ol>
			<br />
			<h3><strong>CSS Styling</strong></h3>
			You can use some custom css to style the display the job list. Here is a sample code:
			<pre>ul.jobber-list &#123;<br />  list-style-type: none;<br />  margin: 0;<br />  padding: 0;<br />&#125;<br />ul.jobber-list li &#123;<br />  margin-bottom: 5px;<br />&#125;</pre>
			<br /><strong>Note:</strong> 
			<ul>
			<li>You can notice that there are two script codes for each implementation, the script which points to the api.php class can be included anywhere in your site but the second code should appear at the place where you want to display the jobs.</li>
			<li>There is a live demo script using the api code. <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
api/test.php">Test it now</a>. You can view its source in browser to check its implmentation. You can edit it live to test it before implementing the code live elsewhere.</li>
		</div><!-- /content -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
