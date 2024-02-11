//variables globales para validar el formulario:
let esValidoN = false, esValidoAp = false, esValidoM = false, esValidoP1 = false, esValidoP2 = false, esValidoFC = false, esValidoDirec1 = false, esValidoDirec2 = false, esValidoDirec3 = false, esValidoDirec4 = false, esValidoPais = false, esValidoTitular = false, esValidoNumT = false, esValidoCVV = false, esValidoFechaT = false;

//variable descuento
let descuento = 0;

//elementos formulario
const form = document.getElementById("form");
const botonEnviarForm = document.getElementById("enviarForm");
const botonRestForm = document.getElementById("resetForm");

//elementos para la comprobacion al enviar
const resultSubmit = document.getElementById("resultSubmit");

//elementos para la validacion de nombre y apellidos
const nombre = document.getElementById("nombre");
const apellidos = document.getElementById("apellidos");
//elementos para mostrar resultado validacion nombre y apellidos
const resNom = document.getElementById("resNom");
const resAp = document.getElementById("resAp");

//elementos para la validacion de email
const mail = document.getElementById("mail");
//elementos para mostrar resultado validacion de email
const resMail = document.getElementById("resMail");

//elementos para la validacion de la contrasenya
const passW1 = document.getElementById("passW1");
const passW2 = document.getElementById("passW2");
//elementos para mostrar resultado validacion de constrasenna
const divResPass = document.getElementById("divResPass");
const listaValidarPass = document.querySelector('ul');
//Esta variable me situa en los elementos de la lista que son tipo array.
let lis = listaValidarPass.children;
const resPass = document.getElementById("resPass");

//VALIDACIONES OPCIONALES:
//elemento tipoGenero: como selecciono el valor.
/*
const tipoGenero = document.querySelectorAll("[name*='genero']");
for(let i=0; i<tipoGenero.length; i++){
    tipoGenero[i].addEventListener("click", (ev)=>{
        let valorRadio = ev.target.value;
        console.log(valorRadio);
    })
}*/
//elementos para la validacion de la fecha de nacimiento
const fechaC = document.getElementById("fechaC");
//elementos para mostrar resultado validación de la fecha de nacimiento
const resFechaC = document.getElementById("resFechaC");
//elementos para la validacion de la direccion
const divDireccion = document.getElementById("divAccordion-DireccionHeader");
const mostrarDirec = document.getElementById("divAccordion-DireccionBody");
const pais = document.getElementById("pais");
const dir1 = document.getElementById("direccion1");
const dir2 = document.getElementById("direccion2");
const dir3 = document.getElementById("direccion3");
const dir4 = document.getElementById("direccion4");
//elementos para mostrar resultado validacion de direccion
const resDir1 = document.getElementById("resDir1");
const resDir2 = document.getElementById("resDir2");
const resDir3 = document.getElementById("resDir3");
const resDir4 = document.getElementById("resDir4");
const resPais = document.getElementById("resPais");
//elementos para validar la tarjeta
const divTarjeta = document.getElementById('divTarjeta');
const titularT = document.getElementById("titularT")
const cardN = document.getElementById("cardN");
const cvv = document.getElementById("cvv");
const mesC = document.getElementById("mesCaducidad");
const ayoC = document.getElementById("ayoCaducidad");
const tipoTarjeta = document.getElementsByName("tipoTarjeta");

//elementos para mostrar resultado de validaciones de la tarjeta
const resTitular = document.getElementById("resTitular");
const resCVV = document.getElementById("resCVV");
const resCardNumber = document.getElementById("resCardNumber");
const resCaducidad = document.getElementById("resCaducidad");

//eventos del formulario
botonEnviarForm.addEventListener("click", validar);
botonRestForm.addEventListener("click", resetear);

nombre.addEventListener("change", validarNombre);
apellidos.addEventListener("change", validarApel);
mail.addEventListener("change", validarMail);

passW1.addEventListener("keyup", validarPassW1);
passW2.addEventListener("keyup", validarPassW1_2);

fechaC.addEventListener("change", validarFechaN);

divDireccion.addEventListener("click", mostrarDiv);

