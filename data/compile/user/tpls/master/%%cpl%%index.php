<?php $this->_compileInclude('header'); ?><body><?php $this->_compileInclude('nav'); ?><div class="container-fluid">	<div class="row-fluid">		<div class="span2">			<?php $this->_compileInclude('menu'); ?>		</div>		<div class="span10">			<ul class="breadcrumb">				<li><a href="index.php?core-master">全局</a> <span class="divider">/</span></li>				<li class="active">首页</li>			</ul>			<div class="row-fluid">				<div class="span12">					<div class="well">						<h3>							Hello World!						</h3>						<p>							Exam Management System For PHP 版本号：<?php echo PE_VERSION; ?>						</p>						<p>							Republic by YYM.						</p>					</div>				</div>			</div>		</div>	</div></div></body></html>