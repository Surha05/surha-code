<section class="popup-wrapper" id="callback-popup">
  <div class="popup-container bg-primary">
    <div class="heading-section heading-section-white ftco-animate mb-2">
      <h2 class="mb-2">Мы вам перезвоним</h2>
    </div>
    <form id="popup-form" class="appointment-form ftco-animate">
      <div class="d-md-flex">
        <div class="form-group">
          <input class="form-control" id="inp-name" placeholder="Имя">
        </div>

        <div class="form-group ml-md-4">
          <input class="form-control" id="inp-tel" placeholder="Телефон">
        </div>
      </div>
      <div class="d-md-flex">
        <div class="form-group">
          <div class="form-field">
            <div class="select-wrap">
              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
              <select class="form-control" id="inp-course">
                <option value="Не выбрано">Курс</option>
                <option value="HTML и CSS">HTML и CSS</option>
                <option value="Javacript">Javacript</option>
                <option value="Node.js">Node.js</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group  ml-md-4">
          <div class="form-field">
            <div class="select-wrap">
              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
              <select class="form-control" id="inp-smena">
                <option value="не выбрано">Смена</option>
                <option value="Утренняя">Утренняя смена</option>
                <option value="Обеденная">Обеденная смена</option>
                <option value="Вечерняя">Вечерняя смена</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="d-md-flex">
        <div class="form-group">
          <div class="form-field">
            <div class="select-wrap">
              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
              <select class="form-control" id="inp-form-education">
                <option value="не выбрано">Форма обучения</option>
                <option value="В группе">В группе</option>
                <option value="Индивидуальное">Индивидуальное</option>
                <option value="Онлайн">Онлайн</option>
                <option value="Индивидуальное Онлайн">Индивидуальное Онлайн</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="d-md-flex">
        <div class="form-group">
          <textarea class="form-control" id="inp-comment" placeholder="Комментарий"></textarea>
        </div>
      </div>
      <p class="button text-center"><a href="" class="btn btn-secondary px-4 py-3" id="popup-send">Отправить</a></p>
    </form>
  </div>
</section>
<script src="/modules/popup/callback.js"></script>