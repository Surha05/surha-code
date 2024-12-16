(function(){
  const form = document.querySelector('#callback-form');
  const name = form.querySelector('#inp-name')
  const tel = form.querySelector('#inp-tel') 
  const course = form.querySelector('#inp-course')
  const smena = form.querySelector('#inp-smena')
  const formEducation = form.querySelector('#inp-form-education')
  const comment = form.querySelector('#inp-comment')
  const btn = form.querySelector('#btn-send')

  btn.addEventListener('click', send)

  function send(e) {
    e.preventDefault();
    let message = `Имя - ${name.value}
    Телефон - ${tel.value}
    Курс - ${course.value}
    Смена - ${smena.value}
    Форма обучения - ${formEducation.value}
    Комментарий - ${comment.value}`

    const url = '/modules/callBack/mailing.php';
    const form_data = new FormData();
    form_data.append('message', message);
    fetch(url, {
      method: 'POST',
      body: form_data,
    })
      .then((res) => {
        form.reset();
        alert('Мы вам перезвоним в ближайшее время')
      })
    .catch(() => {
      alert('Произошла ошибка. Повторите еще раз')
    });
  }
})();