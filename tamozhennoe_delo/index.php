<!DOCTYPE html>
<html lang="ru">

<head>
  <?php include_once ("../includes/meta.inc.php") ?>
  <title>Абитуриенту ЮУТУ - Экономическая безопасность</title>
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
  <?php include_once ("../includes/header-body.inc.php"); ?>

  <!-- WELCOME BLOCK -->
  <section>
    <div class="container">
      <div class="mx-1 wrapper-specialization-info background-color-gray row px-3 pt-3 pb-1">
        <div class="col-12 row specialization-information m-lg-3">
          <div class="col-12">
            <p class="fs-8-suut text-medium-suut text-transform-uppercase label-specialization m-0">
              38.05.02 Таможенное дело (специалитет)
            </p>
          </div>
          <div class="col-7 mt-md-2">
            <p class="fs-1-suut fw-bold text-transform-uppercase line-height-small py-0 m-0">
              Таможенный <br />
              менеджмент
            </p>
          </div>

          <div class="col-10 col-md-8 col-lg-6 mt-md-4">
            <p class="fs-7-suut text-medium-suut m-0">
            Стань специалистом в таможенном деле и раскрой все его секреты. Ты получишь глубокие теоретические знания в сфере таможенного законодательства, логистики и внешнеэкономической деятельности, практические навыки по декларированию товаров, проведению таможенного контроля и оптимизации таможенных платежей
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
          <p class="m-0 ms-2 align-self-top fs-6-5-suut">
            <span class="fw-bold">Широкие возможности трудоустройства</span>
            <br />
            Специальность позволяет подготовить обучающихся к выполнению деятельности, связанной с совершением таможенных операций, применением таможенных процедур, взиманием таможенных платежей и проведением таможенного контроля и иных видов государственного контроля, а также к правоохранительной и организационно-управленческой деятельности
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-top fs-6-5-suut">
            <span class="fw-bold align-top">Практическая направленность обучения 
            </span> <br>
            В программе предусмотрены многочисленные практические занятия, экскурсии и прохождение практики в ведущих таможенных органах, логистических компаниях, а также в структурных подразделениях ВЭД коммерческих организаций, что позволяет студентам получить реальный опыт работы
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-top fs-6-5-suut">
            <span class="fw-bold">Универсальность специальности,</span> </br> которая дает возможность работать в различных сферах деятельности: таможенной, экономической и правоохранительной
            
          </p>
        </div>
        <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
          <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
          <p class="m-0 ms-2 align-self-top fs-6-5-suut">
            <span class="fw-bold"> Профессиональный преподавательский состав </span>
            <br />
            Учебный процесс ведут опытные преподаватели и практикующие специалисты: сотрудники Федеральной таможенной службы, специалисты по внешнеэкономической деятельности
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
                      <p class="fs-6-5-suut m-0">Профессиональное тестирование</p>
                    </div>
                    <div class="col-4 col-sm-3 pe-0">
                      <p class="fs-6-5-suut m-0 text-end">50 баллов</p>
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
                      <p class="fs-6-5-suut m-0">Информатика и ИКТ*</p>
                    </div>
                    <div class="col-4 col-sm-3 pe-0">
                      <p class="fs-6-5-suut m-0 text-end">40 баллов</p>
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
                      <p class="fs-6-5-suut m-0">Профессиональное тестирование</p>
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
              <?php $SPEC_NAME = "38.05.02. Таможенное дело (специалитет)"; ?>
              <?php
              include ("../includes/form-top.inc.php");
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
                  <b>Интересуетесь международной торговлей и внешнеэкономической деятельностью и стремитесь </b> понять, как функционирует международная торговля, международные перевозки, как реализуются таможенные процедуры и происходит регулирование внешнеэкономической деятельности
                </p>
              </div>
            </div>
          </div>

          

         

          <div class="col-12 col-lg-6 py-3 p-2 px-lg-5">
            <div class="wrapper-inner background-color-gray row p-2 p-lg-4 align-items-center h-100 min-height-170">
              <div class="col-9">
                <p class="fs-6-5-suut text-medium-suut m-0">
                  <b>
                  Планируете работать в сфере государственного управления или безопасности </b>
                  и работать в структурах, занимающихся защитой экономических интересов страны и контролем над внешнеэкономической деятельностью
                </p>
              </div>
              <div class="col-3">
                <img src="./img/il-web4.webp" class="img-block-programm-for-you" alt="" />
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
                  <b>Интересуетесь правовыми аспектами внешнеэкономической деятельности </b>
                  и хотите разбираться в правовых вопросах, связанных с таможенным делом и международной торговлей 
                </p>
              </div>
            </div>
          </div>



          <div class="col-12 col-lg-6 py-3 p-2 px-lg-5">
            <div class="wrapper-inner background-color-gray row p-2 p-lg-4 align-items-center h-100 min-height-170">
              <div class="col-9">
                <p class="fs-6-5-suut text-medium-suut m-0">
                  <b>Хотите внести вклад в безопасность и экономическое развитие страны, </b>
                  сзащищать экономические интересы государства, обеспечивать безопасность на границах и содействовать легальной международной торговле
                </p>
              </div>
              <div class="col-3">
                <img src="./img/il-web3.webp" class="img-block-programm-for-you" alt="" />
              </div>
            </div>
          </div>




        </div>
      </div>
    </div>
  </section>

  <!-- ЧТОБЫ УЧИТЬСЯ БЫЛО ПРИЯТНЕЕ -->
  <?php include_once ("../includes/section-for-funny-edu-common.inc.php") ?>


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
        <div class="row justify-content-between">
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex align-items-center">
              <img src="./img/fts.webp" style="width: 100%" alt="ФЕДЕРАЛЬНАЯ ТАМОЖЕННАЯ СЛУЖБА РОССИИ" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
              <img src="./img/avia_chel.svg" style="width: 100%" alt="Аэропорт Челябинск" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
              <img src="./img/chkpz.png" style="width: 100%" alt="Челябинский кузнечно-прессовый завод" />
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
                <img src="./img/resume.webp" class="border-circle" height="200px" alt="Фото в резюме" />
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <h5 class="text-dark-suut">Зарплата</h5>
                <div class="wrapper-inner mb-1">
                  <p class="fs-7-suut m-0 p-2 d-inline-block background-color-gray-dark border-suut-12">
                  Таможенный брокер от 30 тысяч рублей
                  </p>
                </div>
                <div class="wrapper-inner mb-1">
                  <p class="fs-7-suut m-0 p-2 d-inline-block background-color-gray-dark border-suut-12"
                    style="width:100%">
                    Специалиста по ВЭД на предприятии от 45 тысяч рублей
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
                     Умение работать в специальных программах
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Осуществлять таможенный контроль при совершении таможенных операций и процедур
                  таможенного контроля, в том числе после выпуска товаров, и иных видов государственного контроля  
                </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Применение товарной номенклатуры внешнеэкономической деятельности
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Определять и контролировать таможенную стоимость товаров
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Проводить расчет таможенных платежей
                  </p>
                </div>

                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Осуществлять в пределах своей компетенции валютный контроль операций, связанных с перемещением товаров через таможенную границу РФ
                  </p>
                </div>
                
                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Обеспечение соблюдения мер таможенно-тарифного регулирования, запретов и ограничений, мер защиты внутреннего рынка в отношении товаров, перемещаемых через таможенную границу
                  </p>
                </div>
                <div class="mx-1 mt-2 d-flex align-items-center">
                  <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                  <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                  Выявлять и пресекать административные правонарушения и преступления в сфере таможенного дела
                  </p>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <h5 class="text-dark-suut">Владение технологиями</h5>
               
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/declarant.svg" class="align-middle" width="90px" alt="" />

                </div>
                <div class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                  <img src="./img/logo1c.png" class="align-middle" width="20px" alt="" />
                  <p class="d-inline my-0 fs-7-suut align-middle">1C:Таможня</p>
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
                Федеральная таможенная служба 
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Логистические компании
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">Предприятия различных форм собственности, осуществляющие внешнеэкономическую деятельность </p>
              </div>

              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Консалтинговые фирмы
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">Крупные промышленные предприятия</p>
              </div>
              
            </div>
          </div>
          <div class="col-12 mt-2 flex-fill">
            <div class="mx-1 wrapper background-color-gray px-3 px-lg-4 px-xl-5 py-3 py-xl-4 h-100">
              <h5 class="text-dark-suut">Должности</h5>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Декларант
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Испектор таможенной службы
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Менеджер по работе с таможней
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Специалист внешнеэкономической деятельности
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Специалист по таможенному оформлению и контролю
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Таможенный брокер
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Аналитик в отделах тарифного и нетарифного регулирования
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Эксперт по противодействию таможенным правонарушениям
                </p>
              </div>

              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Руководитель таможенного поста или отдела
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Менеджер по ВЭД
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Специалист по логистике международных перевозок
                </p>
              </div>
              <div class="mx-1 mt-2 d-flex align-items-center">
                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                Эксперт по минимизации таможенных рисков и издержек
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
              href="https://www.inueco.ru/sveden/files/002594.pdf" target="_blank">Скачать учебный план</a>
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
                      <p сlass="fs-6-5-suut">Правоведение</p>
                      <p сlass="fs-6-5-suut">Введение в специальность</p>
                      <p сlass="fs-6-5-suut">Иностранный язык</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                      История таможенного дела и таможенной политики России 
                      </p>
                      <p сlass="fs-6-5-suut">Информационные технологии в профессиональной деятельности</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                      Основы таможенного дела
                      </p>
                      <p сlass="fs-6-5-suut">Этика государственной службы и государственного служащего</p>
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
                      <p сlass="fs-6-5-suut">Мировая экономика и международные экономические отношения</p>
                      <p сlass="fs-6-5-suut">
                      Теория государственного управления
                      </p>
                      <p сlass="fs-6-5-suut">
                      Основы таможенного дела
                      </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                      Основы внешнеэкономической деятельности
                      </p>
                      <p сlass="fs-6-5-suut">
                      Товароведение и экспертиза в таможенном деле (продовольственные и непродовольственные товары)
                      </p>
                      <p сlass="fs-6-5-suut">
                      Профессионально-ориентированный иностранный язык
                      </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                      Таможенная статистика
                      </p>
                      <p сlass="fs-6-5-suut">
                      Товарная номенклатура внешнеэкономической деятельности
                      </p>
                      <p сlass="fs-6-5-suut">
                      Таможенно-тарифное регулирование внешнеторговой деятельности
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
                      <p сlass="fs-6-5-suut">Таможенное право</p>
                      <p сlass="fs-6-5-suut">Таможенная статистика</p>
                      <p сlass="fs-6-5-suut">
                      Таможенные операции
                      </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Таможенные платежи</p>
                      <p сlass="fs-6-5-suut">
                      Правовые основы государственной службы в таможенных органах
                      </p>
                      <p сlass="fs-6-5-suut">
                      Таможенные процедуры
                      </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Организация таможенного контроля товаров и транспортных средств</p>
                      <p сlass="fs-6-5-suut">Запреты и ограничения внешнеторговой деятельности</p>
                      <p сlass="fs-6-5-suut">Ценообразование во внешней торговле</p>
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
                      Логистика
                      </p>
                      <p сlass="fs-6-5-suut">Декларирование товаров и транспортных средств</p>
                      <p сlass="fs-6-5-suut">Организация таможенного контроля товаров и транспортных средств</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                      Валютное регулирование и валютный контроль
                      </p>
                      <p сlass="fs-6-5-suut">Международное таможенное сотрудничество</p>
                      <p сlass="fs-6-5-suut">Психология управления в таможенных органах</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Таможенный менеджмент</p>
                      <p сlass="fs-6-5-suut">
                      Аудит внешнеэкономической деятельности
                      </p>
                      <p сlass="fs-6-5-suut">
                      Управление таможенными органами
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                  type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveOP" aria-expanded="false"
                  aria-controls="collapseFiveOP">
                  5-й курс
                </button>
              </h2>
              <div id="collapseFiveOP" class="accordion-collapse collapse" data-bs-parent="#accordionBlockOP">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                      Институты административного права, регулирующие деятельность таможенных органов
                      </p>
                      <p сlass="fs-6-5-suut">
                      Контракты и внешнеторговая документация
                      </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">
                      Основы квалификации преступлений в сфере таможенного дела
                      </p>
                      
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <p сlass="fs-6-5-suut">Система управления рисками в таможенном деле</p>
                     
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
            <img src="./img/alshova_play.webp" data-bs-toggle="modal" data-target="#videoModal" data-bs-target="#videoModal"
              data-theVideo="https://www.youtube.com/embed/SxVaR2ojX9Y?si=W_UPGV_qEUPxa8Id" class="" role="button"
              style="border-radius: 50%; width: 70%" alt="" />
          </div>
          <div class="col-9 my-auto p-0 p-md-2">
            <p class="fs-6-5-suut m-0 p-0">
              <b>Альшова Василина</b>, студентка 3 курса
            </p>
            <p class="fs-6-5-suut m-0">
              <q class="fst-italic">Радует комлпексный подход к обучению, который включает в себя, как теоретические так и практические навыки. Мы получаем возможность учиться не только из книг, но и проявлять свои возможности на стажировках и практиках</q>
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
                <img src="./img/sumina.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Сумина Наталья Витальевна</h5>
                <p class="fs-8-suut">
                доцент кафедры «Экономика и управление»,  с 1995 г. по 2015 г. работала начальником отдела таможенного контроля после выпуска товаров в Федеральной Таможенной службе Уральского таможенного управления «Челябинская таможня»

                </p>
              </div>
            </div>

            <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
              <div class="col-4 my-auto">
                <img src="./img/senchihina.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
              </div>
              <div class="col-8 my-auto p-2">
                <h5>Сенчихина Ирина Андреевна</h5>
                <p class="fs-8-suut">
                доцент кафедры «Экономика и управление» главный государственный таможенный инспектор отдела телекоммуникаций, связи и системотехнического обеспечения средств вычислительной техники информационно- технической службы в Федеральной Таможенной службе Уральского таможенного управления «Челябинская таможня», советник государственной гражданской службы Российской Федерации 3 класса
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
                Дисциплины: Таможенный менеджмент, Логистика, Основы таможенного дела
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
                  Чем интересна работа в таможне? 
                </button>
              </h2>
              <div id="collapseOneFAQ" class="accordion-collapse collapse" data-bs-parent="#accordionBlockFAQ">
                <div class="accordion-body">
                  <div class="row mx-auto px-4">Основная задача таможни – обеспечить экономическую безопасность страны, препятствуя незаконному ввозу-вывозу различных грузов. Но круг обязанностей гораздо шире, ведь именно таможенники выявляют опасные грузы – наркотики, оружие, не прошедшие сертификацию медикаменты и прочее.</div>
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
                  <div class="row mx-auto px-4">В Федеральной таможенной службе и предприятиях, которые занимаются внешнеэкономической деятельностью.</div>
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

            <?php
            include ("../includes/form-bottom.inc.php");
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  include ("../includes/footer.inc.php");
  ?>
  <script src="./js/main.js"></script>
  <script src="./js/bootstrap.bundle.min.js.map"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>