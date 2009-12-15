<div align="center" style="padding:5; background-color: #EEEEEE; width:350;">
<form method="POST" action="<?echo base_url().''.$formaction?>" name="inviteform" id="inviteform">
<?php $mess=$this->session->flashdata('messagesent');
if(isset($mess)){
	echo $mess;
}
?>
<table><tr>
<td>Message<td>
<?php $data=array('name'=>'message',
				  'rows'=>10,
				  'cols'=>50);?>
<td><?=form_textarea($data)?></td></tr></table>
<table style="background-color:white; border:black solid thin;">
<SCRIPT LANGUAGE="JavaScript">
function togglechecked(){ 
      for (var i = 0; i < document.inviteform.elements.length; i++) {
        var e = document.inviteform.elements[i];
        if ((e.disabled == false) && (e.name != 'allbox') && (e.type == 'checkbox')) {
    e.checked = document.inviteform.allbox.checked;
        }
      }
    }
    function toggleselect(){ 
      document.inviteform.allbox.checked = !document.inviteform.allbox.checked;
        togglechecked();}
</SCRIPT>
<!--<tr bgcolor="#FFFFFF"><td colspan="3" align="center"><h1 align="center">Invite Contacts</h></td></tr> -->
<tr> <td colspan="3" style="padding:4" align="center"><input name="submit" type="submit" value="Send Invitation" style="width:50%;height: 25px;"></td>
           </tr>
<tr bgcolor="#CCCCCC"><td>
<input type="checkbox" name="allbox" id="allbox" value="nothing" onClick="togglechecked()" checked> 
</td><td align="center"><b>Numbers</b></td><td><b>Email</b></td></tr>
<input type="hidden" name="formname" value="invite">
<input type="hidden" name="sender" value="<?=$login?>">
<?
$count = count($emails);
                   for ($i=0; $i<$count; $i++)
                   {
                      $emails[$i] = trim($emails[$i]);
                     if ($emails[$i]!="" && eregi("@", $emails[$i]))
                     {
          					   $emails[$i] = strtolower($emails[$i]);
                       echo "<tr><td>" . "<input type=\"checkbox\" name=\"addresses[]\" value=\"$emails[$i]\" checked>" . "</td><td align='center'>$i</td><td>$emails[$i]</td></tr>";
                     }
                   }
?>
<tr>
               <!--<tr><td><input type="checkbox" name="allbox2" value="nothing" onClick="toggleselect()" checked></td><td><a href="javascript:toggleselect()">Select/Deselect All</a></td><td></td></tr>

            --><tr><td colspan="3"><hr></td></tr><tr><td colspan="3" style="padding:4" align="center"><input name="submit" type="submit" value="Send Invitation" style="width:50%;height: 25px;"></td>
           </tr>
           <tr><?php echo $pagination;?></tr>
          </table>
          </form>
</div>