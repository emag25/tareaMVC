<!--AUTOR:SICHA VEGA BETSY ARLETTE-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CONTIENE UN FORMULARIO PARA DISEÑA EÑ PRODUCTO SUBLIMADO.">
    <meta name="keywords" content="Sublimados, Estampados, Camisetas, Tazas,Creacion,Diseño.">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TU DISEÑO</title>
    <style>
        *{
            font-family: 'Inter', sans-serif;
        }
        .dividir-seccion-uno{
            padding-top: 35px;
        }
        .newDisenio{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            background-color: #2B2729;
            width: 65%;
            height: 75%;
            color: rgb(255, 255, 255);
            border-radius: 40px;
            padding: 40px;
            margin: 60px;
            box-shadow: 5px 5px #acacac;
        }

        #infoDisenio{
            display: grid;
            grid-template-columns: 120px 200px;
            grid-template-rows: 40px 40px 40px 80px;
            justify-content: space-around;
            justify-items: stretch;
            align-items: center;
            margin-bottom: 20px;
        }
        .btnDisenio {
            align-items: center;
            display: flex;
            justify-content: center;
            border-radius: 30px;
            width: 150px;
            height: 32px;
            color: #2B2729;
            cursor: pointer;
            margin-top: 50px;
            font-weight: bold;
            background-color: #ACACAC;
            text-align: center;
            text-decoration: none;
            font-size: 10pt;
        }
        .enl{
            font-family: 'Inter', sans-serif;
            border: 2px solid  #2B2729;
            padding: 0 10px;
            margin: 15px;
            text-align: center;
            font-size: 20px;
            background-color: #9EE9A1;
            color: black;
            position: relative;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        
        .formulario{
            margin: 5px;
            padding-left: 10px;
        }
        #btnsCentro{
            text-align: center;
        }
        input, select, textarea{
            border-radius: 8px;
        }
        label{
            color: #9EE9A1;
            font-weight: bold;
        }
        #enlaces{
            display: grid;
            grid-template-columns: 0.5fr 0.5fr 0.5fr 0.5fr 0.5fr;
            justify-content: stretch;
            align-items: center;
            
        }
        .fotos{
            width: 50%;
            height: 50%;
            justify-self: center;
        }
        .seccion-primero{
            height: auto;
        }
    </style>


