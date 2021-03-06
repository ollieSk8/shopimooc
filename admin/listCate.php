<?php
  require_once "../include.php";
    $arr=renderPagination("imooc_cate",5);
    $rows=$arr["rows"];
    $html=$arr["pagination"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>分类列表</title>
  <link rel="stylesheet" type="text/css" href="./styles/bootstrap.min.css">
  <script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
  <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
  <script type="text/javascript" src="scripts/jquery.validate.min.js"></script>
  <script type="text/javascript" src="scripts/editCate.js"></script>
</head>
<style type="text/css">
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
  vertical-align: middle; 
}
</style>
<body>
<div class="alert alert-success" role="alert" style="display:none;">
  删除分类成功！
</div>
<div class="alert alert-danger" role="alert" style="display:none;">
  删除分类失败！请重试!
</div>
<div class="panel panel-default">
  <div class="panel-heading">分类列表</div>
  <div class="panel-body">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>编号</th>
          <th>分类名称</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1;foreach ($rows as $rows):?>
          <tr>
            <th scope="row"><?php echo $i;?></th>
            <td><?php echo $rows["cName"]?></td>
            <td>
              <button type="button" class="btn btn-primary btn-sm" onclick="editCate(<?php echo $rows["id"]?>)">修改</button>
              <button type="button" class="btn btn-primary btn-sm" data-cName="<?php echo $rows["cName"]?>" id="<?php echo 'delete_btn_'.$rows["id"]?>" onclick="delCate(<?php echo $rows["id"]?>)">删除</button>
            </td>
          </tr>
        <?php $i++;endforeach;?>
      </tbody>
    </table>
    <?php
      echo $html;
    ?>
  </div>
</div>

</body>
</html>