<!DOCTYPE html>
<html lang="en">
<head>
    <title>Person Profile</title>
</head>
<body>
    <form method="post" action="registrationCheck.php">
        <fieldset>
            <legend>registration</legend>
    <table border="1px"  width="100%px">
        <tr>
            <th colspan="3">
                <h1 align="center">PERSON PROFILE</h1>
            </th>
        </tr>
        <tr>
            <th >
                Name
            </th>
            <td>
                <input type="text" name="name"><br/>
            </td>
            <td>

            </td>
        </tr>
        <tr>
            <th >
                Email
            </th>
            <td>
                <input type="email" name="email"><br/>
            </td>
            <td>
                
            </td>
        </tr>
        <tr>
            <th >
                User Name
            </th>
            <td>
                <input type="text" name="username"><br/>
            </td>
            <td>
                
            </td>
        </tr>
         <tr>
            <th >
                Password
            </th>
            <td>
                <input type="password" name="password"><br/>
            </td>
            <td>
                
            </td>
        </tr>
        <tr>
            <th >
                Confirm Password
            </th>
            <td>
                <input type="password" name="repassword"><br/>
            </td>
            <td>
                
            </td>
        </tr>
        <tr>
            <th >
                Gender
            </th>
            <td>
                <input type="radio" value="Male" name="genderinput">Male
                <input type="radio" value="female" name="genderinput">Female
                <input type="radio" value="others" name="genderinput">others
            </td>
            
        </tr>
        <tr>
            <th >
                Date of Birth
            </th>
            <td>
                <input type="date" name="dob"><br/>
            </td>
            <td>
                
            </td>
        </tr>
        
        <tr>
            <th colspan="3" height="20">
               
                
            </td>
        </tr>
        <tr>
            <th colspan="3" height="20">
                <input type="submit" name="click" value="Submit" aligh="right">
                <input type="reset" name="click" value="Reset" aligh="right">
                
            </td>
        </tr>
    </table>
</fieldset>
</form>
    
    
</body>
</html>