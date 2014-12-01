<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" style="text/css" href="<?= base_url('assets/css/random.css') ?>">
</head>
<body>
	<h2>Random Word (attempt # <?= $this->session->userdata('count'); ?>)</h2>
	<h1><?= $this->session->flashdata('random_word');  ?></h1>
	<a href="<?= base_url() ?>">Generate</a>

</body>
</html>	