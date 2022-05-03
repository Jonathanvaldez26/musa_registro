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
                                                                    <p>Coloque el puntaje a cada uno de los siguientes ítems, donde (Cara feliz) es “totalmente satisfecho” y  (cara triste) es “nada satisfecho”.</p>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="multisteps-form__content row text-center">
                                                                <div class="row text-center">
                                                                    <div class="col-10 mx-auto">
                                                                        <p class="mb-0 text-sm">Para finalizar tu inscripción selecciona un método de pago al evento.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4 row text-center">
                                                                    <div class="col-sm-1 ms-auto">
                                                                        <input type="checkbox" class="btn-check" id="btncheck2" name="group1[]" value="electronic" data-bs-toggle="modal" data-bs-target="#ModalPayOne">
                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck2">
                                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                                        </label>
                                                                        <h6></h6>
                                                                    </div>
                                                                    <div class="col-sm-1 me-auto">
                                                                        <input type="checkbox" class="btn-check" id="btncheck3" name="group1[]" value="paypal" data-bs-toggle="modal" data-bs-target="#ModalPayOne">
                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck2">
                                                                            <i class="fa fa-wpexplorer" aria-hidden="true"></i>
                                                                        </label>
                                                                        <h6></h6>
                                                                    </div>
                                                                </div>
                                                                <br>


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