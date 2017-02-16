<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - Publication input</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
<!-- CORE CSS -->
<?php
    include_once 'include/headers_links.php';
    ?>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	<?php
	include 'include/dbconfig.php';
	session_start();
	?>

	<?php
	include_once 'include/nav_bar.php';
	?>
		<!-- END NAVBAR -->
		<!-- PAGE HEADER DEFAULT -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left">Publications</h1>
				<ol class="breadcrumb link-accent">
					<li><a href="index.html">Home</a></li>

					<li class="active">Has Navigation Links</li>
				</ol>
			</div>
		</div>
		<!-- END PAGE HEADER DEFAULT -->
		<!-- PAGE CONTENT -->
		<div class="page-content no-margin-bottom">
			<div class="container">
				<p></p>

				<h2 class="section-heading">Enter new publication</h2>

					<div class="col-md-8">
						<form method="post" id="contact-form" class="form-horizontal form-minimal margin-top-30" novalidate>
						
								
									<div class="form-group">
										<label for="pub-id" class="control-label sr-only">ID</label>
										<input type="number" class="form-control" id="pub-id" name="id" placeholder="ID*" value="<?php echo $id;?>" required>
									</div>
								
								
									<div class="form-group">
										<label for="pub-title" class="control-label sr-only">Title</label>
										<input type="text" class="form-control" id="pub-title" name="title" placeholder="Title*" value="<?php if(isset($title))echo $title;?>" required>
									</div>
								
							
							<div class="form-group">
								<label for="pub-type" class="control-label sr-only">Type</label>
								
									<input type="number" class="form-control" id="pub-type" name="type" placeholder="Type*" value="<?php echo $type;?>" required>
								
							</div>
							
							<div class="form-group">
								<label for="pub-year" class="control-label sr-only">Year</label>
								
									<input type="number" class="form-control" id="pub-year" name="year" placeholder="Year*" value="<?php echo $year;?>" required>
								
							</div>
							
							<div class="form-group">
								<label for="pub-month" class="control-label sr-only">Month</label>
								
									<input type="number" class="form-control" id="pub-month" name="month" placeholder="Month*" value="<?php echo $month;?>" required>
								
							</div>
							
							<div class="form-group">
										<label for="pub-pages" class="control-label sr-only">Pages</label>
										<input type="text" class="form-control" id="pub-pages" name="pages" placeholder="Pages*"  value="<?php if(isset($pages))echo $pages;?>" required>
									</div>
									
									<div class="form-group">
										<label for="pub-publisher" class="control-label sr-only">Publisher</label>
										<input type="text" class="form-control" id="pub-publisher" name="publisher" placeholder="Publisher*"  value="<?php if(isset($publisher))echo $publisher;?>" required>
									</div>
							
							<div class="form-group">
								<label for="pub-issue" class="control-label sr-only">Issue</label>
								
									<input type="number" class="form-control" id="pub-issue" name="issue" placeholder="Issue*" value="<?php echo $issue;?>" required>
								
							</div>
							
							<div class="form-group">
								<label for="pub-volume" class="control-label sr-only">Volume</label>
								
									<input type="number" class="form-control" id="pub-volume" name="issue" placeholder="Volume*" value="<?php echo $volume;?>" required>							
							</div>
							
							<div class="form-group">
								<label for="pub-category" class="control-label sr-only">Category</label>
								
									<input type="number" class="form-control" id="pub-category" name="category" placeholder="Category*"  value="<?php echo $category;?>" required>
								
							</div>
							
							<div class="form-group">
								<label for="pub-indexing" class="control-label sr-only">Indexing</label>
								
									<input type="number" class="form-control" id="pub-indexing" name="issue" placeholder="Indexing*" value="<?php echo $indexing;?>" required>							
							</div>
							
							<div class="form-group">
										<label for="pub-booktitle" class="control-label sr-only">Booktitle</label>
										<input type="text" class="form-control" id="pub-booktitle" name="booktitle" placeholder="Booktitle*" value="<?php if(isset($booktitle))echo $booktitle;?>" required>
									</div>
									
									<div class="form-group">
										<label for="pub-hlink" class="control-label sr-only">Hlink</label>
										<input type="text" class="form-control" id="pub-hlink" name="hlink" placeholder="Hlink*" value="<?php if(isset($hlink))echo $hlink;?>" required>
									</div>
							

							<div class="form-group">
								<div class="col-sm-12">
									<button id="submit-button" type="submit" class="btn btn-primary"><i class="fa loading-icon"></i> <span>Submit Message</span></button>
								</div>
							</div>
							
							
							<input type="hidden" name="msg-submitted" id="msg-submitted" value="true">
						</form>
					</div>
				<?php



				?>




			</div>
			<!--
<div class="cta cta-solid-bg cta-2-columns margin-top-50">
<div class="container">
<h2 class="heading">An elegant Bootstrap theme with tons of features</h2>
<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-shopping-cart"></i> PURCHASE</a>
</div>
</div>
-->
		</div>
		<!-- END PAGE CONTENT -->
		<!-- FOOTER -->
		<?php
		include_once 'include/footer.php';
		?>
		<!-- END FOOTER -->
		<div class="back-to-top">
			<a href="#top"><i class="fa fa-chevron-up"></i> </a>
		</div>
	</div>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPT -->
	<script src="theme/assets/js/jquery-2.1.1.min.js"></script>
	<script src="theme/assets/js/bootstrap.min.js"></script>
	<script src="theme/assets/js/plugins/easing/jquery.easing.min.js"></script>
	<script src="theme/assets/js/bravana.js"></script>

</body>

</html>
