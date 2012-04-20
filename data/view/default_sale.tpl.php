<? if(!defined('IN_APP')) exit('Access Denied');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>鸣鹤电器</title>
</head>
<body>
<? include $this->gettpl('header');?>
<table>
<tr>
<th>商品ID</th>
<th>商品名</th>
<th>库存数量</th>
<th>单价（售）</th>
<th>操作</th>
</tr>
<? foreach((array)$store as $row) {?>
<tr>
<td><?=$row['pid']?></td>
<td><?=$row['caption']?></td>
<td><?=$row['count']?></td>
<td><?=$row['price_in']?></td>
<td><a href="<?=util::makeurl( 'sale', 'sale', array('pid' => $row['pid']))?>">销售</a></td>
</tr>
<? } ?>
</table>

<hr />

</body>
</html>