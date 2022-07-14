<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="cal.css">
	<script type="text/javascript" src="cal.js"></script>
</head>
<body>
<center>


	<div>
<h1> Calculator</h1>
<input type="text" name="text" id="cal" placeholder="Enter">
<table>
	<tr>
		<th><input type="button" value="AC" onclick="remove()" class="btn"/></th>
        <th><input type="button" value="%" onclick="setOperator(this,cal);" class="btn"/></th>
        <th><input type="button" value="<" onclick="backSpace()" class="btn"/></th>
        <th><input type="button" value="/" onclick="setOperator(this,cal);" class="btn"/></th>

	</tr>
<tr>
		<th><input type="button" value="7" onclick="setValue(this,cal)" class="btn"/></th>
        <th><input type="button" value="8" onclick="setValue(this,cal)" class="btn"/></th>
        <th><input type="button" value="6" onclick="setValue(this,cal)" class="btn"/></th>
        <th><input type="button" value="*" onclick="setOperator(this,cal)" class="btn"/></th>

	</tr>

<tr>
		<th><input type="button" value="4" onclick="setValue(this,cal)" class="btn"/></th>
        <th><input type="button" value="5" onclick="setValue(this,cal)" class="btn"/></th>
        <th><input type="button" value="6" onclick="setValue(this,cal)" class="btn"/></th>
        <th><input type="button" value="-" onclick="setOperator(this,cal)" class="btn"/></th>

	</tr>

<tr>
		<th><input type="button" value="1" onclick="setValue(this,cal)" class="btn"/></th>
        <th><input type="button" value="2" onclick="setValue(this,cal)" class="btn"/></th>
        <th><input type="button" value="3" onclick="setValue(this,cal)" class="btn"/></th>
        <th><input type="button" value="+" onclick="setOperator(this,cal)" class="btn"/></th>

	</tr>

<tr>
		<th><input type="button" value="00" onclick="setValue(this,cal)" class="btn"/></th>
        <th><input type="button" value="0" onclick="setValue(this,cal)" class="btn"/></th>
        <th><input type="button" value="." onclick="setDot(this,cal)" class="btn"/></th>
        <th><input type="button" value="=" onclick="result(cal)" class="btn"/></th>


	</tr>







</table>





</div>
</center>
</body>
</html>