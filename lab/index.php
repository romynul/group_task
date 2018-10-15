<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Title</title>
	<style>
	
	.rs_menu
	{
		
    position:fixed;
    top: 50%;
    left: 50%;
    width:28em;
    height:20em;
    margin-top: -9em;
    margin-left: -15em; 
    border: 1px solid #ccc;
    background-color: rgba(0, 0, 0, 0.4);
	color:#fff;
	}
	
	input[type="text"] {
    padding: 3% 6%;
    border-radius: 6px;
    margin-bottom: 3%;
    font-size: 16px;
	color:#000;
	}
	table {
    display: block;
    margin-left: 20%;
	}
	input[type="submit"] {
    font-size: 17px;
    font-weight: bold;
    padding: 6px 29px;
    margin-left: 20%;
	}
	input[type="reset"] {
    font-size: 17px;
    font-weight: bold;
    padding: 6px 29px;
    margin-left: 10%;
	}

	button 
	{
	font-size: 17px;
    font-weight: bold;
    padding: 6px 20%;
    margin-left: 20%;
    margin-top: 2%;
	}
	span {
    font-weight: bold;
    font-size: 18px;
	}
	
	</style>
</head>
<body background="background.jpeg">
<div class="rs_menu">
<h1 align="center">Menu Management System</h1>
<form name="Restuarent Menu" method="post" action="write.php">
    <table>
        <tr>
            <td><span>Menu</span></td>
            <td>:</td>
            <td><input type="text" name="menu" placeholder="Menu Name"/></td>
        </tr>
        <tr>
            <td><span>Item</span></td>
            <td>:</td>
            <td><input type="text" name="item" placeholder="Item Name"/></td>
        </tr>
		<tr>
		<td><span>Price</span></td>
            <td>:</td>
            <td><input type="text" name="price" placeholder="price"/></td>
		</tr>
        
    </table>
	<input type="submit" value="Save"/>
        <input type="reset" />
</form>
<button>See Menu</button>
</div>
</body>
</html>