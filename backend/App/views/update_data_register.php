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
                        <form class="form-horizontal" id="update_form" action="/Register/DataPassword" method="POST">
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
                                            <input id="segundo_nombre" name="segundo_nombre" maxlength="49" pattern="[a-zA-Z ÑñáÁéÉíÍóÚ]*" class="form-control" type="text" placeholder="Alec" onfocus="focused(this)" onfocusout="defocused(this)" value="<?= $userData['segundo_nombre'] ?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
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
                                            <option value="Argentina">Argentina</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Brasil">Brasil</option>
                                            <option value="Chile">Chile</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="México">México</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Panamá">Panamá</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Perú">Perú</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="República Dominicana">República Dominicana</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Venezuela">Venezuela</option>
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
                                                <input id="alergia_cual" name="alergia_cual" maxlength="45" class="form-control" type="text" placeholder="Escriba su restricción" value="">

                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <p> Los campos marcados con (*) son obligatorios.</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <label class="form-label mt-4"><b>FARMACOVIGILANCIA</b></label>
                                            <div class="card z-index-0">

                                                <div class="card-body pt-1">

                                                    <!-- <input type="hidden" id="id_registro" name="id_registro" value="<?= $id_registro ?>"> -->
                                                    <input type="hidden" id="email" name="email" value="<?= $email ?>">
                                                    <div id="terminos" class="card-header pt-4 text-scroll " style="text-align: justify;">
                                                        <!-- <p>Aquí van los terminos y condiciones</p> -->
                                                        <span>

                                                            Para Asofarma de México uno de los principales objetivos es proporcionar a nuestros médicos, pacientes, clientes y sociedad en general, productos y soluciones innovadoras de la más alta calidad, para la prevención y tratamiento de múltiples padecimientos, además de una mejor calidad de vida.
                                                            Por ello Asofarma de México ha desarrollado un Programa de Farmacovigilancia en el cual se registran los datos que ayuden a evaluar el impacto de los medicamentos en los pacientes, proporcionando datos que garanticen conocer, mejorar y guardar su nivel de seguridad.
                                                            La Farmacovigilancia son las actividades relacionadas con la detección, evaluación, y prevención de eventos adversos o reacciones adversas relacionadas o no con los medicamentos.
                                                            <br> <br>

                                                            En esta actividad participamos todos; fabricantes de medicamentos, profesionales de la salud, autoridades sanitarias y pacientes, por medio de la notificación o reporte de sospecha de reacción adversa a un medicamento (SRAM). Esta notificación para nosotros es muy importante porque nos permite tomar acciones que ayude a los pacientes y a los médicos que prescriben nuestros medicamentos.
                                                            Para reportar una sospecha de reacción adversa podrá hacerlo por los siguientes medios.<br> <br>

                                                            Teléfonos: +52 (55) 54248500 Ext: 8593

                                                            <br> <br>

                                                            Correo electrónico: farmacovigilancia@asofarma.com.mx
                                                        </span>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="1" id="terminos" name="terminos" required>
                                                                <label class="form-check-label" for="terminos">
                                                                    <b>He leído y acepto los términos y condiciones</b>
                                                                </label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <label class="form-label mt-4"><b>AVISO DE PRIVACIDAD</b></label>
                                            <div class="card z-index-0">

                                                <div class="card-body pt-1">

                                                    <!-- <input type="hidden" id="id_registro" name="id_registro" value="<?= $id_registro ?>"> -->
                                                    <input type="hidden" id="email" name="email" value="<?= $email ?>">
                                                    <div id="terminos" class="card-header pt-4 text-scroll" style="text-align: justify;">
                                                        <!-- <p>Aquí van los terminos y condiciones</p> -->
                                                        <span>

                                                        I. IDENTIDAD Y DOMICILIO DEL RESPONSABLE:
                                                            <br> <br>
                                                            El Responsable del tratamiento, uso, y protección de sus datos personales es Asofarma de México, S.A. de C.V., (en lo sucesivo “Asofarma”) con domicilio fiscal ubicado en Calzada México Xochimilco No. 43, Col. San Lorenzo Huipulco, Alcaldía Tlalpan, C.P.14370, Ciudad de México, y oficinas corporativas en Avenida Santa Fe 485, Col. Lomas de Santa Fe, Contadero, Alcaldía Cuajimalpa de Morelos, CP 01219, Ciudad de México .Para todo lo relacionado con este Aviso de Privacidad Integral, favor de contactarnos a través del correo electrónico avisoprivacidad@asofarma.com.mx o bien,  dirigir un escrito a los domicilios establecidos anteriormente.  Lo anterior, de conformidad con lo dispuesto en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y demás disposiciones aplicables.
                                                            <br> <br>
                                                            II. DATOS PERSONALES QUE SERÁN TRATADOS POR EL RESPONSABLE:
                                                            Los datos personales, tales como: Nombre completo, teléfono fijo y/o celular, correo electrónico, dirección, RFC y/o CURP entre otros, que recabamos de usted, en los términos de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, son necesarios para el servicio, adquisición o contratación que solicita, los cuales utilizaremos para alguna de las siguientes finalidades:
                                                            <br> <br>
                                                            I) Para fines de identificación;
                                                            <br> <br>
                                                            II) Para fines estadísticos, y;
                                                            <br> <br>
                                                            III) Para fines de estudio, investigación médica o farmacológica.
                                                            <br> <br>
                                                            IV) Para fines laborales.
                                                            <br> <br>
                                                            V) Para fines de proveeduría o prestación de servicios.
                                                            <br> <br>
                                                            Adicionalmente, le comunicamos que sus datos o información personal, de contacto, laboral o patrimonial, que usted nos proporcione, la utilizaremos para fines mercadotécnicos, publicitarios o de prospección, que no son necesarios para el servicio, adquisición o contratación solicitados, pero que nos permiten y facilitan brindarle una mejor atención.
                                                            <br> <br>
                                                            En caso de que no desee que sus datos personales o sus datos personales sensibles sean utilizados para estos efectos, agradeceremos se sirva notificar dicha decisión mediante escrito enviado a cualquiera de nuestros domicilios ya señalados, dirigido al(a) responsable del manejo de dichos datos en Asofarma de Mexico, S.A. de C.V.
                                                            <br> <br>
                                                            La negativa para el uso de sus datos personales con los fines antes descritos, no podrá ser un motivo para que le neguemos los servicios o productos que solicita, adquiere o contrata con nosotros.
                                                            <br> <br>
                                                            A. DATOS SENSIBLES QUE SERÁN TRATADOS POR EL RESPONSABLE:
                                                            <br> <br>
                                                            Para los fines descritos en el presente aviso de privacidad, utilizaremos los siguientes datos personales considerados como sensibles, que requieren de especial protección, tales como: enfermedades que padece, alergias, medicamentos o preferencia sexual.
                                                            <br> <br>
                                                            III. TRANSFERENCIA DE DATOS:
                                                            Le informamos que sus datos personales son compartidos dentro y fuera del país con personas, empresas, organizaciones o autoridades distintas a nosotros, con quien tenemos una relación corporativa, de proveeduría, prestación de servicios, investigación o de gestiones administrativas, para los fines establecidos en el presente aviso, por lo que su aceptación para este tratamiento usted la otorga al proporcionarnos dichos datos y al aceptar o utilizar nuestros servicios o productos que solicita, adquiere o contrata.
                                                            <br> <br>
                                                            Usted tiene el derecho de negar su consentimiento para que sus datos personales o datos personales sensibles sean transferidos en la forma indicada en el párrafo anterior, para tal efecto agradeceremos se sirva notificar dicha decisión a Asofarma de Mexico SA de CV mediante escrito enviado a cualquiera de nuestros domicilios señalados.
                                                            <br> <br>
                                                            En caso de transferencia de sus datos, Asofarma de México, S.A de C.V, dará a conocer el presente Aviso de Privacidad a los terceros a quienes se les transfiera, quienes en ese acto adquirirán el carácter de Encargados y deberán respetar en todo momento su contenido.
                                                            <br> <br>
                                                            IV. MEDIOS PARA EJERCICIO DE LOS DERECHOS DE ACCESO, RECTIFICACIÓN, CANCELACIÓN U OPOSICIÓN (“DERECHOS ARCO”):
                                                            <br> <br>
                                                            Asimismo, usted tiene derecho a: i) conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del uso que les damos (Acceso); ii) solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); iii) que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada conforme a los principios, deberes y obligaciones previstas en la normativa (Cancelación) y; iv) a oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO. Para el ejercicio de cualquiera de los derechos ARCO, usted o su representante legal, deberá presentar la solicitud respectiva, mediante el envío de un correo electrónico a la dirección electrónica avisoprivacidad@asofarma.com.mx   o a través de escrito libre, dirigido a cualquiera de los dos domicilios descritos en el presente aviso.
                                                            <br> <br>
                                                            V. REVOCACIÓN DEL CONSENTIMIENTO PARA EL TRATAMIENTO DE DATOS PERSONALES:
                                                            <br> <br>
                                                            Usted puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos personales o sus datos personales sensibles; sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligación legal requiramos seguir tratando sus datos personales. Asimismo, usted deberá considerar que, para ciertos fines, la revocación de su consentimiento implicará que no le podamos seguir prestando el servicio que nos solicitó o la conclusión de su relación con nosotros.
                                                            <br> <br>
                                                            VI. USO DE COOKIES:
                                                            <br> <br>
                                                            Le informamos que en nuestra página de Internet utilizamos cookies, web beacons y otras tecnologías a través de las cuales es posible monitorear su comportamiento como usuario de Internet, brindarle un mejor servicio y experiencia de usuario al navegar en nuestra página, así como ofrecerle nuevos productos y servicios basados en sus preferencias.
                                                            <br> <br>
                                                            Sus datos personales jamás serán divulgados, ni se les dará un uso distinto al señalado en el presente Aviso de Privacidad Integral.
                                                            <br> <br>
                                                            VI. PRINCIPIOS DE TRATAMIENTO DE DATOS PERSONALES:
                                                            <br> <br>
                                                            Asofarma de México, S.A. de C.V. tratará y resguardará sus datos personales con base en los principios de licitud, calidad, consentimiento, información, finalidad, lealtad, proporcionalidad y responsabilidad establecidos en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.
                                                            <br> <br>
                                                            IX. PROCEDIMIENTO PARA EL EJERCICIO DE “DERECHOS ARCO”
                                                            <br> <br>
                                                            Respecto de sus datos personales, usted podrá ejercer los derechos de acceso, rectificación, cancelación y/u oposición (Derechos ARCO) mediante el envío de un correo electrónico a la siguiente dirección: avisoprivacidad@asofarma.com.mx. Para ser procesada su petición, ésta deberá incluir todos y cada uno de los requisitos previstos en el artículo 29 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.
                                                            <br> <br>
                                                            X. MODIFICACIONES AL AVISO DE PRIVACIDAD INTEGRAL
                                                            <br> <br>
                                                            El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales; de nuestras propias necesidades por los productos o servicios que ofrecemos; de nuestras prácticas de privacidad; de cambios en nuestro modelo de negocio, o por otras causas; por lo que Asofarma de México, S.A. de C.V. se reserva el derecho a modificar, cambiar o actualizar dicho Aviso en el futuro, lo cual se hará de su conocimiento mediante su publicación en las páginas web www.asofarma.com.mx o en www.asofarma.com.mx/Aviso_Privacidad.pdf, las cuales la cual puede usted consultar en cualquier momento.
                                                            <br> <br>
                                                            Asofarma de México, S.A. de C.V. no será responsable en el caso de que existiere algún problema en la de transmisión de datos por internet. Sin embargo, por su seguridad, el Aviso de Privacidad vigente estará disponible en todo momento en las páginas web señaladas en el punto anterior.
                                                            <br> <br>
                                                            XI. CUMPLIMIENTO DE LA LEY DE PROTECCIÓN DE DATOS PERSONALES EN POSESIÓN DE LOS PARTICULARES. Este aviso de privacidad cumple con los requisitos establecidos en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares vigente y demás normatividad aplicable.
                                                            <br> <br>
                                                            Ultima actualización Diciembre 2020
                                                        </span>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="1" id="terminos1" name="terminos1" required>
                                                                <label class="form-check-label" for="terminos1">
                                                                    <b>He leído y acepto los términos y condiciones</b>
                                                                </label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <p> <b>Al dar clic en siguiente, aceptas que la información proporcionada es real y fidedigna.</b></p>


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
                $("#alergia_cual").attr('required', 'required');
            } else {
                $(".alergia").css("display", "none");
                $('#alergia_cual').removeAttr('required');
            }

        });
    });
</script>