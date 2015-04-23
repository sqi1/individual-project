<!DOCTYPE html>
<html>
<head>
        <title> Entry Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                <script>
                
                function selectLoc()
                {
                        var selection = document.getElementById("selection");
                        var index = selection.options[selection.selectedIndex].value;
                        
                        document.getElementById("lid").value = index;
                }
        
        </script>
        </head>
<body>
<br>
<div class="col-md-4">
        <form name='basic' method='POST' action='individua_persons.php' onSubmit='return validate();'>
                <table class="table table-condensed" style="border: 1px solid #dddddd; border-radius: 5px; box-shadow: 2px 2px 10px;">
                        <tr><td colspan="2" style="text-align: center; border-radius: 5px; color: white; background-color:#333333;"><h2>Person Form</h2></td></tr>
                        
                        <tr><td>First Name: </td><td><input type='edit' name='first_name' value='' size='30'></td></tr>
                        <tr><td>Last name: </td><td><input type='edit' name='last_name' value='' size='20'></td></tr>
                        <tr><td>Phone NO.: </td><td><input type='edit' name='phone' value='' size='30'></td></tr>
                        <tr><td>Office Room: </td><td><input type='edit' name='office' value='' size='20'></td></tr>
                        <tr><td>Role: </td><td>  <select id="role" name="role">
                                        <option value="1" selected> CEO </option>
                                        <option value="2"> Manager </option>
                                        <option value="3"> Staff </option>
                        </select></td></tr>
						<tr><td>Password: </td><td><input type='edit' name='password' value='' size='20'></td></tr>
                       
                                                                                </select></td><td><input type="hidden" id="lid" value="1" name="locId"></td></tr>
                        <tr><td><input type="submit" name="submit" class="btn btn-success" value="Add Entry"></td>
                                <td style="text-align: right;"><input type="reset" class="btn btn-danger" value="Reset Form"></td></tr>
                </table>
                
                <a href="individua_persons.php" class="btn btn-primary">Display Database</a>
        </form>
</div>

</body>
</html>
