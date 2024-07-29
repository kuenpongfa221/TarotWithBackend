<?php
include_once "base.php";
$do = $_POST['table'];
$db = ${ucfirst($do)};

// dd($_POST);
// dd($_FILES);
// Array
// (
//     [title] => 
//     [btnText] => 
//     [table] => reserve
// )
// Array
// (
//     [img] => Array
//         (
//             [name] => 
//             [full_path] => 
//             [type] => 
//             [tmp_name] => 
//             [error] => 4
//             [size] => 0
//         )

// )

$row = $db->find($_POST['id']);
if (!empty($_FILES['img']['tmp_name'])) {

    if ($do == 'reserve') {
        move_uploaded_file($_FILES['img']['tmp_name'], "../images/tarotsSection/" . $_FILES['img']['name']);
    } else {
        move_uploaded_file($_FILES['img']['tmp_name'], "../images/" . $_FILES['img']['name']);
    }
    $row['img'] = $_FILES['img']['name'];
}

if (!empty($_POST['title'])) {
    $row['title'] = $_POST['title'];
}
if (!empty($_POST['btnText'])) {
    $row['btnText'] = $_POST['btnText'];
}

$db->save($row);

to("../admin.php?do=$do");
