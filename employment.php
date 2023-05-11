<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .error {
            color: red;
        }
    </style>

<?php
$name = $website = $position = $experience = $estatus = $comments = "";

//
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    // Validation for empty name
    if (empty($_POST['name'])){
        echo "<span class=\"error\">Error: First Name Required </span>";
    }
    // validation for empty website
    elseif(empty($_POST['website'])){
        echo "<span class=\"error\"> Error: Website Required!! </span>";
    }
    elseif(!preg_match("/^[a-zA-Z]*$/", $_POST['name'])){
        echo "<span class=\"error\"> Error: Name must be letter only!! </span>";
    }
    elseif (!preg_match('/^(https?:\/\/)?([a-z0-9-]+\.)+[a-z]{2,6}([\/?#].*)?$/i', $_POST['website'])){
        
        echo "<span class=\"error\"> Error: Website format incorrect!! </span>";
    }
    else {

        $name = validate($_POST['name']);
        $website = validate($_POST['website']);
        $position = validate($_POST['position']);
        $experience = validate($_POST['experience']);
        $estatus = validate($_POST['estatus']);
        $comments = validate($_POST['comments']);
    }
}


//function to validate inputted data
function validate($data){
    $data = trim($data);   // remove unnecessary spaces
    $data = stripslashes($data);  //remove unnecessary slashes
    $data = htmlspecialchars($data);  //remove any special chars for security
    return $data;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" name="employment" method="post" >

<table width='600' border="0" cellspacing='1' cellpadding='1'>

    <tr>
        <td> <h2>Employment Application </h2></td>
        <td></td>
    </tr>

    <tr>
        <td>Name</td>
        <td><input type="text" name="name" maxlength="50"></td>
    </tr>
    <tr>
        <td>Website</td>
        <td><input type="text" name="website" maxlength="50"></td>
    </tr>
    <tr>
        <td>Position</td>
        <td>
            <select name="position" id="">
                <option value="Accountant">Accountant</option>
                <option value="Receptionist"> Receptionist</option>
                <option value="Admin"> Admin</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Experience Level</td>
        <td> <select name="experience" id="">
            <option value="Entry Level">Entry</option>
            <option value="Medium Level">Medium</option>
            <option value="Experienced">Experienced</option>
        </select><td>
    </tr>
    <tr>
        <td>
            Employment Status
        </td>
        <td>
            <input type="radio" name="estatus" value="Employed" checked/> Employed
            <input type="radio" name="estatus" value="Unemployed" /> Unemployed
            <input type="radio" name="estatus" value="Student" /> Student
        </td>
    </tr>
    <tr>
        <td>Additional Comments: </td>
        <td><textarea name="comments" id="" cols="45" rows="5"></textarea></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Submit"/>  <input type="reset" name="reset" value="Reset"/></td>
    </tr>
</table>


</form>    

<?php
//$name = $website = $position = $experience = $estatus = $comments = "";
    echo "Name:        ".$name."<br>";
    echo "Website:     ".$website."<br>";
    echo "Position:    ".$position."<br>";
    echo "Experience:  ".$experience."<br>";
    echo "Employement: ".$estatus."<br>";
    echo "Comments: "."<br>".$comments."<br>";
?>
</body>
</html>