 <center><span><?if(isset($message)) echo $message; ?></span></center> 
<? echo form_open('admin/login/validate'); ?>
			<table cellpadding="3" cellspacing="0">
			 	<tr>
			 		<td style="font-weight: bold;text-align: center;font-size: 20px;" colspan="2">
			 			Admin Login
			 		</td>
			 	</tr>
			 	<tr>
			 		<td style="font-weight: bold;">
			 			Username:
			 		</td>
			 		<td>
			 		 	<input type="text" name="uname"  /> 
			 		</td>
			 	</tr>
			 	<tr>
			 		<td style="font-weight: bold;">
			 			Password:
			 		</td>
			 		<td>
			 		 	<input type="password" name="paswd"  /> 
			 		</td>
			 	</tr>
			 	<tr>
			 		<td style="font-weight: bold;">
			 			
			 		</td>
			 		<td align="right">
			 		 	<input type="submit" name="submit" value="submit"  /> 
			 		</td>
			 	</tr>
			</table>
			<?echo form_close(); ?>