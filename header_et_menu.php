<?php
	require "header1.php";
?>
<table style="height:100%;border-collapse:collapse;">
<tr height="5%">
<td colspan="2" style="padding-top:0px;padding-left:0px;padding-right:0px;padding-bottom:0px;">
	<table class="tableBandeauHaut">
	<tr>
	<td><img src="img/GSS.png"></td>
	<td width="100%" align="center">
	Stock actuel<br>
	<span class="spanNomStock"><?php echo "$stock->nom";?></span>
	</td>
	<td nowrap align="right" style="padding:5px;">
	<?php echo "$utilisateur->prenom $utilisateur->nom";?><br>
	<a class="lienFondVert" href="logout_trt.php">Se déconnecter</a>
	</td>
	</tr>
	</table>
</td>
</tr>
<tr>
<td width="90%" valign="top">