<html lang="en">

<?php // $startdate = strtotime("Saturday");
// $enddate = strtotime("+6 weeks", $startdate);

// while ($startdate < $enddate){
//     echo date('M/d', $startdate).'<br>';
//     $startdate = strtotime("+1 week", $startdate);
// }

// $firstdate = strtotime("14th November");

// $daysuntil = ceil(($firstdate-time())/60/60/24);

// echo "you have $daysuntil days until July 4th"

// echo "I have a $color. This is a $text";
// $myFile = fopen('dictionary.txt','r') or die("unable to open");

// echo fread($myFile, filesize('dictionary.txt'));
// while (!feof($myFile)){
//     echo fgets($myFile).'<br>';
// }

// fclose($myFile)

// $myFile = fopen("testfile.php",'a') or die("unable to open file");

// $text = "My name is Philemon\n";

// fwrite($myFile, $text);

// $text2 = "And this is my day 2 of coding in PHP\n";

// fwrite($myFile, $text2);

// fclose($myFile)

$target_dir = 'uploads/';
$target_file = $target_dir.basename($_FILES["file"]['name']);
$upload0k = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (isset($_POST['submit'])){
    $check = getimagesize($_FILES['file']['tmp_name']);

    if ($check !== false){
        echo "File is an image -".$check['mime'].'.<br>';
        $upload0k = 1;
    }
    else {
        echo "File is not an image<br>";
        $upload0k = 0;
    }

    if (file_exists($target_file)){
        echo "Sorry file already exists<br>";
        $upload0k = 0;
    }

    if ($_FILES['file']['size'] > 500000){
        echo "File is too large<br>";
        $upload0k = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ){
        echo "Sorry only jpg and png files accepted<br>";
        $upload0k = 0;
    }

    if ($upload0k == 0){
        echo "Sorry your file was not uploaded<br>";
    }

    else {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
            echo "Your file ".htmlspecialchars($_FILES['file']['name'])."has been uploaded<br><hr>";
            echo "Hello ".$_POST['name'];

            $image = fopen($target_file, 'w') or die('File could not be displayed');
    
            echo readfile($target_file);       
        }
        else {
            echo "Sorry there was a problem uploading your file<br>";
        }
    }


}
?>
</html>