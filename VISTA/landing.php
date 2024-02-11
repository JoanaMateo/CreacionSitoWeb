<nav arial-label="breadcrumb">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php?nombPagina=home"></a>Home</li>
  <li class="breadcrumb-item active"><a href="index.php?nombPagina=login"></a>Login</li>
  <li class="breadcrumb-item active"><a href="index.php?nombPagina=landing"></a>Registro</li>
</ol>
</nav>

<div class="row bg-light p-1">
    <div class="col">
        <h1>Obten 25% de descuento por registrarte</h1>
    </div>
</div><!--FIN 1 FILA-->
<div class="row bg-light justify-content-around">
    <div class="col-5">
        <div class="row">
            <div class="row rounded-5 rounded-top-0 mb-3 " style="background-color: pink">
                <h5 class="text-center">DISCUBRE TU EQUILIBRIO CON NOSOTROS</h5>
            </div>
        </div>
        <div class="row">
            <img src="VISTA/img/piedras.png" class="img-fluid w-75 h-75" alt="">
        </div>
    </div>
    <div class="col-6">
        <div class="row rounded-5 rounded-top-0 mb-3" style="background-color: pink">
            <h2 class="text-center">Inscribete Ya:</h2>
        </div>
        <div class="row">
            <form class="form" class="border" action="#" method="POST" aria-labelledby="form">
            
                <label>Nombres<span>*</span> :<input id="nombre" type="text" size="20" autocomplete="given-name"><span id="resNom"></span></label><!--Mensaje nombre-->
                <label>Apellidos<span>*</span> :<input id="apellidos" type="text" size="20" autocomplete="family-name"><span
                        id="resAp"></span></label><!--Mensaje apellido-->
                <label>Mail<span>*</span>:<input id="mail" type="email" size="25" autocomplete="email"><span
                        id="resMail"></span></label><!--Mensaje correoElectrónico-->
                <div id="divPass" aria-labelledby="divPass">
                    <label>Contraseña<span>*</span>:<input id="passW1" type="password" size="15" autocomplete="new-password"></label>
                    <label>Repite Contraseña<span>*</span>:<input id="passW2" type="password" size="15" autocomplete="current-password"></label>
                </div>
                <div id="divResPass" aria-labelledby="divResPass">
                    <ul>
                        <li>Debe tener minimo 8 caracteres.</li>
                        <li>Debe contener al menos una letra minúscula.</li>
                        <li>Debe contener al menos una letra mayuscula.</li>
                        <li>Debe contener al menos un número.</li>
                        <li>Debe contener al menos un caracter especial.</li>
                    </ul>
                    <span id="resPass"></span><!--Mensaje pass1-->
                </div>
                <div class="fila" aria-labelledby="sexo">
                    <div class="fila1_c1">
                        <p>¿Cómo te defines?</p>
                    </div>
                    <div class="fila1_c2">
                        <label for="mujer"><input type="radio" name="genero" value="mujer">Mujer</label>
                        <label for="hombre"><input type="radio" name="genero" value="hombre">Hombre</label>
                        <label for="otro"><input type="radio" name="genero" value="otro"> Prefiero no
                            decirlo</label>
                    </div>
                </div>
                <div class="fila" aria-labelledby="zona fecha nacimiento">
                    <div class="fila1_c1">
                        <label>Fecha de nacimiento<span>*</span>:<input id="fechaC" type="date" autocomplete="bday"></label>
                    </div>
                    <div class="fila1_c2"><!--Mensaje validación FechaCumple-->
                        <span id="resFechaC"></span>
                    </div>
                </div>

                <div id="divAccordion-DireccionHeader"><!--Div direccion se esconde-->
                    <h3 id="cadenAumentaDescuento">¡¡ AUMENTA TU DESCUENTO 15% MÁS!!<br>PULSA AQUÍ</h3>
                </div>
                <div id="divAccordion-DireccionBody" class="collapseDiv">
                    <!--Escondemos los datos de la dirección tipo accordion-->
                    <div class="fila">
                        <div class="fila1_c1">
                            <p>Dirección:</p>
                        </div>
                        <div class="fila1_c2" id="fila1_c2-Direccion" aria-labelledby="fila1_c2-Direccion">
                            <label for="direccion1">
                                <input type="text" id="direccion1" name="dir1"
                                    placeholder="Tipo y nombre de la calle/vía:" maxlength="30" size="40" value="" autocomplete="address-level1">
                            </label>
                            <span id="resDir1"></span>
                            <label for="direccion2">
                                <input type="text" id="direccion2" name="dir2"
                                    placeholder="Bloque,piso, portal..." maxlength="30" size="40" value="" autocomplete="address-level2">
                            </label>
                            <span id="resDir2"></span>
                            <label for="direccion3">
                                <input type="text" id="direccion3" name="dir3" placeholder="Población"
                                    maxlength="30" size="40" value="" autocomplete="address-level3">
                            </label>
                            <span id="resDir3"></span>

                            <label for="direccion4">
                                <input type="text" name="dir4" id="direccion4" placeholder="Código Postal" size="13"
                                    maxlength="5" value="" autocomplete="address-level4">
                            </label>
                            <span id="resDir4"></span>

                            <select name="pais" id="pais" selected="DZ" autocomplete="country">
                                <option value="Ninguno">Seleccione el país</option>
                                <optgroup label="Asia">
                                    <option value="AF">Afganistán</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AZ">Azerbaiyán</option>
                                    <option value="BH">Bahréin</option>
                                    <option value="BD">Bangladesh
                                    </option>
                                    <option value="KH">Camboya</option>
                                    <option value="CY">Chipre</option>
                                    <option value="GE">Georgia</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Irán</option>
                                    <option value="IQ">Irak</option>
                                    <option value="IL">Israel</option>
                                    <option value="JP">Japón</option>
                                    <option value="JO">Jordán</option>
                                    <option value="KZ">Kazajstán</option>
                                    <option value="KP">Corea del Norte</option>
                                    <option value="KR">Corea del Sur</option>
                                    <option value="MY">Malasia</option>
                                    <option value="PK">Pakistán</option>
                                    <option value="PH">Filipinas</option>
                                    <option value="RU">Federación Rusa</option>
                                    <option value="SA">Arabia Saudita</option>
                                    <option value="SY">República Árabe Siria</option>
                                    <option value="TH">Tailandia</option>
                                    <option value="AE">Emiratos Árabes Unidos</option>
                                    <option value="VN">Vietnam</option>
                                </optgroup>
                                <optgroup label="America del norte">
                                    <option value="CA">Canadá</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CU">Cuba</option>
                                    <option value="DO">República Dominicana</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="HN">Honduras</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="MX">México</option>
                                    <option value="US">Estados Unidos</option>
                                </optgroup>
                                <optgroup label="America del sur">
                                    <option value="AR">Argentina</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BR">Brasil</option>
                                    <option value="CL">Chile</option>
                                    <option value="CO">Colombia</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Perú</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="VE">Venezuela</option>
                                </optgroup>
                                <optgroup label="África">
                                    <option value="DZ">Argelia</option>
                                    <option value="AO">Angola</option>
                                    <option value="CM">Camerún</option>
                                    <option value="CV">Cabo Verde</option>
                                    <option value="CF">República Centroafricana</option>
                                    <option value="TD">Chad</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">República Democrática del Congo
                                    </option>
                                    <option value="CI">Costa de Marfil</option>
                                    <option value="EG">Egipto</option>
                                    <option value="GQ">Guinea Ecuatorial</option>
                                    <option value="ET">Etiopía</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GN">Guinea</option>
                                    <option value="KE">Kenia</option>
                                    <option value="LS">Lesoto</option>
                                    <option value="MA">Marruecos</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="NE">Níger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="SN">Senegal</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">Sudáfrica</option>
                                    <option value="SS">Sudán del Sur</option>
                                    <option value="SD">Sudán</option>
                                    <option value="TN">Túnez</option>
                                    <option value="UG">Uganda</option>
                                    <option value="ZW">Zimbabue</option>
                                </optgroup>
                                <optgroup label="Europa">
                                    <option value="AL">Albania</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AT">Austria</option>
                                    <option value="BY">Bielorrusia</option>
                                    <option value="BE">Bélgica</option>
                                    <option value="BA">Bosnia y Herzegovina</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="HR">Croacia</option>
                                    <option value="CZ">Republica checa</option>
                                    <option value="DK">Dinamarca</option>
                                    <option value="EE">Estonia</option>
                                    <option value="FI">Finlandia</option>
                                    <option value="FR">Francia</option>
                                    <option value="DE">Alemania</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Grecia</option>
                                    <option value="HU">Hungría</option>
                                    <option value="IS">Islandia</option>
                                    <option value="IE">Irlanda</option>
                                    <option value="IT">Italia</option>
                                    <option value="JE">Jersey</option>
                                    <option value="XK">Kosovo</option>
                                    <option value="LV">Letonia</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lituania</option>
                                    <option value="LU">Luxemburgo</option>
                                    <option value="MK">Macedonia</option>
                                    <option value="MT">Malta</option>
                                    <option value="MD">Moldavia</option>
                                    <option value="MC">Mónaco</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="NL">Países Bajos</option>
                                    <option value="NO">Noruega</option>
                                    <option value="PL">Polonia</option>
                                    <option value="PT">Portugal</option>
                                    <option value="RO">Rumania</option>
                                    <option value="RS">Serbia</option>
                                    <option value="CS">Serbia y Montenegro</option>
                                    <option value="SK">Eslovaquia</option>
                                    <option value="SI">Eslovenia</option>
                                    <option value="ES">España</option>
                                    <option value="SE">Suecia</option>
                                    <option value="CH">Suiza</option>
                                    <option value="UA">Ucrania</option>
                                    <option value="GB">Reino Unido</option>
                                </optgroup>
                                <optgroup label="Oceania">
                                    <option value="AU">Australia</option>
                                    <option value="NZ">Nueva Zelanda</option>
                                </optgroup>
                            </select>
                            <span id="resPais"></span>
                        </div>
                    </div>
                </div><!--Fin div direccion del formulario-->
                <div id="divTarjeta" class="collapseDiv">
                    <div class="fila">
                        <div class="fila1_c1">
                            <p>Datos de la tarjeta</p>
                        </div>
                        <div class="fila1_c2" id="fila1_c2-Tarjeta1">
                            <label for="titular">
                                <input class="mb-1" id="titularT" type="text" name="titular"
                                    placeholder="Nombre del titular" size="50" value="" autocomplete="given-name">
                            </label>
                            <span id="resTitular"></span>
                            <label for="cardNumber">
                                <input id="cardN" type="text" name="cardNumber" placeholder="Número de tarjeta"
                                    size="40" value="" autocomplete="cc-number">
                            </label>
                            <span id="resCardNumber"></span>
                            <label for="cvv">
                                <input id="cvv" type="text" name="cvv" id="cvv" placeholder="CVV" maxlength="3"
                                    size="9" value="" autocomplete="cc-csc">
                            </label>
                            <span id="resCVV"></span>
                        </div>
                    </div>
                    <div class="fila">
                        <div class="fila1_c1">
                            <p>Fecha de caducidad:</p>
                        </div>
                        <div class="fila1_c2" id="fila1_c2-Tarjeta2">
                            <label for="mesCaducidad">Mes de caducidad:
                                <select id="mesCaducidad" name="mesCaducidad" autocomplete="cc-exp-month">
                                    <option value="0">Enero</option>
                                    <option value="1">Febrero </option>
                                    <option value="2">Marzo</option>
                                    <option value="3">Abril</option>
                                    <option value="4">Mayo</option>
                                    <option value="5">Junio</option>
                                    <option value="6">Julio</option>
                                    <option value="7">Agosto</option>
                                    <option value="8">Septiembre</option>
                                    <option value="9">Octubre</option>
                                    <option value="10">Noviembre</option>
                                    <option value="11">Diciembre</option>
                                </select></label>
                            <label for="ayoCaducidad">Año de caducidad:
                                <select id="ayoCaducidad" name="añoCaducidad" autocomplete="cc-exp-year">
                                    <option value="Ninguno">Elegir año:</option>
                                    <option value="0" id="year"></option>
                                    <option value="1" id="year1"></option>
                                    <option value="2" id="year2"></option>
                                    <option value="3" id="year3"></option>
                                    <option value="4" id="year4"></option>
                                </select></label>
                            <span id="resCaducidad"></span>
                        </div>
                    </div>
                    <div class="fila">
                        <div class="fila1_c1">
                            <p>Elegir el tipo de tarjeta:</p>
                        </div>
                        <div class="fila1_c2" id="fila1_c2-Tarjeta3">
                            <label for="tipoTarjeta" hidden>
                                <div><input type="radio" name="tipoTarjeta" value="visa" checked>
                                <img src="img/visa.png" id="visa" alt=""></div>
                                <div><input type="radio" name="tipoTarjeta" value="mastercard">
                                <img src="img/masterCard.png" id="mastercard" alt=""></div>
                                <div><input type="radio" name="tipoTarjeta" value="amex">
                                <img src="img/amex.png" id="amex" alt=""></div>
                            </label>
                        </div>
                    </div>
                </div><!--Fin div tarjetas-->


                    <div class="fila_check1">
                        <label for="notificacion"> <input type="checkbox" name="notificaciones" id="notificaciones" value="1" checked>
                        Activar notificaciones de la página. </label>
                    </div>
                    <div class="fila_check1">
                        <label for="newsletter"> <input type="checkbox" name="newsletter" id="newsletter" value="1" checked>
                    Deseo recibir la newsletter semanal con las novedades de la página.</label>
                    </div>


                <div id="botonesFormulario">
                    <div>
                        <input id="enviarForm" type="submit" value="Enviar"
                            aria-label="Enviar cuestionario"></input>
                        <input id="resetForm" type="reset" value="Reset"
                            aria-label="Resetear datos del cuestionario"></input>
                    </div>
                    <div id="divSubmit"><!--Mensaje enviar el formulario-->
                        <span id="resultSubmit"></span>
                    </div>
                </div>
            </form>
        </div>
        <div class="row mt-2">
                    <p class="text-end">Tranquil@ no revelaremos tu identidad<br><span>*Campos obligatorios</span></p>
        </div>
    </div>
</div>
        
    