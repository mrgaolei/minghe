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
<th>库存ID</th>
<th>商品名</th>
<th>进货时间/销售</th>
<th>价格进货/销售</th>
<th>利润</th>
</tr>
<? foreach((array)$store as $row) {?>
<tr>
<td><?=$row['sid']?></td>
<td><?=$row['caption']?></td>
<td><? echo date('Y-n-d H:i:s', $row['time_in']).'/'.date('Y-n-d H:i:s', $row['time_sell'])?></td>
<td><?=$row['price_in']?>/<?=$row['price_sell']?></td>
<td><? echo $row['price_sell']-$row['price_in']?></td>
</tr>
<? } ?>
</table>

</body>
</html>