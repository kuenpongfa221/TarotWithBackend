<style>
    .cent {
        text-align: center;
        font-size: 1.8rem;
    }

    form {
        margin-top: 20px;
        margin-left: 20px;
    }

    .input-form {
        width: 200px;
        border: #999 1px solid;
        border-radius: 3px;
        background: #EFEFEF;
        padding: 5px;
        margin: 3px;
    }

    .title-form {
        font-size: 1.25rem;
    }

    .btn-end-form {
        width: 50px;
        height: 30px;
        border: 1px black solid;
        border-radius: 4px;
        margin: 5px;
        cursor: pointer;

        background-color: #EFEFEF;
        transition: all 0.2s ease;
    }

    .btn-end-form:hover {
        width: 50px;
        height: 30px;
        border: 1px black solid;
        border-radius: 4px;
        margin: 5px;

        background-color: #c7c7c7;
    }
</style>

<h3 class='cent'>新增標題區圖片</h3>
<hr>

<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td class="title-form">圖片：</td>
            <td><input type="file" name="img" id="img" class='input-form'></td>
        </tr>
        <tr>
            <td class="title-form">標題文字：</td>
            <td><input type="text" name="title" id="title" class='input-form'></td>
        </tr>
        <tr>
            <td class="title-form">內文文字：</td>
            <td><input type="text" name="contents" id="contents" class='input-form'></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="table" value='cardmeanings'>
                <input type="submit" value="新增" class="btn-end-form">
                <input type="reset" value="重置" class="btn-end-form">
            </td>
            <td></td>
        </tr>
    </table>
</form>