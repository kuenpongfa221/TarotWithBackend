<?php
include_once "base.php";
$do = $_POST['table'];
$db = ${ucfirst($do)};

// dd($_POST);
// Array
// (
//     [text2] => Array
//         (
//             [0] => aaa
//         )

//     [href2] => Array
//         (
//             [0] => bbbb
//         )

//     [table] => footer
//     [main_id] => 1
// )


if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $key => $id) {
        if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
            $db->del($id);
        } else {
            $row = $db->find($id);
            $row['title'] = $_POST['title'][$key];
            $row['href'] = $_POST['href'][$key];
            $db->save($row);
        }
    }
}


if (isset($_POST['title2'])) {
    foreach ($_POST['title2'] as $key => $text) {
        if ($text != '') {
            $db->save([
                'title' => $text,
                'href' => $_POST['href2'][$key],
                'main_id' => $_POST['main_id']
            ]);
        }
    }
}

to("../admin.php?do=$do");
