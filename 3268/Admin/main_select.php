html>
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
	
</style>
</head>
<body>
<h4>Live example - creating new record:</h4>
<div style="width: 40%">
    <div id="msg" class="alert hide"></div>
    <table id="user" class="table table-bordered table-striped">
        <tbody> 
            <tr>         
                <td width="40%">Username</td>
                <td><a href="#" class="myeditable" id="new_username" data-type="text" data-name="username" data-original-title="Enter username">1</a></td>
            </tr>
            <tr>         
                <td>First name</td>
                <td><a href="#" class="myeditable" data-type="text" data-name="firstname" data-original-title="Enter firstname">2</a></td>
            </tr>  
            <tr>         
                <td>Group</td>
                <td><a href="#" class="myeditable" data-type="select" data-name="group" data-source="/groups" data-original-title="Select group">3</a></td>
            </tr>     
            <tr>         
                <td>Date of birth</td>
                <td><a href="#" class="myeditable" data-type="date" data-name="dob" data-viewformat="dd/mm/yyyy" data-original-title="Select Date of birth">4</a></td>
            </tr>  
            <tr>         
                <td>Comments</td>
                <td><a href="#" class="myeditable" data-type="textarea" data-name="comments" data-original-title="Enter comments">5</a></td>
            </tr> 
        </tbody>
    </table>
    <div>
    <button id="save-btn" class="btn btn-primary">Save new user!</button>
    <button id="reset-btn" class="btn pull-right">Reset</button>
    </div>
</div>  
<script>
	

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
</script>


</body>
</html>
