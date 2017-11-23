
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Employee Name</td>
            <td><input type='text' name='emp_name' class='form-control' placeholder='EX : john doe' required /></td>
        </tr>
 
        <tr>
            <td>Employee Department</td>
            <td><input type='text' name='emp_dept' class='form-control' placeholder='EX : Web Design, App Design' required></td>
        </tr>
 
        <tr>
            <td>Employee Salary</td>
            <td><input type='text' name='emp_salary' class='form-control' placeholder='EX : 180000' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
