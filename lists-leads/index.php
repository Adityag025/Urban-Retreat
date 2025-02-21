<?php
include('../config.php');
ob_start();
if (isset($_SESSION['login'])) {
} else {
	header('Location:login.php');
	die();
}
?>
<?php
error_reporting(E_ERROR | E_PARSE);
// include('config.php');
$sql[0] = "SELECT * FROM " . _TABLE_NAME_ . " ORDER BY last_updated_time DESC";
$lp_arr = [LP_NAME];
foreach ($sql as $qry_key => $qry) {
	$result = mysqli_query($conn, $qry);
	while ($row = mysqli_fetch_array($result))
		$_rows[$lp_arr[$qry_key]]['lead_data'][] = $row;
}
?>
<!DOCTYPE html>
<html>

<head>
	<title><?php echo LP_NAME ?> - Web Enquiry Details</title>
	<link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon">
	<meta name="robots" content="noindex, nofollow">
	<!-- CSS Start-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/semantic.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/dataTables.semanticui.min.css" type="text/css" media="all">
	<!-- CSS End-->
	<!-- jQuery Start-->
	<script type="text/javascript" charset="utf8" src="assets/js/jquery-1.12.4.js"></script>
	<script type="text/javascript" charset="utf8" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="assets/js/dataTables.semanticui.min.js"></script>
	<!-- <script type="text/javascript" src="assets/js/main.js"></script> -->
	<script type="text/javascript">
		$(document).ready(function() {
			console.log('dfsd')
			$('[data-toggle="tooltip"]').tooltip();
			if ($('#leads_table').length) {
				var table = $('#leads_table').DataTable({
					dom: 'Bfrtip',
					buttons: [{
							extend: 'copy',
							text: 'COPY TABLE'
						},
						{
							extend: 'csv',
							text: 'EXPORT TABLE TO CSV'
						},
						{
							extend: 'excel',
							text: 'EXPORT TABLE TO EXCEL'
						}
					]
				});
			}
		})
	</script>
	<!-- jQuery End-->
	<style>
		@font-face {
			font-family: Icons;
			src: url("assets/fonts/icons.woff2");
		}

		body {
			overflow: visible;
		}

		tfoot input {
			width: 100%;
			padding: 3px;
			box-sizing: border-box;
		}

		div.wrapper {
			padding: 20px;
		}

		.ui.pagination.menu .active.item,
		.ui.table thead th {
			background: #f5f5f5;
			color: black !important;
		}

		table.dataTable.no-footer {
			border-bottom-color: rgba(34, 36, 38, .1);
		}

		.ui.link.menu .item:hover,
		.ui.menu .dropdown.item:hover,
		.ui.menu .link.item:hover,
		.ui.menu a.item:hover {
			background: #9E9E9E;
			color: white;
		}

		select {
			color: black;
			font-weight: normal;
		}

		select option {
			color: black !important;
		}

		.exportExcel {
			padding: 5px;
			border: 1px solid grey;
			margin: 5px;
			cursor: pointer;
		}

		.dt-buttons a {
			background: #607D8B;
			padding: 8px 20px;
			color: white;
			width: 100px;
			margin-right: 10px;
			border-radius: 3px;
			outline: 0;
		}

		.dt-buttons {
			display: inline-block;
			margin: 20px auto;
		}

		.ui.pagination.menu {
			margin: 10px 0px;
		}
	</style>
