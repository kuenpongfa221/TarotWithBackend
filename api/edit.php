<?php
include_once "base.php";
$do = $_POST['table'];
dd($_POST);
// echo $do;
$db = ${ucfirst($do)};

foreach ($_POST['id'] as $key => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $db->del($id);
        // echo "correct";
    } else {
        $row = $db->find($id);

        switch ($do) {
            case 'reserve':
                // $row['sh'] = (isset($_POST['sh']) && (strval($id) == $_POST['sh'])) ? 1 : 0;
                $row['sh'] = (isset($_POST['sh']) && (in_array($id, $_POST['sh']))) ? 1 : 0;
                // echo (strval($id) == $_POST['sh']) ? 'right' : 'false';
                break;
            case 'cardmeanings':
                $row['sh'] = (isset($_POST['sh']) && (in_array($id, $_POST['sh']))) ? 1 : 0;
                break;
            case 'testimonials':
                $row['sh'] = (isset($_POST['sh']) && (in_array($id, $_POST['sh']))) ? 1 : 0;
                break;
            case 'product':
                $row['sh'] = (isset($_POST['sh']) && (in_array($id, $_POST['sh']))) ? 1 : 0;
                break;
            case 'service':
                $row['sh'] = (isset($_POST['sh']) && (in_array($id, $_POST['sh']))) ? 1 : 0;
                break;
            case 'footer':
                $row['sh'] = (isset($_POST['sh']) && (in_array($id, $_POST['sh']))) ? 1 : 0;
                break;
        }
        // dd($row);
        $db->save($row);
    }
}

to("../admin.php?do=$do");
