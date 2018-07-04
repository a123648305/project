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
  
    <button id="del" class="btn btn-default" title="删除">
        <i class="glyphicon glyphicon-minus"></i> 删除
    </button>
	 
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
            idField: "yid",
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
			
            url: "select-yingping.php", //加载数据
			//url:"list.json",
            columns: [{
                checkbox: true
            },{field:"yid",
			   title:"编号",align:'center',
				
			},
			{   align:'center',
                field: "username",
                title: "点评人",
				edit:false,
               
            }, {field: "mname",align:'center',
                title: "电影",
			
								
			},{
                field: "dt",align:'center',
                title: "过去时间",
			     
            },
            {
                field: "yy",align:'center',
                title: "影评",
				

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
                return row.yid;
				
            });
				//console.log(ids);ids[]
			 						 
			$.post("yingping-delete.php",{ids},function(data){console.log(data);alert(data)});						 
									 
			
            $("#table").bootstrapTable('remove', {
                field: 'yid',
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
