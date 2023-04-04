<?php
session_start();

?>
<table class="auto-style2" style="width: 56%">
<tr>
<td style="width: 243; height: 23px" class="auto-style1">First
name</td>
<td style="width: 229px; height: 23px;">Last Name</td>
<td style="height: 23px">Email:</td>


</tr>
<tr>
<td style="width: 243; height: 2" class="auto-style3"><?php echo
$_SESSION['firstname']; ?></td>
<td style="width: 229px" class="auto-style3"><?php echo
$_SESSION['lastname']; ?></td>
<td class="auto-style3"><?php echo $_SESSION['email']; ?></td>

<p><button onclick ="window.location.href='welcome.php';" name="Button5" type="button" value="Go Back" >Go Back</button></p>
</tr>
</table>
<?php

//<td style="height: 23px">ID:</td> 
/*<td class="auto-style3"><?php echo $_SESSION['id'];?></td> */