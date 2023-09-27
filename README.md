## ПОСТАНОВКА ЗАДАЧИ И ПЛАН РАБОТЫ.

Задачей итоговой работы является создание персонального сайта для практикующего психолога.

Перед началом работы необходимо определить внешний вид сайта, расположение блоков и наличие анимации. Затем определяются применяемые технологии.

Задачи к наполнению сайта:
- наличие информации о специалисте;
- блоки с описание основных услуг и цен;
- блоки мероприятий с подачей заявок на данные мероприятия;
- переход в мессенджеры с шаблоном начала сообщения при нажатии на соответствующей иконки и в телефон.

План работ:

1.     Подключение фреймворка Bootstrap.
2.     Верстка страниц сайта.
3.     Создание модальных окон.
4.     Создание базы данных на хостинге.
5.     Подключение страниц сайта к базе данных.
6.     Подключение анимации.


## ОСНОВНАЯ ЧАСТЬ.

### Назначение веб-ресурса.

Веб-ресурс предназначен для предоставления информации потенциальным клиентам о специалисте, его компетенциях, услугах, условиях работы, а также организуемых мероприятиях.

### Описание этапов разработки, описание функционала с приложением листингов исходного программного кода основной функции, структурных модулей, пример кода-разметки

Этап разработки начинался с создания проекта с использованием фреймворка Bootstrap ver 4.6 (далее – фреймворк). Перед началом работы над проектом необходимо подключить фреймворк.

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
        <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>

Листинг 1.

Веб-ресурс создавался с использование сеток фреймворка «container» и «container-fluid», а также готовых компонентов фреймворка. База данных создается на стороне хостинга для получения данных записи пользователей на мероприятия.

В проект входят 1 страница в формате html и 2 страница в формате php в папке service_files, а также папка с изображениями.

Веб страница адаптирована и может открываться на различных устройствах. Отдельно прописаны медиа запросы для экранов шириной менее 992 и 767 пикселей.

      @media (max-width: 992px) {
        h1 {
          font-size: 50px;
          padding-top: 50px;
        }
        h3 {
          font-size: 32px;
        }
        .fa-envelope {
          margin-left: 25px;
        }
      }
      @media (max-width: 767px) {
        h1 {
          font-size: 36px;
          padding-top: 30px;
          line-height: 2.5rem;
        }
        h3 {
          font-size: 24 px;
          padding-bottom: 30px;
        }
      }

Листинг 2.

