<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="Personal Homepage of RepeaterCreeper (Joseph Chua)">
	    <meta name="author" content="RepeaterCreeper">
	    <link rel="icon" href="../../favicon.ico">

		<title>RepeaterCreeper</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/index.css"
	</head>

	<body>
		<div class="fluid-container">
			<div class="card" style="margin: 16px;">
				<div class="card-block">
					<div class="form-group">
						<label for="dataContent">.ENV Content:</label>
						<textarea class="form-control" name="dataContent" id="dataContent" rows="15"></textarea>
					</div>
				</div>
				<div class="card-footer">
					<div class="form-group">
						<input class="btn btn-primary btn-block" value="Generate Command" name="submitDataContent" id="generate" onClick="generateCommand()">
					</div>
				</div>
			</div>
			<div class="card" style="margin: 16px">
				<div class="card-block">
					<code id="outputCommand"></code>
				</div>
			</div>
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/generate.js">	
		</script>
	</body>
</html>