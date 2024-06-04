<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include_once("../includes/meta.inc.php") ?>
  <title>Абитуриенту ЮУТУ - Менеджмент</title>
</head>

<body>
  <!-- MODAL FOR VIDEO YOUTUBE -->
  <div class="modal fade" id="videoModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="videoModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div>
            <iframe width="100%" height="500" src="" title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!-- HEADER -->
 <?php include_once("../includes/header-body.inc.php");?>

<!-- WELCOME BLOCK -->
  <section>
    <div class="container">
      <div class="mx-1 wrapper-specialization-info background-color-gray row px-3 pt-3 pb-1">
        <div class="col-12 row specialization-information m-lg-3">
          <div class="col-12">
            <p class="fs-8-suut text-medium-suut text-transform-uppercase label-specialization m-0">
              38.03.02 Менеджмент (бакалавриат)
            </p>
          </div>
          <div class="col-7 mt-md-2">
            <p class="fs-1-suut fw-bold text-transform-uppercase line-height-small py-0 m-0">
              Менеджмент <br />
              организации
            </p>
          </div>

          <div class="col-10 col-md-8 col-lg-6 mt-md-4">
            <p class="fs-7-suut text-medium-suut m-0">
              Присоединяйтесь к программе и откройте для себя мир
              стратегического планирования, оптимизации процессов и лидерства.
              Получите навыки, необходимые для успешного руководства командой,
              развития бизнеса и достижения поставленных целей. </br>
              Будь лидером. Будь менеджером. Будь успешным!
            </p>
          </div>
          <div class="col-9 mb-2 mt-md-4">
            <a class="btn btn-primary-suut text-medium-suut text-transform-uppercase text-white mt-1 p-md-2 fs-btn-suut col-10 col-md-4 col-lg-3"
              href="#howDo" role="button">Как поступить</a>
            <a class="btn btn-primary-suut text-medium-suut text-transform-uppercase text-white mt-1 p-md-2 fs-btn-suut col-10 col-md-5 col-lg-4"
              href="#programmEducation" role="button">Программа обучения</a>
          </div>
        </div>
        <div class="specialization-img-back">
          <div class="students-img"></div>
          <div class="figure-img"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ПРЕИМУЩЕСТВА ОП -->
  <section>
    <div class="container mt-4 px-0 px-md-3 px-lg-5">
      <div class="row mx-auto justify-content-center">
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-center fs-6-5-suut">
            <span class="fw-bold"> Два диплома за четыре года </span>
            <br />
            бакалавр + иностранный язык для профессионального общения
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-center fs-6-5-suut">
            <span class="fw-bold">Методы погружения в профессиональную среду</span>
            <br />
            экскурсии на предприятия и организации, связанные с управлением предприятиями
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-center fs-6-5-suut">
            <span class="fw-bold">Квалифицированный профессорско-преподавательский состав</span>, имеющие ученые степени и ученые звания, с большим опытом работы в бизнесе и академической среде. Преподаватели-практики, действующие сотрудники предприятий реального сектора экономики
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-center fs-6-5-suut">
            <span class="fw-bold">Наличие соглашений с ведущими компаниями,</span> что позволяет студентам проходить стажировки и практики, получая реальный опыт работы
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-center fs-6-5-suut">
            <span class="fw-bold">Активный центр карьеры,</span> который помогает студентам в трудоустройстве
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-center fs-6-5-suut">
            <span class="fw-bold">Современная программа обучения </span>регулярно обновляется, чтобы включать последние тенденции и методы в области менеджмента, включая цифровые технологии, устойчивое развитие и глобальные бизнес-практики
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- КАК ПОСТУПИТЬ -->
  <section>
    <div id="howDo" class="container my-5">
      <div class="mx-1 wrapper background-color-gray px-3 px-lg-4 px-xl-5 py-4 py-xl-5">
        <div class="row">
          <p class="fs-1-suut fw-bold text-transform-uppercase">
            Как поступить
          </p>
        </div>

        <!-- ИИНФОРМАЦИЯ О ПОСТУПЛЕНИИ -->
        <div class="row justify-content-between">
          <div class="col-12 col-lg-6">
            <div class="row mb-2">
              <div class="col-6">
                <p id="btnBasisEGE" data-toggle="btnBasis" data-target="#basisEGE" data-targetHide="#basisVU"
                  data-btnHide="#btnBasisVU"
                  class="m-0 fs-7-suut fw-bold text-decoration-underline text-underline-offset text-transform-uppercase text-dark-suut"
                  role="button">
                  После 11 классов
                </p>
              </div>
              <div class="col-6">
                <p id="btnBasisVU" data-toggle="btnBasis" data-target="#basisVU" data-targetHide="#basisEGE"
                  data-btnHide="#btnBasisEGE"
                  class="m-0 fs-7-suut text-decoration-underline text-transform-uppercase text-end text-underline-offset text-dark-suut"
                  role="button">
                  После коледжа/вуза
                </p>
              </div>
            </div>

            <div class="row p-1">
              <div id="basisEGE" class="p-3 p-md-4 wrapper-inner background-color-white box-shadow animation-suut">
                <div class="p-2">
                  <div class="row">
                    <p class="fs-6-5-suut text-transform-uppercase ps-0">
                      На основании результатов ЕГЭ
                    </p>
                  </div>
                  <div class="row border-box-buttom-dark-suut mb-3">
                    <div class="col-8 col-sm-9 ps-0">
                      <p class="fs-6-5-suut m-0">Русский язык</p>
                    </div>
                    <div class="col-4 col-sm-3 pe-0">
                      <p class="fs-6-5-suut m-0 text-end">36 баллов</p>
                    </div>
                  </div>

                  <div class="row border-box-buttom-dark-suut my-3">
                    <div class="col-8 col-sm-9 ps-0">
                      <p class="fs-6-5-suut m-0">Математика</p>
                    </div>
                    <div class="col-4 col-sm-3 pe-0">
                      <p class="fs-6-5-suut m-0 text-end">27 баллов</p>
                    </div>
                  </div>

                  <div class="row border-box-buttom-dark-suut my-3">
                    <div class="col-8 col-sm-9 ps-0">
                      <p class="fs-6-5-suut m-0">Обществознание*</p>
                    </div>
                    <div class="col-4 col-sm-3 pe-0">
                      <p class="fs-6-5-suut m-0 text-end">42 балла</p>
                    </div>
                  </div>
                  <div class="row border-box-buttom-dark-suut my-3">
                    <div class="col-8 col-sm-9 ps-0">
                      <p class="fs-6-5-suut m-0">История*</p>
                    </div>
                    <div class="col-4 col-sm-3 pe-0">
                      <p class="fs-6-5-suut m-0 text-end">32 балла</p>
                    </div>
                  </div>
                  <div>
                    <p class="fs-7-suut">
                      *один из двух предметов по выбору абитуриента
                    </p>
                  </div>
                </div>
              </div>

              <div id="basisVU"
                class="p-3 p-md-4 d-none wrapper-inner background-color-white box-shadow animation-suut">
                <div class="p-2">
                  <div class="row">
                    <p class="fs-6-5-suut text-transform-uppercase ps-0">
                      На основании вступительных испытаний
                    </p>
                  </div>
                  <div class="row border-box-buttom-dark-suut mb-3">
                    <div class="col-8 col-sm-9 ps-0">
                      <p class="fs-6-5-suut m-0">Русский язык</p>
                    </div>
                    <div class="col-4 col-sm-3 pe-0">
                      <p class="fs-6-5-suut m-0 text-end">50 баллов</p>
                    </div>
                  </div>
                  <div class="row border-box-buttom-dark-suut my-3">
                    <div class="col-8 col-sm-9 ps-0">
                      <p class="fs-6-5-suut m-0">Информационные технологии</p>
                    </div>
                    <div class="col-4 col-sm-3 pe-0">
                      <p class="fs-6-5-suut m-0 text-end">50 баллов</p>
                    </div>
                  </div>
                  <div class="row border-box-buttom-dark-suut my-3">
                    <div class="col-8 col-sm-9 ps-0">
                      <p class="fs-6-5-suut m-0">Основы экономики</p>
                    </div>
                    <div class="col-4 col-sm-3 pe-0">
                      <p class="fs-6-5-suut m-0 text-end">50 баллов</p>
                    </div>
                  </div>

                  <div>
                    <p class="fs-7-suut">
                      вступительные испытания в виде компьютерного
                      тестирования
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt-2 mt-lg-0">
            <div class="row ms-lg-2 p-1 p-lg-0">
              <div class="col-12 mb-2">
                <p class="fs-6-5-suut fw-bold m-0">Сроки приёма документов</p>
              </div>
              <div class="col-12 wrapper-inner background-color-white p-3 p-md-4 mb-2">
                <p class="fs-6-5-suut m-0">Для очной формы обучения</p>
                <p class="fs-6-5-suut text-dark-suut m-0">
                  C 20 июня по 30 августа 2024 года
                </p>
              </div>
              <div class="col-12 wrapper-inner background-color-white p-3 p-md-4 mt-1">
                <p class="fs-6-5-suut m-0">Для заочной формы обучения</p>
                <p class="fs-6-5-suut text-dark-suut m-0">
                  C 20 июня по 10 октября 2024 года
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- КОНЕЦ ИИНФОРМАЦИЯ О ПОСТУПЛЕНИИ -->

        <!-- Форма обратной связи -->

        <div class="row p-1 mt-3">
          <div class="wrapper-inner background-color-white row mx-auto align-items-center py-4 px-lg-5">
            <div class="col-12 col-lg-6">
              <p class="fs-3 fw-bold p-0 m-0">
                Узнайте подробнее о поступлении
              </p>
            </div>

            <div class="col-12 col-lg-6 text-center">
              <span class="loader d-none my-5" id="loader_feedback_top"></span>
              <div class="d-none my-5" id="conglaturation_top">
                <img src="./img/icons8-галочка-480.png" width="48" alt="Форма отправлена" />
                <p class="fs-6-5-suut text-medium-suut">
                  Наши специалисты скоро с вами свяжутся
                </p>
              </div>
              <form action="https://api-abtr.science174.ru/feedback" method="post" id="topFormFeedback"
                class="d-flex row">
                <input type="text" class="fs-6-5-suut form-control my-2 from-control-input-suut" name="username"
                  id="nameControl" placeholder="Имя" />
                <input type="tel" class="fs-6-5-suut form-control my-2 from-control-input-suut" name="phone"
                  id="phoneControl" placeholder="Телефон" />
                <input type="email" class="fs-6-5-suut form-control my-2 from-control-input-suut" name="email"
                  id="emailControl" placeholder="Электронная почта" />
                <input type="hidden" name="specialization"
                  value="38.03.02 Менеджмент (бакалавриат), Менеджмент организации" />
                <button class="btn btn-primary-suut fs-6-5-suut text-transform-uppercase">
                  Отправить заявку
                </button>
                <p class="fs-8-suut text-dark-suut"> Отправляя заявку с помощью данной формы, вы соглашаетесь с обработкой своих персональных данных в соответствии с 
                  <a href="https://www.inueco.ru/files/sveden/files/document/zachitaPD.pdf"> положением</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Эта программа подходит вам если -->
  <section>
    <div class="container mt-5">
      <div class="mx-1 wrapper px-3 px-lg-4 px-xl-5 py-4 py-xl-5">
        <div class="row">
          <p class="fs-1-suut fw-bold text-transform-uppercase">
            Эта программа для вас, если вы ...
          </p>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-6 py-3 p-2 px-lg-5">
            <div class="wrapper-inner background-color-gray row p-2 p-lg-4 align-items-center h-100 min-height-170">
              <div class="col-3">
                <img src="./img/il-web2.webp" class="img-block-programm-for-you" alt="" />
              </div>
              <div class="col-9">
                <p class="fs-6-5-suut text-medium-suut m-0">
                  <b> Хотите быть профессионалом в области управления, </b>способным работать в организациях различных форм собственности и направлений деятельности, решать широкий спектр практических задач
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6 py-3 p-2 px-lg-5">
            <div class="wrapper-inner background-color-gray row p-2 p-lg-4 align-items-center h-100 min-height-170">
              <div class="col-9">
                <p class="fs-6-5-suut text-medium-suut m-0">
                  <b> Уже работаете в сфере управления или бизнеса</b>,
                  программа предоставляет возможность дополнительного
                  профессионального развития и расширения карьерных
                  возможностей
                </p>
              </div>
              <div class="col-3">
                <img src="./img/il-web3.webp" class="img-block-programm-for-you" alt="" />
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6 py-3 p-2 px-lg-5">
            <div class="wrapper-inner background-color-gray row p-2 p-lg-4 align-items-center h-100 min-height-170">
              <div class="col-3">
                <img src="./img/il-web1.webp" class="img-block-programm-for-you" alt="" />
              </div>
              <div class="col-9">
                <p class="fs-6-5-suut text-medium-suut m-0">
                  <b>Вы предприниматель, </b> желающих углубить свои знания в
                  области управления и развития своего бизнеса
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6 py-3 p-2 px-lg-5">
            <div class="wrapper-inner background-color-gray row p-2 p-lg-4 align-items-center h-100 min-height-170">
              <div class="col-9">
                <p class="fs-6-5-suut text-medium-suut m-0">
                  <b>
                    Занимаетесь управлением проектами, процессами или
                    операциями в организации,</b>
                  программа предлагает специализированные навыки и методы
                  управления
                </p>
              </div>
              <div class="col-3">
                <img src="./img/il-web4.webp" class="img-block-programm-for-you" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ЧТОБЫ УЧИТЬСЯ БЫЛО ПРИЯТНЕЕ -->
  <section>
        <div class="container mt-5">
            <div class="mx-1 wrapper background-color-gray px-3 px-lg-4 px-xl-5 py-4 py-xl-5">
                <div class="row">
                    <p class="fs-1-suut fw-bold text-transform-uppercase">
                        Чтобы учиться было приятнее
                    </p>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-md-6 col-lg-4 mb-4 px-3 px-lg-5">
                        <div class="card card-suut h-100" style="width: 100%">
                            <img src="./img/stolov.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title" id="notComfortableStudentsCaffe">Уютное студенческое кафе</h5>
                                <p class="card-text text-dark-suut">
                                    Где вкусная и доступная еда
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4 px-3 px-lg-5">
                        <div class="card card-suut h-100" style="width: 100%">
                            <img src="./img/cafe.jpg" class="card-img-top" id="notCoffeShop" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title" id="notCoffeShopText">Кофешоп</h5>
                                <p class="card-text text-dark-suut">В каждом из корпусов</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4 px-3 px-lg-5">
                        <div class="card card-suut h-100" style="width: 100%">
                            <img src="./img/jalinga.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Студия записи Jalinga</h5>
                                <p class="card-text text-dark-suut">
                                    Для эффектных и интерактивных презентаций
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4 px-3 px-lg-5">
                        <div class="card card-suut h-100" style="width: 100%">
                            <img src="./img/sportzal.webp" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Тренажерный зал</h5>
                                <p class="card-text text-dark-suut">Для всех студентов</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4 px-3 px-lg-5">
                        <div class="card card-suut h-100" style="width: 100%">
                            <img src="./img/individual_pc.webp" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Индивидуальное рабочее место</h5>
                                <p class="card-text text-dark-suut">С современным аппаратным и программным обеспечением
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4 px-3 px-lg-5">
                        <div class="card card-suut h-100" style="width: 100%">
                            <img src="./img/coworking.webp" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Зона коворкинга</h5>
                                <p class="card-text text-dark-suut">Для командной работы, общения или отдыха</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <!-- ПРАКТИКА СТУДЕНТОВ -->
  <section>
    <div class="container mt-5">
      <div class="mx-1 wrapper background-color-white px-3 px-lg-4 px-xl-5 py-2 py-xl-2">
        <div class="row">
          <p class="fs-1-suut fw-bold text-transform-uppercase">
            Наши студенты проходят практику в ведущих<br />профильных
            организациях
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="wrapper background-color-white py-2 py-xl-2">
        <div class="row">
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex align-items-center">
              <img src="./img/akbars.png" style="width: 100%" alt="АК БАРС БАНК" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
              <img src="./img/ural_group.png" style="width: 100%" alt="Урал групп" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
              <img src="./img/logo-ariant.svg" style="width: 100%" alt="Группа компаний ариант" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
              <img src="./img/rostelecom.png" style="width: 100%" alt="Ростелеком" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- КАРЬЕРА  -->
  <section>
    <div class="container mt-3">
      <div class="mx-1 wrapper background-color-white px-3 px-lg-4 px-xl-5 py-2 py-xl-2">
        <div class="row">
          <p class="fs-1-suut fw-bold text-transform-uppercase">
            Ваша карьера после выпуска
          </p>
        </div>
      </div>
    </div>

    <div class="container mt-1">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="mx-1 wrapper background-color-gray px-3 px-lg-4 px-xl-5 py-2 py-xl-4 h-100">
            <div class="row">
              <div class="col-12 text-center">
                <img src="./img/resume.jpg" class="border-circle" height="200px" alt="Фото в резюме" />
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <h5 class="text-dark-suut">Зарплата</h5>
                <div class="wrapper-inner mb-1">
                  <p class="fs-7-suut m-0 p-2 d-inline-block background-color-gray-dark border-suut-12">
                    Специалист по маркетингу от 57 тысяч рублей
                  </p>
                </div>
                <div class="wrapper-inner mb-1">
                  <p class="fs-7-suut m-0 p-2 pe-5 d-inline-block background-color-gray-dark border-suut-12" style="width:80%">
                    Руководитель отдела от 70 тысяч рублей
                  </p>
                </div>
                <div>
                  <p class="fs-8-suut text-dark-suut">Средняя зарплата в Челябинске по данным HeadHunter</p>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <h5 class="text-dark-suut">Навыки</h5>
                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Планирование, организация, контроль и мониторинг
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Эффективное взаимодействие с коллегами, клиентами и партнерами, умение слушать и выражать свои мысли
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Умение представлять информацию в ясной и убедительной форме
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Способность собирать, анализировать и интерпретировать данные для принятия обоснованных решений. Умение использовать программы для анализа данных (например, Excel, SPSS)
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Проведение рыночных исследований, анализировать конкурентов и выявлять потребности клиентов
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Принимать взвешенные и своевременные решения в условиях неопределенности
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Использовать IT-инструменты для принятия управленческих решений (1С, БИТРИКС24, MS Excel, SMM, CRM и др.)
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Формировать и реализовывать стратегии компании, долгосрочные и краткосрочные цели и задачи
                  </p>
                </div>
                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Анализировать бизнес-процессы, количественные и качественные показатели операционной деятельности компании
                  </p>
                </div>
                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Оценивать риски и надежность бизнес-процессов с учетом потребностей бизнеса
                  </p>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <h5 class="text-dark-suut">Владение технологиями</h5>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/trello_logo.png" class="align-middle" width="80px" alt="" />
                  
                </div>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/logo_bitrix24.png" class="align-middle" width="80px" alt="" />
                  
                </div>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/logo1c.png" class="align-middle" width="20px" alt="" />
                  <p class="d-inline my-0 fs-7-suut align-middle">1C:Предприятие</p>
                </div>
                
               
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/Jalinga_logo_color.png" class="align-middle" width="90px" alt="" />
                  <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Figma</p> -->
                </div>
               

                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/asana_logo.png" class="align-middle" width="90px" alt="" />
                  <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Figma</p> -->
                </div>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/direct.png" class="align-middle" width="20px" alt="" />
                  <p class="d-inline my-0 fs-7-suut align-middle">Яндекс.Директ</p>
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 mt-2 mt-lg-0 d-flex flex-column">
          <div class="col-12">
            <div class="mx-1 wrapper background-color-gray px-3 px-lg-4 px-xl-5 py-3 py-xl-4">
              <h5 class="text-dark-suut">Места работы</h5>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Корпоративные компании
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Малый и средний бизнес
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">Стартапы</p>
              </div>
              
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Государственные и некоммерческие организации
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">Консалтинг</p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Отделы маркетинга и рекламы
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 mt-2 flex-fill">
            <div class="mx-1 wrapper background-color-gray px-3 px-lg-4 px-xl-5 py-3 py-xl-4 h-100">
              <h5 class="text-dark-suut">Должности</h5>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Менеджер по продажам
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Менеджер по работе с клиентами
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Проектный менеджер
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  HR-менеджер
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Руководитель отдела продаж
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Менеджер по маркетингу (маркетолог)
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Финансовый аналитик
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Административный менеджер
                </p>
              </div>

              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Бизнес-консультант
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Консультант по маркетингу
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Логистический менеджер
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Менеджер по закупкам
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Менеджер отеля
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Менеджер туристической компании
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Менеджер по рекламе
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ПРОГРАММА ОБУЧЕНИЯ -->
  <section>
    <div id="programmEducation" class="container mt-5">
      <div class="mx-1 wrapper background-color-gray px-3 px-lg-4 px-xl-5 py-4 py-xl-5">
        <div class="row">
          <p class="fs-1-suut fw-bold text-transform-uppercase">
            Программа обучения
          </p>
        </div>
        <div class="row">
          <div class="col-12">
            <a class="m-0 fs-7-suut fw-bold text-decoration-underline text-underline-offset text-transform-uppercase text-dark-suut"
              href="https://www.inueco.ru/sveden/files/002530.pdf" target="_blank">Скачать учебный план</a>
          </div>
        </div>
        <div class="row mt-3">
          <div class="accordion" id="accordionBlockOP">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button fs-6-5-suut fw-bold text-transform-uppercase p-4" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseOneOP" aria-expanded="true"
                  aria-controls="collapseOneOP">
                  1-й курс
                </button>
              </h2>
              <div id="collapseOneOP" class="accordion-collapse collapse show" data-bs-parent="#accordionBlockOP">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Основы менеджмента</p>
                      <p сlass="fs-6-5-suut">Иностранный язык</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                        Информационные технологии в профессиональной
                        деятельности
                      </p>
                      <p сlass="fs-6-5-suut">Персональный менеджмент</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                        Теория организации и организационное поведение
                      </p>
                      <p сlass="fs-6-5-suut">Маркетинг</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoOP" aria-expanded="false"
                  aria-controls="collapseTwoOP">
                  2-й курс
                </button>
              </h2>
              <div id="collapseTwoOP" class="accordion-collapse collapse" data-bs-parent="#accordionBlockOP">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">
                    <div class="col-12 col-md-6 col-lg-6">
                      <p сlass="fs-6-5-suut">Маркетинг</p>
                      <p сlass="fs-6-5-suut">
                        Методы принятия управленческих решений
                      </p>
                      <p сlass="fs-6-5-suut">
                        Иностранный язык делового общения
                      </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                      <p сlass="fs-6-5-suut">
                        Управление конкурентоспособностью
                      </p>
                      <p сlass="fs-6-5-suut">
                        Менеджмент продаж и мерчендайзинг
                      </p>
                      <p сlass="fs-6-5-suut">
                        Электронный документооборот в управлении
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeOP" aria-expanded="false"
                  aria-controls="collapseThreeOP">
                  3-й курс
                </button>
              </h2>
              <div id="collapseThreeOP" class="accordion-collapse collapse" data-bs-parent="#accordionBlockOP">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Логистика</p>
                      <p сlass="fs-6-5-suut">Стратегический менеджмент</p>
                      <p сlass="fs-6-5-suut">
                        Современные маркетинговые коммуникации
                      </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Финансовый менеджмент</p>
                      <p сlass="fs-6-5-suut">
                        Учет и анализ (финансовый учет, управленческий учет,
                        финансовый анализ)
                      </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Риск-менеджмент</p>
                      <p сlass="fs-6-5-suut">Управление стоимостью бизнеса</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourOP" aria-expanded="false"
                  aria-controls="collapseFourOP">
                  4-й курс
                </button>
              </h2>
              <div id="collapseFourOP" class="accordion-collapse collapse" data-bs-parent="#accordionBlockOP">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                        Учет и анализ (финансовый учет, управленческий учет,
                        финансовый анализ)
                      </p>
                      <p сlass="fs-6-5-suut">Антикризисное управление</p>
                      <p сlass="fs-6-5-suut">Проект-менеджмент</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                        Интернет-маркетинг и продвижение
                      </p>
                      <p сlass="fs-6-5-suut">Реинжиниринг бизнеса</p>
                      <p сlass="fs-6-5-suut">Инновационный менеджмент</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Проект-менеджмент</p>
                      <p сlass="fs-6-5-suut">
                        Поддержка субъектов малого и среднего
                        предпринимательства
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ОТЗЫВЫ СТУДЕНТОВ И ВЫПУСКНИКОВ -->
  <section>
    <div class="container mt-5">
      <div class="mx-1 wrapper background-color-white px-3 px-lg-4 px-xl-5 py-2 py-xl-2">
        <div class="row">
          <p class="fs-1-suut fw-bold text-transform-uppercase">
            Отзывы наших студентов и выпускников
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="wrapper background-color-gray mx-1 p-2 p-md-4 h-100 d-flex align-items-center">
        <div class="row">
          <div class="col-3 p-0 p-md-2 text-center my-auto">
            <img src="./img/baranova.webp" data-bs-toggle="modal" data-target="#videoModal" data-bs-target="#videoModal"
              data-theVideo="https://www.youtube.com/embed/oMqjXKgr__0?si=MxvXdslyfu03g9bT" class="" role="button"
              style="border-radius: 50%; width: 70%" alt="" />
          </div>
          <div class="col-9 my-auto p-0 p-md-2">
            <p class="fs-6-5-suut m-0 p-0">
              <b>Баранова Наталья</b>, студентка 2 курса
            </p>
            <p class="fs-6-5-suut m-0">
              <q class="fst-italic">Программа менеджмент поможет стать вам востребованным
                специалистом, обеспечит вас всеми необходимыми инструментами
                для достижения целей</q>
            </p>
          </div>
        </div>
      </div>

      <div class="wrapper background-color-gray mt-3 mx-1 p-2 p-md-4 h-100 d-flex align-items-center">
        <div class="row">
          <div class="col-3 text-center my-auto p-0 p-md-2">
            <img src="./img/andreeva.webp" data-bs-toggle="modal" data-target="#videoModal" data-bs-target="#videoModal"
              data-theVideo="https://www.youtube.com/embed/-xaN8qecy98?si=Kuj1x8iJ9-vxQnMY" class="" role="button"
              style="border-radius: 50%; width: 70%" alt="" />
          </div>
          <div class="col-9 my-auto p-0 p-md-2">
            <p class="fs-6-5-suut m-0 p-0">
              <b>Андреева Софья</b>, студентка 3 курса
            </p>
            <p class="fs-6-5-suut m-0">
              <q class="fst-italic">Мы учимся не только теоретическим аспектам менеджмента, но и
                активно применяем знания на практике, решая реальные бизнес
                кейсы</q>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- НАШИ ПРЕПОДАВАТЕЛИ -->
  <section>
    <div class="container mt-5">
      <div class="mx-1 wrapper background-color-gray px-3 px-lg-4 px-xl-5 py-4 py-xl-5">
        <div class="row">
          <div class="col-12 col-md-5 col-lg-4 my-auto">
            <p class="fs-1-suut fw-bold text-transform-uppercase">
              Наши преподаватели
            </p>
          </div>
          <div class="col-12 col-md-7 col-lg-8">
            <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
              <div class="col-4 my-auto">
                <img src="./img/garipov.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Гарипов Роберт Ильизаревич</h5>
                <p class="fs-8-suut">
                  зав. кафедры «Экономика и управление», к.э.н., доцент кафедры «Экономика и управление», председатель
                  правления ТСН «Энтузиастов 12»
                  Дисциплины: Основы экономики

                </p>
              </div>
            </div>

            <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
              <div class="col-4 my-auto">
                <img src="./img/borisenko.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Борисенко Яна Михайловна</h5>
                <p class="fs-8-suut">
                  к.э.н., доцент кафедры «Экономика и управление»,
                  Дисциплины: Менеджмент, Проект-менеджмент, Маркетинг

                </p>
              </div>
            </div>

            <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
              <div class="col-4 my-auto">
                <img src="./img/lisenko.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Лысенко Юлия Валентиновна</h5>
                <p class="fs-8-suut">
                  доктор э.н., профессор, профессор кафедры «Экономика и
                  управление», финансовый директор ООО «УралЕвро» Дисциплины:
                  Управление стоимостью бизнеса
                </p>
              </div>
            </div>
            <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
              <div class="col-4 my-auto">
                <img src="./img/paseshnik.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Пасешник Наталья Петровна</h5>
                <p class="fs-8-suut">
                  к.э.н., доцент кафедры «Экономика и управление»,
                  Дисциплины: Методы принятия управленческих решений, Менеджмент продаж и мерчендайзинг, Теория
                  организации и организационное поведение

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ЧТО ЕЩЁ ВАЖНО -->
  <section>
    <div class="container mt-5 py-5">
      <div class="mx-1 wrapper background-color-white px-3 px-lg-4 px-xl-5 py-2 py-xl-2">
        <div class="row">
          <p class="fs-1-suut fw-bold text-transform-uppercase">
            Что ещё важно
          </p>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="mt-2 d-inline-flex border-suut-12 background-color-gray p-2 p-md-3 p-lg-4 align-items-center"
              style="min-height: 50px">
              <p class="m-0 fs-7-suut text-transform-uppercase">
                отсрочка от армии
              </p>
            </div>
            <div class="mt-2 d-inline-flex border-suut-12 background-color-gray p-2 p-md-3 p-lg-4 align-items-center"
              style="min-height: 50px">
              <p class="m-0 fs-7-suut text-transform-uppercase">
                Оплата в течение года равными частями
              </p>
            </div>
            <div class="mt-2 d-inline-flex border-suut-12 background-color-gray p-2 p-md-3 p-lg-4 align-items-center"
              style="min-height: 50px">
              <p class="m-0 fs-7-suut text-transform-uppercase">
                Личный кабинет студента
              </p>
            </div>
            <div class="mt-2 d-inline-flex border-suut-12 background-color-gray p-2 p-md-3 p-lg-4 align-items-center"
              style="min-height: 50px">
              <p class="m-0 fs-7-suut text-transform-uppercase">
                Электронные журнал и зачетная книжка
              </p>
            </div>
            <div class="mt-2 d-inline-flex border-suut-12 background-color-gray p-2 p-md-3 p-lg-4 align-items-center"
              style="min-height: 50px">
              <p class="m-0 fs-7-suut text-transform-uppercase">
                Грантовая и стипендиальная поддержка ректора
              </p>
            </div>
            <div class="mt-2 d-inline-flex border-suut-12 background-color-gray p-2 p-md-3 p-lg-4 align-items-center"
              style="min-height: 50px">
              <p class="m-0 fs-7-suut text-transform-uppercase">
                Финансовая, социальная и психологическая помощь студетам
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ОТВЕЧАЕМ НА ВОПРОСЫ -->
  <section>
    <div class="container my-5">
      <div class="mx-1 wrapper background-color-gray px-3 px-lg-4 px-xl-5 py-4 py-xl-5">
        <div class="row">
          <p class="fs-1-suut fw-bold text-transform-uppercase">
            Отвечаем на вопросы
          </p>
        </div>

        <div class="row mt-3">
          <div class="accordion" id="accordionBlockFAQ">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneFAQ" aria-expanded="false"
                  aria-controls="collapseOneFAQ">
                  Какие дополнительные образовательные программы или курсы
                  доступны студентам для расширения знаний и навыков в области
                  менеджмента организации?
                </button>
              </h2>
              <div id="collapseOneFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">Курсы по 1С: Предприятие, Работа с нейросетями и все образовательные
                    программы, реализуемые в нашем Вузе</div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoFAQ" aria-expanded="false"
                  aria-controls="collapseTwoFAQ">
                  Как проходит практика?
                </button>
              </h2>
              <div id="collapseTwoFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">Практика проходит на предприятиях реального сектора экономики по профилю
                    подготовки</div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeFAQ" aria-expanded="false"
                  aria-controls="collapseThreeFAQ">
                  Есть ли возможность участвовать в студенческих конференциях
                  или других мероприятиях по обмену знаниями и опытом в
                  области управления?
                </button>
              </h2>
              <div id="collapseThreeFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">Да, в Вузе действует студенческое научное общество, которое помогает
                    студентам участвовать во внутренних и внешних мероприятиях</div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourFAQ" aria-expanded="false"
                  aria-controls="collapseFourFAQ">
                  Какие проекты в период обучения я буду реализовывать?
                </button>
              </h2>
              <div id="collapseFourFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">Вы будете исследовать способы повышения конкурентоспособности компании и принципы бережливого производства, проводить стратегический анализ внешней и внутренней среды предприятия, научитесь определять возможности и источники риска</div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveFAQ" aria-expanded="false"
                  aria-controls="collapseFiveFAQ">
                  Как можно оформить образовательный кредит с господдержкой от
                  3%?
                </button>
              </h2>
              <div id="collapseFiveFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">
                    <p>
                      С подробными правилами оформления образовательного
                      кредита вы можете ознакомиться по
                      <a href="https://www.inueco.ru/files/abiturientu/kak_oformit_kredit_3_procenta.pdf"
                        target="_blank">ссылке</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixFAQ" aria-expanded="false"
                  aria-controls="collapseSixFAQ">
                  Как получить налоговый вычет в 13%?
                </button>
              </h2>
              <div id="collapseSixFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">
                    <p>
                      С подробными правилами получения налогового вычета вы
                      можете ознакомиться по
                      <a href="https://www.inueco.ru/files/abiturientu/kak_poluchit_nalogoviu_vyichet.pdf"
                        target="_blank">ссылке</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ОПЛАТА ОБУЧЕНИЯ -->
  <section>
    <div class="container my-5">
      <div class="mx-1 wrapper background-color-white px-3 px-lg-4 px-xl-5 py-4 py-xl-5">
        <div class="row">
          <div class="row col-12 col-md-5">
            <div>
              <p class="fs-1-suut fw-bold text-transform-uppercase">
                Оплата обучения
              </p>
            </div>
            <div class="p-4">
              <p class="m-0 fw-bold fs-1-suut">
                110 000<span class="fw-bold fs-5">р/год</span>
              </p>
              <p class="m-0 fw-bold fs-3 text-dark-suut fs-5">
                очное обучение
              </p>
            </div>
            <div class="p-4">
              <p class="m-0 fw-bold fs-1-suut">
                60 000<span class="fw-bold fs-5">р/год</span>
              </p>
              <p class="m-0 fw-bold fs-3 text-dark-suut fs-5">
                очно-заочное обучение
              </p>
            </div>
          </div>
          <div class="row p-0 mx-auto col-12 col-md-7">
            <div class="wrapper background-color-gray px-3 px-lg-4 px-xl-5 pb-5 py-4 mb-3">
              <p class="fs-lg-5 fs-6-5-suut fw-bold text-transform-uppercase">
                Налоговый вычет
              </p>
              <p class="fs-6-5-suut text-dark-suut">
                Вы можете получить налоговой вычет в размере 13% от стоимости
                обучения
              </p>
            </div>
            <div class="wrapper background-color-green-light px-3 px-lg-4 px-xl-5 pb-5 py-4 mb-3">
              <p class="fs-lg-5 fs-6-5-suut fw-bold text-transform-uppercase">
                Образовательный кредит со ставкой 3%
              </p>
              <p class="fs-6-5-suut text-dark-suut">
                Платите только проценты по кредиту в течение всего обучения
                и 9 месяцев после выпуска. Основную часть сможете выплачивать
                уже во время работы по новой специальности
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ФОРМА ОБРАТНОЙ СВЯЗИ -->
  <section>
    <div class="container my-5">
      <div class="row p-1 mt-3">
        <div class="wrapper-inner background-color-gray-dark row mx-auto align-items-center py-4 px-lg-5">
          <div class="col-12 col-lg-6">
            <p class="fs-3 fw-bold p-0 m-0">Остались вопросы?</p>
            <p class="fs-6-5-suut p-0 m-0">
              Эксперты приемной комиссии подробно ответят на все вопросы про
              поступление и обучение
            </p>
          </div>

          <div class="col-12 col-lg-6 text-center">
            <span class="loader d-none my-5" id="loader_feedback_bottom"></span>
            <div class="d-none my-5" id="conglaturation_bottom">
              <img src="./img/icons8-галочка-480.png" width="48" alt="Форма отправлена" />
              <p class="fs-6-5-suut text-medium-suut">
                Наши специалисты скоро с вами свяжутся
              </p>
            </div>
            <form action="https://api-abtr.science174.ru/feedback" method="post" class="d-flex row"
              id="bottomFormFeedBack">
              <input type="text" class="fs-6-5-suut form-control my-2 from-control-input-suut" name="username"
                id="nameControl" placeholder="Имя" />
              <input type="tel" class="fs-6-5-suut form-control my-2 from-control-input-suut" name="phone"
                id="phoneControl" placeholder="Телефон" />
              <input type="email" class="fs-6-5-suut form-control my-2 from-control-input-suut" name="email"
                id="emailControl" placeholder="Электронная почта" />
              <input type="hidden" name="specialization"
                value="38.03.02 Менеджмент (бакалавриат), Менеджмент организации" />
              <button class="btn btn-primary-suut fs-6-5-suut text-transform-uppercase">
                Отправить заявку
              </button>
              <p class="fs-8-suut text-dark-suut"> Отправляя заявку с помощью данной формы, вы соглашаетесь с обработкой своих персональных данных в соответствии с 
                <a href="https://www.inueco.ru/files/sveden/files/document/zachitaPD.pdf"> положением</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
    include("../includes/footer.inc.php");
  ?>     
  <script src="./js/main.js"></script>
  <script src="./js/bootstrap.bundle.min.js.map"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>