</head>
<body>
    <div class="contenedor-principal">
    <?php require_once HEADER; ?>
        
    
        <main>
            <section class="seccion-primero">
                <div class="dividir-seccion-uno">
                    <div  style="display: flex; flex-direction: column; justify-content: center; align-items: center; margin-left: auto;
                    margin-right:auto ;">
                        <h2 id="encabezado">CREA TU DISEÑO</h2>
                        <h3  style="margin-top: -10px;">SUPERIUM</h3>
                        <p id="parrafo" >
                            Bienvenido Usuario en este apartado podrás dejar volar tu imaginación e idear tu producto deseado
                            siguiendo algunos parámetros que te guiarán en la creación de tu diseño.
                        <br><br><span style="font-weight: bold;">Una nueva forma de vestir, con elegancia y sobretodo a tu gusto!</span>
                        </p> <br>
                        <div id="enlaces">
                            <a class="enl" id="uno"  href="#"> CAMISETA</a>
                            <a class="enl" id="dos"  href="#"> ABRIGO </a>
                            <a class="enl" id="tres"  href="#"> GORRA </a>
                            <a class="enl" id="cuatro" href="#"> TAZA </a>
                            <a class="enl" id="cinco"  href="#"> BOLSO </a>

                            <img src="assets/img/Camiseta.jpg" alt="Camiseta" class="fotos">
                            <img src="assets/img/Abrigo.jpg" alt="Abrigo" class="fotos">
                            <img src="assets/img/Gorra1.jpg" alt="Gorra" class="fotos">
                            <img src="assets/img/Taza2.jpg" alt="Taza" class="fotos">
                            <img src="assets/img/Bolso1.jpg" alt="Bolso" class="fotos">
                        </div>
                    </div>
                </div>
            </section>

            
            <section class="seccion-segundo">
            <div class="newDisenio"> 
                    <form id="creaDisenio" method="POST" action="index.php?c=Productos&f=edit">
                        <div class="infoDisenio">
                        <input type="hidden" name="id" id="id" value="<?php echo $prod->disenio_id; ?>"/>
                        
                            <div>
                                <label class="form"> <b> PRODUCTO: </b>  </label>
                            </div>
                            <div>
                            <select name="producto" id="producto" class="form fi"
                                    style="height: 30px; width: 200px;" onmouseover="mostrarError('producto')"
                                    onmouseout="ocultarError('producto')">   
                                    
                                    <?php  
                                    $camiseta = ""; $abrigo = ""; $gorra = ""; $taza = ""; $bolso = "";
                                    
                                    if($prod->producto == "camiseta"){
                                        $camiseta = 'selected = "selected"';
                                    }else if($prod->producto == "abrigo"){
                                        $abrigo = 'selected = "selected"';
                                    }else if($prod->producto == "gorra"){
                                        $gorra = 'selected = "selected"';
                                    }else if($prod->producto == "taza"){
                                        $taza = 'selected = "selected"';
                                    }else if($prod->producto == "bolso"){
                                        $bolso = 'selected = "selected"';
                                    }
                                    ?>
                                    
                                    <option value="0">Seleccione...</option>
                                    <option value="1" <?php echo $camiseta;?> >Camiseta</option>
                                    <option value="2" <?php echo $abrigo;?> >Abrigo</option>
                                    <option value="3" <?php echo $gorra;?> >Gorra</option>
                                    <option value="4" <?php echo $taza;?> >Taza</option>
                                    <option value="5" <?php echo $bolso;?> >Bolso</option>
                                </select> 
                            </div>


                            <div>
                                <label class="form"> <b> CLIENTE: </b>  </label>
                            </div>
                            <div>
                                <input type="text" value="<?php echo $prod->cliente ?>" name="cliente" id="cliente" class="form fi" placeholder="Ingresar Nombre Cliente"
                                style="height: 20px; width: 200px;" onmouseover="mostrarError('cliente')"
                                    onmouseout="ocultarError('cliente')">
                            </div>


                            <div>
                                <label class="form"> <b> TELÉFONO CLIENTE: </b>  </label>
                            </div>
                            <div>
                                <input type="text" value="<?php echo $prod->telefono ?>" name="telefono" id="telefono" class="form fi" placeholder="Ingresar Teléfono Cliente"
                                style="height: 20px; width: 200px;" onmouseover="mostrarError('telefono')"
                                    onmouseout="ocultarError('telefono')">
                            </div>


                            <div>
                                <label class="form"> <b> COLORES DISPONIBLES: </b> </label>
                            </div>
                            <div id="chbxColor">
                                <?php      
                                    $amarillo = ""; $azul = ""; $rojo = ""; $verde = ""; $morado = ""; $naranja = "";$blanco = "";$negro = "";$gris = "";                            
                                    $colores = explode(" ", $prod->colores);
                                    
                                    foreach ($colores as $p){                                    
                                        if($p == "amarillo"){
                                            $amarillo = 'checked = "checked"';                                        
                                        }else if ($p == "azul"){
                                            $azul = 'checked = "checked"';                                        
                                        }else if ($p == "rojo"){
                                            $rojo = 'checked = "checked"';                                        
                                        }else if ($p == "verde"){
                                            $verde = 'checked = "checked"';                                        
                                        }else if ($p == "morado"){
                                            $morado = 'checked = "checked"';                                        
                                        }else if ($p == "naranja"){
                                            $naranja = 'checked = "checked"';                                        
                                        }else if ($p == "blanco"){
                                            $blanco = 'checked = "checked"';                                        
                                        }else if ($p == "negro"){
                                            $negro = 'checked = "checked"';                                        
                                        }else if ($p == "gris"){
                                            $gris = 'checked = "checked"';                                        
                                        }
                                    }
                                    ?>                                    
                                    <input type="checkbox" value="1" name="colores[]" <?php echo $amarillo; ?>/>Amarillo
                                    <input type="checkbox" value="2" name="colores[]" <?php echo $azul; ?>/>Azul
                                    <input type="checkbox" value="3" name="colores[]" <?php echo $rojo; ?>/>Rojo
                                    <input type="checkbox" value="4" name="colores[]" <?php echo $verde; ?>/>Verde
                                    <input type="checkbox" value="5" name="colores[]" <?php echo $morado; ?>/>Morado
                                    <input type="checkbox" value="6" name="colores[]" <?php echo $naranja; ?>/>Naranja
                                    <input type="checkbox" value="7" name="colores[]" <?php echo $blanco; ?>/>Blanco
                                    <input type="checkbox" value="8" name="colores[]" <?php echo $negro; ?>/>Negro
                                    <input type="checkbox" value="9" name="colores[]" <?php echo $gris; ?>/>Gris
                            </div>

                            <div>
                                <label class="form"> <b> DISEÑO: </b> </label>
                            </div>
                            <div>
                                <select name="disenio" id="disenio" class="form"
                                style="height: 30px; width: 200px;" onmouseover="mostrarError('disenio')"
                                    onmouseout="ocultarError('disenio')">

                                    <?php  
                                    $personalizado = ""; $estandar = ""; $sorpresa = ""; 
                                    
                                    if($prod->disenio == "personalizado"){
                                        $personalizado = 'selected = "selected"';
                                    }else if($prod->disenio == "estándar"){
                                        $estandar = 'selected = "selected"';
                                    }else if($prod->disenio == "sorpresa"){
                                        $sorpresa = 'selected = "selected"';
                                    }
                                    ?>

                                    <option value="0">Seleccione...</option>
                                    <option value="1" <?php echo $personalizado; ?> >Personalizado</option>
                                    <option value="2" <?php echo $estandar; ?> >Estándar</option>
                                    <option value="3" <?php echo $sorpresa; ?> >Sorpresa</option>                        
                                </select> 
                            </div> 


                            <div>
                                <label class="form"> <b> MODELO DE SUBLIMADO: </b>  </label>
                            </div> 
                            <div id="rb" onmouseover="mostrarError('modelo')"
                                onmouseout="ocultarError('modelo')">

                                <input <?php echo (($prod->modelo) == "Realista")? "checked=''":"";?> type="radio" class="ms" id="realista" name="modelo" value="real" /> Realista 
                                <input <?php echo (($prod->modelo) == "Caricatura")? "checked=''":"";?> type="radio" class="ms" id="caricatura" name="modelo" value="cari" /> Caricatura 
                                <input <?php echo (($prod->modelo) == "Anime")? "checked=''":"";?> type="radio" class="ms" id="anime" name="modelo" value="an" /> Anime
                            </div>

                            <div>
                                <label class="form"> <b> OBSERVACIONES: </b> </label>
                            </div>
                            <div>
                                <textarea name="observaciones" id="observaciones" cols="100" rows="3" class="form" placeholder="Ingrese sus Observaciones"
                                onmouseover="mostrarError('observaciones')"
                                onmouseout="ocultarError('observaciones')"> <?php echo $prod->observaciones; ?></textarea>
                            </div> 

                            
                            <div>
                                <input type="submit" class="form botones" value="Actualizar" onclick="if (!confirm('¿Está seguro de Editar el Diseño de Producto?')) return false;" >   
                                <a class="btndisenio" href="index.php?c=Productos&f=view_list" style="background-color: white; border-radius: 30px; 
                                padding: 1px; border-color:2px solid black; text-decoration:none; color:black;"> Cancelar</a>
                            </div>


                        </div> 
                    </form>
                </div>
            </section>
            
        </main>
            

        <?php require_once FOOTER; ?>
    </div>
    <script type="text/javascript">

        var formulario = document.getElementById("creaDisenio").addEventListener('submit', validar);
        
        function validar(event){

            var valido = true;

            var letra = /^[a-z ,.'-]+$/i;
            var telefono = /^[09]+[0-9]{8}$/g;

            //OBTENER ELEMENTOS 
            var producto = document.getElementById("producto");
            var cliente = document.getElementById("cliente");
            var telefono = document.getElementById("telefono");
            var colores = document.getElementsByClassName("colores");
            var disenio = document.getElementById("disenio");
            var modelo = document.getElementsByName("modelo");
            var observaciones = document.getElementById("observaciones");
            
            limpiar();

            //VALIDACIONES
            //PRODUCTO
            if (producto.value === null || producto.value === '0') {
                valido = false;
                mensaje("DEBE SELECCIONAR UN PRODUCTO", producto);
            }

            //CLIENTE
            if (cliente.value === ''){
                valido = false;
                mensaje("DEBE INGRESAR NOMBRE DE CLIENTE" cliente);
            }else if (!letra.test (cliente.value)){
                valido = false;
                mensaje("EL NOMBRE DEBE CONTENER SOLO LETRAS", cliente);
            }else if (cliente.value.length >20){
                valido = false;
                mensaje("EL NOMBRE DEBE CONTENER MÁXIMO 20 CARACTERES", cliente); 
            }
            
            //TELEFONO
            if (telefono.value === "") {
                valido = false;
                mensaje("DEBE INGRESAR TELEFONO", telefono);
            } else if (!telefono.test(telefono.value)) {
                valido = false;
                mensaje("NUMERO DE TELEFONO INCORRECTO", telefono);
            }

            //COLORES
            sel = false; 
            cont=0; 
            for (let i = 0; i < colores.length; i++) {
                if (colores[i].checked) {
                    cont++;
                    sel = true;
                    if (colores[i].value === '1') {
                        alert("DEBE SELECCIONAR MÁS OPCIONES DE COLOR");
                    }
                }
            }
            if (!sel) {
                valido = false;
                mensaje("DEBE SELECCIONAR OPCIONES DE COLOR", colores[0]);
            }
            if (cont<3) {
                valido = false;
                mensaje("DEBE SELECCIONAR AL MENOS 3 COLORES", colores[0]);
            }

            //DISEÑO
            if (disenio.value === null || disenio.value === '0') {
                valido = false;
                mensaje("DEBE SELECCIONAR UNA OPCIÓN DE DISEÑO PARA SU PRODUCTO", disenio);
            }
            //MODELO
            var sel = false;
            for (let i = 0; i < modelo.length; i++) {
                if (modelo[i].checked) {
                    sel = true;
                //  let res=modelo[i].value;
                break;
                }
            }
            if (!sel) {
                valido = false;
                mensaje("DEBE SELECCIONAR UN TIPO DE MODELO PARA PLASMAR EN SU PRODUCTO", modelo[0]);
            }
            //OBSERVACIONES
            if(observaciones.value === ''){
                valido = false;
                mensaje("DEBE INGRESAR SUS OBSERVACIONES",observaciones);
            }else if(observaciones.value.length >100){
                valido = false;
                mensaje("LAS OBSERVACIONES DEBEN CONTENER MÁXIMO 100 CARACTERES", observaciones); 
            }
            if (!valido) {
                event.preventDefault();
            }
        }
        
        function mensaje(cadenaMensaje, elemento) {

            elemento.focus();
            elemento.style.boxShadow = '0 0 5px red, 0 0 5px red';

            if (elemento.id === "rb") {
                var nodoPadre = elemento;
            } else {
                var nodoPadre = elemento.parentNode;
            }
        
            var nodoMensaje = document.createElement("div");
            nodoMensaje.textContent = cadenaMensaje;
            nodoMensaje.setAttribute("class", "mensajeError");
    
            switch (elemento.id) {
                case "producto":
                    nodoMensaje.setAttribute("id", "error-producto");
                    break;
                case "cliente":
                    nodoMensaje.setAttribute("id", "error-cliente");
                    break;
                case "telefono":
                    nodoMensaje.setAttribute("id", "error-telefono");
                    break;
                case "chbxColor":
                    nodoMensaje.setAttribute("id", "error-colores");
                    break;
                case "disenio":
                    nodoMensaje.setAttribute("id", "error-disenio");
                    break;
                case "rb":
                    nodoMensaje.style.marginTop = '-35px';
                    nodoMensaje.setAttribute("id", "error-modelo");
                    break;
                case "observaciones":
                    nodoMensaje.style.marginTop = '-180px';
                    nodoMensaje.style.marginLeft = '330px';
                    nodoMensaje.setAttribute("id", "error-observaciones");
                    break;
                default:
                    break;
            }
            nodoPadre.appendChild(nodoMensaje);
            nodoMensaje.style.visibility = 'hidden';
        }
        function limpiar() {            
            var mensajes = document.querySelectorAll(".mensajeError");
            let a = mensajes.length - 1;
            for (let i = a; i > -1; i--) {
                mensajes[i].remove();
            }

            var boxes = document.querySelectorAll(".box");
            let b = boxes.length - 1;
            for (let i = b; i > -1; i--) {
                boxes[i].style.boxShadow = '0 0 0';
            }
        }
        
        function mostrarError(nombre) {
            if (document.querySelector("#error-" + nombre) !== null) {
                document.querySelector("#error-" + nombre).style.visibility = 'visible';
            }
        }

        function ocultarError(nombre) {
            if (document.querySelector("#error-" + nombre) !== null) {
                document.querySelector("#error-" + nombre).style.visibility = 'hidden';
            }
        }
    </script>
</body>
</html>