dir1.addEventListener("change", validarDirecc1);
dir1.addEventListener("change", validarMostrarTarjeta);
dir2.addEventListener("change", validarDirecc2);
dir2.addEventListener("change", validarMostrarTarjeta);
dir3.addEventListener("change", validarDirecc3);
dir3.addEventListener("change", validarMostrarTarjeta);
dir4.addEventListener("change", validarDirecc4);
dir4.addEventListener("change", validarMostrarTarjeta);
pais.addEventListener("change", validarDirecPais);
pais.addEventListener("change", validarMostrarTarjeta);

titularT.addEventListener("change", validarTitular);
cvv.addEventListener("change", validarCVV);
mesC.addEventListener("change", validarFechaT);
ayoC.addEventListener("change", validarFechaT);
cardN.addEventListener("change", validarNumT);
for (let i = 0; i < tipoTarjeta.length; i++) {
    tipoTarjeta[i].addEventListener("click", validarNumT);
}

//rellenar anio caducidad tarjetaC
const year = document.getElementById("year");
const year1 = document.getElementById("year1");
const year2 = document.getElementById("year2");
const year3 = document.getElementById("year3");
const year4 = document.getElementById("year4");

window.addEventListener("load", function () {
    var date = new Date;
    var anio = date.getFullYear();
    year.innerHTML = anio;
    year1.innerHTML = anio + 1;
    year2.innerHTML = anio + 2;
    year3.innerHTML = anio + 3;
    year4.innerHTML = anio + 4;
});

//MOSTRAR DIV DEL FORMULARIO
function mostrarDiv() {
    mostrarDirec.classList.toggle("collapseDiv");

    if (!mostrarDirec.classList.contains("collapseDiv")) {
        mostrarDirec.classList.add("mostrarDiv");
    } else {
        mostrarDirec.classList.remove("mostrarDiv");
    }

}

//FUNCIONES DE LOS EVENTOS DEL FORMULARIO
//al enviar
function validar(ev) {
    ev.preventDefault(); //Desactivamos el refresco de la página al enviar el formulario.
    let camposObligat = false, camposDirecc = false, camposTarjeta = false;

    //Validacion campos obligatorios
    if (esValidoN && esValidoAp && esValidoM &&
        esValidoP1 && esValidoP2 && esValidoFC) {
        camposObligat = true;
    } else {
        resultSubmit.style.color = "red"
        resultSubmit.innerHTML = "El formulario no puede enviarse.<br>Hay errores en los campos obligatorios *";
    }
    //Validacion campos direccion
    if (esValidoDirec1 && esValidoDirec2 && esValidoDirec3 &&
        esValidoDirec4 && esValidoPais) {
        camposDirecc = true;
    }
    //Validacion campos tarjeta
    if (esValidoTitular && esValidoNumT && esValidoCVV && esValidoFechaT) {
        camposTarjeta = true;
    }
    ////////////////////////////////////////
    if (!camposObligat && !camposDirecc && !camposTarjeta) {
        resultSubmit.style.color = "red"
        resultSubmit.innerHTML = "El formulario no puede enviarse.<br>Todos los campos tienen errores o están vacios.<br>Si quiere hasta un 75% de descuento rellene TODOS los campos";

    } else if (camposObligat && !camposDirecc && !camposTarjeta) {
        resultSubmit.style.color = "palevioletred"
        resultSubmit.innerHTML = "El formulario se ha enviado correctamente.<br>Ya está registrado.<br>Su descuento es de un 25%.<br>Aumente su descuento rellenando su direccion y añada una tarjeta de crédito";
        descuento = 25;
        console.log(descuento)

    } else if (camposObligat && camposDirecc && !camposTarjeta) {
        resultSubmit.style.color = "lightcoral"
        resultSubmit.innerHTML = "El formulario se ha enviado correctamente.<br>Ya está registrado.<br>Su descuento es de un 40%.<br>Aumente su descuento añadiendo una tarjeta de crédito";
        descuento = 40;
        console.log(descuento)
    } else if (camposObligat && !camposDirecc && camposTarjeta) {
        resultSubmit.style.color = "palevioletred"
        resultSubmit.innerHTML = "El formulario se ha enviado correctamente.<br>Ya está registrado.<br>Su descuento es de un 25%.<br>Aumente su descuento rellenando su direccion. Los datos de la tarjeta de crédito están correctos";
        descuento = 25;
        console.log(descuento)

    } else if (camposObligat && camposDirecc && camposTarjeta) {
        resultSubmit.style.color = "hotpink"
        resultSubmit.innerHTML = "El formulario se ha enviado correctamente.<br>Ya está registrado.<br>Su descuento es de un 75%";
        descuento = 75;
        console.log(descuento)
    }

    /*Se pone el foco en el 1º elemento que el booleano es false */
    if (!esValidoN) {
        nombre.focus();
        return false;
    } else if (!esValidoAp) {
        apellidos.focus();
        return false;
    } else if (!esValidoM) {
        mail.focus();
        return false;
    } else if (!esValidoFC) {
        fechaC.focus();
        return false;
    } else if (!esValidoP1) {
        passW1.focus();
        return false;
    } else if (!esValidoP2) {
        passW2.focus();
        return false;
    } else if (!esValidoDirec1) {
        dir1.focus();
        return false;
    } else if (!esValidoDirec2) {
        dir2.focus();
        return false;
    } else if (!esValidoDirec3) {
        dir3.focus();
        return false;
    } else if (!esValidoDirec4) {
        dir4.focus();
        return false;
    } else if (!esValidoPais) {
        pais.focus();
        return false;
    } else if (!esValidoTitular) {
        titularT.focus();
        return false;
    } else if (!esValidoNumT) {
        cardN.focus();
        return false;
    } else if (!esValidoCVV) {
        cvv.focus();
        return false;
    } else if (!esValidoFechaT) {
        mesC.focus();
        return false;
    }
}

