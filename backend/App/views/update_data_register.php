<?php
echo $header;
?>
<script src="/backend/public/assets/js/plugins/choices.min.js"></script>

<body class="">
    <main class="main-content mt-0 ps">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../../assets/img/curved-images/musa (1).jpeg');">
            <span class="mask bg-gradient-dark opacity-1"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-dark mb-2 mt-5">¡Bienvenido!</h1>
                        <p class="text-lead text-dark">MUSA, Mujer Salud 2022. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 mx-auto">

                    <div class="card z-index-0" id="basic-info">
                        <div class="card-header">
                            <h5>Información Básica</h5>

                            <?php //$userData; 
                            ?>
                        </div>
                        <form class="form-horizontal" id="update_form" action="/Register/Politicas" method="POST">
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <!-- <input type="text" id="id_registro" name="id_registro" value="<?= $userData['id_registro'] ?> "> -->
                                        <label class="form-label"> Primer nombre *</label>
                                        <div class="input-group">
                                            <input id="nombre" name="nombre" maxlength="29" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="Alec" required="" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['nombre'] ?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <label class="form-label">Segundo nombre </label>
                                        <div class="input-group">
                                            <input id="segundo_nombre" name="segundo_nombre" maxlength="49" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="Alec"  onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['segundo_nombre'] ?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <label class="form-label">Apellido paterno *</label>
                                        <div class="input-group">
                                            <input id="apellido_paterno" name="apellido_paterno" maxlength="29" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="Thompson" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['apellido_paterno'] ?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <label class="form-label mt-4">Apellido materno *</label>
                                        <div class="input-group">
                                            <input id="apellido_materno" name="apellido_materno" maxlength="29" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="Thompson" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['apellido_materno'] ?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label class="form-label mt-4">Me identifico como: *</label>
                                        <select class="form-control" style="cursor: pointer;" name="genero" id="genero" placeholder="Genero">
                                            <option value="" selected disabled>Selecciona una opción</option>
                                            <!-- <option value="Mujer">Mujer</option>
                                            <option value="Otro">Otro</option> -->
                                            <?php echo $optionsGenero; ?>
                                        </select>
                                        <!-- <input type="text" class="form-control" value="<?= $userData['genero'] ?>" disabled> -->
                                    </div>
                                    <div class="col-sm-4 col-12">

                                        <label class="form-label mt-4">País de procedencia * </label>

                                        <select class="form-control" style="cursor: pointer;" name="pais" id="pais" tabindex="-1" data-choice="active" required>
                                            <option value="" selected disabled>Selecciona una opción</option>
                                            <option value="Argentina" >Argentina</option>
                                            <option value="Bolivia" >Bolivia</option>
                                            <option value="Brasil" >Brasil</option>
                                            <option value="Chile" >Chile</option>
                                            <option value="Colombia" >Colombia</option>
                                            <option value="Costa Rica" >Costa Rica</option>
                                            <option value="Cuba" >Cuba</option>
                                            <option value="Ecuador" >Ecuador</option>
                                            <option value="El Salvador" >El Salvador</option>
                                            <option value="Guatemala" >Guatemala</option>
                                            <option value="Honduras" >Honduras</option>
                                            <option value="México" >México</option>
                                            <option value="Nicaragua" >Nicaragua</option>
                                            <option value="Panamá" >Panamá</option>
                                            <option value="Paraguay" >Paraguay</option>
                                            <option value="Perú" >Perú</option>
                                            <option value="Puerto Rico" >Puerto Rico</option>
                                            <option value="República Dominicana" >República Dominicana</option>
                                            <option value="Uruguay" >Uruguay</option>
                                            <option value="Venezuela" >Venezuela</option>
                                        </select>


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-12">
                                            <label class="form-label mt-4">Correo electrónico</label>
                                            <div class="input-group">
                                                <input id="email" name="email" maxlength="49" class="form-control" type="email" placeholder="example@email.com" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['email'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <label class="form-label mt-4">Número de teléfono</label>
                                            <div class="input-group">
                                                <input id="telefono" name="telefono" maxlength="10" pattern="[0-9]" class="form-control" type="number" placeholder="+40 735 631 620" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['telefono'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 align-self-center">
                                            <label class="form-label mt-4">Especialidad *</label>
                                            <select class="form-control" style="cursor: pointer;" name="especialidad" id="especialidad" tabindex="-1" data-choice="active" required>
                                                <!-- <option value="" selected disabled>Selecciona una opción</option> -->
                                                <?php echo $optionsLineaPrincipal; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col-md-3 col-sm-12">
                                            <label class="form-label mt-4">Restricciones Alimentarias *</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="alergia" id="res_ali_1" value="Vegetariano">
                                                <label class="form-check-label" for="res_ali_1">
                                                    Vegetariano
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="alergia" id="res_ali_2" value="Vegano">
                                                <label class="form-check-label" for="res_ali_2">
                                                    Vegano
                                                </label>
                                            </div>
                                            <!-- <div class="form-check">
                                                <input class="form-check-input" type="radio" name="alergia" id="res_ali_3" value="kosher">
                                                <label class="form-check-label" for="res_ali_3">
                                                    Kosher
                                                </label>
                                            </div> -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="alergia" id="res_ali_4" value="Ninguna" checked>
                                                <label class="form-check-label" for="res_ali_4">
                                                    Ninguna
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="alergia" id="res_ali_5" value="Otro">
                                                <label class="form-check-label" for="res_ali_5">
                                                    Otro
                                                </label>
                                            </div>
                                            <div class="col-md-12 col-sm-12 alergia" style="display: none!important;">
                                                <label class="form-label mt-4">¿Cual?</label>
                                                <input id="alergia_cual" name="alergia_cual" maxlength="45" class="form-control" type="text" placeholder="Escriba su restricción"  value="">
                                                    
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <p> Los campos marcados con (*) son obligatorios.</p>
                                    </div>


                                    <!-- <div class="row">
                                        
                                        
                                    </div> -->

                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <a class="btn bg-gradient-light mb-0 js-btn-prev" href="/Register" title="Prev">Regresar</a>
                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="submit" title="Next">Siguiente</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </main>

</body>

<?php echo $footer; ?>

    <script>
        $(document).ready(function() {
            $('input:radio[name="alergia"]').change(function() {
                if ($("#res_ali_5").is(':checked')) {
                    $(".alergia").css("display", "block");
                    $("#alergia_cual").val("");
                    $("#alergia_cual").attr('required','required');
                }else{
                    $(".alergia").css("display", "none");
                    $('#alergia_cual').removeAttr('required');
                }
    
            });
        });
    </script>