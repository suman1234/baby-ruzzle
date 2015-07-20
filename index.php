<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title></title>
	
	<!-- Bootstrap -->
	<link href="public/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/css/style.css" rel="stylesheet">
	<style type="text/css">
		body { background:#FF8033; padding:20px;}  /*3399FF*/
		.table1 td {  width:100px; height:100px; padding:10px; border:7px solid #3399FF; margin:10px; border-radius:20px;  background:#FFFFFF}
		.table1 td div { margin-top:10px;}
		.table1 td input { width:100%;}
		
		.table2 td { width:100px; height:100px; padding:10px; border:7px solid #f0f0f0; margin:10px; border-radius:20px;   background:#FFFFFF; position:relative;} /*3399FF*/
		.red { background:none}
		.orange { background:none}
		.blue { background:none;}
		.green { background: none}
		
		.table2 td.redBorder { border-color:none;}
		.table2 td.orangeBorder { border-color:none;}
		.table2 td.blueBorder { border-color:none;}
		.table2 td.greenBorder { border-color:none;}
		
		.setPosRel { position:relative; color:#000000; display:block; clear:both;}
		.PointNumber { position:absolute; top:10px; right:10px; font-weight:bold; font-size:15px; display:none}
		.Special { position:absolute; top:-12px; left:-12px; border-radius:20px; border:3px solid #FFFFFF;  color:#FFFFFF; padding:4px; font-size:14px; font-weight:bold; display:none}
		.number { font-size:55px; text-transform:uppercase}
		
		.SetList{ list-style:none; padding:15px;}
		.SetList li { display:block; border:1px dotted #ccc; background: #f4f4f4; margin-bottom:5px; padding:3px 5px;}
	</style>
	
	<script src="public/js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="public/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="public/js/index.js" type="text/javascript"></script>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- wrapper start -->
	<div class="container ">
		<!-- front panel -->
		<div id="frontpanel" style="margin:0px auto; display:block" >
			<form name="ruzzle" id="ruzzle" method="POST">
			<table class="table2" border="0" cellspacing="10" cellpadding="10" align="center">
				<tr>
					<td align="center" valign="middle" class="orangeBorder" >						
							<div class="PointNumber">1</div>
							<div class="Special orange">DW</div>
							<input type="text" class="form-control" id="cell-input-1"  name="cell-input-1">
							<strong class="number hidden" id="cell-strong-1" ></strong> 
					</td>
					<td align="center" valign="middle" >						
							<div class="PointNumber">1</div>
							<div class="Special" style="display:none">DW</div>
							<input type="text" class="form-control " id="cell-input-2"  name="cell-input-2">
							<strong class="number  hidden" id="cell-strong-2" ></strong> 
					</td>
					<td align="center" valign="middle" >						
							<div class="PointNumber">2</div>
							<div class="Special" style="display:none">DW</div>
							<input type="text" class="form-control " id="cell-input-3"  name="cell-input-3">
							<strong class="number  hidden" id="cell-strong-3" ></strong> 
					</td>
					<td align="center" valign="middle" >						
							<div class="PointNumber">1</div>
							<div class="Special" style="display:none">DW</div>
							<input type="text" class="form-control " id="cell-input-4"  name="cell-input-4">
							<strong class="number  hidden"  id="cell-strong-4"></strong> 
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle" >						
							<div class="PointNumber">3</div>
							<div class="Special" style="display:none">DW</div>
							<input type="text" class="form-control " id="cell-input-5"  name="cell-input-5">
							<strong class="number  hidden" id="cell-strong-5" ></strong> 
					</td>
					<td align="center" valign="middle" >						
							<div class="PointNumber">1</div>
							<div class="Special" style="display:none">DW</div>
							<input type="text" class="form-control " id="cell-input-6"  name="cell-input-6">
							<strong class="number  hidden" id="cell-strong-6" ></strong> 
					</td>
					<td align="center" valign="middle" class="greenBorder" >						
							<div class="PointNumber">1</div>
							<div class="Special green" style="">DL</div>
							<input type="text" class="form-control " id="cell-input-7"  name="cell-input-7">
							<strong class="number  hidden" id="cell-strong-7" ></strong> 
					</td>
					<td align="center" valign="middle" >						
							<div class="PointNumber">2</div>
							<div class="Special" style="display:none">DW</div>
							<input type="text" class="form-control " id="cell-input-8"  name="cell-input-8">
							<strong class="number  hidden"  id="cell-strong-8"></strong> 
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle" >						
							<div class="PointNumber">1</div>
							<div class="Special" style="display:none">DW</div>
							<input type="text" class="form-control " id="cell-input-9"  name="cell-input-9">
							<strong class="number  hidden" id="cell-strong-9" ></strong> 
					</td>
					<td align="center" valign="middle" >						
							<div class="PointNumber">2</div>
							<div class="Special" style="display:none">DW</div>
							<input type="text" class="form-control " id="cell-input-10"  name="cell-input-10">
							<strong class="number  hidden"  id="cell-strong-10"></strong> 
					</td>
					<td align="center" valign="middle" >						
							<div class="PointNumber">1</div>
							<div class="Special" style="display:none">DW</div>
							<input type="text" class="form-control " id="cell-input-11"  name="cell-input-11">
							<strong class="number  hidden"  id="cell-strong-11"></strong> 
					</td>
					<td align="center" valign="middle" >						
							<div class="PointNumber">1</div>
							<div class="Special" style="display:none">DW</div>
							<input type="text" class="form-control " id="cell-input-12"  name="cell-input-12">
							<strong class="number  hidden" id="cell-strong-12" ></strong> 
					</td>
				</tr>
				<tr>
					<td align="center" valign="middle" >						
							<div class="PointNumber">1</div>
							<div class="Special" style="display:none">DW</div>
							<input type="text" class="form-control " id="cell-input-13" name="cell-input-13">
							<strong class="number  hidden" id="cell-strong-13" ></strong> 
					</td>
					<td align="center" valign="middle" class="blueBorder" >						
							<div class="PointNumber">2</div>
							<div class="Special blue" style="">TL</div>
							<input type="text" class="form-control " id="cell-input-14" name="cell-input-14">
							<strong class="number  hidden" id="cell-strong-14" ></strong> 
					</td>
					<td align="center" valign="middle" >						
							<div class="PointNumber">1</div>
							<div class="Special" style="display:none">DW</div>
							<input type="text" class="form-control " id="cell-input-15" name="cell-input-15">
							<strong class="number hidden"  id="cell-strong-15"></strong> 
					</td>
					<td align="center" valign="middle" class="redBorder" >						
							<div class="PointNumber">4</div>
							<div class="Special red" style="">TW</div>
							<input type="text" class="form-control " id="cell-input-16" name="cell-input-16">
							<strong class="number hidden" id="cell-strong-16" ></strong> 
					</td>
				</tr>
			</table>
			
			<div style="color:#FFFFFF; margin-top:70px; " align="center">
				<button type="button" class="btn btn-default" id="cheatCode">Show Cheat Code</button>
			</div>
			<div style="color:#FFFFFF; margin-top:70px; " align="center" id= "res">
			
				<table border="0" cellspacing="10" cellpadding="10">
				<tr>
					<td><h2 align="center">Correct Word : <span id="corr_wrd"></span></h2></td>
				</tr>
				<tr>
					<td><h2  align="center">Longest Word :  <span id="long_wrd"></span> (<span id="cnt_wrd"></span> letter )</h2></td>
				</tr>
				<tr>
					<td><h1 style="margin-top:30px;" align="center"><a id="" href="javascript:viod(0);" data-toggle="modal" data-target="#myModal" style="color:#FFFFFF;">Show Words List <span class="glyphicon glyphicon-plus-sign"></span></a></h1>	</td>
				</tr>
				</table>
			</div>
		</div>
			</form>
		
	</div>
	<!-- wrapper close -->
	
	
	
	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Words Found</h4>
	      </div>
	      <div class="modal-body">
	        	<div style="display:block; height:500px; overflow:auto; border:1px solid #000000;">
			<ul class="SetList">
				<li>jayesh patil</li>
				<li>jayesh patil</li>
			</ul>
		</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
	
	
	
</body>
</html>