function resetear() {
    //variables para validar se reestablecen:
    esValidoN = false, esValidoAp = false, esValidoM = false, esValidoP1 = false, esValidoP2 = false, esValidoFC = false, esValidoDirec1 = false, esValidoDirec2 = false, esValidoDirec3 = false, esValidoDirec4 = false, esValidoPais = false, esValidoTitular = false, esValidoNumT = false, esValidoCVV = false, esValidoFechaT = false;

    //Cualer sms de error se restablece
    resNom.innerHTML = "";
    resAp.innerHTML = "";
    resMail.innerHTML = "";
    resPass.innerHTML = "";
    resFechaC.innerHTML = "";
    resDir1.innerHTML = "";
    resDir2.innerHTML = "";
    resDir3.innerHTML = "";
    resDir4.innerHTML = "";
    resTitular.innerHTML = "";
    resCardNumber.innerHTML = "";
    resCVV.innerHTML = "";
    resCaducidad.innerHTML = "";
    resultSubmit.innerHTML = "";

    for (let i = 0; i < lis.length; i++) {
        lis[i].classList.remove('invalidaP');
        lis[i].classList.remove('validaP');
    }

    mostrarDirec.classList.add("collapseDiv");//Se collapsa el div el form de la dirección.
    mostrarDirec.classList.remove("mostrarDiv");

    validarMostrarTarjeta();
}

//FUNCIONES PARA VALIDAR CADA ELEMENTO DEL FORMULARIO
function validarNombre(ev) {
    const number = new RegExp('(?=.*[0-9])');
    const especial = new RegExp('(?=.*[*^!-+<-@.,;_]+).*');
    let nom = ev.target.value.trim();
    let arrayNom = nom.split(" ");

    if (nom.length === 0 || nom === "" | nom === " " || arrayNom.length > 2) {
        //Escribimos el mensaje de error
        resNom.innerHTML = "El nombre es un campo obligatorio, no puede superar las dos palabras";
        esValidoN = false;
    } else {
        if (number.test(nom)) {
            resNom.innerHTML = "El nombre no admite números";
            esValidoN = false;
        } else if (especial.test(nom)) {
            resNom.innerHTML = "El nombre no admite caracteres especiales";
            esValidoN = false;
        } else {
            resNom.innerHTML = "";
            esValidoN = true;
        }
    }
}

