<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="en"> 		   <![endif]-->

<head>
	<meta charset="utf-8">
	

	<title>PyroCMS Installer</title>

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" type="text/css" />

	<!-- Googlelicious -->
	<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>

	<script type="text/javascript">
		var base_url = '<?= base_url(); ?>',
		pass_match = ['<?= lang('installer.passwords_match'); ?>','<?= lang('installer.passwords_dont_match'); ?>'];
	</script>

	<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
</head>

<body>

	<div id="container">

		<div class="topbar">
			<div class="wrapper">

			<div id="logo">
				<img src="<?= base_url(); ?>assets/img/logo.png" alt="PyroCMS" />
			</div>
			
			<ul id="lang">
				<?php foreach($language_nav as $lang => $info):?>
				<li>
					<a href="<?php echo $info['action_url']; ?>" title="<?php echo $info['name']; ?>">
						<img src="<?php echo $info['image_url']; ?>" alt="<?php echo $info['name']; ?>"/>
					</a>
	</li>
				<?php endforeach; ?>
			</ul>
		</div>
		</div>
			
		<nav id="menu">
			<ul>
				<li><?= anchor('', lang('intro'), $this->uri->segment(2, '') == '' ? 'id="current"' : ''); ?></li>
				<li><span id="<?= $this->uri->segment(2) == 'step_1' ? 'current' : '' ?>"><?= lang('step1'); ?></span><span class="sep"></span></li>
				<li><span id="<?= $this->uri->segment(2) == 'step_2' ? 'current' : '' ?>"><?= lang('step2'); ?></span><span class="sep"></span></li>
				<li><span id="<?= $this->uri->segment(2) == 'step_3' ? 'current' : '' ?>"><?= lang('step3'); ?></span><span class="sep"></span></li>
				<li><span id="<?= $this->uri->segment(2) == 'step_4' ? 'current' : '' ?>"><?= lang('step4'); ?></span><span class="sep"></span></li>
				<li><span id="<?= $this->uri->segment(2) == 'complete' ? 'current' : '' ?>"><?= lang('final'); ?></span><span class="sep"></span></li>
			</ul>
		</nav>

		<!-- Message type 1 (flashdata) -->
		<?php if ($this->session->flashdata('success')): ?>
			<ul class="block-message success">
				<li><?= $this->session->flashdata('success') ?></li>
			</ul>
		<?php endif; ?>

		<?php if ($this->session->flashdata('error')): ?>
			<ul class="block-message error">
				<li><?= $this->session->flashdata('error') ?></li>
			</ul>
		<?php endif; ?>

		<?php if ( ! empty($error)): ?>
			<ul class="block-message error">
				<li><?= $error ?></li>
			</ul>
		<?php endif; ?>

		<!-- Message type 2 (validation errors) -->
		<?php if (validation_errors()): ?>
			<div id="notification">
				<ul class="block-message error">
					<?= validation_errors('<li>', '</li>') ?>
				</ul>
			</div>
		<?php endif; ?>

		<?= $page_output.PHP_EOL; ?>

	</div>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.complexify.js"></script>

	<script type="text/javascript" src="<?= base_url(); ?>assets/js/installer.js"></script>
</body>
</html>