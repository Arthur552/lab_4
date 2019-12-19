<body>

<form action="blog.php" method="post">
    <p><label>
            <textarea type="text" name="text" id="user"></textarea>
        </label></p>
    <p><input type="submit" name="submit" value="записать блог"></p>
</form>
<form action="blog.php" method="post">
    <p><input type="submit" name="button" value="Очистить текстовый файл"></p>
</form>

<form method='post' action="blog.php">
    <label>
        <input name="mycolor" type="checkbox" value="yes">
    </label>Размер<br>
    <input name="mycolor" type="checkbox" value="ye">Размер<br>
    <label for="user"></label><textarea type="text" name="text"></textarea>
    <input type='submit' name="myscolor" value='Отправить'>
</form>
<div><a href="index.html">Назад</a><br />
<?php
echo "<link rel='stylesheet' href='css.css'>";
error_reporting(0);
$file = fopen("a.txt" , "at");
$text = $_POST['text'];
     fwrite($file,"$text&nbsp;<br />");
     fclose($file);
$file = fopen("a.txt" , "r+t");
while (!feof($file)){
    echo fread ($file,1);
}
fclose ($file);
if($_POST['button']){
    $f = fopen('a.txt', 'w');
    fclose($f);
}
if(isset($_POST['mycolor']) &&
    $_POST['mycolor'] == 'yes')
{
    echo filesize("a.txt")."<br />";
}
else
{
    echo "Надо выбрать бро";
}
?>
</body>