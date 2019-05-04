<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
<h1>Shopping Cart</h1>
<script>
	var cart=[];

	var Item = function(name,price,count)
	{
		this.name=name;
		this.price=price;
		this.count=count;
	};

function addItemToCart(name,price,count)
{
	for(var i in cart)
	{
		if(cart[0].name===name)
			cart[i].count++;
		return;
	}
	var item=new Item(name,price,count);
	cart.push(item);
}
function removeItemFromCart(name)
{
	for(var i in cart)
	{
		if(cart[i].name===name){
				cart[i].count--;
				if(cart[i].count===0){
					cart.splice(i,1);
				}
				break;
		}
	}
}
addItemToCart("apple",12,1);
addItemToCart("mango",12,1);

addItemToCart("apple",12,1);
console.log(cart[0].count);

removeItemFromCart("apple");
console.log(cart);
console.log(cart[0].count);

</script>
</body>
</html>