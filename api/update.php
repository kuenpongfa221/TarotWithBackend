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

    switch ($do) {
        case 'reserves':
            move_uploaded_file($_FILES['img']['tmp_name'], "../images/tarotsSection/" . $_FILES['img']['name']);
            break;
        case 'cardmeanings':
            move_uploaded_file($_FILES['img']['tmp_name'], "../images/cardMeaning/" . $_FILES['img']['name']);
            break;
        case 'testimonials':
            move_uploaded_file($_FILES['img']['tmp_name'], "../images/testimonials/" . $_FILES['img']['name']);
            break;
        case 'product':
            move_uploaded_file($_FILES['img']['tmp_name'], "../images/testimonials/" . $_FILES['img']['name']);
            break;
        case 'service':
            move_uploaded_file($_FILES['img']['tmp_name'], "../images/testimonials/" . $_FILES['img']['name']);
            break;
    }
    // if ($do == 'reserve') {
    //     move_uploaded_file($_FILES['img']['tmp_name'], "../images/tarotsSection/" . $_FILES['img']['name']);
    // } else {
    //     move_uploaded_file($_FILES['img']['tmp_name'], "../images/" . $_FILES['img']['name']);
    // }
    $row['img'] = $_FILES['img']['name'];
}

switch ($do) {
    case "reserves":
        if (!empty($_POST['title'])) {
            $row['title'] = $_POST['title'];
        }
        if (!empty($_POST['btnText'])) {
            $row['btnText'] = $_POST['btnText'];
        }
        break;
    case 'cardmeanings':
        if (!empty($_POST['title'])) {
            $row['title'] = $_POST['title'];
        }
        if (!empty($_POST['contents'])) {
            $row['contents'] = $_POST['contents'];
        }
        break;
    case 'testimonials':
        if (!empty($_POST['name'])) {
            $row['name'] = $_POST['name'];
        }
        if (!empty($_POST['jbTitle'])) {
            $row['jbTitle'] = $_POST['jbTitle'];
        }
        if (!empty($_POST['contents'])) {
            $row['contents'] = $_POST['contents'];
        }
        break;
    case 'product':
        if (!empty($_POST['title'])) {
            $row['title'] = $_POST['title'];
        }
        if (!empty($_POST['contents'])) {
            $row['contents'] = $_POST['contents'];
        }
        break;
    case 'service':
        if (!empty($_POST['title'])) {
            $row['title'] = $_POST['title'];
        }
        if (!empty($_POST['contents'])) {
            $row['contents'] = $_POST['contents'];
        }
        break;
}

$db->save($row);

to("../admin.php?do=$do");
