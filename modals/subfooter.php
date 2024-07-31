<style>
    .subfooter-input {
        width: 200px;
        border: #999 1px solid;
        border-radius: 3px;
        background: #EFEFEF;
        padding: 5px;
        margin: 3px;
        font-size: 1rem;
    }

    .subfooter-button {
        width: 80px;
        height: 30px;
        border: 1px black solid;
        border-radius: 4px;
        margin: 5px;
        cursor: pointer;
        background-color: #EFEFEF;
        transition: all 0.2s ease;
    }

    .subfooter-button:hover {
        width: 80px;
        height: 30px;
        border: 1px black solid;
        border-radius: 4px;
        margin: 5px;
        background-color: #c7c7c7;
    }
</style>

<?php include_once "../api/base.php"; ?>
<h3 class='cent'>編輯次選單</h3>
<hr>
<form action="./api/subfooter.php" method="post" enctype="multipart/form-data">
    <table style='width:70%;margin:auto;' id="submenu">
        <tr>
            <td>次選單名稱：</td>
            <td>次選單超連結：</td>
            <td>刪除</td>
        </tr>
        <?php
        $rows = $Footer->all(['main_id' => $_GET['id']]);
        foreach ($rows as $row) {
        ?>
            <tr>
                <td><input class="subfooter-input" type="text" name="title[]" value="<?= $row['title']; ?>"></td>
                <td><input class="subfooter-input" type="text" name="href[]" value="<?= $row['href']; ?>"></td>
                <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
            </tr>
        <?php
        }
        ?>
    </table>
    <div style="text-align:center">
        <input type="hidden" name="table" value='footer'>
        <input type="hidden" name="main_id" value="<?= $_GET['id']; ?>">
        <input class="subfooter-button" type="submit" value="修改確定">
        <input class="subfooter-button" type="reset" value="重置">
        <input class="subfooter-button" type="button" value="更多次選單" onclick="addSub()">
    </div>
</form>
<script>
    function addSub() {
        let str = `<tr>
                <td><input type="title" name="title2[]" ></td>
                <td><input type="text" name="href2[]" ></td>
                <td></td>
            </tr>`
        $("#submenu").append(str)
    }
</script>