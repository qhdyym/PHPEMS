<div class="accordion" id="accordion-13465">
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-707348">考试设计 </a>
		</div>
		<div class="accordion-body<?php if($this->tpl_var['method'] == 'basic'){ ?> in<?php } ?> collapse" id="accordion-element-707348">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="?<?php echo $this->tpl_var['_app']; ?>-master-basic">考场列表</a></li>
		    		<li><a href="?<?php echo $this->tpl_var['_app']; ?>-master-basic-area">院系设置</a></li>
		    		<li><a href="?<?php echo $this->tpl_var['_app']; ?>-master-basic-subject">科目管理</a></li>
		    		<li><a href="?<?php echo $this->tpl_var['_app']; ?>-master-basic-questype">题型管理</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-2120761">课程开通 </a>
		</div>
		<div class="accordion-body<?php if($this->tpl_var['method'] == 'users'){ ?> in<?php } ?> collapse" id="accordion-element-2120761">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-users">开通课程</a></li>
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-users-batopen">批量开通</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-212076">试题管理 </a>
		</div>
		<div class="accordion-body<?php if($this->tpl_var['method'] == 'questions' || $this->tpl_var['method'] == 'rowsquestions'){ ?> in<?php } ?> collapse" id="accordion-element-212076">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-questions">普通试题管理</a></li>
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-rowsquestions">综合题管理</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-212096">试卷管理 </a>
		</div>
		<div class="accordion-body<?php if($this->tpl_var['method'] == 'exams'){ ?> in<?php } ?> collapse" id="accordion-element-212096">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-exams">试卷列表</a></li>
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-exams-autopage">随机组卷</a></li>
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-exams-selfpage">手工组卷</a></li>
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-exams-temppage">即时组卷</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-212090">回收站 </a>
		</div>
		<div class="accordion-body<?php if($this->tpl_var['method'] == 'recyle'){ ?> in<?php } ?> collapse" id="accordion-element-212090">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-recyle">普通试题</a></li>
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-recyle-rows">综合题</a></li>
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-recyle-knows">知识点</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-2120901">批量工具 </a>
		</div>
		<div class="accordion-body<?php if($this->tpl_var['method'] == 'tools'){ ?> in<?php } ?> collapse" id="accordion-element-2120901">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-tools">删除试题</a></li>
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-tools-clearhistory">清空考试记录</a></li>
					<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-tools-clearsession">清理会话</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>