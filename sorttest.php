<!DOCTYPE html>
<html>
<head>
<title>Sort Test</title>
</head>
<body>
<!--<script src="sorttest.js"></script>
<p id="title_before">Before title<p>
<p id="content_before">Before content</p>
<p id="title_after">After title<p>
<p id="content_after">After content</p>
<!--<button onClick="sort()">Sort</button>-->

</body>
<script>
var test = "�lb�m";
document.write("Original test: "+test+"<br>");
document.write("charAt(0): "+test.charAt(0)+"<br>");
document.write("charCodeAt(0): "+test.charCodeAt(0)+"<br>");
test=test.replace(/�/g,"A");
test=test.replace(/�/g,"a");
test=test.replace(/�/g,"E");
test=test.replace(/�/g,"e");
test=test.replace(/�/g,"I");
test=test.replace(/�/g,"i");
test=test.replace(/�/g,"O");
test=test.replace(/�/g,"o");
test=test.replace(/�/g,"U");
test=test.replace(/�/g,"u");
document.write("New test: "+test+"<br>");
</script>
</html>