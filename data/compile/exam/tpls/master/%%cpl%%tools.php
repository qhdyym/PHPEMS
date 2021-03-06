<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<?php $this->_compileInclude('menu'); ?>
		</div>
		<div class="span10">
			<ul class="breadcrumb">
				<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a> <span class="divider">/</span></li>
				<li class="active">批量删除试题</li>
			</ul>
			<div class="row-fluid">
				<div class="span12">
					<div class="well">
						<form action="index.php?exam-master-tools-clearquestions" method="post" id="qstool">
							<table class="table">
								<thead>
					                <tr>
								        <th colspan="2">批量删除普通试题</th>
								        <th></th>
								        <th></th>
								        <th></th>
								        <th></th>
					                </tr>
					            </thead>
								<tr>
									<td>
										录入时间：
									</td>
									<td>
										<input class="input-small datetimepicker" data-date="<?php echo date('Y-m-d',TIME); ?>" data-date-format="yyyy-mm-dd" type="text" name="search[stime]" size="10" id="stime" value="<?php echo $this->tpl_var['search']['stime']; ?>"/> - <input class="input-small datetimepicker" data-date="<?php echo date('Y-m-d',TIME); ?>" data-date-format="yyyy-mm-dd" size="10" type="text" name="search[etime]" id="etime" value="<?php echo $this->tpl_var['search']['etime']; ?>"/>
									</td>
									<td>
										科目：
									</td>
									<td>
						        		<select name="search[questionsubjectid]" class="combox input-medium" target="sectionselect" refUrl="?exam-master-questions-ajax-getsectionsbysubjectid&subjectid={value}">
							        		<option value="0">选择科目</option>
									  		<?php $sid = 0;
 foreach($this->tpl_var['subjects'] as $key => $subject){ 
 $sid++; ?>
									  		<option value="<?php echo $subject['subjectid']; ?>"<?php if($subject['subjectid'] == $this->tpl_var['search']['questionsubjectid']){ ?> selected<?php } ?>><?php echo $subject['subject']; ?></option>
									  		<?php } ?>
								  		</select>
						        	</td>
						        	<td>
										章节：
									</td>
									<td>
								  		<select name="search[questionsectionid]" class="combox input-medium" id="sectionselect" target="knowsselect" refUrl="?exam-master-questions-ajax-getknowsbysectionid&sectionid={value}">
								  		<option value="0">选择章节</option>
								  		<?php if($this->tpl_var['sections']){ ?>
								  		<?php $sid = 0;
 foreach($this->tpl_var['sections'] as $key => $section){ 
 $sid++; ?>
								  		<option value="<?php echo $section['sectionid']; ?>"<?php if($section['sectionid'] == $this->tpl_var['search']['questionsectionid']){ ?> selected<?php } ?>><?php echo $section['section']; ?></option>
								  		<?php } ?>
								  		<?php } ?>
								  		</select>
						        	</td>
						        	<td>
										知识点：
									</td>
									<td>
								  		<select name="search[questionknowsid]" id="knowsselect" class="input-medium">
									  		<option value="">选择知识点</option>
									  		<?php if($this->tpl_var['knows']){ ?>
									  		<?php $kid = 0;
 foreach($this->tpl_var['knows'] as $key => $know){ 
 $kid++; ?>
									  		<option value="<?php echo $know['knowsid']; ?>"<?php if($know['knowsid'] == $this->tpl_var['search']['questionknowsid']){ ?> selected<?php } ?>><?php echo $know['knows']; ?></option>
									  		<?php } ?>
									  		<?php } ?>
								  		</select>
						        	</td>
								</tr>
								<tr>
									<td>
										录入人：
									</td>
						        	<td>
						        		<input class="input-small" name="search[username]" size="25" type="text" value="<?php echo $this->tpl_var['search']['username']; ?>"/>
						        	</td>
						        	<td>
										试题类型：
									</td>
									<td>
										<select name="search[questiontype]" class="input-medium">
									  		<option value="0">类型不限</option>
									  		<?php $qid = 0;
 foreach($this->tpl_var['questypes'] as $key => $questype){ 
 $qid++; ?>
									  		<option value="<?php echo $questype['questid']; ?>"><?php echo $questype['questype']; ?></option>
									  		<?php } ?>
								  		</select>
									</td>
									<td>
										难度：
									</td>
									<td>
										<select name="search[questionlevel]" class="input-medium">
									  		<option value="0">难度不限</option>
											<option value="1"<?php if($this->tpl_var['search']['questionlevel'] == 1){ ?> checked<?php } ?>>易</option>
											<option value="2"<?php if($this->tpl_var['search']['questionlevel'] == 2){ ?> checked<?php } ?>>中</option>
											<option value="3"<?php if($this->tpl_var['search']['questionlevel'] == 3){ ?> checked<?php } ?>>难</option>
								  		</select>
									</td>
									<td>
										<button class="btn btn-primary" type="submit">删除</button>
										<input type="hidden" value="1" name="search[argsmodel]" />
									</td>
									<td colspan="4"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="well">
						<form action="index.php?exam-master-tools-clearquestionrows" method="post" id="qrtool">
							<table class="table">
								<thead>
					                <tr>
								        <th colspan="2">批量删除综合题</th>
								        <th></th>
								        <th></th>
								        <th></th>
								        <th></th>
					                </tr>
					            </thead>
								<tr>
									<td>
										录入时间：
									</td>
									<td>
										<input class="input-small datetimepicker" data-date="<?php echo date('Y-m-d',TIME); ?>" data-date-format="yyyy-mm-dd" type="text" name="search[stime]" size="10" id="stime" value="<?php echo $this->tpl_var['search']['stime']; ?>"/> - <input class="input-small datetimepicker" data-date="<?php echo date('Y-m-d',TIME); ?>" data-date-format="yyyy-mm-dd" size="10" type="text" name="search[etime]" id="etime" value="<?php echo $this->tpl_var['search']['etime']; ?>"/>
									</td>
									<td>
										科目：
									</td>
									<td>
						        		<select name="search[questionsubjectid]" class="combox input-medium" target="qrsectionselect" refUrl="?exam-master-questions-ajax-getsectionsbysubjectid&subjectid={value}">
						        		<option value="0">选择科目</option>
								  		<?php $sid = 0;
 foreach($this->tpl_var['subjects'] as $key => $subject){ 
 $sid++; ?>
								  		<option value="<?php echo $subject['subjectid']; ?>"<?php if($subject['subjectid'] == $this->tpl_var['search']['questionsubjectid']){ ?> selected<?php } ?>><?php echo $subject['subject']; ?></option>
								  		<?php } ?>
								  		</select>
						        	</td>
						        	<td>
										章节：
									</td>
									<td>
								  		<select name="search[questionsectionid]" class="combox input-medium" id="qrsectionselect" target="qrknowsselect" refUrl="?exam-master-questions-ajax-getknowsbysectionid&sectionid={value}">
								  		<option value="0">选择章节</option>
								  		<?php if($this->tpl_var['sections']){ ?>
								  		<?php $sid = 0;
 foreach($this->tpl_var['sections'] as $key => $section){ 
 $sid++; ?>
								  		<option value="<?php echo $section['sectionid']; ?>"<?php if($section['sectionid'] == $this->tpl_var['search']['questionsectionid']){ ?> selected<?php } ?>><?php echo $section['section']; ?></option>
								  		<?php } ?>
								  		<?php } ?>
								  		</select>
						        	</td>
						        	<td>
										知识点：
									</td>
									<td>
								  		<select name="search[questionknowsid]" id="qrknowsselect" class="input-medium">
									  		<option value="">选择知识点</option>
									  		<?php if($this->tpl_var['knows']){ ?>
									  		<?php $kid = 0;
 foreach($this->tpl_var['knows'] as $key => $know){ 
 $kid++; ?>
									  		<option value="<?php echo $know['knowsid']; ?>"<?php if($know['knowsid'] == $this->tpl_var['search']['questionknowsid']){ ?> selected<?php } ?>><?php echo $know['knows']; ?></option>
									  		<?php } ?>
									  		<?php } ?>
								  		</select>
						        	</td>
								</tr>
								<tr>
									<td>
										录入人：
									</td>
						        	<td>
						        		<input class="input-small" name="search[username]" size="25" type="text" value="<?php echo $this->tpl_var['search']['username']; ?>"/>
						        	</td>
						        	<td>
										试题类型：
									</td>
									<td>
										<select name="search[questiontype]" class="input-medium">
									  		<option value="0">类型不限</option>
									  		<?php $qid = 0;
 foreach($this->tpl_var['questypes'] as $key => $questype){ 
 $qid++; ?>
									  		<option value="<?php echo $questype['questid']; ?>"><?php echo $questype['questype']; ?></option>
									  		<?php } ?>
								  		</select>
									</td>
									<td>
										难度：
									</td>
									<td>
										<select name="search[qrlevel]" class="input-medium">
									  		<option value="0">难度不限</option>
											<option value="1"<?php if($this->tpl_var['search']['qrlevel'] == 1){ ?> selected<?php } ?>>易</option>
											<option value="2"<?php if($this->tpl_var['search']['qrlevel'] == 2){ ?> selected<?php } ?>>中</option>
											<option value="3"<?php if($this->tpl_var['search']['qrlevel'] == 3){ ?> selected<?php } ?>>难</option>
								  		</select>
									</td>
									<td>
										<button class="btn btn-primary" type="submit">删除</button>
										<input type="hidden" value="1" name="search[argsmodel]" />
									</td>
									<td colspan="4"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>