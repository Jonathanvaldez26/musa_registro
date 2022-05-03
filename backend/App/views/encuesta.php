<?php
echo $header;
?>

<body class="">
    <main class="main-content main-content-bg mt-0">
        <div class="min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-md-12 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-7">
                            <div class="container-fluid py-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="multisteps-form">
                                            <!--progress bar-->
                                            <!--form panels-->
                                            <div class="row">
                                                <div class="col-12 col-lg-12 m-auto">
                                                    <form class="multisteps-form__form" id="add" action="/Registro/Success" method="POST" style="height: 403px;">
                                                        <div id="card_three" class="card multisteps-form__panel p-1 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                                            <div class="row text-center">
                                                                <div class="col-10 mx-auto">
                                                                    <h5 class="font-weight-normal"><strong>FORO DE GINECOLOGÍA – LATAM 2022
                                                                            CANCÚN. MÉXICO
                                                                        </strong></h5>
                                                                    <p>Coloque el puntaje a cada uno de los siguientes ítems, donde (Cara feliz) es “totalmente satisfecho” y (cara triste) es “nada satisfecho”.</p>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="multisteps-form__content row text-center">
                                                                
                                                                <br>

                                                                <div class="row">
                                                                    <div class="col-md-12">

                                                                        <ul style="list-style-type: none;">
                                                                            <li>
                                                                                <p>1. Coordinación de Traslados.</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-green" id="btncheck4" name="group2" value="3">
                                                                                        <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2 color-face-green" for="btncheck4">
                                                                                            <i class="far fa-grin-beam"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-yellow" id="btncheck5" name="group2" value="2">
                                                                                        <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2 color-face-yellow" for="btncheck5">
                                                                                            <i class="far fa-grin"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-orange" id="btncheck6" name="group2" value="1">
                                                                                        <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2 color-face-orange" for="btncheck6">
                                                                                            <i class="far fa-meh"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-red" id="btncheck7" name="group2" value="0">
                                                                                        <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2 color-face-red" for="btncheck7">
                                                                                            <i class="far fa-frown"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>

                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>2. Calidad de las instalaciones (alojamiento y salones).</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-green" id="btncheck8" name="group3" value="3">
                                                                                        <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck8">
                                                                                            <i class="far fa-grin-beam"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-yellow" id="btncheck9" name="group3" value="2">
                                                                                        <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck9">
                                                                                            <i class="far fa-grin"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-orange" id="btncheck10" name="group3" value="1">
                                                                                        <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck10">
                                                                                            <i class="far fa-meh"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-red" id="btncheck11" name="group3" value="0">
                                                                                        <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck11">
                                                                                            <i class="far fa-frown"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>

                                                                                </div>
                                                                            </li>


                                                                            <li>
                                                                                <p>3. Valoración global del evento (traslados, alojamiento, alimentación, atención del staff tecnofarma)</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-green" id="btncheck12" name="group4" value="3">
                                                                                        <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck12">
                                                                                            <i class="far fa-grin-beam"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-yellow" id="btncheck13" name="group4" value="2">
                                                                                        <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck13">
                                                                                            <i class="far fa-grin"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-orange" id="btncheck14" name="group4" value="1">
                                                                                        <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck14">
                                                                                            <i class="far fa-meh"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-red" id="btncheck15" name="group4" value="0">
                                                                                        <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck15">
                                                                                            <i class="far fa-frown"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">

                                                                                        <label for="btncheck15">
                                                                                            Comentarios adicionales.
                                                                                        </label>
                                                                                        <textarea class="form-control" id="text_preg_3" name="text_preg_3"></textarea>

                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>4. Calidad de la agenda científica.</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-green" id="btncheck16" name="group5" value="3">
                                                                                        <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck16">
                                                                                            <i class="far fa-grin-beam"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-yellow" id="btncheck17" name="group5" value="2">
                                                                                        <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck17">
                                                                                            <i class="far fa-grin"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-orange" id="btncheck18" name="group5" value="1">
                                                                                        <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck18">
                                                                                            <i class="far fa-meh"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-red" id="btncheck19" name="group5" value="0">
                                                                                        <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck19">
                                                                                            <i class="far fa-frown"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>

                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>5. Nivel de los expositores.</p>
                                                                                <table class="table">
                                                                                    <tr>
                                                                                        <td>DIAZ LOPEZ ELSA</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck20" name="group6" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck20">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck21" name="group6" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck21">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck22" name="group6" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck22">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck23" name="group6" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck23">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>BARRIOS MARTINEZ DAVID</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck24" name="group7" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck24">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck25" name="group7" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck25">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck26" name="group7" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck26">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck27" name="group7" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck27">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>GALLO GABRIEL</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck28" name="group8" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck28">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck29" name="group8" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck29">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck30" name="group8" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck30">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck31" name="group8" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck31">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>VELEZ GONZALEZ JUAN</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck32" name="group9" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck32">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck33" name="group9" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck33">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck34" name="group9" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck34">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck35" name="group9" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck35">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>TIRAN JOSE</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck36" name="group10" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck36">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck37" name="group10" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck37">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck38" name="group10" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck38">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck39" name="group10" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck39">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>CORTES EDNA</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck40" name="group11" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck40">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck41" name="group11" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck41">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck42" name="group11" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck42">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck43" name="group11" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck43">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>MIRASSOU MANUEL</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck44" name="group12" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck44">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck45" name="group12" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck45">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck46" name="group12" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck46">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck47" name="group12" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck47">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>VELASCO CESAR</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck48" name="group13" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck48">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck49" name="group13" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck49">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck50" name="group13" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck50">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck51" name="group13" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck51">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>MERCADO VICTOR</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck52" name="group14" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck52">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck53" name="group14" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck53">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck54" name="group14" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck54">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck55" name="group14" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck55">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    
                                                                                    <tr>
                                                                                        <td>CULEBRO ENRIQUE</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck56" name="group15" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck56">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck57" name="group15" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck57">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck58" name="group15" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck58">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck59" name="group15" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck59">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>VILLALOBOS ALEJANDRO</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck60" name="group16" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck60">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck61" name="group16" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck61">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck62" name="group16" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck62">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck63" name="group16" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck63">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>NEYRO BILBAO JOSE LUIS</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck64" name="group17" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck64">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck65" name="group17" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck65">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck66" name="group17" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck66">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck67" name="group17" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck67">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>RENCORET DEL VALLE CARLOS</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck68" name="group18" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck68">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck69" name="group18" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck69">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck70" name="group18" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck70">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck71" name="group18" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck71">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>ZANCHETTA MARIA BELEN</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck72" name="group19" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck72">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck73" name="group19" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck73">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck74" name="group19" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck74">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck75" name="group19" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck75">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>DUARTE DE LATERZA MARGARITA</td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck76" name="group20" value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck76">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck77" name="group20" value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck77">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck78" name="group20" value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck78">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck79" name="group20" value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck79">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                </table>
                                                                            </li>

                                                                            <li>
                                                                                <p>6. Valoración respecto al tiempo destinado a las conferencias, preguntas y mesas redondas.</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-green" id="btncheck140" name="group36" value="3">
                                                                                        <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck140">
                                                                                            <i class="far fa-grin-beam"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-yellow" id="btncheck141" name="group36" value="2">
                                                                                        <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck141">
                                                                                            <i class="far fa-grin"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-orange" id="btncheck142" name="group36" value="1">
                                                                                        <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck142">
                                                                                            <i class="far fa-meh"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-red" id="btncheck143" name="group36" value="0">
                                                                                        <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck143">
                                                                                            <i class="far fa-frown"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>

                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>7. Seleccione cuáles fueron los temas de mayor interés para su práctica diaria (seleccionar hasta 3):</p>
                                                                                <div class="row mt-4 d-flex justify-content-evenly text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="checkbox" class="btn-check btn-face-" id="btncheck144" name="group37[]" value="3">
                                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck144">
                                                                                        Hormonas, salud sexual y emotiva: el arte de prescribir 
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="checkbox" class="btn-check btn-face-" id="btncheck145" name="group37[]" value="2">
                                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck145">
                                                                                        Infecciones genitourinarias 
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="checkbox" class="btn-check btn-face-" id="btncheck146" name="group37[]" value="1">
                                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck146">
                                                                                        Climaterio 
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="checkbox" class="btn-check btn-face-" id="btncheck147" name="group37[]" value="0">
                                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck147">
                                                                                        Una hormona vital
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>

                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>8.	Considera que hubo temas importantes que quedaron fuera de la agenda</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-" id="btncheck148" name="group38" value="si">
                                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck148">
                                                                                           SI
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-" id="btncheck149" name="group38" value="no">
                                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck149">
                                                                                            NO
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>                                                                                  

                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                    <label>
                                                                                            Cuales 
                                                                                        </label>
                                                                                        <textarea name="txt_preg_8" id="txt_preg_8" class="form-control"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>9.	Desde el punto de vista científico, volvería a participar de un foro de ginecología – latam?</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-" id="btncheck150" name="group39" value="si">
                                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck150">
                                                                                           SI
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-" id="btncheck151" name="group39" value="no">
                                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck151">
                                                                                            NO
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div> 

                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>10.	Desea agregar algún comentario adicional.</p>
                                                                                                      

                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                    
                                                                                        <textarea name="txt_preg_10" id="txt_preg_10" class="form-control"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </li>


                                                                            <li>
                                                                               <div class="row mt-3">
                                                                                   <div class="col-md-6 m-auto">
                                                                                        <button class="btn btn-secondary">Enviar respuestas y descargar constancia</button>
                                                                                   </div>
                                                                               </div>
                                                                            </li>


                                                                        </ul>
                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

<?php echo $footer; ?>