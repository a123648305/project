<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function testVisibility()
{
    var divV = document.getElementById("testD");
	var divV2 = document.getElementById("testV");
    if(divV.style.visibility =="hidden")

        divV.style.visibility = "visible";
   
        divV2.style.visibility = "hidden";
    
}
function testVisibility2()
{
    var divV = document.getElementById("testV");
    
        divV.style.visibility = "visible";
   
   
}
</script>
</head>
</body>
<div id="testD" style="border:#ddd 1px solid; visibility: hidden;" >
 aaaa</div>

<div id="testV" style="border:#ddd 1px solid;visibility: hidden; ">
 bbbbb
</div>
<div id="teste" style="border:#ddd 1px solid;visibility: hidden;">
 eeeee
</div>
<div id="testf" style="border:#ddd 1px solid;visibility: hidden;">
ffff
</div>
<input type="button" value="TestDisplay" onclick="testDisplay()"/>
<input type="button" value="TestVisibility" onclick="testVisibility()"/>
<p><a href="javascript:testVisibility()" >display</p>
<p><a href="javascript:testVisibility2()" >visiblity</p>

</body>
</html>