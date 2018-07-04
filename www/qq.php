<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<html>
  <body>
<h1>修改记录</h1>  
<?php  
    if(isset($_POST['btnModify'])){  
        //验证表单省略  
        $sql = "UPDATE animal SET WHERE ID = '$_POST[id]'";  
        $result = mysqli_query($sql);   //执行更新  
        if($result){  
            echo "修改已经成功！";  
        }  
        else  
        {  
            echo "修改失败！";  
        }  
    }  
    //查询当前的记录  
    $query = "SELECT * FROM symbols";  
    //执行该查询  
    if($result = $mysqli->query($query)){  
        //显示返回的记录集行数  
        if($result->num_rows>0){  
            //如果有记录  
            //显示记录集中列的内容  
            echo "<table cellpadding=10 border=1>";  
            while($row=$result->fetch_array()){  
                echo "<tr>";  
                echo "<td><input name='id' type='text' id='id' value='$row[0]'/></td>";  
                echo "<td><input name='country' type='text' id='country' value='$row[1]'/></td>";  
                echo "<td><input name='animal' type='text' id='animal' value='$row[2]' /></td>";  
                echo "<td><input name='btnModify' type='submit' id='btnModify' value='修改' /></td>";  
                echo "</tr>";  
            }  
        }  
        //释放对象所占用的内存  
        $result->close();  
    }  
?>
</body>
</html>
