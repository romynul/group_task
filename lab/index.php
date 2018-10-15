<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Title</title>
	<style>
	.rs_menu
	{
		height: 20%;
		width: 30%;
		background-color: #b7b7b7;
		display:block;
		margin:auto;
	}
	
	input[type="text"] {
    padding: 3% 6%;
    border-radius: 6px;
    margin-bottom: 3%;
    font-size: 16px;
	}
	</style>
</head>
<body>
<div class="rs_menu">
<form name="Restuarent Menu" method="post" action="write.php">
    <table>
        <tr>
            <td>Menu</td>
            <td>:</td>
            <td><input type="text" name="menu" placeholder="Menu Name"/></td>
        </tr>
        <tr>
            <td>Item</td>
            <td>:</td>
            <td><input type="text" name="item" placeholder="Item Name"/></td>
        </tr>
		<tr>
		<td>Price</td>
            <td>:</td>
            <td><input type="text" name="price" placeholder="price"/></td>
		</tr>
        <tr>
            <td><input type="submit" value="Save"/></td>
            <td><input type="reset" /> </td>
            
        </tr>
    </table>
</form>
<hr>
<a href='read.php'>See Menu</a>
</div>
</body>
</html>