<?php
include_once "base.php";
$do = $_POST['table'];
$db = ${ucfirst($do)};

if (!empty($_FILES['img']['tmp_name'])) {

    echo $do;
    switch ($do) {
        case "reserves":
            move_uploaded_file($_FILES['img']['tmp_name'], "../images/tarotsSection/" . $_FILES['img']['name']);
            break;
        case "cardmeanings":
            move_uploaded_file($_FILES['img']['tmp_name'], "../images/cardMeaning/" . $_FILES['img']['name']);
            break;
        case "testimonials":
            move_uploaded_file($_FILES['img']['tmp_name'], "../images/testimonials/" . $_FILES['img']['name']);
            break;
    }

    // if ($do == "reserve") {
    // } else {
    //     move_uploaded_file($_FILES['img']['tmp_name'], "../images/" . $_FILES['img']['name']);
    // }

    $_POST['img'] = $_FILES['img']['name'];
}
if ($do == 'admin') {
    unset($_POST['pw2']);
}

unset($_POST['table']);
$db->save($_POST);

to("../admin.php?do=$do");
