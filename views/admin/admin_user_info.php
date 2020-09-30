<!-- Modal -->

<div class="modal" id="modal-<?=$userInfo['user_id'];?>" >
    <div class="modal__dialog">
        <div class="modal__content">
            <form method='POST' enctype="multipart/form-data">
                <div class="modal__close" data-close="<?=$userInfo['user_id'];?>">&times;</div>
                <div class="modal__title">Изменить юзера</div>
                <input type="text" name="user_name" class="form-control" value="<?= isset($_POST['user_name']) ? $_POST['user_name'] : $userInfo['user_name']; ?>"><br>
                <input type="text" name="user_surname" class="form-control" value="<?= isset($_POST['user_surname']) ? $_POST['user_surname'] : $userInfo['user_surname']; ?>"><br>
                <input type="submit" id="submit" value="Отправить">
            </form>
        </div>
    </div>
</div>
