<?php if (!defined('THINK_PATH')) exit();?><table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
		<th>动态编号</th>
        <th>动态名称</th>
        <th>动态内容</th>
        <th>管理操作</th>
    </tr>
    </thead>
	     <tbody>
		 	 <?php if(is_array($data)): foreach($data as $key=>$is): ?><tr>
	
		
			<td><?php echo ($is["s_id"]); ?></td>
            <td><span><?php echo ($is["s_title"]); ?></span style="display:none"></td>
            <td><?php echo ($is["s_content"]); ?></td>
			<td>
                  <a href="#" onclick="deletea(<?php echo ($is["s_id"]); ?>)">删除</a>

            </td>
		
        </tr><?php endforeach; endif; ?></tbody></table>
			
<div class="inline pull-right page">
 <?php echo ($str); ?>
 </div>