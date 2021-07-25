<?php $db = mysql_connect("localhost","root",)
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
        <form method="post" action="">
			        <fieldset>
				        <legend>ADD PRODUCT</legend>
				            <table>
					            <tr>
						            <td>Name</td>					            
					            </tr>
					            <tr>
					            	<td><input type="text" name="username"></td>
					            </tr>
					            <tr>
						            <td>Buying Price</td>
						        </tr>
						        <tr>
						            <td><input type="text" name="password"></td>
					            </tr>
					            <tr>
						            <td>Selling Price</td>					            
					            </tr>
					            <tr>
					            	<td><input type="text" name="username"></td>
					            </tr>
					            <tr>
						            <td> <input type="checkbox" name="iteam[]">Display</td>
					            </tr>
					            <tr>
						            <td><br><input type="submit" name="submit" value="SAVE">
						            </td>
					            </tr>
		                    </table>
			        </fieldset>
		       </form>
</body>
</html>