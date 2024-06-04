<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include_once("../includes/meta.inc.php") ?>
  <title>Абитуриенту ЮУТУ - Юриспруденция бакалавриат Общеправовая подготовка</title>
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
              40.03.01 Юриспруденция (бакалавриат)
            </p>
          </div>
          <div class="col-7 mt-md-2">
            <p class="fs-1-suut fw-bold text-transform-uppercase line-height-small py-0 m-0">
              Общеправовая <br />
              подготовка
            </p>
          </div>

          <div class="col-10 col-md-8 col-lg-6 mt-md-4">
            <p class="fs-7-suut text-medium-suut m-0">
              Погрузитесь в увлекательный мир права, изучите его тонкости и
              принципы, освойте навыки анализа и решения правовых
              вопросов. Подготовьтесь к захватывающей и значимой карьере в
              юриспруденции, где ваша компетенция и влияние могут стать
              основой для справедливости и правопорядка в обществе!
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
            <span class="fw-bold">Два диплома после окончания обучения</span>
            <br />
            бакалавр юриспруденции + специалист в области английского языка
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-center fs-6-5-suut">
            <span class="fw-bold">Методы погружения в профессиональную среду</span>
            <br />
            экскурсии в государственные органы, суды и правоохранительные
            органы, оптимальное сочетание теоретических знаний и
            практико-ориентированной работы
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-center fs-6-5-suut">
            <span class="fw-bold">Преподаватели – действующие практики в области
              юриспруденции</span>
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-center fs-6-5-suut">
            <span class="fw-bold">Сотрудничество с ведущими юридическими организациями и
              государственными органами при прохождении практик</span>
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
                      <p class="fs-6-5-suut m-0">Человек и общество</p>
                    </div>
                    <div class="col-4 col-sm-3 pe-0">
                      <p class="fs-6-5-suut m-0 text-end">50 баллов</p>
                    </div>
                  </div>
                  <div class="row border-box-buttom-dark-suut my-3">
                    <div class="col-8 col-sm-9 ps-0">
                      <p class="fs-6-5-suut m-0">
                        Основы российского законодательства
                      </p>
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
                  value="Юриспруденция, бакалавриат, Общеправовая подготовка" />
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
                  <b>Если вы увлечены правовой наукой, </b> умеете
                  анализировать сложные ситуации, находить выход из трудных
                  юридических вопросов и защищать интересы других людей
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6 py-3 p-2 px-lg-5">
            <div class="wrapper-inner background-color-gray row p-2 p-lg-4 align-items-center h-100 min-height-170">
              <div class="col-9">
                <p class="fs-6-5-suut text-medium-suut m-0">
                  <b>Стремитесь к справедливости и законности,</b> которые
                  помогают людям разрешать конфликты, защищают права и свободы
                  каждого
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
                  <b>Хотите внести свой вклад в укрепление правового
                    государства и создание справедливого общества</b>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ЧТОБЫ УЧИТЬСЯ БЫЛО ПРИЯТНЕЕ -->
  <?php include_once("../includes/section-for-funny-edu-common.inc.php") ?>

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
              <img src="./img/mvd_cho.png" style="width: 100%" alt="МВД" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
              <img src="./img/advocat.png" style="width: 100%" alt="Коллегия адвокатов Академечиская" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
              <img src="./img/fssp.png" style="width: 100%" alt="ФССП" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
              <img src="./img/arbitr.png" style="width: 100%" alt="Арбитражный суд" />
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
                    Начинающий юрист от 50 тысяч рублей
                  </p>
                </div>
                <div class="wrapper-inner mb-1">
                  <p class="fs-7-suut m-0 p-2 pe-5 d-inline-block background-color-gray-dark border-suut-12">
                    Юрист с опытом работы от 80 тысяч рублей
                  </p>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <h5 class="text-dark-suut">Навыки</h5>
                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Знание законодательства и его применение на практике
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Умение анализировать и интерпретировать юридические
                    документы и материалы
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Мастерство составления правовых документов
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Ораторское мастерство и переговорные навыки
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Аналитическое мышление
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Работа с клиентами, консультирования и предоставления
                    юридической помощи
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Умение работать в команде и разрешать конфликты
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Креативное мышление и поиск нестандартных решений правовых
                    проблем
                  </p>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <h5 class="text-dark-suut">Владение технологиями</h5>
                
                
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/gigacha.png" class="align-middle" width="20px" alt="" />
                  <p class="d-inline my-0 fs-7-suut align-middle">GigaChat</p>
                </div>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/yaforms.svg" class="align-middle" width="90px" alt="" />
                  <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Figma</p> -->
                </div>
               
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/Jalinga_logo_color.png" class="align-middle" width="90px" alt="" />
                  <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Figma</p> -->
                </div>
                
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/kosultant.png" class="align-middle" width="90px" alt="" />
                  <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Figma</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 mt-2 mt-lg-0">
          <div class="col-12">
            <div class="mx-1 wrapper background-color-gray px-3 px-lg-4 px-xl-5 py-3 py-xl-4">
              <h5 class="text-dark-suut">Места работы</h5>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Юридические компании или фирмы
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Городские и районные администрации
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">Суды</p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Адвокатские образования
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Правоохранительные органы
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Государственные органы и органы местного самоуправления
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Нотариальные конторы
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Образовательные учреждения
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Страховые компании
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 mt-2">
            <div class="mx-1 wrapper background-color-gray px-3 px-lg-4 px-xl-5 py-3 py-xl-4">
              <h5 class="text-dark-suut">Должности</h5>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Юрист, юрисконсульт
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Специалист по заключению договоров
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Специалист по правовому сопровождению сделок
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Судья, помощник судьи, секретарь судебного заседания,
                  специалист суда
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Адвокат, помощник адвоката, медиатор
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Дознаватель, следователь, прокурор
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Судебный пристав
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Специалист юридического отдела, специалист по
                  государственным закупкам
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Нотариус, нотариальный эксперт, помощник нотариуса
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
              href="https://www.inueco.ru/sveden/files/002776.pdf" target="_blank">Скачать учебный план</a>
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
                      <p сlass="fs-6-5-suut">Теория государства и права</p>
                      <p сlass="fs-6-5-suut">Конституционное право</p>
                      <p сlass="fs-6-5-suut">
                        Основы российской государственности
                      </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                        История правоохранительных органов
                      </p>
                      <p сlass="fs-6-5-suut">
                        История государства и права России
                      </p>
                      <p сlass="fs-6-5-suut">
                        История государства и права зарубежных стран
                      </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Правоохранительные органы</p>
                      <p сlass="fs-6-5-suut">
                        Противодействие коррупции, экстремизму и терроризм
                      </p>
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
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Гражданское право</p>
                      <p сlass="fs-6-5-suut">Уголовное право</p>
                      <p сlass="fs-6-5-suut">Избирательное право</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Муниципальное право</p>
                      <p сlass="fs-6-5-suut">Административное право</p>
                      <p сlass="fs-6-5-suut">
                        Государственная регистрация юридических лиц
                      </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                        Наследственное право и нотариат
                      </p>
                      <p сlass="fs-6-5-suut">Таможенное право</p>
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
                      <p сlass="fs-6-5-suut">Гражданский процесс</p>
                      <p сlass="fs-6-5-suut">Уголовный процесс</p>
                      <p сlass="fs-6-5-suut">Трудовое право</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Криминология</p>
                      <p сlass="fs-6-5-suut">Семейное право</p>
                      <p сlass="fs-6-5-suut">Налогове право</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Экологическое право</p>
                      <p сlass="fs-6-5-suut">
                        Правовые основы государственной и муниципальной службы
                      </p>
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
                      <p сlass="fs-6-5-suut">Административный процесс</p>
                      <p сlass="fs-6-5-suut">Криминалистика</p>
                      <p сlass="fs-6-5-suut">Международное право</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Уголовно-исполнительное право</p>
                      <p сlass="fs-6-5-suut">Арбитражный процесс</p>
                      <p сlass="fs-6-5-suut">Земельное право</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Предпринимательское право</p>
                      <p сlass="fs-6-5-suut">Исполнительное производство</p>
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
            <img src="./img/kozhemyakina.webp" data-bs-toggle="modal" data-target="#videoModal"
              data-bs-target="#videoModal" data-theVideo="https://www.youtube.com/embed/Wpr91Lwnccw?si=7TVCYZHmSa1XsXM7"
              class="" role="button" style="border-radius: 50%; width: 70%" alt="" />
          </div>
          <div class="col-9 my-auto p-0 p-md-2">
            <p class="fs-6-5-suut m-0 p-0">
              <b>Кожемякина Дарья </b>, студентка 3 курса
            </p>
            <p class="fs-6-5-suut m-0">
              <q class="fst-italic">Обучаясь по данной программе я приобрела навыки работы в команде, аргументации своей
                позиции и эффективного общения, а также умение анализировать информацию и состовлять юридические
                документы. ЮУТУ предоставляет возможности для профессионального роста и самореализации
              </q>
            </p>
          </div>
        </div>
      </div>

      <div class="wrapper background-color-gray mt-3 mx-1 p-2 p-md-4 h-100 d-flex align-items-center">
        <div class="row">
          <div class="col-3 text-center my-auto p-0 p-md-2">
            <img src="./img/sinelnikova.webp" data-bs-toggle="modal" data-target="#videoModal"
              data-bs-target="#videoModal" data-theVideo="https://www.youtube.com/embed/EFeMqnP7Etw?si=vHjMehHVuc07uZAb"
              class="" role="button" style="border-radius: 50%; width: 70%" alt="" />
          </div>
          <div class="col-9 my-auto p-0 p-md-2">
            <p class="fs-6-5-suut m-0 p-0">
              <b>Синельникова Арина</b>, студентка 1 курса
            </p>
            <p class="fs-6-5-suut m-0">
              <q class="fst-italic">Обучаясь в ЮУТУ я получаю фундаментальные знания в области юриспруденции развивая аналитические и юридические навыки. ЮУТУ предоставляет широкие возможности для прохождения практики</q>
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
                <img src="./img/efimenko.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Ефименко Евгения Николаевна</h5>
                <p class="fs-8-suut">
                  И.о. заведующего кафедрой «Юриспруденция», кандидат
                  юридических наук. Общий стаж работы 20 лет. Дисциплины:
                  Уголовное право, Криминология, Уголовно-исполнительное
                  право, Исполнительное производство.
                </p>
              </div>
            </div>

            <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
              <div class="col-4 my-auto">
                <img src="./img/yanin.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Янин Михаил Геннадьевич</h5>
                <p class="fs-8-suut">
                  Доцент кафедры «Юриспруденция», Председатель Челябинской областной коллегии адвокатов «Академическая»,
                  адвокат. Общий стаж работы 24 года. Дисциплины: Уголовный процесс.
                </p>
              </div>
            </div>

            <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
              <div class="col-4 my-auto">
                <img src="./img/novokshonova.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Новокшонова Нина Александровна</h5>
                <p class="fs-8-suut">
                  Доцент кафедры «Юриспруденция», кандидат юридических наук, доцент. Общий стаж работы 28 лет.
                  Дисциплины: Гражданское право.
                </p>
              </div>

            </div>
            <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
              <div class="col-4 my-auto">
                <img src="./img/vasilenko.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Василенко Людмила Александровна</h5>
                <p class="fs-8-suut">
                  Доцент кафедры «Юриспруденция», кандидат юридических наук, доцент. Общий стаж работы 38 лет.
                  Дисциплины: Уголовное право, Правоохранительные органы, Жилищное право.
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
                  Каковы основные навыки, которые приобретает студент во время обучения на юридической специальности?
                </button>
              </h2>
              <div id="collapseOneFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">
                    Студенты, обучающиеся на юридической специальности, приобретают широкий спектр навыков: понимание
                    правовой терминологии и понятий, навыки написания, навыки исследования, аналитические навыки и др.
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoFAQ" aria-expanded="false"
                  aria-controls="collapseTwoFAQ">
                  Какие возможности для дальнейшего обучения предоставляет диплом по юридической специальности?
                </button>
              </h2>
              <div id="collapseTwoFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">
                    После получения бакалаврской степени в юриспруденции студенты могут поступить в магистратуру по
                    более узким специализациям юриспруденции или смежных областей, таких как международное право,
                    корпоративное право, уголовное право и др.
                    <br>
                    Те, кто заинтересован в научной карьере, могут поступить в аспирантуру и далее продолжить научную
                    карьеру, защитив докторскую диссертацию и получив степень кандидата наук или доктора наук в области
                    юриспруденции.
                    <br>
                    Студенты с юридическим дипломом могут участвовать в стажировках в юридических фирмах,
                    государственных учреждениях, правоохранительных органах, что поможет им получить ценный практический
                    опыт работы.
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeFAQ" aria-expanded="false"
                  aria-controls="collapseThreeFAQ">
                  Какие виды практик и стажировок доступны студентам юридического факультета?
                </button>
              </h2>
              <div id="collapseThreeFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">
                    Во время обучения студенты проходят три вида практик: учебная (ознакомительная), учебная
                    (правоприменительная) и производственная (правоприменительная).
                    Студенты могут проходить практику в любых организациях, связанных с юридической деятельностью, а
                    также в государственных органах и органах местного самоуправления.
                  </div>
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
            <div class="p-4">
              <p class="m-0 fw-bold fs-1-suut">
                55 000<span class="fw-bold fs-5">р/год</span>
              </p>
              <p class="m-0 fw-bold fs-3 text-dark-suut fs-5">
                заочное обучение
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
              <input type="hidden" name="specialization" value="Юриспруденция, бакалавриат, Общеправовая подготовка" />
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