</head>
<style>
	@font-face {
		font-family: Icons;
		src: url("assets/fonts/icons.woff2");
	}

	body {
		overflow: visible;
	}

	tfoot input {
		width: 100%;
		padding: 3px;
		box-sizing: border-box;
	}

	div.wrapper {
		padding: 20px;
	}

	.ui.pagination.menu .active.item,
	.ui.table thead th {
		background: #f5f5f5;
		color: black !important;
	}

	table.dataTable.no-footer {
		border-bottom-color: rgba(34, 36, 38, .1);
	}

	.ui.link.menu .item:hover,
	.ui.menu .dropdown.item:hover,
	.ui.menu .link.item:hover,
	.ui.menu a.item:hover {
		background: #9E9E9E;
		color: white;
	}

	select {
		color: black;
		font-weight: normal;
	}

	select option {
		color: black !important;
	}

	.exportExcel {
		padding: 5px;
		border: 1px solid grey;
		margin: 5px;
		cursor: pointer;
	}

	.dt-buttons a {
		background: #607D8B;
		padding: 8px 20px;
		color: white;
		width: 100px;
		margin-right: 10px;
		border-radius: 3px;
		outline: 0;
	}

	.dt-buttons {
		display: inline-block;
		margin: 20px auto;
	}

	.ui.pagination.menu {
		margin: 10px 0px;
	}

	/*.leads_table_filter input[type=search]{
			    box-shadow: none;
			    border: 1px solid #9c9696;
			    padding: 10px;
			    border-radius: 4px;
		}*/
	.view_btn {
		background-color: #2d596f;
		padding: 6px 15px;
		color: white;
		cursor: pointer;
		/* margin: 10px; */
		border-radius: 5px;
		line-height: 49px;
	}

	.logoutbutton {
		background: #e04545;
		color: white;
		padding: 7px 20px;
		border-radius: 4px;
		text-decoration: none;
		text-transform: uppercase;
		position: fixed;
		right: 46px;
		top: 9px;
	}
</style>

<body>
	<div class="wrapper">
		<h3><?php echo LP_NAME ?> Enquiry Details</h3>
		<div class="logout">
			<a href="logout.php" class="logoutbutton">Logout</a>
		</div>
		<table id="leads_table" class="ui celled table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Form Name</th>
					<th>Project Name</th>
					<th>Date</th>
					<th>Page URL</th>
					<th>UTM Source</th>
					<th>UTM Medium</th>
					<th>UTM Term</th>
					<th>UTM Campaign</th>
					<th>gclid</th>
					<th>IP Address</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$serialNo = 1;
				foreach ($_rows as $lp_name => $_row)
					foreach ($_row as $lead)
						foreach ($lead as $leads) {
				?>
					<tr>
						<td><?php echo $serialNo ?></td>
						<td><span title="<?php echo $leads["name"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $leads['name']; ?></span></td>
						<td width="70px"><span title="<?php echo $leads["email"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $leads["email"]; ?></span></td>
						<td><span title="<?php echo $leads["phone"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $leads["phone"]; ?></span></td>
						<td style=""><span title="<?php echo $leads["form_name"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $leads["form_name"]; ?></span></td>
						<td style=""><span title="<?php echo $leads["project"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $leads["project"]; ?></span></td>
						<td style="white-space: nowrap;"><span title="<?php echo $leads["last_updated_time"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo date('d-m-Y', strtotime($leads["last_updated_time"])); ?></span></td>
						<td><span title="<?php echo $leads["page_url"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $leads["page_url"]; ?></span></td>
						<td><span title="<?php echo $leads["primarySource"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $leads["primarySource"]; ?></span></td>
						<td><span title="<?php echo $leads["secondarySource"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $leads["secondarySource"]; ?></span></td>
						<td><span title="<?php echo $leads["tertiarySource"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $leads["tertiarySource"]; ?></span></td>
						<td><span title="<?php echo $leads["campaign"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $leads["campaign"]; ?></span></td>
						<td><span title="<?php echo $leads["gclid"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $leads["gclid"]; ?></span></td>
						<td><span title="<?php echo $leads["ip_address"]; ?>" data-toggle="tooltip" data-placement="top"><?php echo $leads["ip_address"]; ?></span></td>
					</tr>
				<?php
							$serialNo++;
						};
				?>
			</tbody>
		</table>
	</div>
	<script>
	</script>
	<?php mysqli_close($conn); ?>
</body>

</html>