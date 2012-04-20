<? if(!defined('IN_APP')) exit('Access Denied');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>鸣鹤电器</title>
</head>
<script type="text/javascript">
var price_in = <?=$product['price_in']?>;
function checkform(form) {
	if (form.price.value < price_in) {
		return confirm("售价可能低于进价，是否确认销售？");
	}
	return true;
}
</script>
<body>
<? include $this->gettpl('header');?>

<h1><?=$product['caption']?></h1>
<h2 title="<?=$product['price_in']?>">售价：<?=$product['price_sell']?></h2>
<form action="<?=util::makeurl( 'sale', 'confirm', array('pid' => $product['pid']))?>" method="post" onsubmit="return checkform(this);">
<p><label>实际售价：<input type="text" name="price" value="<?=$product['price_sell']?>" /></label></p>
<p><button type="submit">确定购买</button></p>
</form>
<hr />
<span><?=$product['memo']?></span>

</body>
</html>