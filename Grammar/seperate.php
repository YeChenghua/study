<p>
    This is going to be ignored by PHP and displated by the browser
</p>
<?php
echo'while this is going to be parsed.';
?>
<p>
    This will also be ignored by PHP and displayed by then browser
</p>

<?php
if ($expression==true)?>
This will show if the expression is true.
<?php
else:  ?>
Otherwise this will show.
<?php endif; ?>
//高级分离术

<script language="php">
    echo'some editors (like Frontpage) don\'t
    like precessing instructions';
</script>

<?php
echo 'if you want to serve XHTML or XML documents,do it like this';
?>

<?php
echo'we omitted the last closing tag';
?>

/**
 * Created by PhpStorm.
 * User: YCH
 * Date: 2018/10/31
 * Time: 14:45
 */