function validarApel(ev) {
    const number = new RegExp('(?=.*[0-9])');
    const especial = new RegExp('(?=.*[*^!-+<-@.,;_]+).*');

    let apellid = ev.target.value.trim();
    let arrayApellid = apellid.split(' ');

    if (apellid.length === 0 || apellid === "" || apellid === " " || arrayApellid.length > 2) {
        //Escribimos el mensaje de error
        resAp.innerHTML = "El apellido es un campo obligatorio, no puede superar las dos palabras";
        esValidoAp = false;
    } else {
        if (number.test(apellid)) {
            resAp.innerHTML = "El apellido no admite números";
            esValidoAp = false;
        } else if (especial.test(apellid)) {
            resAp.innerHTML = "El apellido no admite caracteres especiales";
            esValidoAp = false;
        } else {
            resAp.innerHTML = "";
            esValidoAp = true;
        }
    }
}

//funcion para comprobar la validación del mail
function validarTerminacion(mail) {
    const email_user = new RegExp(/^([a-z_\.]+)$/);
    const email_dominio = new RegExp(/^([a-z_]+)$/);

    let arrayTerminacionMail = ["ac","ad","ae","af","ag","ai","am","an","ao","aq","ar","as","at","au","aw","ax","az","ba","bb","be","bf","bg","bh","bi","bj","bl","bm","bn","bo","br","bq","bs","bt","bv","bw","by","bz","ca","cc","cd","cf","cg","ch","ci","ck","cl","cm","cn","co","cr","cs","cu","cv","cw","cx","cy","cz","dd","de","dj","dk","dm","do","dz","ec","ee","eg","eh","er","es","et","eu","edu","fi","fj","fk","fm","fo","fr","ga","gb","gd","ge","gf","gg","gh","gi","gl","gm","gn","gp","gq","gr","gs","gt","gu","gw","gy","hk","hm","hn","hr","ht","hu","id","ie","il","im","in","io","iq","ir","is","it","info","je","jm","jo","jp","ke","kg","kh","ki","km","kn","kp","kr","kw","ky","kz","la","lb","lc","li","lk","lr","ls","lt","lu","lv","ly","ma","mc","md","me","mf","mg","mh","mk","ml","mm","mn","mo","mp","mq","mr","ms","mt","mu","mv","mx","my","mz","na","nc","ne","nf","ng","ni","no","np","nr","nu","nz","om","biz","com","us","org", "net", "ucam","web","co.uk", "com.es", "com.uy","com.au","net.au" ];
    let posicionArrayTerminacion;
    let arrayMail = mail.split("@");

    let esValidoTerminacion, esValidoUsuario, esValidoDominio, esValidoMail;

    if (arrayMail.length === 2) {
        let parteDominio = arrayMail[1].split('.');

        //Comprobamos que la primera parte sean correctas
        if (email_user.test(arrayMail[0])) {
            esValidoUsuario = true;
        } else {
            esValidoUsuario = false;
        }
        console.log(parteDominio[0])
        //Comprobamos que el dominio sean correcto
        if (email_dominio.test(parteDominio[0])) {
            esValidoDominio = true;
        } else {
            esValidoDominio = false;
        }

        //Comprobamos que la terminación sean correctas
        switch (parteDominio.length) {
            case 2:
                parteDominio = parteDominio[1];
                posicionArrayTerminacion = arrayTerminacionMail.findIndex((n) => n == parteDominio);

                if (posicionArrayTerminacion == -1) {
                    esValidoTerminacion = false;
                } else {
                    esValidoTerminacion = true;
                }
            break;
            case 3:
                parteDominio = (parteDominio[1] + "." + parteDominio[2]);
                posicionArrayTerminacion = arrayTerminacionMail.findIndex((n) => n == parteDominio);
                if (posicionArrayTerminacion == -1) {
                    esValidoTerminacion = false;
                } else {
                    esValidoTerminacion = true;
                }
            break;
            default: esValidoTerminacion = false;
            break;
        }

    } 

    if (esValidoUsuario && esValidoDominio && esValidoTerminacion) {
        esValidoMail = true;
    } else {
        esValidoMail = false;
    }
    console.log('usuario:'+esValidoUsuario)
    console.log('dominio:'+esValidoDominio)
    console.log('terminacion:'+esValidoTerminacion)

    return esValidoMail
}

