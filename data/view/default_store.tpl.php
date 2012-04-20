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
<th>单价（进）</th>
<th>总计</th>
</tr>
<? foreach((array)$store as $row) {?>
<tr>
<td><?=$row['pid']?></td>
<td><?=$row['caption']?></td>
<td><?=$row['count']?></td>
<td><?=$row['price_in']?></td>
<td><?=$row['total']?></td>
</tr>
<? } ?>
</table>

<hr />
<h2>进货</h2>
<form action="<?=util::makeurl( 'store', 'add')?>" method="post">
<p><label>选择商品：<select name="pid">
<option value="0">【全新的商品】</option>
<? foreach((array)$products as $product) {?>
<option value="<?=$product['pid']?>"><?=$product['caption']?></option>
<? } ?>
</select></label></p>
<p style="font-size:12px;color:red">提示：如果选择了老的商品（补充库存），则下列输入框只有“进货数量”有效，品名、进价售价以老商品为准。</p>
<p><label>类型：<select name="catid">
<? foreach((array)$cats as $cat) {?>
<option value="<?=$cat['catid']?>"><?=$cat['catname']?></option>
<? } ?>
</select></label></p>
<p><label>品名：<input type="text" name="caption" /></label></p>
<p><label>进货数量：<input type="text" name="num" /></label></p>
<p><label>进价：<input type="text" name="price_in" /></label></p>
<p><label>售价（估计）：<input type="text" name="price_sell" /></label></p>
<p><textarea name="memo"></textarea></p>
<p><button type="submit">保存</button>
</form>

</body>
</html>