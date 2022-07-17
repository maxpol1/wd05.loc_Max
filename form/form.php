<?php
//session_start();
//$connection = mysqli_connect('mysql', 'root', 'root', 'wd05');


$filesAdd = $_FILES["addFile"];

echo "<pre>";
var_dump($filesAdd);
echo "</pre>";

if (!is_dir('../uploads')) {
    mkdir('../uploads', 0777, true);
}

//$newName =time() .  $filesAdd["name"];

if (is_file($filesAdd["name"])) {
    $newName = time() . $filesAdd["name"];
    move_uploaded_file($filesAdd["tmp_name"], '../uploads/' . $newName);
} else {
    move_uploaded_file($filesAdd["tmp_name"], '../uploads/' . $filesAdd["name"]);
}
//rmdir(__DIR__.'/uploads');

echo "<pre>";
print_r(scandir('/'));
echo "</pre>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";
echo "<br>";

echo "<br>";
echo "<br>";
print_r(realpath($filesAdd["name"]));
echo "<br>";

echo "<pre>";
//print_r($_POST);
echo "</pre>";

echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


//echo "<pre>";
//print_r();
//echo "</pre>";