function validarMail(ev) {
    let mail = ev.target.value.trim();
    console.log(validarTerminacion(mail))
    if (mail.length === 0) {
        resMail.innerHTML = "El e-mail es un campo obligatorio";
        esValidoM = false;
    } else if (validarTerminacion(mail) == false) {
        resMail.innerHTML = "El e-mail no es válido";
        esValidoM = false;
    } else if (validarTerminacion(mail) == true) {
        resMail.innerHTML = "";
        esValidoM = true;
    }
}

function validarPassW1(ev) {
    let passW1 = ev.target.value.trim();
    const expReg = /^(?=.*\d)(?=.*[!-+<-@])(?=.*[A-Z])(?=.*[a-z]).{8,}$/;
    const long = new RegExp('.{8,}');
    const mayus = new RegExp('(?=.*[A-Z])');
    const minusc = new RegExp('(?=.*[a-z])');
    const numer = new RegExp('(?=.*[0-9])');
    const especial = new RegExp('(?=.*[*^!-+<-@.,;_]+).*');
    //Validar contraseña
    let valLong = false, valMinus = false, valMayus = false, valNum = false, valCarac = false;

    //Validar longitud
    if (passW1.length < 8) {
        lis[0].classList.remove('validaP');
        lis[0].classList.add('invalidaP');
        valLong = false;
    } else {
        lis[0].classList.remove('invalidaP');
        lis[0].classList.add('validaP');
        valLong = true;
    }

    //Validar al menos una letra minuscula.
    if (!minusc.test(passW1)) {
        lis[1].classList.remove('validaP');
        lis[1].classList.add('invalidaP');
        valMinus = false;
    } else {
        lis[1].classList.remove('invalidaP');
        lis[1].classList.add('validaP');
        valMinus = true;
    }

    //validar al menos una mayuscula.
    if (!mayus.test(passW1)) {
        lis[2].classList.remove('validaP');
        lis[2].classList.add('invalidaP');
        valMayus = false;
    } else {
        lis[2].classList.remove('invalidaP');
        lis[2].classList.add('validaP');
        valMayus = true;
    }

    //validar al menos un numero.
    if (!numer.test(passW1)) {
        lis[3].classList.remove('validaP');
        lis[3].classList.add('invalidaP');
        valNum = false;

    } else {
        lis[3].classList.remove('invalidaP');
        lis[3].classList.add('validaP');
        valNum = true;
    }

    //validar al menos un caracter especial.
    if (!especial.test(passW1)) {
        lis[4].classList.remove('validaP');
        lis[4].classList.add('invalidaP');
        valCarac = false;
    } else {
        lis[4].classList.remove('invalidaP');
        lis[4].classList.add('validaP');
        valCarac = true;
    }

    //Si se cumplen las condiciones se valida la contraseña:
    if (valLong & valMinus & valMayus & valNum & valCarac) {
        esValidoP1 = true;
    } else {
        esValidoP1 = false;
    }

}

function validarPassW1_2(ev) { //Funcion validar coinciden las constraseñas
    let pass1 = passW1.value;
    let pass2 = ev.target.value.trim();

    if (pass1 != pass2) {
        resPass.innerHTML = "Las contraseñas deben ser iguales";
        esValidoP2 = false;
    } else {
        resPass.innerHTML = "";
        esValidoP2 = true;
    }
}


