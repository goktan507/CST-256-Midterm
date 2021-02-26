<html>
<head>
	<title>Assessment - 256</title>
</head>
<body>
	<div>
		<form action="submit" method="post">
			{{ csrf_field() }}
			<div class=demo-table>
				<div class="form-head">Assessment post form</div>
    				<div class="form-column">
    					<div>
    						<label for="first">input 1:</label><span id="first"></span>
    					</div>
    					<div>
    						<input name="first" id="first" type="text" class="demo-input-box">
    					</div>
    				</div>
    				<div class="form-column">
    					<div>
    						<label for="second">input 2:</label><span id="second"></span>
    					</div>
    					<div>
    						<input name="second" id="second" type="text" class="demo-input-box">
    					</div>
    				</div>
    				<div class="form-column">
    					<div>
    						<label for="third">input 3:</label><span id="third"></span>
    					</div>
    					<div>
    						<input name="third" id="third" type="text" class="demo-input-box">
    					</div>
    				</div>
    				<div class="form-column">
    					<div>
    						<label for="fourth">input 4:</label><span id="fourth"></span>
    					</div>
    					<div>
    						<input name="fourth" id="fourth" type="text" class="demo-input-box">
    					</div>
    				</div>
    				
				<div>
					<input type="submit">
				</div>
			</div>
		</form>
	</div>
</body>
</html>