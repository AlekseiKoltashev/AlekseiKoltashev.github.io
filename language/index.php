<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include_once("../includes/meta.inc.php") ?>
  <title>Абитуриенту ЮУТУ - Лингвистика</title>
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
          <div class="col-10">
            <p class="fs-8-suut text-medium-suut text-transform-uppercase label-specialization m-0">
              45.03.02 Лингвистика (бакалавриат)
            </p>
          </div>
          <div class="col-7 mt-md-2">
            <p class="fs-1-suut fw-bold text-transform-uppercase line-height-small py-0 m-0">
              Международная <br />
              коммуникация <br />
              и перевод
            </p>
          </div>

          <div class="col-10 col-md-8 col-lg-6 mt-md-4">
            <p class="fs-7-suut text-medium-suut m-0">
              Погрузись в мир, где каждый язык открывает дверь в новую
              реальность, каждое слово ведет к неведомым горизонтам. Открой
              для себя силу слов и стань мастером межкультурной коммуникации
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
            Лингвист/переводчик + специалист в области английского языка для
            детей дошкольного возраста
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-center fs-6-5-suut">
            <span class="fw-bold">Метод погружения в языковую среду</span>
            <br />
            Вы не просто учите грамматику и словарный запас, вы погружаетесь в
            культуру, начинаете мыслить и чувствовать на новом языке
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-center fs-6-5-suut">
            <span class="fw-bold">Преподаватели - носители языка</span>
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-center fs-6-5-suut">
            <span class="fw-bold">Сотрудничество с передовыми вузами страны</span>
            <br />
            при прохождении профессиональной переподготовки или курсов
            повышения квалификации
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
                  class="m-0 fs-7-suut fw-bold text-decoration-underline text-underline-offset text-transform-uppercase text-dark-suut "
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
                      <p class="fs-6-5-suut m-0">Иностранный язык</p>
                    </div>
                    <div class="col-4 col-sm-3 pe-0">
                      <p class="fs-6-5-suut m-0 text-end">22 балла</p>
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
                    <p class="fs-7-suut">*один из двух предметов по выбору абитуриента</p>
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
                      <p class="fs-6-5-suut m-0">Иностранный язык</p>
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
                  <div>
                    <p class="fs-7-suut">вступительные испытания в виде компьютерного тестирования</p>
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
                <img src="./img/icons8-галочка-480.png" width="48" alt="Форма отправлена">
                <p class="fs-6-5-suut text-medium-suut">Наши специалисты скоро с вами свяжутся</p>
              </div>

              <?php $SPEC_NAME="Лингвитика, бакалавриат, международные коммуникации и перевод"; ?>
                <?php
                    include("../includes/form-top.inc.php");
                ?> 
             
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
                  <b>Хотите путешествовать по миру</b> без языкового барьера,
                  погружаясь в культуру и этнос посещаемых стран
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6 py-3 p-2 px-lg-5">
            <div class="wrapper-inner background-color-gray row p-2 p-lg-4 align-items-center h-100 min-height-170">
              <div class="col-9">
                <p class="fs-6-5-suut text-medium-suut m-0">
                  <b>Искренне увлечены языками, хотите преподавать</b> в
                  колледже, университете или частном языковом центре
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
                  <b>Мечтаете о карьере </b> в переводческой деятельности,
                  туристической индустрии, журналистике или международных
                  корпорациях
                </p>
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
              <img src="./img/tSxKVfmH9n8.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Тренажерный зал</h5>
                <p class="card-text text-dark-suut">Для всех студентов</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 mb-4 px-3 px-lg-5">
            <div class="card card-suut h-100" style="width: 100%">
              <img src="./img/lingphone.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Лингафонная аудитория</h5>
                <p class="card-text text-dark-suut">Для совершенствования процесса обучения иностранным языкам</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 mb-4 px-3 px-lg-5">
            <div class="card card-suut h-100" style="width: 100%">
              <img src="./img/cowork.jpg" class="card-img-top" alt="..." />
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
              <img src="./img/урк основная версия.png" style="width: 100%" alt="УРК" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
              <img src="./img/logo2.png" style="width: 100%" alt="ТРАКТОР" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
              <img src="./img/vidgof.png" style="width: 100%" alt="ВИДГОФ" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
              <img src="./img/logo-ariant.svg" style="width: 100%" alt="Ариант" />
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
                <img src="./img/shkal2.jpg" class="border-circle" height="200px" alt="Фото в резюме" />
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <h5 class="text-dark-suut">Зарплата</h5>
                <div class="wrapper-inner mb-1">
                  <p class="fs-7-suut m-0 p-2 d-inline-block background-color-gray-dark border-suut-12">
                    Уровень владения языка B2 от 60 тысяч рублей
                  </p>
                </div>
                <div class="wrapper-inner mb-1">
                  <p class="fs-7-suut m-0 p-2 d-inline-block background-color-gray-dark border-suut-12">
                    Уровень влдаения языка C1/C2 от 80 тысяч рублей
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
                    Мастерство перевода на нескольких языках
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Глубокое понимание межкультурной коммуникации
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Аналитическое мышление лингвиста
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Эффективное управление проектами перевода
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Критическое мышление и поиск альтернативных решений
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Адаптивность и гибкость
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Самоорганизация и самомотивация
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                    Способность находить нестандартные подходы к решению задач
                  </p>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <h5 class="text-dark-suut">Владение технологиями</h5>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/figma.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline my-0 fs-7-suut align-middle">Figma</p>
                </div>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/myquiz.svg" class="align-middle" width="80px" alt="" />
                  <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Figma</p> -->
                </div>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/gigacha.png" class="align-middle" width="20px" alt="" />
                  <p class="d-inline my-0 fs-7-suut align-middle">GigaChat</p>
                </div>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/getlocus.svg" class="align-middle" width="90px" alt="" />
                  <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Figma</p> -->
                </div>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/cupcut.png" class="align-middle" width="90px" alt="" />
                  <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Figma</p> -->
                </div>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/Jalinga_logo_color.png" class="align-middle" width="90px" alt="" />
                  <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Figma</p> -->
                </div>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/moodle_logo_TM.svg" class="align-middle" width="90px" alt="" />
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
                  Частные языковые центры
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Переводческие бюро
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Рекламные компании
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  IT компании
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Школы, колледжи, университеты
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Туристические компании
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Гостиничные холдинги
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">Массмедиа</p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Международные агентства по недвижимости
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Крупные промышленные предприятия
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
                  Репетитор, педагог по коррекции речи, лингво коуч
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Переводчик или синхронный переводчик
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Менеджер по переводу и локализация рекламных материалов,
                  разработчик мультиязычного контента, аналитик международных
                  рынков
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  SEO-специалист на разных языках, SMM менеджер
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Учитель, преподаватель
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Менеджер по туризму, гид-переводчик
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Менеджер по работе с иностранными гостями, Координатор
                  международных мероприятий и конференций
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Копирайтер, редактор
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">Риелтор</p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Менеджер по ВЭД
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
              href="https://www.inueco.ru/sveden/files/002559.pdf" target="_blank">Скачать учебный план</a>
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
                      <p сlass="fs-6-5-suut">Иностранный язык</p>
                      <p сlass="fs-6-5-suut">Практический курс первого иностранного языка</p>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Практический курс второго (китайского) иностранного языка</p>
                      <p сlass="fs-6-5-suut">Введение в профессию. Основы педагогики и психологии</p>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Информационные технологии в профессиональной деятельности</p>
                      <p сlass="fs-6-5-suut">Персональный менеджмент</p>
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
                      <p сlass="fs-6-5-suut">Международные бизнес-коммуникации на иностранном языке</p>
                      <p сlass="fs-6-5-suut">Практический курс первого иностранного языка</p>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Практический курс второго (китайского) иностранного языка</p>
                      <p сlass="fs-6-5-suut">История языка и введение в спецфилологию</p>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Теория перевода</p>

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
                      <p сlass="fs-6-5-suut">Стратегии эффективного копирайтинга</p>
                      <p сlass="fs-6-5-suut">Основы языкознания</p>
                      <p сlass="fs-6-5-suut">История и география стран первого иностранного языка</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Теоретическая грамматика</p>
                      <p сlass="fs-6-5-suut">Практический курс перевода первого иностранного языка</p>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Перевод переговоров</p>
                      <p сlass="fs-6-5-suut">Культура стран первого иностранного языка</p>
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
                      <p сlass="fs-6-5-suut">История литературы стран первого иностранного языка</p>
                      <p сlass="fs-6-5-suut">Стилистика</p>
                      <p сlass="fs-6-5-suut">Практический курс перевода первого иностранного языка</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Практический курс перевода второго (китайского) иностранного языка</p>
                      <p сlass="fs-6-5-suut">Технический перевод</p>
                      <p сlass="fs-6-5-suut">Художественный перевод</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Перевод деловой корреспонденции</p>
                      <p сlass="fs-6-5-suut">Третий (испанский) иностранный язык</p>
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
            <img src="./img/СиневаPlay.JPG" data-bs-toggle="modal" data-target="#videoModal" data-bs-target="#videoModal"
              data-theVideo="https://www.youtube.com/embed/hDItRMraexw?si=L4a4pbo3jY-wceQJ" class="" role="button"
              style="border-radius: 50%; width: 70%" alt="" />
          </div>
          <div class="col-9 my-auto p-0 p-md-2">
            <p class="fs-6-5-suut m-0 p-0"><b>Синева Полина</b>, студентка 3 курса</p>
            <p class="fs-6-5-suut m-0">
              <q class="fst-italic ">Южно-уральский технологический университет, это место где я нахожу вдохновление и
                возможность развиваться, как профессионал и конечно же, как личность</q>
            </p>
          </div>
        </div>
      </div>

      <div class="wrapper background-color-gray mt-3 mx-1 p-2 p-md-4 h-100 d-flex align-items-center">
        <div class="row">
          <div class="col-3 text-center my-auto p-0 p-md-2">
            <img src="./img/сердитыхPlay.JPG" data-bs-toggle="modal" data-target="#videoModal"
              data-bs-target="#videoModal" data-theVideo="https://www.youtube.com/embed/REJhfi_InsQ?si=4WQqTwWPytEZ80pS"
              class="" role="button" style="border-radius: 50%; width: 70%" alt="" />
          </div>
          <div class="col-9 my-auto p-0 p-md-2">
            <p class="fs-6-5-suut m-0 p-0"><b>Сердитых Данил</b>, студент 3 курса</p>
            <p class="fs-6-5-suut m-0">
              <q class="fst-italic">Обучаясь на кафедре лингвистики я обрел множество связей, друзей, знакомых и любимых
                преподавателей. Это дверь в успешное будущее, в котором будут ждать сотни возможностей</q>
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
          <div class="col-12 col-md-5  col-lg-4 my-auto">
            <p class="fs-1-suut fw-bold text-transform-uppercase">
              Наши преподаватели
            </p>
          </div>
          <div class="col-12 col-md-7 col-lg-8">
            <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
              <div class="col-4 my-auto">
                <img src="./img/sea.jpg" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Скачкова Екатерина Анатольевна</h5>
                <p class="fs-8-suut">
                  Заведующий кафедрой лингвистики и гуманитарные дисциплины,
                  кандидат педагогических наук, доцент прошла международное
                  повышение квалификации в «International House London» по
                  программе «Cambridge CELTA – Certificate in Teaching English
                  to Speakers of Other Languages». CELTA - квалификация в
                  области преподавания английского языка как второго.
                  Сертификат CELTA выдается подразделением Кембриджского
                  университета
                </p>
              </div>
            </div>

            <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
              <div class="col-4 my-auto">
                <img src="./img/YUVK.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Казаченок Юлия Викторовна</h5>
                <p class="fs-8-suut">
                  Доцент кафедры «Лингвистика и гуманитарные дисциплины», кандидат педагогических наук – имеет повышения
                  квалификации по программам «Педагогика высшей школы. Образовательные технологии в современном вузе»
                  (2021); «Управление конфликтами в
                  образовательной организации» (2021), «Jalinga Studio: создание современных образовательных
                  видеороликов и интерактивных презентационных материалов» (2021), «Технологии работы преподавателя вуза
                  с обучающимися с инвалидностью и ограниченными возможностями здоровья в условиях инклюзии» (2022)
                </p>
              </div>
            </div>

            <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
              <div class="col-4 my-auto">
                <img src="./img/div.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Денисова Ирина Владимировна</h5>
                <p class="fs-8-suut">
                  Кандидат филологических наук, доцент, относится к числу руководителей и работников организаций,
                  деятельность которых связана с направленностью (профилем) реализуемой образовательной программы
                  Прошла курсы повышения квалификации по программе «Overseas Teachers Refresher Course» (школа «Regent
                  Language Training» Лондон), «IT в переводе», БФУ имени И. Канта (2023); «Современные педагогические
                  технологии в образовательном процессе»; «Практическая грамматика английского
                  языка»; «Обучение младших классов, обучение языку на основе заданий, развитие
                  учителя и саморефлексии, межкультурная компетентность, обучение деловому языку, преподавание
                  академического английского языка» - EF International Language Campuses (2024)
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
                  Сколько языков я буду знать?
                </button>
              </h2>
              <div id="collapseOneFAQ" class="accordion-collapse collapse " data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">Три – английский, китайский и испанский.</div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoFAQ" aria-expanded="false"
                  aria-controls="collapseTwoFAQ">
                  Какие нормы языков мы будем изучать?
                </button>
              </h2>
              <div id="collapseTwoFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">В рамках подготовки по направлению «Лингвистика», одной из изучаемых
                    норм языка будет Received Pronunciation (RP), также известная как «стандартное произношение» или
                    «BBC English». Это один из самых узнаваемых и традиционно престижных вариантов произношения
                    британского английского языка. RP часто используется в обучении как эталонный образец произношения в
                    Великобритании и других странах, и его изучение дает студентам-лингвистам понимание ключевых
                    характеристик, которые можно применять для анализа и обучения английскому языку.</div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeFAQ" aria-expanded="false"
                  aria-controls="collapseThreeFAQ">
                  Как проходит практика?
                </button>
              </h2>
              <div id="collapseThreeFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">
                    <p>Практика проходит в три этапа: учебная, производственная и преддипломная.</p>
                    <p><b>Учебная</b> практика организуется в Уральском региональном колледже, где студенты университета
                      принимают активное участие в обучении студентов колледжа иностранным языкам. В ходе этой практики
                      студенты не только преподают, но и занимаются разработкой учебных материалов, проводят занятия и
                      воркшопы. Завершается учебная практика написанием отчёта, в котором анализируется опыт работы и
                      оцениваются полученные навыки.</p>
                    <p><b>Производственная</b> практика проводится в более динамичной среде, например, в гранд-отеле
                      «Видгоф». Во время практики на рецепшене студенты взаимодействуют с иностранными гостями,
                      используя свои языковые навыки в реальных условиях. Они также участвуют в организации и проведении
                      экскурсионных программ, помогают гостям с решением различных вопросов и проблем, что способствует
                      развитию профессиональных и коммуникативных навыков.</p>
                    <p>
                      <b>Преддипломная</b> практика тесно связана с подготовкой к написанию дипломной работы. Она
                      организуется таким образом, чтобы место и характер практики соответствовали тематике выпускной
                      квалификационной работы каждого студента. Это позволяет студентам погрузиться в специфику
                      исследования, получить необходимые данные и опыт для дипломной работы.
                    </p>
                    <p>
                      Если тема дипломной работы студента затрагивает переводческий аспект, например, изучение методик и
                      технологий перевода, или анализ сложностей перевода технической документации, студенту будет
                      рекомендовано пройти производственную практику в переводческом бюро. Там он сможет непосредственно
                      участвовать в процессах перевода, редактирования и адаптации текстов на различные языки, что
                      позволит ему набраться необходимого опыта и собрать материалы для своей дипломной работы.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourFAQ" aria-expanded="false"
                  aria-controls="collapseFourFAQ">
                  Как я смогу получить два диплома за 4 года?
                </button>
              </h2>
              <div id="collapseFourFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">Первый диплом бакалавра по основной образовательной программе
                    «Международная коммуникация и перевод» и второй по дополнительной профессиональной программе
                    переподготовки «English Tutor for Young Learners» (Специалист в области английского языка для детей
                    дошкольного возраста).</div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveFAQ" aria-expanded="false"
                  aria-controls="collapseFiveFAQ">
                  Как можно оформить образовательный кредит с господдержкой от 3%?
                </button>
              </h2>
              <div id="collapseFiveFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4"><p>С подробными правилами оформления образовательного кредита вы можете ознакомиться по <a href="https://www.inueco.ru/files/abiturientu/kak_oformit_kredit_3_procenta.pdf" target="_blank">ссылке.</a></p></div>
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
                  <div class="row mx-auto px-4"><p>С подробными правилами получения налогового вычета вы можете ознакомиться по <a href="https://www.inueco.ru/files/abiturientu/kak_poluchit_nalogoviu_vyichet.pdf" target="_blank">ссылке.</a> </p></div>
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
              <p class="m-0 fw-bold fs-3 text-dark-suut fs-5">очное обучение</p>
            </div>
            <div class="p-4">
              <p class="m-0 fw-bold fs-1-suut">
                55 000<span class="fw-bold fs-5">р/год</span>
              </p>
              <p class="m-0 fw-bold fs-3 text-dark-suut fs-5">заочное обучение</p>
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
      <div class=" row p-1 mt-3">
        <div class="wrapper-inner background-color-gray-dark row mx-auto align-items-center py-4 px-lg-5">
          <div class="col-12 col-lg-6">
            <p class="fs-3 fw-bold p-0 m-0">
              Остались вопросы?
            </p>
            <p class="fs-6-5-suut p-0 m-0">
              Эксперты приемной комиссии подробно ответят на все вопросы про поступление и обучение
            </p>
          </div>

          <div class="col-12 col-lg-6 text-center">
            <span class="loader d-none my-5" id="loader_feedback_bottom"></span>
            <div class="d-none my-5" id="conglaturation_bottom">
              <img src="./img/icons8-галочка-480.png" width="48" alt="Форма отправлена">
              <p class="fs-6-5-suut text-medium-suut">Наши специалисты скоро с вами свяжутся</p>
            </div>
           
                <?php
                    include("../includes/form-bottom.inc.php");
                ?> 
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