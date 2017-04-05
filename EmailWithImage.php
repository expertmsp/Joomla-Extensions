
<?php
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n"; 
 ob_start();

?>

<html>
   <head><title>Hello</title></head>
   <body>
   <h1>This is email content</h1>
   <table width="50%" bgcolor="red">
        <tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>Mobile Number</th>
        </tr>
        <?php
        for($i=1;$i<=10;$i++)
        {
        ?>
        <tr>
            <td>Name<?php echo $i?></td>
            <td>Last Name<?php echo $i?></td>
            <td>Mobile Number<?php echo $i?></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="4"><img src="http://unikcctv.com/photos/130619104004_pro.png" /></td> 
        </tr>
    </table>
   </body>
</html>

<?php
 $variable = ob_get_clean();
echo $variable;
if(mail('malkhan.s@cisinlabs.com', 'My Subject', $variable, $headers))
    echo "Success";
else
    echo "Failed";
?>
