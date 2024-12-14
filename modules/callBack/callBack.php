<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(/images/bg/02.jpg);" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6 py-5 px-md-5 bg-primary">
        <div class="heading-section heading-section-white ftco-animate mb-5">
          <h2 class="mb-4">Остались вопросы?</h2>
          <p>Если вас что то заинтересовало и у вас остались вопросы, оставьте свой номер и мы перезвоним вам в ближайшее время.</p>
        </div>
        <form id="callback-form" class="appointment-form ftco-animate">
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
          <p class="button text-center"><a href="/prices.php" class="btn btn-secondary px-4 py-3" id="btn-send">Отправить</a></p>
        </form>
      </div>
    </div>
  </div>
</section>
<script src="/modules/callBack/callback.js"></script>