function validarFechaN(ev) {
    //evaluar si es mayor de edad Y si introduce una fecha no válida.
    let dateN = new Date(ev.target.value);
    let dateAct = new Date();
    let edad = dateAct.getFullYear() - dateN.getFullYear();
    let mes = dateN.getMonth() - dateAct.getMonth();

    if (Date.parse(dateN) > Date.parse(dateAct)) {//Para comparar fechas y evaluar que la fecha introducida es > a la actual.
        resFechaC.style.color = "red";
        resFechaC.innerHTML = "La fecha no es valida";
        esValidoFC = false
    } else { //Comprobamos que sea mayor de edad:

        if (edad > 18 ||
            (edad == 18 && mes === 0 && dateAct.getDate() >= dateN.getDate()) ||
            (edad == 18 && mes < 0)) {
            resFechaC.innerHTML = "";
            esValidoFC = true;

        }
        else if ((edad == 18 && mes > 0) ||
            (edad == 18 && mes == 0 && dateAct.getDate() < dateN.getDate()) ||
            (edad < 18)) {

            resFechaC.style.color = "red";
            resFechaC.innerHTML = "Debe ser mayor de edad para poder registrarse";
            esValidoFC = false
        }
    }

}

function validarDirecc1(ev) {
    const number = new RegExp('(?=.*[0-9])');
    const especial = new RegExp('(?=.*[*^!-+<-@.,;_]+).*');

    let dir1 = ev.target.value.trim();
    if (dir1.length === 0 || dir1 === "" || dir1 === " ") {
        resDir1.innerHTML = "No dejes el campo vacío para un mayor descuento";
        esValidoDirec1 = false;
    } else {
        if (number.test(dir1)) {
            resDir1.innerHTML = "No se admiten números";
            esValidoDirec1 = false;

        } else if (especial.test(dir1)) {
            resDir1.innerHTML = "No se admiten carácteres especiales";
            esValidoDirec1 = false;
        }
        else {
            resDir1.innerHTML = "";
            esValidoDirec1 = true;
        }
    }

}

function validarDirecc2(ev) {
    let dir2 = ev.target.value.trim();

    if (dir2.length === 0 || dir2 === "" || dir2 === " ") {
        resDir2.innerHTML = "No dejes el campo vacío para un mayor descuento";
        esValidoDirec2 = false;
    } else {
        resDir2.innerHTML = ""
        esValidoDirec2 = true;
    }

}
function validarDirecc3(ev) {
    const number = new RegExp('(?=.*[0-9])');
    const especial = new RegExp('(?=.*[*^!-+<-@.,;_]+).*');
    let dir3 = ev.target.value.trim();

    if (dir3.length === 0 || dir3 === "" || dir3 === " ") {
        resDir3.innerHTML = "No dejes el campo vacío para un mayor descuento";
        esValidoDirec3 = false;
    } else {
        if (number.test(dir3)) {
            resDir3.innerHTML = "No se admiten números";
            esValidoDirec3 = false;

        } else if (especial.test(dir3)) {
            resDir3.innerHTML = "No se admiten caracteres especiales";
            esValidoDirec3 = false;
        }
        else {
            resDir3.innerHTML = ""
            esValidoDirec3 = true;
        }
    }
}

function validarDirecc4(ev) {
    const number2 = new RegExp("(?=.*[^0-9])");
    let dir4 = ev.target.value.trim();

    if (dir4.length === 0 || dir4 === "" || dir4 === " ") {
        resDir4.innerHTML = "No dejes el campo vacío para un mayor descuento";
        esValidoDirec4 = false;
    } else {
        if (number2.test(dir4) || dir4.length != 5) {
            resDir4.innerHTML = "Sólo se admiten 5 números";
            esValidoDirec4 = false;
        } else {
            resDir4.innerHTML = "";
            esValidoDirec4 = true;
        }
    }
}

function validarDirecPais(ev) {
    let pais = ev.target.value;

    if (pais != "Ninguno") {
        resPais.innerHTML = "";
        esValidoPais = true;
    } else {
        resPais.innerHTML = "No dejes el campo vacío para un mayor descuento";
        esValidoPais = false;
    }
}

