<?php include_once "./api/base.php"; ?>


<style>
    .td-color {
        background-color: lightsalmon;

    }

    .td-center {
        text-align: center;
    }

    .table-width {
        width: 60vw;
    }

    .input-width {
        width: 100%;
        height: 10vh;
    }

    td>img {
        width: 100%;
    }

    .top {
        width: 60vw;
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
        align-items: end;
    }

    .addBtn-style {
        width: 120px;
        height: 60px;
        font-size: 1rem;
        border-radius: 10%;
        background-color: dodgerblue;
        color: white;
        cursor: pointer;
    }

    .addBtn-style:hover {
        transition: all .3s ease;
        background-color: #1666b5;
    }

    .button-style {
        width: 120px;
        height: 60px;
        font-size: 1rem;
        border-radius: 10%;
        background-color: teal;
        color: white;
        cursor: pointer;

    }

    .button-style:hover {
        transition: all .3s ease;
        background-color: #004545;
    }
</style>

<section class="top">
    <h2>牌義 • 教學 管理</h2>
    <button type="button" class="addBtn-style" onclick="op('#cover','#cvr','./modals/<?= $do; ?>.php')" value="新增網站標題圖片">新增</button>
</section>

<br>
<form action="./api/edit.php" method='post'>
    <table class="table-width">
        <tr>
            <td class='td-color td-center' width='25%'>圖片</td>
            <td class='td-color td-center' width='17%'>標題</td>
            <td class='td-color td-center' width='26%'>內文</td>
            <td class='td-color td-center' width='7%'>顯示</td>
            <td class='td-color td-center' width='7%'>刪除</td>
            <td class='td-color td-center'></td>
        </tr>
        <tr style="margin-top:0.2rem; display:block;"></tr>
        <?php
        $rows = $Cardmeanings->all();
        foreach ($rows as $row) {
        ?>
            <tr>
                <td class="td-center" width='25%'><img src="./images/cardMeaning/<?= $row['img'] ?>" alt=""></td>
                <td class="td-center" width='17%'><span><?= $row['title'] ?></span></td>
                <td class="td-center" width='26%'><span><?= $row['contents'] ?></span></td>
                <td class="td-center" width='7%'><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == '1') ? "checked" : "" ?>></td>
                <td class="td-center" width=' 7%'><input type="checkbox" name="del[]" id="del" value="<?= $row['id'] ?>"></td>
                <td class="td-center"><button type="button" class='button-style' onclick="op('#cover','#cvr','./modals/<?= $do; ?>_update.php?id=<?= $row['id']; ?>')">更換圖片與文字</button></td>
                <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
            </tr>
        <?php
        }
        ?>
    </table>
    <input type="hidden" name='table' value='<?= $do ?>'>
    <input class='button-style' type="submit" value="修改確定">
    <input class='button-style' type="reset" value="重置">
</form>