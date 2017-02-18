<!DOCTYPE html>
<html lang="en">

<head>
<title>Robotics and Internet of Things IoT Unit - Publications</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Responsive Website Template">
<meta name="author" content="The Develovers">
<!-- CORE CSS -->
<?php
    include_once 'include/headers_links.php';
    include_once 'include/utils.php';
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

				


				<?php
				$sql = "SELECT * FROM publication, publication_category, publication_indexing where publication.category = publication_category.id and publication.indexing = publication_indexing.id order by publication.year DESC, publication.month ASC";
//echo $sql;

				$result = $dbconn->query($sql);

				if ($result->num_rows >= 1) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo'<div class="publication">';
						
						$sql_authors = "SELECT firstname, lastname FROM author,publication,author_publication
						WHERE author.aid=author_publication.author_id 
						and publication.pid=author_publication.publication_id and publication.pid=".$row['pid'];
						//echo $sql_authors;
						$result_authors = $dbconn->query($sql_authors);
						$authors="";
						while($row_author = $result_authors->fetch_assoc()){
							$authors=$authors.''.$row_author["firstname"].' '.$row_author["lastname"].', ';
						}


						$link=$row["hlink"];
						echo "<b><a href='".$link."'>".$row["title"]."</a></b>" ;
						echo "<br>".$authors;
						echo "<br><b>".$row["booktitle"]."</b>, Vol.(".$row["volume"]."), Issue (".$row["issue"]."), ".getMonth($row["month"])." ".$row["year"];
						echo "<br><b class='indexing'>".$row['publisher']."</b>, <b class='indexing'>impact factor: ".$row['impactfactor']."</b>, <b class='indexing'>".getIndexing($row["indexing"])."</b>";
						echo'</div>';
					}
				} else {
					echo '<p class="error">SQL Query Error</p><br>';
				}

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
