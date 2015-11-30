<!DOCTYPE html>
<html lang="en" ng-app>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script src="js/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <div class="container">
      <h3>Настройки <small><i class="fa fa-sliders fa-1x fa-rotate-270"></i></small></h3>
      <div class="container">
        <!--TODO можно использовать класс nav
          <ul class="nav nav-tabs">
            <li class="active"><a href="#">Реквизиты организации</a></li>
            <li><a href="#">Подразделения</a></li>
            <li><a href="#">Сотрудники</a></li>
            <li><a href="#">Личный кабинет</a></li>
          </ul>
        -->
        <div class="row row_menu">
          <div class="col-md-2 text-center col_one_active">
            <span>Реквизиты организации</span>
          </div>
          <div class="col-md-2 text-center col_one_enable">
            <span>Подразделения</span>
          </div>
          <div class="col-md-2 text-center col_one_enable">
            <span>Сотрудники</span>
          </div>
          <div class="col-md-2 text-center col_one_enable">
            <span>Личный кабинет</span>
          </div>
          <div class="col-md-4 text-center col_one_enable">
          </div>
        </div>
        <ul class="row nav nav-stacked">
          <li class="active">
            <a>
              <span class="pull-right">
                <i class="fa fa-times"></i>
              </span>
              <i class="fa fa-exclamation-triangle"></i>
              <small style="color:black;"> <strong>Внимание!</strong> Для изменения наименования, ИНН или КПП обратитесь в техподдержку</small>
            </a>
          </li>
        </ul>
        <div class="container data_organization">
          <div class="row">
            <div class="col-md-3 text-center">
              <strong>Данные организации</strong>
            </div>
            <div class="col-md-10">
              <hr />
            </div>
          </div>
        </div>
        <div class="container form_organization">
          <div class="row">
            <div class="col-md-6">
              <div><small><strong>Полное наименование:</strong></small></div>
              <span>ООО Новые технологии Сибири</span>
            </div>
            <div class="col-md-5">
              <div><small><strong>Юридический адресс:</strong></small></div>
              <select class="form-control">
                <option>Российский</option>
              </select>
              <!--TODO::можно использовать класс input-group с двумя дочерними компонентами-->
              <!--
              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Действие <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                    <li><a href="#">Действие</a></li>
                    <li><a href="#">Другое действие</a></li>
                    <li><a href="#">Что-то иное</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Отдельная ссылка</a></li>
                  </ul>
                </div>
              -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div><small><strong>ИНН:</strong></small></div>
              <span>222212335603</span>
            </div>
            <div class="col-md-5">
              <div><small><strong>Индекс:</strong></small></div>
              <input type="text" class="form-control" value="656057" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div><small><strong>ОГРН:</strong></small></div>
              <input type="text" class="form-control" value="312222309300017" />
            </div>
            <div class="col-md-5">
              <div><small><strong>Регион:</strong></small></div>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div><small><strong>ИФНС(МРИ): </strong>местно подачи деклорации под НДС</small></div>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-5">
              <div><small><strong>Район:</strong></small></div>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div><small><strong>Фамилия:</strong></small></div>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-5">
              <div><small><strong>Город:</strong></small></div>
              <input type="text" class="form-control" value="Барнаул">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div><small><strong>Имя:</strong></small></div>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-5">
              <div><small><strong>Населенный пункт:</strong></small></div>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div><small><strong>Отчество:</strong></small></div>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-5">
              <div><small><strong>Улица:</strong></small></div>
              <input type="text" class="form-control" value="Северо-Западная">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div><small><strong>Свидетельство о госсударственной регистрации:</strong></small></div>
              <input type="text" class="form-control" />
            </div>
            <div class="col-md-5">
              <div class="row">
                <div class="col-md-3">
                  <div><small><strong>Дом:</strong></small></div>
                  <input type="text" class="form-control">
                </div>
                <div class="col-md-3">
                  <div><small><strong>Корпус:</strong></small></div>
                  <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                  <div><small><strong>Офис / квартира:</strong></small></div>
                  <div class="row">
                    <div class="col-md-9">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-group">
            <button type="button" class="btn btn-default">Отменить изменения</button>
            <button type="button" class="btn btn-primary">Сохранить изменения</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
