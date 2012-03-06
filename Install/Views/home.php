<!doctype html>
<html lang="en">

	<head>
		<style>
			h1,h2,h3,h4,h5,h6,p,li,ul{
				padding:0;
				margin:0;
				line-height:normal;
			}

			body,html{
				margin:0;
				padding:0;
				font-family: Helvetica, Arial, sans-serif;
				background:#FAFAFA;
			}

			.container{
				width:960px;
				margin:0 auto;		
			}

			header{
				background:#2E5A5C;
				padding:10px 0;
			}

				header h1{
					font-size:26px;
					font-weight:300;
					color:#FAFAFA;
				}

				header h4{
					font-weight:400;
					line-height:26px;
					font-size:13px;
					color:#FAFAFA;
				}

				header img{
					position:absolute;
					margin:-53px 0 0 920px;
				}

			#title h1{
				padding:20px 0 0 0;
				line-height:45px;
			}

			#title a{
				display: block;
				padding:0 0 20px 0;
				color:#303030;
			}

			article{
				display:block;
				width:100%;
			}

				article h2{
					font-weight:400;
					font-family: 'Droid Sans', Helvetica, Arial, sans-serif;
					font-size:18px;
					line-height:32px;
					text-transform: capitalize;
				}

				article h2 a{
					text-decoration:none;
					color:#303030;
				}

				article h4{
					font-weight:300;
					font-size:12px;
					color: #666;
				}

				article pre{
					display:block;
					width:98% !important;
					padding:10px 1%;
					border:1px solid #dedede;
					background:#fafafa;
				}

				article pre:last-child{
					display:none;
				}

			table{
				width:100%;
				padding:20px 0;
			}

			table tr:nth-child(even){
				background:#EEE;
			}

			table tr td{
				text-align:left;
				padding:8px 5px;
				font-size:16px;
			}

			table tr td:first-child{
				width:190px;
			}

			#site p{
				margin:5px 0;
				font-size:16px;
				font-weight:800;
				line-height:24px;
			}

			#site img{
				display:block;
				margin:20px auto;
				text-align:center;
			}

			footer p{
				line-height:42px;
				font-size:11px;
				color:#575757;
			}
		</style>
	</head>

	<body>

		<header>
			<div class="container">
				<h1>Giant Panda</h1>
				<h4>A PHP 5.3.3+ Framework to implent the MVC architecture</h4>

				<img src="data:image/png;base64,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"/>
			</div>
		</header>		

		<div class="container" id="site">
			<table>
				<tr>
					<td>PHP Version</td>
					<td><?php echo PHP_VERSION; ?></td>
				</tr>

				<tr>
					<td>Giant Panda Version</td>
					<td><?php echo $version; ?></td>
				</tr>

				<tr>
					<td>System Directory</td>
					<td><?php echo $root; ?></td>
				</tr>	

				<tr>
					<td>Application Directory</td>
					<td><?php echo $application; ?></td>
				</tr>	
				
				<tr>
					<td>Writeable Directory</td>
					<td><?php echo ($writeable) ? 'Yes' : '<strong style="color:red">No</strong>'; ?></td>
				</tr>				
				<tr>
					<td>PHP User</td>
					<td><?php echo $user; ?></td>
				</tr>								
			</table>

			<p>To remove this holding page, change the default application from 'Install' to 'Index', then you can also delete the Install folder.</p>
			<p>You can find the default application setting within the Index.php as shown below on Line 30.</p>

			<img src="data:image/png;base64,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"/>
		</div>

		<footer>
			<div class="container">
				<p>Panda Image Taken From: http://www.iconfinder.com/icondetails/19225/48/</p>
			</div>
		</footer>
	</body>
</html>		