<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<?php $this->_compileInclude('menu'); ?>
		</div>
		<div class="span10" id="datacontent">
<?php } ?>
			<ul class="breadcrumb">
				<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a> <span class="divider">/</span></li>
				<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-basic-area">院系管理</a> <span class="divider">/</span></li>
				<li class="active">修改院系</li>
			</ul>
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#">修改院系</a>
				</li>
				<li class="dropdown pull-right">
					<a href="index.php?exam-master-basic-area&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>">院系管理</a>
				</li>
			</ul>
	        <form action="index.php?exam-master-basic-modifyarea" method="post" class="form-horizontal">
				<fieldset>
				<div class="control-group">
					<label for="area" class="control-label">院系名称：</label>
					<div class="controls">
						<input name="args[area]" id="area" type="text" value="<?php echo $this->tpl_var['area']['area']; ?>" needle="needle" msg="您必须输入一个院系名称" />
					</div>
				</div>
				<div class="control-group">
					<label for="areacode" class="control-label">院系区号：</label>
					<div class="controls">
						<input name="args[areacode]" id="areacode" type="text" value="<?php echo $this->tpl_var['area']['areacode']; ?>" needle="needle" msg="您必须输入院系邮编，且不能与原有院系重复" />
					</div>
				</div>
				<div class="control-group">
				  	<div class="controls">
					  	<button class="btn btn-primary" type="submit">提交</button>
						<input type="hidden" name="modifyarea" value="1"/>
						<input type="hidden" name="areaid" value="<?php echo $this->tpl_var['area']['areaid']; ?>"/>
						<input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>
					</div>
				</div>
				</fieldset>
			</form>
<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
</body>
</html>
<?php } ?>