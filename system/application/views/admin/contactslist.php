<div align="center" style="padding:5; background-color: #EEEEEE; width:350;">
<form method="POST" action="<?=$formaction?>" name="inviteform" id="inviteform">
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
<tr bgcolor="#FFFFFF"><td colspan="3" align="center"><h1 align="center">Invite Contacts</h1></td></tr>
<tr bgcolor="#CCCCCC"><td>
<input type="checkbox" name="allbox" id="allbox" value="nothing" onClick="togglechecked()" checked> 
</td><td><b>Name</b></td><td><b>Email</b></td></tr>
<input type="hidden" name="formname" value="invite">
<input type="hidden" name="sender" value="<?=$login?>">
<?
$maxin = count($names);


                   for ($i=0; $i<$maxin; ++$i)
                   {
                     $emails[$i] = trim($emails[$i]);
                     if ($emails[$i]!="" && eregi("@", $emails[$i]))
                     {
          					   $emails[$i] = strtolower($emails[$i]);
                       echo "<tr><td>" . "<input type=\"checkbox\" name=\"addresses[]\" value=\"$emails[$i]\" checked>" . "</td><td>$names[$i]</td><td>$emails[$i]</td></tr>";
                     }
                   }

?>
<tr>
               <tr><td><input type="checkbox" name="allbox2" value="nothing" onClick="toggleselect()" checked></td><td><a href="javascript:toggleselect()">Select/Deselect All</a></td><td></td></tr>

            <tr> <td colspan="3" style="padding:4"><input name="submit" type="submit" value="Invite Selected" style="width:100%"></td>
           </tr>
          </table></form>
</div>