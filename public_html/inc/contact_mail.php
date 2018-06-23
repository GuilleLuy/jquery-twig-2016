<?php
include '../../config.php';
$toEmail = html_entity_decode ($cliente_mail_2);
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
print "<p class='success'>".$mail_sent."</p>";
?>
<script>
setTimeout(function(){ $.fancybox.close(); }, 3000);
</script> 
<?php
} else {
print "<p class='error'>".$mail_fail."</p>";
?>
<?php
}
?>