<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data"> <!-- or GET  Ex1 and 2-->
    <div>
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $gender = $_POST['genders'];
            echo 'Thank You ' .$name. ' '.$firstname. ' , You are a '.$gender. ' ';
            // Check if the uploaded file has a PDF extension
            $fileExtension = pathinfo($_FILES['mon_fichier']['name'], PATHINFO_EXTENSION);
            if ($fileExtension === 'pdf') {
                echo "File uploaded successfully.";
            } else {
                echo "File extension error. Please upload a PDF file.";
            }
            $hide=1;
        }
        ?>
        <?php if(!isset($hide)) { ?>
        <select name="genders">
            <option value="Please select a gender">--Select your gender</option>
            <option value="Woman">Woman</option>
            <option value="Man">Man</option>
            <option value="Non Binary">Non binary</option>
            <option value="Other">Other</option>
            <option value="Wallmart Bag">Wallmart bag</option>
        </select>
        <label for="lastname">Nom</label>
        <input name="lastname">
        <label for="firstname">Prénom</label>
        <input name="firstname">
        <input type="file" name="mon_fichier"><br>
        <button type="submit" name="submit">Submit</button>
        
</form>  


<?php }?>
        </div>


</body>
</html>

<?php

// var_dump($_POST);

// if (isset($_POST['lastname']) && (isset($_POST['firstname']))){
//     if(!empty($_POST['lastname']) && (!empty($_POST['lastname']))) {
//         echo ('Hello ' . $_POST['lastname']); //$_POST['lastname']);
//         echo (" ");
//         echo ($_POST['firstname']); //$POST['firstname']);
//         echo ("<br>");
//     }
// }

// if (isset($_POST['genders'])) {
//     if(!empty($_POST['genders'])) {
//         foreach($_POST['genders'] as $selected) {
//             echo 'You are (a) ' . $selected;
//         }
//     }   else {
//         echo 'Please select a gender.';
//     }
// }

?>