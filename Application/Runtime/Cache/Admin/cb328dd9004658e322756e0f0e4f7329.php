<?php if (!defined('THINK_PATH')) exit();?><table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
		<th>用户编号</th>
        <th>用户名称</th>
        <th>机构名称</th>
        <th>状态</th>

        <th>管理操作</th>
    </tr>
    </thead>
	     <tbody>
		 	 <?php if(is_array($data)): foreach($data as $key=>$is): ?><tr>
	
		
			<td><?php echo ($is["b_id"]); ?></td>
            <td><?php echo ($is["b_name"]); ?></td>
            <td><?php echo ($is["f_name"]); ?></td>
            <td><?php echo ($is["status"]); ?></td>
			<td>
                  <a href="#">编辑</a>
                  <a href="#" onclick="deletea(<?php echo ($is["b_id"]); ?>)">删除</a>

            </td>
		
        </tr><?php endforeach; endif; ?></tbody></table>
<div class="inline pull-right page">
 <?php echo ($str); ?>
</div>