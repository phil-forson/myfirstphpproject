<html lang="en">
<?php
$name = $gender = $age = "";
$Nameerr = $Ageerr = $Gendererr = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $Nameerr = "Name is required";
    } else {
        $name = strip_input($_POST['name']);
    }
    if (empty($_POST['age'])) {
        $Ageerr = "Age is required";
    } else {
        $age = strip_input($_POST['age']);
    }
    if (empty($_POST['gender'])) {
        $Gendererr = "Gender is required";
    } else {
        $gender = strip_input($_POST['gender']);
    }
}

function strip_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

?>
<form method="post" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="text" name='name' placeholder="First name" /><span style="color: red;">* <?php echo $Nameerr; ?></span><br>
    <input type="text" name="age" placeholder="Age" /><span style="color: red;">*<?php echo $Ageerr; ?></span><br>
    <input type="radio" name="gender" value="male" />Male
    <input type="radio" name="gender" value="female" />Female
    <input type="radio" name="gender" value="other" />Other <span style="color: red;">*<?php echo $Gendererr; ?>
        <input type="submit" name="submit" />
</form>

</html>