При переходе по адресу [https://diploma.fiedling.p-host.in/](https://diploma.fiedling.p-host.in/) пользователь попадает на страницу сайта, на которой в начале страницы расположено меню для перехода на разделы веб ресурса.

    <div class="header">
      <nav class="navbar navbar-expand-lg py-3 shadow-sm">
        <button
          type="button"
          data-toggle="collapse"
          data-target="#navbarContent"
          aria-controls="navbars"
          aria-expanded="false"
          aria-label="Toggle navigation"
          class="navbar-toggler custom-toggler"
        >
          <span class="navbar-toggler-icon custom-toggler"></span>
        </button>
        <div id="navbarContent" class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="#about_me" class="nav-link">Обо мне</a>
            </li>
            <li class="nav-item">
              <a href="#services" class="nav-link">Услуги</a>
            </li>
            <li class="nav-item">
              <a href="#seminar" class="nav-link">Семинары</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

Листинг 3.

После меню находится приветствие специалиста и информация об его опыте, реализованное через модальное окно фреймворка.

        <div class="row align-items-center mt-4">
          <div class="col-12 col-lg-6 center order-lg-last">
            <img
              src="img/portrait4.jpg"
              alt="Психолог Ангелина Чемина"
              class="img-fluid"
            />
          </div>
          <div class="col-12 col-lg-6">
            <h2 class="philosopher mb-2" id="about_me">Обо мне</h2>
            <p>
              Мы привыкли доверять свои дела и вопросы жизни только проверенным
              людям. <br />
              Но как узнать, можно ли доверять человеку, если вы еще не имели с
              ним дел?! Для того, чтобы вам было проще решить, можете ли вы мне
              доверять, я расскажу о своем жизненном опыте.
            </p>

            <!-- Кнопка-триггер модального окна -->
            <button
              type="button"
              class="btn shadow-lg p-3 mb-5 bg-white rounded"
              data-toggle="modal"
              data-target="#modalAboutMe"
            >
              Предлагаю познакомиться->
            </button>

            <!-- Модальное окно -->
            <div
              class="modal fade modal_style_in"
              id="modalAboutMe"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
            >
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                  <div class="modal-body">
                    <p>
                      Первое мое высшее образование в МФТИ совсем не связано с
                      коучингом и психотерапией, но, тем не менее, очень
                      положительно отразилось на моей способности логически
                      мыслить и качественно анализировать поступающую ко мне
                      информацию.
                    </p>
                    <p>
                      Затем тяга к психологии перевесила, и следующим
                      образованием была переподготовка по Практической
                      психологии в МПГУ. А сверху уже легло первое коучинговое
                      образование в виде повышения квалификации, за ним
                      последовало и обучение на тренера.
                    </p>

                    <p>
                      Но мне показалось, что полученных знаний мало для
                      действительно глубокой работы с клиентами. Так я оказалась
                      на своем втором высшем образовании по клинической
                      психологии в Московском институте психоанализа.
                    </p>

                    <p>
                      В МИП я обрастала теоретическими знаниями. А за
                      практическими отправилась в Международный Эриксоновский
                      Университет Коучинга, где закончила программу по искусству
                      трансформационного кучинга и получила международный
                      сертификат профессионального коуча ICF.
                    </p>

                    <p>
                      А для работы с вопросами некоучингового характера я
                      выбрала направление экзистенциального анализа, которому
                      обучалась под руководством Альфрида Лэнгле.
                    </p>

                    <p>
                      Но это все про учебу… Помимо нее в моей жизни было много
                      работы, которая влияла на мое профессиональное
                      формирование ничуть не меньше.
                    </p>

                    <p>
                      В консалтинге в сфере управления продажами я прошла путь
                      от аналитика до ведущего консультанта. Там я познакомилась
                      с массой совершенно разных по роду деятельности и
                      структуре компаний, имела возможность работать с
                      собственниками бизнеса и именно совместно с ними проводить
                      реорганизацию их компаний.
                    </p>

                    <p>
                      Затем, используя опыт работы с данными, также
                      приобретенный в компании и в моем первом институте, я
                      погрузилась в мир IT технологий в области работы с
                      хранилищами данных. Мне посчастливилось поработать в
                      Тинькофф в потрясающей команде профессионалов. Там я не
                      только смогла накопить техническую экспертизу, но и
                      разобраться в бизнес-процессах банка. Данные знания очень
                      пригодились мне на следующем месте работы, которым стал
                      Сбербанк, где в роли бизнес-партнера мне удалось
                      поучаствовать более, чем в 15 проектах. Это место работы
                      принесло мне колоссальный опыт взаимодействия с людьми
                      совершенно разных специальностей и должностей, а также
                      понимание процессов работы крупнейшего банка нашей страны.
                    </p>

                    <p>
                      На каждом месте работы я наблюдала, какую огромную роль в
                      работе компании играет человеческий фактор. Эти наблюдения
                      укрепили во мне понимание того, что в здоровой и
                      нацеленной на успех организации должны работать здоровые и
                      нацеленные на успех люди.
                    </p>

                    <p>
                      Поэтому теперь моя деятельность направлена на то, чтобы в
                      нашем обществе стало больше таких людей – счастливых,
                      целеустремленных, готовых сроить еще более счастливое
                      завтра.
                    </p>
                    <div class="row justify-content-end">
                      <button
                        type="button"
                        class="btn"
                        data-dismiss="modal"
                        style="color: #3f5145"
                      >
                        Закрыть
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

Листинг 4.

На странице, кроме подключенного фреймворка, подключается анимация через ресурсы AOS и Anime.js.

В результате чего происходит вылет с левой или правой стороны страницы информация об услугах, а также сверху блока о достижениях и снизу блока о мероприятиях (семинарах).

В процессе работы выяснилось, что при использовании выбранной библиотеки AOS для анимирования блоков блокируются модальные окна. Для исправления ошибки найден код, который отключает и включает код анимации при открытии и закрытии модальных окон.

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      $(window).on("shown.bs.modal", function () {
        AOS.init({ disable: true });
      });

      $(window).on("hidden.bs.modal", function () {
        AOS.init({ disable: false });
      });
    </script>
    <script>
      AOS.init({
        easing: "ease-out-back",
        duration: 1000,
        offset: 120,
        delay: 500,
        once: true,
      });
    </script>

Листинг 5.

Подсчет цифр показателей достижения специалиста (количество довольных клиентов, часов супервизии и онлайн проектов) на странице реализован через Anime.js.

        <div data-aos="fade-down">
          <h2 class="text-center">Мои достижения</h2>
          <div class="row text-center">
            <div class="col-md-4">
              <p class="imp_numb round-log1"></p>
              <p>довольных клиентов</p>
            </div>
            <div class="col-md-4">
              <p class="imp_numb round-log2"></p>
              <p>часов супервизии</p>
            </div>
            <div class="col-md-4">
              <p class="imp_numb round-log3"></p>
              <p>онлайн проекта</p>
            </div>
          </div>
        </div>

Листинг 6.

    <script>
      window.onload = function () {
        let roundLogEl1 = anime({
          targets: ".round-log1",
          innerHTML: [0, 150],
          easing: "linear",
          round: 10,
          duration: 4800,
          delay: 2000,
          offset: 50,
        });

        let roundLogEl2 = anime({
          targets: ".round-log2",
          innerHTML: [0, 80],
          easing: "linear",
          round: 10,
          duration: 4800,
          delay: 2000,
          offset: 50,
        });
        let roundLogEl3 = anime({
          targets: ".round-log3",
          innerHTML: [0, 2],
          easing: "linear",
          round: 10,
          duration: 4800,
          delay: 2000,
          offset: 50,
        });
      };
    </script>


Листинг 7.

Для удобства пользователей сайта в случае намерения задать вопрос или записаться на консультацию **в каждом модельном окне услуг**, а также в «подвале» сайта реализована возможность перехода в телефон и в 2 наиболее популярных мессенджера (WhatApp и Telegram) при нажатии на соответствующие иконки.

                      <div class="row justify-content-around py-3">
                        <a href="tel:+74955555555">
                          <i class="fa-solid fa_icon fa-phone fa-5x"></i>
                        </a>
                        <a
                          href="https://wa.me/79263710903?text=Здравствуйте!%20Хочу%20записаться%20к%20Вам%20на%20консультацию"
                          target="_blank"
                        >
                          <i class="fa-brands fa_icon fa-whatsapp fa-6x"></i>
                        </a>
                        <a href="https://t.me/OlyaBondarenko" target="_blank">
                          <i class="fa-brands fa_icon fa-telegram fa-6x"></i>
                        </a>
                      </div>

Листинг 8.

Помимо указанных выше возможностей связи со специалистом, в «подвале» сайта помещены дополнительные иконки с переходом: электронная почта, Skype и YouTube.

            <div class="col-12 col-md-6">
              <!-- phone&email -->
              <div class="row">
                <div class="col-6 col-md-6">
                  <nobr>
                    <a href="tel:+79263710903">
                      <i class="fa-solid fa_icon_footer fa-phone"></i>
                    </a>
                    <a href="tel:+79263710903"> +7 (926) 371-09-03</a>
                  </nobr>
                </div>
                <div class="col-6 col-md-6">
                  <nobr>
                    <a href="mailto:19olya05@mail.ru"
                      ><i class="fa-regular fa_icon_footer fa-envelope"></i
                    ></a>
                    <a href="mailto:19olya05@mail.ru"> 19olya05@mail.ru</a>
                  </nobr>
                </div>
              </div>
              <div class="row justify-content-around py-3 pr-5">
                <a
                  href="https://wa.me/79263710903?text=Здравствуйте!%20Хочу%20записаться%20к%20Вам%20на%20консультацию"
                  target="_blank"
                >
                  <i class="fa-brands fa_icon_footer fa-whatsapp fa-2x"></i>
                </a>
                <a href="https://t.me/OlyaBondarenko" target="_blank">
                  <i class="fa-brands fa_icon_footer fa-telegram fa-2x"></i>
                </a>
                <a href="skype:19olya05?chat">
                  <i class="fa-brands fa_icon_footer fa-skype fa-2x"></i>
                </a>
                <a href="https://www.youtube.com/"
                  ><i class="fa-brands fa_icon_footer fa-youtube fa-2x"></i
                ></a>
              </div>
            </div>

Листинг 9.

В блоке «Семинары» при нажатии на кнопку «Узнать подробнее» открывается модальное окно с информацией о мероприятии и возможностью подать заявку, заполнив форму.

            <form onsubmit="sendApplication2(this); return false;">
              <div class="form-group">
                <label for="name2"
                  >Имя <span class="text-danger">*</span>
                </label>
                <input
                  type="text"
                  class="form-control form-style"
                  id="name2"
                  name="name2"
                  required
                  autocomplete="username"
                />
              </div>
              <div class="form-group">
                <label for="lastname2"
                  >Фамилия <span class="text-danger">*</span>
                </label>
                <input
                  type="text"
                  class="form-control form-style"
                  id="lastname2"
                  name="lastname2"
                  required
                  autocomplete="username"
                />
              </div>
              <div class="form-group">
                <label for="phone2"
                  >Контактный телефон<span class="text-danger">*</span>
                </label>
                <input
                  type="text"
                  class="form-control form-style"
                  id="phone2"
                  name="phone2"
                  placeholder="+7 XXX XXX-XX-XX"
                  required
                  autocomplete="tel"
                  onfocus="this.placeholder=''"
                  onblur="this.placeholder='+7 XXX XXX-XX-XX'"
                  maxlength="13"
                />
              </div>
              <div class="form-group">
                <label for="email2"
                  >Адрес электронной почты<span class="text-danger">*</span>
                </label>
                <input
                  type="email"
                  class="form-control form-style"
                  id="email2"
                  name="email2"
                  placeholder="email@example.com"
                  required
                  autocomplete="email"
                  onfocus="this.placeholder=''"
                  onblur="this.placeholder='email@example.com'"
                />
              </div>
              <div class="form-group">
                <label for="comment2">Комментарий </label>
                <input
                  type="text"
                  class="form-control form-style"
                  id="comment2"
                  name="comment2"
                />
              </div>

              <p class="text-muted">
                Нажимая на кнопку "Подать заявку", вы соглашаетесь с политикой
                конфиденциальности
              </p>
              <div class="row justify-content-end">
                <button
                  type="submit"
                  class="btn"
                  style="background-color: #3f5145; color: white"
                  value="Подать заявку на участие"
                >
                  Подать заявку
                </button>
                <button
                  type="button"
                  class="btn"
                  data-dismiss="modal"
                  style="color: #3f5145"
                >
                  Закрыть
                </button>
              </div>
            </form>

Листинг 10.

    <script>
      async function sendApplication1(form) {
        let response = await fetch("service_files/form_seminar1.php", {
          method: "POST",
          body: new FormData(form),
        });
        let result = await response.text();
        if (result == "ok") {
          alert("Success!");
        } else {
          alert(
            "Пользователь с этим адресом электронной почты уже зарегистрирован"
          );
        }
      }
      async function sendApplication2(form) {
        let response = await fetch("service_files/form_seminar2.php", {
          method: "POST",
          body: new FormData(form),
        });
        let result = await response.text();
        if (result == "ok") {
          alert("Success!");
        } else {
          alert(
            "Пользователь с этим адресом электронной почты уже зарегистрирован"
          );
        }
      }
    </script>

Листинг 12.

<?php
header('Content-Type; text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "thzjjdpc_seminar1", "hnSTUIeT", "thzjjdpc_seminar1");

if ($mysqli == false) {
  print("error");
} else {
  $name2 = $_POST["name2"];
  $lastname2 = $_POST["lastname2"];
  $phone2 = trim($_POST["phone2"]);
  $email2 = trim(mb_strtolower($_POST["email2"]));
  $comment2 = $_POST["comment2"];

  $result = $mysqli->query("SELECT * FROM `tabl_seminar2` WHERE `email`='$email2'");
  if ($result->num_rows != 0) {
    print("exist");
  } else {
    $mysqli->query("INSERT INTO `tabl_seminar2`( `name`, `lastmane`, `phone`, `email`, `comment`) VALUES ('$name2', '$lastname2', '$phone2', '$email2', '$comment2')");
    print("ok");
  }
};

Листинг 13.

Исходные файлы проекта можно просмотреть на GitHub по ссылке [https://github.com/olya-bondarenko/diploma](https://github.com/olya-bondarenko/diploma).

Тестирование работоспособности веб ресурса проводилось не в автоматическом режиме, т.е. без написания тестов.