//Para mostrar los campos de la tarjeta:
function validarMostrarTarjeta() {
    if (esValidoDirec1 === true && esValidoDirec2 === true && esValidoDirec3 === true && esValidoDirec4 === true && esValidoPais === true) {
        divTarjeta.classList.add('mostrarDiv');//mostrar campos de tarjeta
        divTarjeta.classList.remove('collapseDiv');
        cadenAumentaDescuento.innerHTML = "¡¡MÁS DESCUENTO!! 50% REGISTRA UNA TARJETA";

    } else {
        divTarjeta.classList.add('collapseDiv');//ocultar campos de tarjeta
        divTarjeta.classList.remove('mostrarDiv');
        cadenAumentaDescuento.innerHTML = "¡¡ AUMENTA TU DESCUENTO 15% MÁS!! <br> PULSA AQUÍ";
    }
}

//FUNCIONES COMPROBACIÓN TARJETAS
function validarTitular(ev) {
    const number = new RegExp('(?=.*[0-9])');
    const especial = new RegExp('(?=.*[*^!-+<-@.,;_]+).*');
    let titular = ev.target.value.trim();

    if (titular.length == 0 || titular === "" || titular === " ") {
        resTitular.innerHTML = "No dejes el campo vacío para un mayor descuento";
        esValidoTitular = false;
    } else {
        if (number.test(titular)) {
            resTitular.innerHTML = "El nombre del titular no admite números";
            esValidoTitular = false;

        } else if (especial.test(titular)) {
            resTitular.innerHTML = "El nombre del titular no admite caracteres especiales";
            esValidoTitular = false;
        } else {
            resTitular.innerHTML = "";
            esValidoTitular = true;
        }

    }
}

function validarCVV(ev) {
    const number2 = new RegExp("(?=.*[^0-9])");
    let cvvN = ev.target.value.trim();

    if (cvvN.length == 0 || cvvN === "" || cvvN === " ") {
        resCVV.style.color = "red";
        resCVV.innerHTML = "No dejes el campo vacío para un mayor descuento";
        esValidoCVV = false;
    } else {
        if (number2.test(cvvN) || cvvN.length != 3) {
            resCVV.style.color = "red";
            resCVV.innerHTML = "Sólo se admiten 3 números";
            esValidoCVV = false;
        } else {
            resCVV.innerHTML = ""
            esValidoCVV = true;
        }
    }
}
function validarFechaT() {
    validarFechaCard(ayoC, mesC);
}
function validarFechaCard(ayoC, mesC) {
    const date = new Date();
    let mes = date.getMonth();

    if (ayoC.value == 0) {
        if (mes <= mesC.value) {
            resCaducidad.innerHTML = "";
            esValidoFechaT = true;
        } else {
            resCaducidad.style.color = "red";
            resCaducidad.innerHTML = "La tarjeta está caducada";
            esValidoFechaT = false;
        }
    } else {
        resCaducidad.innerHTML = "";
        esValidoFechaT = true;
    }
}
function validarNumT() {
    validarCardNum(tipoTarjeta, cardN);
}
function validarCardNum(tipoTarjeta, cardN) {

    var visaRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
    var mastercardRegEx = /^(?:5[1-5][0-9]{14})$/;
    var amexpRegEx = /^(?:3[47][0-9]{13})$/;

    if (cardN.value.length == 0) {
        resCardNumber.innerHTML = "No dejes el campo vacío para un mayor descuento";
        esValidoNumT = false;
    }

    if (tipoTarjeta[0].checked) {//comprobacion visa
        if (!visaRegEx.test(cardN.value)) {
            resCardNumber.innerHTML = "El número o el tipo de tarjeta no son correctos";
            esValidoNumT = false;
        } else {
            resCardNumber.innerHTML = ""
            esValidoNumT = true;
        }
    }
    if (tipoTarjeta[1].checked) {//comprobacion mastercard
        if (!mastercardRegEx.test(cardN.value)) {
            resCardNumber.innerHTML = "El número o el tipo de tarjeta no son correctos";
            esValidoNumT = false;
        } else {
            resCardNumber.innerHTML = ""
            esValidoNumT = true;
        }
    }
    if (tipoTarjeta[2].checked) {//comprobacion american express
        if (!amexpRegEx.test(cardN.value)) {
            resCardNumber.innerHTML = "El número o el tipo de tarjeta no son correctos";
            esValidoNumT = false;
        } else {
            resCardNumber.innerHTML = ""
            esValidoNumT = true;
        }
    }
}









