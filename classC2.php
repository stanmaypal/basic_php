<?php
if(isset($_POST['ok']))
{
    $n=$_POST['n1'];
    if($n=='A'||$n=='a'||$n=='E'||$n=='e'||$n=='I'||$n=='i'||$n=='O'||$n=='o'||$n=='U'||$n=='u')
    {
        echo $n." is Vowel.";
    }
    else{
        echo $n. "is consonent";
    }
}
?>