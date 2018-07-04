<?php require_once('../Connections/movie.php'); ?>

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
	#addbox{position:absolute;left: 0;top: 0;bottom: 0;right: 0;margin: auto;border: solid;width: 500px;height: 400px;background-color: whitesmoke;padding: 10px 10px}	
</style>
</head>
<body>
<!--main_top-->
<table id="table"></table><div id="toolbar" class="btn-group">
    <button id="add" class="btn btn-default" title="添加" data-toggle="modal"  data-target="#addbox">
        <i class="glyphicon glyphicon-plus"></i> 添加
    </button>
    <button id="del" class="btn btn-default" title="删除">
        <i class="glyphicon glyphicon-minus"></i> 删除
    </button>
	 <button id="edit" class="btn btn-default" title="编辑">
        <i class="glyphicon glyphicon-pencil"></i> 编辑
    </button>
</div>
	<div id="addbox"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<button type="button" class="close" data-dismiss="modal" 
						aria-hidden="true">×
				</button>
    <h4 align="center">增加新纪录</h4><hr>
		
    <table id="user" class="table table-bordered ">
        <tbody> 
            <tr>         
                <td width="40%" align="center">姓名</td>
                <td><a href="#" class="myeditable" id="new_username" data-type="text" data-name="addname" data-original-title="输入姓名"></a></td>
            </tr>
             
            <tr>         
                <td align="center">性别</td>
                <td><a href="#" class="myeditable" data-type="select" data-name="addsex" data-source="sex.json" data-original-title="选择性别"></a></td>
            </tr>     
            <tr>         
                <td align="center">电话</td>
                <td><a href="#" class="myeditable"  data-type="text" data-name="addphone" data-original-title="输入电话"></a></td>
            </tr> 
			<tr>         
                <td align="center">职位</td>
                <td><a href="#" class="myeditable" data-type="select" data-name="addzhiwei" data-source="zhiwei.json" data-original-title="选择职位"></a></td>
            </tr>  
            <tr>         
                <td align="center">地址</td>
                <td><a href="#" class="myeditable" data-type="textarea" data-name="addaddr" data-original-title="输入地址"></a></td>
            </tr> 
        </tbody>
    </table>
   
    <button id="save-btn" class="btn btn-primary">保存</button>
    <button id="reset-btn" class="btn pull-right">重置</button>
    </div>
 	
	<script type="text/javascript">
    var curRow = {};
    $(function () {
						   
				  
		
		//开启编辑模式
			$("#edit").click(function(){
			$("#table a").editable('toggleDisabled');
	
		})
		
			
		//table初始化
		$("#table").bootstrapTable("resetView"),
        $("#table").bootstrapTable({
			
            height:500,
			pageList: [1,2,5,10],
			cache:false,
			toolbar: "#toolbar",
            idField: "eid",
			pagination: true,
            showRefresh: true,
            search: true,
            clickToSelect: true,
			striped:true,      //隔行变色
            showColumns:true,
			editable:true,
			sortOrder:'asc',
            queryParams: function (param) {
                return {};
            },
			
            url: "select-employee.php", //加载数据
			//url:"list.json",
            columns: [{
                checkbox: true
            },{field:"eid",
			   title:"编号",align:'center',
				
			},
			{   align:'center',
                field: "ename",
                title: "姓名",
				edit:false,
                formatter: function (value, row, index) {
                    return "<a href=\"#\" name=\"ename\" data-type=\"text\" data-disabled=\false\ data-pk=\""+row.Id+"\" data-title=\"用户名\">" + value + "</a>";
                },
				validate: function (value) {  
                    if ($.trim(value) == '') {  
                        return '姓名不能为空!';  
                    }}
            }, {field: "esex",align:'center',
                title: "性别",
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"esex\" data-type=\'select\' data-disabled=\false\ data-value=\'\' data-title=\'选择性别\' data-source=\'sex.json\'>" + value +"</a>";
				 }
								
			},{
                field: "ephone",align:'center',
                title: "电话",
			     formatter: function (value, row, index) {
                    return "<a href=\"#\" name=\"ephone\" data-type=\"text\" data-disabled=\false\ data-pk=\""+row.Id+"\" data-title=\"电话\">" + value + "</a>";
                },
				validate: function (value) {  
                  if ($.trim(value) == '') {  
                       return '电话不能为空!';  
                   }}
				
            },
            {
                field: "eaddress",align:'center',
                title: "地址",
				formatter: function (value, row, index) {
                    return "<a href=\"#\"  name=\"eaddress\" data-type=\"text\" data-disabled=\false\  data-title=\"地址\">" +value+ "</a>";
               },validate: function (value) {  
                  if ($.trim(value) == '') {  
                       return '地址不能为空!';  
                   }}
				}, {
                field: "ezhiwei",align:'center',
                title: "职位",
				disabled:'true',
			 formatter: function (value, row, index) {
					 return "<a href=\'#\' name=\"ezhiwei\"  data-type=\'select\' data-disabled=\false\ data-value=\'\' data-title=\'选择职位\' data-source=\'zhiwei.json\'>" + value +"</a>";
				 }

            }],
            onClickRow: function (row, $element) {
                curRow = row;
            },
            onLoadSuccess: function (aa, bb, cc) {
				
                $("#table a").editable({
                    url: function (params) {
                        var sName = $(this).attr("name");
                        curRow[sName] = params.value;
						console.log(curRow);
						var eid = curRow['eid'];
						var name = curRow['ename'];
						var sex = curRow['esex'];
						var phone = curRow['ephone'];
						var addr = curRow['eaddress'];
						var zhiwei = curRow['ezhiwei'];
						console.log(eid,name,sex,phone,addr,zhiwei)
                        $.ajax({
                            type: 'POST',
                            url: "employee-update.php",
                            data: {eid,name,sex,phone,addr,zhiwei},
                            success: function (data) {
                                alert(data);
								//console.log(data);
                            },
                            error: function (errors) { console.log(errors);}
                        });
                    },
                    type: 'json'
                });
            },
			
        });
		
  
		
	});
		
</script>      

<!--删除数据-->
<script>
$(function () {
        $("#del").click(function () {//alert("2");
            var ids = $.map($("#table").bootstrapTable('getSelections'), function (row) {
                return row.eid;
				
            });
				//console.log(ids);ids[]
			 						 
			$.post("employee-delete.php",{ids},function(data){console.log(data);alert(data)});						 
									 
			
            $("#table").bootstrapTable('remove', {
                field: 'eid',
                values: ids
            });
        });
    });
	</script>	
	
	
<!--插入数据-->
<script>
						
$('.myeditable').editable({
	

    //url: '/post' //this url will not be used for creating new user, it is only for update
});
 

//make username required
//验证	
$('#new_username').editable('option', 'validate', function(v) {
    if(!v) return '不能为空';
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
       url: 'employee-insert.php', 
       ajaxOptions: {
           //dataType: 'json' //assuming json response
       },           
       success: function(data,config) {
                            
           console.log(config)
		  alert(data)
		   
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
            
});
</script>	

</body>
</html>
