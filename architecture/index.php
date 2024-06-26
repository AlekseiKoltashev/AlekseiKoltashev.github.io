<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include_once("../includes/meta.inc.php") ?>
    <title>Абитуриенту ЮУТУ</title>
</head>

<body>
    <!-- MODAL FOR VIDEO YOUTUBE -->
    <div class="modal fade" id="videoModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="videoModal" aria-hidden="true">
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
                            07.03.01 Архитектура (бакалавриат)
                        </p>
                    </div>
                    <div class="col-7 mt-2  mt-md-2">
                        <p class="fs-1-suut fw-bold text-transform-uppercase line-height-small py-0 m-0">
                            Архитектура зданий <br />
                            и средовых комплексов
                        </p>
                    </div>

                    <div class="col-9 col-md-8 col-lg-6 mt-2 mt-md-4">
                        <p class="fs-7-suut text-medium-suut m-0">
                            Если хочешь создать вокруг себя эстетически и инженерно продуманную городскую среду, хочешь
                            ощутить себя
                            зодчим современного города, то это направление точно для тебя! В ЮУТУ тебе помогут освоить
                            широкую,
                            монументальную профессиию, которая запечатлеет твое я в истории городов.
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
                        <span class="fw-bold">Быстрый профессиональный рост</span>
                        <br />
                        Благодаря многочисленным заданиям и домашней работе, некоторые находят фриланс-проекты уже во
                        время учебы
                    </p>
                </div>
                <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
                    <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
                    <p class="m-0 ms-2 align-self-center fs-6-5-suut">
                        <span class="fw-bold">Метод погружения в творческую среду</span>
                        <br />
                        Преподаватели часто предлагают студентам выбрать конкурсы или выставки для участия вместо
                        выполнения
                        стандартного задания
                    </p>
                </div>
                <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
                    <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
                    <p class="m-0 ms-2 align-self-center fs-6-5-suut">
                        <span class="fw-bold">Преподаватели – практикующие специалисты</span>
                    </p>
                </div>
                <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
                    <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
                    <p class="m-0 ms-2 align-self-center fs-6-5-suut">
                        <span class="fw-bold">Сотрудничество с передовыми вузами страны </span>
                        <br />
                        при прохождении профессиональной переподготовки или курсов повышения квалификации
                    </p>
                </div>
                <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
                    <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
                    <p class="m-0 ms-2 align-self-center fs-6-5-suut">
                        <span class="fw-bold">Художественные мастерские прямо в ВУЗе</span>
                        <br />
                        мастерская живописи, мастерская рисунка, мастерская графики, мастерская 3d моделирования,
                        мастерская VR
                        технологий
                    </p>
                </div>
                <div class="plus-specialization_block mt-3 col-11 col-lg-6 d-flex">
                    <img class="d-block align-self-center" src="./img/icons8-галочка-480.png" alt="Преимущество" />
                    <p class="m-0 ms-2 align-self-center fs-6-5-suut">
                        <span class="fw-bold">Трендовые материалы для архитектора</span>
                        <br />
                        черепа анатомические, муляжи фруктов-овощей, цветов, драпировки, керамика (горшки, вазы),
                        макетные доски и другое
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
                                <p id="btnBasisEGE" data-toggle="btnBasis" data-target="#basisEGE"
                                    data-targetHide="#basisVU" data-btnHide="#btnBasisVU"
                                    class="m-0 fs-7-suut fw-bold text-decoration-underline text-underline-offset text-transform-uppercase text-dark-suut "
                                    role="button">
                                    После 11 классов
                                </p>
                            </div>
                            <div class="col-6">
                                <p id="btnBasisVU" data-toggle="btnBasis" data-target="#basisVU"
                                    data-targetHide="#basisEGE" data-btnHide="#btnBasisEGE"
                                    class="m-0 fs-7-suut text-decoration-underline text-transform-uppercase text-end text-underline-offset text-dark-suut"
                                    role="button">
                                    После коледжа/вуза
                                </p>
                            </div>
                        </div>

                        <div class="row p-1">
                            <div id="basisEGE"
                                class="p-3 p-md-4 wrapper-inner background-color-white box-shadow animation-suut">
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
                                            <p class="fs-6-5-suut m-0">Творческое задание (рисунок)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 pe-0">
                                            <p class="fs-6-5-suut m-0 text-end">50 баллов</p>
                                        </div>
                                    </div>

                                    <div class="row border-box-buttom-dark-suut my-3">
                                        <div class="col-8 col-sm-9 ps-0">
                                            <p class="fs-6-5-suut m-0">Математика*</p>
                                        </div>
                                        <div class="col-4 col-sm-3 pe-0">
                                            <p class="fs-6-5-suut m-0 text-end">27 баллов</p>
                                        </div>
                                    </div>
                                    <div class="row border-box-buttom-dark-suut my-3">
                                        <div class="col-8 col-sm-9 ps-0">
                                            <p class="fs-6-5-suut m-0">Физика*</p>
                                        </div>
                                        <div class="col-4 col-sm-3 pe-0">
                                            <p class="fs-6-5-suut m-0 text-end">36 баллов</p>
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
                                            <p class="fs-6-5-suut m-0">Творческое задание (рисунок)</p>
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
                                        <p class="fs-7-suut">вступительные испытания в виде компьютерного тестирования
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
                                <img src="./img/icons8-галочка-480.png" width="48" alt="Форма отправлена">
                                <p class="fs-6-5-suut text-medium-suut">Наши специалисты скоро с вами свяжутся</p>
                            </div>
                            <?php $SPEC_NAME="07.03.01 Архитектура (бакалавриат), Архитектура зданий и средовых комплексов"; ?>
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
                        <div
                            class="wrapper-inner background-color-gray row p-2 p-lg-4 align-items-center h-100 min-height-170">
                            <div class="col-3">
                                <img src="./img/il-web2.webp" class="img-block-programm-for-you" alt="" />
                            </div>
                            <div class="col-9">
                                <p class="fs-6-5-suut text-medium-suut m-0">
                                    <b>Хотите научиться работать с крупными архитектурными объектами,</b>
                                    готовы тщательно и усердно разрабатывать конструкции и внешний облик зданий и
                                    сооружений
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 py-3 p-2 px-lg-5">
                        <div
                            class="wrapper-inner background-color-gray row p-2 p-lg-4 align-items-center h-100 min-height-170">
                            <div class="col-9">
                                <p class="fs-6-5-suut text-medium-suut m-0">
                                    <b>Стремитесь разобраться в вопросе градостроительства и городской архитектурной
                                        среды</b>
                                </p>
                            </div>
                            <div class="col-3">
                                <img src="./img/il-web3.webp" class="img-block-programm-for-you" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 py-3 p-2 px-lg-5">
                        <div
                            class="wrapper-inner background-color-gray row p-2 p-lg-4 align-items-center h-100 min-height-170">
                            <div class="col-3">
                                <img src="./img/il-web1.webp" class="img-block-programm-for-you" alt="" />
                            </div>
                            <div class="col-9">
                                <p class="fs-6-5-suut text-medium-suut m-0">
                                    <b>Желаете овладеть программами для проектирования и визуализации зданий, такими как
                                        3ds Max, NanoCAD и
                                        Revi </b>

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
                            <img src="./img/jivopis.webp" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Мастерская живописи</h5>
                                <p class="card-text text-dark-suut">
                                    Здесь рождаются неповторимые шедевры
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 px-3 px-lg-5">
                        <div class="card card-suut h-100" style="width: 100%">
                            <img src="./img/comp_model.webp" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title" >Мастерская компьютерного моделирования</h5>
                                <p class="card-text text-dark-suut">
                                  Студенты создают 3D-модели, анимации и визуализации проектов
                                </p>
                            </div>
                        </div>
                    </div>
                   

                    <div class="col-12 col-md-6 col-lg-4 mb-4 px-3 px-lg-5">
                        <div class="card card-suut h-100" style="width: 100%">
                            <img src="./img/arch_graphics.webp" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Мастерская архитектурной графики</h5>
                                <p class="card-text text-dark-suut">
                                  Для развития творческих способностей и пространственного мышления
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4 px-3 px-lg-5">
                        <div class="card card-suut h-100" style="width: 100%">
                            <img src="./img/stolov.webp" class="card-img-top" alt="..." />
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
                            <img src="./img/cafe.webp" class="card-img-top" id="notCoffeShop" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title" id="notCoffeShopText">Кофешоп</h5>
                                <p class="card-text text-dark-suut">В каждом из корпусов</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4 px-3 px-lg-5">
                        <div class="card card-suut h-100" style="width: 100%">
                            <img src="./img/jalinga.webp" class="card-img-top" alt="..." />
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
                            <img src="./img/individual_ws.webp" class="card-img-top" alt="..." />
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
                <div class="row  justify-content-center">
                    <!-- <div class="col-6 col-md-3 mb-4">
                        <div class="wrapper-inner background-color-gray p-4 h-100 d-flex align-items-center">
                            <img src="./img/axio.png" style="width: 100%" alt="Аксио" />
                        </div>
                    </div> -->
                    <div class="col-6 col-md-3 mb-4">
                        <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
                            <img src="./img/rck.png" style="width: 100%" alt="РЦК" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="wrapper-inner background-color-gray p-4 h-100 d-flex d-flex align-items-center">
                            <img src="./img/spec_complect.svg" style="width: 100%" alt="Спецкомлект" />
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
                                    <p
                                        class="fs-7-suut m-0 p-2 d-inline-block background-color-gray-dark border-suut-12">
                                        Архитектор без опыта от 55 тысяч рублей
                                    </p>
                                </div>
                                <div class="wrapper-inner mb-1">
                                    <p
                                        class="fs-7-suut m-0 p-2 pe-5 d-inline-block background-color-gray-dark border-suut-12">
                                        Архитектор с опытом от 90 тысяч рублей
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
                                        Знание нормативной документации
                                    </p>
                                </div>

                                <div class="mx-1 mt-2 d-flex align-items-center">
                                    <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                    <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                        Проектирование зданий различного назначения
                                    </p>
                                </div>

                                <div class="mx-1 mt-2 d-flex align-items-center">
                                    <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                    <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                        Понимание как работать с компонентами и дизайн-системами
                                    </p>
                                </div>

                                <div class="mx-1 mt-2 d-flex align-items-center">
                                    <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                    <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                        Понимание пространственной организации, форм, текстур и других элементов дизайна
                                    </p>
                                </div>

                                <div class="mx-1 mt-2 d-flex align-items-center">
                                    <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                    <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                        Разработка проектов интерьера квартир и офисов
                                    </p>
                                </div>

                                <div class="mx-1 mt-2 d-flex align-items-center">
                                    <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                    <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                        Создание объемно-планировочного решения
                                    </p>
                                </div>

                                <div class="mx-1 mt-2 d-flex align-items-center">
                                    <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                    <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                        Разработка концепции и выполнение эскизных проектов комплексов общественных
                                        зданий
                                    </p>
                                </div>

                                <div class="mx-1 mt-2 d-flex align-items-center">
                                    <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                    <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                        3D моделирование
                                    </p>
                                </div>
                                <div class="mx-1 mt-2 d-flex align-items-center">
                                    <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                    <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                        Эскизное проектирование
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <h5 class="text-dark-suut">Владение технологиями</h5>
                                <div
                                    class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                                    <img src="./img/tilda.png" class="align-middle" width="25px" alt="" />
                                    <p class="d-inline my-0 fs-7-suut align-middle">Tilda</p>
                                </div>
                                <div
                                    class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                                    <img src="./img/yaforms.svg" class="align-middle" width="80px" alt="" />
                                    <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Figma</p> -->
                                </div>
                                <div
                                    class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                                    <img src="./img/adobe_indesign.webp" class="align-middle" width="20px" alt="" />
                                    <p class="d-inline my-0 fs-7-suut align-middle">Adobe InDesign</p>
                                </div>
                                <div
                                    class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                                    <img src="./img/SketchUp.png" class="align-middle" width="90px" alt="" />
                                    <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Figma</p> -->
                                </div>

                                <div
                                    class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                                    <img src="./img/Adobe_Illustrator.png" class="align-middle" width="20px" alt="" />
                                    <p class="d-inline  my-0   fs-7-suut align-middle">Adobe Illustrator</p>
                                </div>
                                <div
                                    class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                                    <img src="./img/Adobe_Photoshop.png" class="align-middle" width="20px" alt="" />
                                    <p class="d-inline  my-0   fs-7-suut align-middle">Adobe Photoshop</p>
                                </div>
                                <div
                                    class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                                    <img src="./img/CorelDraw.png" class="align-middle" width="90px" alt="" />
                                    <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Adobe Photoshop</p> -->
                                </div>

                                <div
                                    class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                                    <img src="./img/nanocad.webp" class="align-middle" width="90px"
                                        style="max-height: 100%;" alt="" />
                                    <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Adobe Photoshop</p> -->
                                </div>
                                <div
                                    class="mt-2 d-inline-block border-suut-12 background-color-gray-dark p-2 min-height">
                                    <img src="./img/archicad.svg" class="align-middle" width="90px" alt="" />
                                    <!-- <p class="d-inline  my-0   fs-6-5-suut align-middle">Adobe Photoshop</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 mt-2 mt-lg-0 d-flex flex-column">
                    <div class="col-12">
                        <div class="mx-1 wrapper background-color-gray px-3 px-lg-4 px-xl-5 py-3 py-xl-4 h-100">
                            <h5 class="text-dark-suut">Места работы</h5>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Архитектурные фирмы и компании
                                </p>
                            </div>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Строительные компании
                                </p>
                            </div>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Государственные и муниципальные органы
                                </p>
                            </div>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Сфера образования и исследований
                                </p>
                            </div>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Частная практика
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
                                    Архитектор-проектировщик
                                </p>
                            </div>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Главный архитектор
                                </p>
                            </div>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Архитектор-конструктор
                                </p>
                            </div>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Архитектор интерьеров
                                </p>
                            </div>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Ландшафтный архитектор
                                </p>
                            </div>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Архитектор по реставрации
                                </p>
                            </div>

                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Научный сотрудник в проектных и исследовательских институтах
                                </p>
                            </div>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">Веб-дизайнер</p>
                            </div>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Главный архитектор города или района
                                </p>
                            </div>
                            <div class="mx-1 mt-2 d-flex align-items-center">
                                <img src="./img/check-resume.png" class="align-middle" width="25px" alt="" />
                                <p class="d-inline-block my-0 ms-2 fs-6-5-suut">
                                    Консалтинг по архитектуре
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
                            href="https://www.inueco.ru/sveden/files/002431.pdf" target="_blank">Скачать учебный
                            план</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="accordion" id="accordionBlockOP">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fs-6-5-suut fw-bold text-transform-uppercase p-4"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneOP"
                                    aria-expanded="true" aria-controls="collapseOneOP">
                                    1-й курс
                                </button>
                            </h2>
                            <div id="collapseOneOP" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionBlockOP">
                                <div class="accordion-body">
                                    <div class="row mx-auto px-4">
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <p сlass="fs-6-5-suut">Основы профессии </p>
                                            <p сlass="fs-6-5-suut">Архитектурное проектирование (базовое)</p>


                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <p сlass="fs-6-5-suut">История искусств и архитектуры </p>
                                            <p сlass="fs-6-5-suut">Начертательная геометрия для архитектора</p>

                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <p сlass="fs-6-5-suut">Композиционное моделирование</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoOP"
                                    aria-expanded="false" aria-controls="collapseTwoOP">
                                    2-й курс
                                </button>
                            </h2>
                            <div id="collapseTwoOP" class="accordion-collapse collapse"
                                data-bs-parent="#accordionBlockOP">
                                <div class="accordion-body">
                                    <div class="row mx-auto px-4">
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <p сlass="fs-6-5-suut">Архитектурное проектирование (базовое)</p>
                                            <p сlass="fs-6-5-suut">Композиционное моделирование</p>

                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <p сlass="fs-6-5-suut">История искусств и архитектуры </p>
                                            <p сlass="fs-6-5-suut">Теория архитектуры </p>

                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <p сlass="fs-6-5-suut">Компьютерная графика в проектировании </p>
                                            <p сlass="fs-6-5-suut">Архитектурные конструкции </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeOP"
                                    aria-expanded="false" aria-controls="collapseThreeOP">
                                    3-й курс
                                </button>
                            </h2>
                            <div id="collapseThreeOP" class="accordion-collapse collapse"
                                data-bs-parent="#accordionBlockOP">
                                <div class="accordion-body">
                                    <div class="row mx-auto px-4">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <p сlass="fs-6-5-suut">Комплексное формирование архитектурных объектов</p>
                                            <p сlass="fs-6-5-suut">Планировка, благоустройство, ландшафт территорий</p>

                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <p сlass="fs-6-5-suut">Инженерное оборудование зданий </p>
                                            <p сlass="fs-6-5-suut">Компьютерная графика в архитектуре и дизайне</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreePlusOP"
                                    aria-expanded="false" aria-controls="collapseThreePlusOP">
                                    4-й курс
                                </button>
                            </h2>
                            <div id="collapseThreePlusOP" class="accordion-collapse collapse"
                                data-bs-parent="#accordionBlockOP">
                                <div class="accordion-body">
                                    <div class="row mx-auto px-4">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <p сlass="fs-6-5-suut">Инновации в архитектуре</p>
                                            <p сlass="fs-6-5-suut">Дизайн архитектурной среды </p>

                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <p сlass="fs-6-5-suut">Планировка, благоустройство, ландшафт территорий </p>
                                            <p сlass="fs-6-5-suut">Инженерное оборудование зданий</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourOP"
                                    aria-expanded="false" aria-controls="collapseFourOP">
                                    5-й курс
                                </button>
                            </h2>
                            <div id="collapseFourOP" class="accordion-collapse collapse"
                                data-bs-parent="#accordionBlockOP">
                                <div class="accordion-body">
                                    <div class="row mx-auto px-4">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <p сlass="fs-6-5-suut">Предпроектный анализ</p>
                                            <p сlass="fs-6-5-suut">Архитектурное проектирование (основное)</p>
                                            <p сlass="fs-6-5-suut">Реновация зданий и территорий</p>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <p сlass="fs-6-5-suut">Организация профессиональной деятельности</p>
                                            <p сlass="fs-6-5-suut">Комплексное системное проектирование</p>

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
                        <img src="./img/rasina_n.webp" data-bs-toggle="modal" data-target="#videoModal"
                            data-bs-target="#videoModal"
                            data-theVideo="https://www.youtube.com/embed/M1e32Ufa1lo?si=0zBNSx3x7yZiKQaU" class=""
                            role="button" style="border-radius: 50%; width: 70%" alt="" />
                    </div>
                    <div class="col-9 my-auto p-0 p-md-2">
                        <p class="fs-6-5-suut m-0 p-0"><b>Набиуллина Расина</b>, студентка 2 курса</p>
                        <p class="fs-6-5-suut m-0">
                            <q class="fst-italic ">В Южно-Уральском технологическом университете изучают не только
                                дизайн зданий, но и влияние архитектуры на окружающую среду, учимся создавать
                                комфортные и функциональные пространства которые отражают нашу культуру и историю</q>
                        </p>
                    </div>
                </div>
            </div>

            
        </div>
    </section>

    <!-- НАШИ ПРЕПОДАВАТЕЛИ -->
    <section class="pt-5">
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
                                <img src="./img/bsv.webp" class="p-2" style="border-radius: 50%" width="100%" alt="" />
                            </div>
                            <div class="col-8 my-auto p-2">
                                <h5>Бахарева Светлана Васильевна</h5>
                                <p class="fs-8-suut">
                                    Член Союза художников РФ
                                </p>
                            </div>
                        </div>

                        <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
                            <div class="col-4 my-auto">
                                <img src="./img/haldina.webp" class="p-2" style="border-radius: 50%" width="100%"
                                    alt="" />
                            </div>
                            <div class="col-8 my-auto p-2">
                                <h5>Халдина Елена Федоровна</h5>
                                <p class="fs-8-suut">
                                    Член Союза Архитекторов РФ
                                </p>
                            </div>
                        </div>

                        <div class="d-flex wrapper-inner background-color-white px-2 px-lg-2 px-xl-3 py-2 py-xl-3 mb-2">
                            <div class="col-4 my-auto">
                                <img src="./img/burov.webp" class="p-2" style="border-radius: 50%" width="100%"
                                    alt="" />
                            </div>
                            <div class="col-8 my-auto p-2">
                                <h5>Буров Алексей Геннадьевич</h5>
                                <p class="fs-8-suut">
                                    Директор – главный архитектор проектов ООО «РУСТПРО», Член Союза Архитекторов РФ
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
                                <button
                                    class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneFAQ"
                                    aria-expanded="false" aria-controls="collapseOneFAQ">
                                    Есть ли перспективы развития архитектурыв России?
                                </button>
                            </h2>
                            <div id="collapseOneFAQ" class="accordion-collapse collapse "
                                data-bs-parent="#accordionBlockFAQ">
                                <div class="accordion-body">
                                    <div class="row mx-auto px-4">Развитие архитектуры в России может стать неотъемлемой
                                        частью стратегии
                                        по развитию более устойчивых, эффективных и экологичных городов. С большими
                                        городами, такими как
                                        Москва, Санкт-Петербург, Челябинск, Россия имеет потенциал привлечь выдающихся
                                        архитекторов и
                                        дизайнеров для создания инновационных и уникальных зданий. Ожидается, что
                                        развитие архитектуры в
                                        России будет не только фундаментальным, но и востребованным в ближайшие годы.
                                        Благодаря активной
                                        поддержке государства и росту интереса общества к архитектуре, можно
                                        ожидать появления новых уникальных зданий, городских ансамблей и архитектурных
                                        комплексов, способных
                                        конкурировать с лучшими мировыми образцами</div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeFAQ"
                                    aria-expanded="false" aria-controls="collapseThreeFAQ">
                                    Как проходит практика?
                                </button>
                            </h2>
                            <div id="collapseThreeFAQ" class="accordion-collapse collapse"
                                data-bs-parent="#accordionBlockFAQ">
                                <div class="accordion-body">
                                    <div class="row mx-auto px-4">
                                        Образовательный процесс в университете ориентирован на современную архитектурную
                                        практику и
                                        требования рынка труда. Руководство университета уделяет большое внимание
                                        развитию практических
                                        навыков студентов, а также их позиционированию в профессиональном сообществе.
                                        Учебный план
                                        университета включает длительные производственные практики, во время которых
                                        обучающиеся проектируют
                                        реальные объекты или участвуют в международных архитектурных конкурсах. Все
                                        практические занятия
                                        проходят под руководством опытных архитекторов в рамках сотрудничества с
                                        архитектурными бюро
                                        Челябинска. Главная ценность практики состоит в том, что во время реального
                                        проектирования студенты
                                        проявляют инициативу, раскрывают свой творческий потенциал и несут
                                        ответственность за свои решения.
                                        Эти навыки станут основой успешной архитектурной деятельности наших выпускников
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveFAQ"
                                    aria-expanded="false" aria-controls="collapseFiveFAQ">
                                    Как можно оформить образовательный кредит с господдержкой от 3%?
                                </button>
                            </h2>
                            <div id="collapseFiveFAQ" class="accordion-collapse collapse"
                                data-bs-parent="#accordionBlockFAQ">
                                <div class="accordion-body">
                                    <div class="row mx-auto px-4">
                                        <p>С подробными правилами оформления образовательного кредита вы можете
                                            ознакомиться по <a
                                                href="https://www.inueco.ru/files/abiturientu/kak_oformit_kredit_3_procenta.pdf"
                                                target="_blank">ссылке</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fs-6-5-suut fw-bold text-transform-uppercase p-4"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixFAQ"
                                    aria-expanded="false" aria-controls="collapseSixFAQ">
                                    Как получить налоговый вычет в 13%?
                                </button>
                            </h2>
                            <div id="collapseSixFAQ" class="accordion-collapse collapse"
                                data-bs-parent="#accordionBlockFAQ">
                                <div class="accordion-body">
                                    <div class="row mx-auto px-4">
                                        <p>С подробными правилами получения налогового вычета вы можете ознакомиться по
                                            <a href="https://www.inueco.ru/files/abiturientu/kak_poluchit_nalogoviu_vyichet.pdf"
                                                target="_blank">ссылке</a> </p>
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
                                115 000<span class="fw-bold fs-5">р/год</span>
                            </p>
                            <p class="m-0 fw-bold fs-3 text-dark-suut fs-5">очное обучение</p>
                        </div>
                        <div class="p-4">
                            <p class="m-0 fw-bold fs-1-suut">
                                60 000<span class="fw-bold fs-5">р/год</span>
                            </p>
                            <p class="m-0 fw-bold fs-3 text-dark-suut fs-5">очно-заочное обучение</p>
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
                            Эксперты приемной комиссии подробно ответят на все вопросы про поступление и обучение.
                        </p>
                    </div>

                    <div class="col-12 col-lg-6 text-center">
                        <span class="loader d-none my-5" id="loader_feedback_bottom"></span>
                        <div class="d-none my-5" id="conglaturation_bottom">
                            <img src="./img/icons8-галочка-480.png" width="48" alt="Форма отправлена">
                            <p class="fs-6-5-suut text-medium-suut">Наши специалисты скоро с вами свяжутся</p>
                        </div>
                        <?php $SPEC_NAME="07.03.01 Архитектура (бакалавриат), Архитектура зданий и средовых комплексов"; ?>
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