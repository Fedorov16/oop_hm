<div class="main_content">
    <section>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Логин</th>
                    <th scope="col">Почта</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Пол</th>
                    <th scope="col">Настройки</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($allUsers as $user){extract($user, EXTR_OVERWRITE) ?>
                <tr>
                    <th class="t_row"><?= $user_id?></th>
                    <td class="t_row"><?= $user_name?></td>
                    <td class="t_row"><?= $user_surname?></td>
                    <td class="t_row"><?= $user_login?></td>
                    <td class="t_row"><?= $user_email?></td>
                    <td class="t_row"><?= $user_phone?></td>
                    <td class="t_row"><?= $gender_short_value?></td>
                    <td class="t_row">
                        <?php if($user_role_id === '1'){ ?>
                        <ion-icon name="color-wand-outline" class="icon_admin"></ion-icon>
                        <?php } ?>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" id="icon_setting_link" onclick="adminEditUser(<?= $user_id?>)"><ion-icon name="hammer-outline" class="icon_admin" id="icon_setting"></ion-icon></a>
                    </td>
                </tr>
                <?php } ?> 
            </tbody>
        </table>
       
    </section>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...dfghjkl;
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
