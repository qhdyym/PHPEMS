<div class="accordion" id="accordion-13465">
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-707348">考试设计 </a>
		</div>
		<div class="accordion-body{x2;if:$method == 'basic'} in{x2;endif} collapse" id="accordion-element-707348">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?{x2;$_app}-teach-basic">考场列表</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-2120761">课程成绩 </a>
		</div>
		<div class="accordion-body{x2;if:$method == 'users'} in{x2;endif} collapse" id="accordion-element-2120761">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?{x2;$_app}-teach-users">成绩管理</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-212076">试题管理 </a>
		</div>
		<div class="accordion-body{x2;if:$method == 'questions' || $method == 'rowsquestions'} in{x2;endif} collapse" id="accordion-element-212076">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?{x2;$_app}-teach-questions">普通试题管理</a></li>
					<li><a href="index.php?{x2;$_app}-teach-rowsquestions">综合题管理</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-212096">试卷管理 </a>
		</div>
		<div class="accordion-body{x2;if:$method == 'exams'} in{x2;endif} collapse" id="accordion-element-212096">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?{x2;$_app}-teach-exams">试卷列表</a></li>
					<li><a href="index.php?{x2;$_app}-teach-exams-autopage">随机组卷</a></li>
					<li><a href="index.php?{x2;$_app}-teach-exams-selfpage">手工组卷</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-parent="#accordion-13465" data-toggle="collapse" href="#accordion-element-212090">回收站 </a>
		</div>
		<div class="accordion-body{x2;if:$method == 'recyle'} in{x2;endif} collapse" id="accordion-element-212090">
			<div class="accordion-inner">
				<ul class="unstyled">
					<li><a href="index.php?{x2;$_app}-teach-recyle">普通试题</a></li>
					<li><a href="index.php?{x2;$_app}-teach-recyle-rows">综合题</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>