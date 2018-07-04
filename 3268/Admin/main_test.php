?php require_once('../Connections/movie.php'); ?>

<?php

?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
	<link href="js/table/bootstrap.min.css"  rel="stylesheet">
	<link href="js/table/bootstrap-table.min.css" rel="stylesheet">
	<link href="js/table/bootstrap-editable.css" rel="stylesheet">
	<script src="js/table/jquery-3.3.1.min.js"></script>
	<script src="js/table/bootstrap.min.js"></script>
	<script src="js/table/bootstrap-table.min.js"></script>
	<script src="js/table/bootstrap-editable.js"></script>
    <script src="js/table/bootstrap-table-zh-CN.js"></script>

<style>
	#user{position: absolute; width: 200px;height: 200px; left: 0;bottom: 0;top: 0;right: 0; margin:auto;}
</style>
</head>
<body>
	<div style="width: 40%">
    
    <table id="user" class="table table-bordered table-striped">
        <tbody> 
            <tr>         
                <td width="40%">Username</td>
                <td><a href="#" class="myeditable" id="new_username" data-type="text" data-name="username" data-original-title="Enter username"></a></td>
            </tr>
            <tr>         
                <td>First name</td>
                <td><a href="#" class="myeditable" data-type="text" data-name="firstname" data-original-title="Enter firstname"></a></td>
            </tr>  
            <tr>         
                <td>Group</td>
                <td><a href="#" class="myeditable" id="new" data-type="select" data-name="group" data-original-title="Select group" data-source="listjson.json"></a></td>
            </tr>     
            <tr>         
                <td>Date of birth</td>
                <td><a href="#" class="myeditable" data-type="date" data-name="dob" data-viewformat="dd/mm/yyyy" data-original-title="Select Date of birth"></a></td>
            </tr>  
            <tr>         
                <td>Comments</td>
                <td><a href="#" class="myeditable" data-type="textarea" data-name="comments" data-original-title="Enter comments"></a></td>
            </tr> 
        </tbody>
    </table>
    <div>
    <button id="save-btn" class="btn btn-primary">Save new user!</button>
    <button id="reset-btn" class="btn pull-right">Reset</button>
    </div>
</div>  
<script>
$('.myeditable').editable({
	

    //url: '/post' //this url will not be used for creating new user, it is only for update
});
 

//make username required
$('#new_username').editable('option', 'validate', function(v) {
    if(!v) return 'Required field!';
});
 
//automatically show next editable
$('.myeditable').on('save.newuser', function(){
    var that = this;
    setTimeout(function() {
        $(that).closest('tr').next().find('.myeditable').editable('show');
    }, 200);
});
$('#save-btn').click(function() {
   $('.myeditable').editable('submit', { 
       url: 'plist-insert.php', 
       ajaxOptions: {
           dataType: 'json' //assuming json response
       },           
       success: function(data, config) {
                            
           console.log(data,config);
		   alert("插入成功!")
       },
       error: function(errors) {
           alert(errors)
       }
   });
});
$('#reset-btn').click(function() {
    $('.myeditable').editable('setValue', null)  //clear values
        .editable('option', 'pk', null)          //clear pk
        .removeClass('editable-unsaved');        //remove bold css
                   
    $('#save-btn').show();
    $('#msg').hide();                
});
</script>

</body>
</html>
