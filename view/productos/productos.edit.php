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
        #newDisenio{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            background-color: #2B2729;
            width: 450px;
            height: 540px;
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
            color: black;
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
                            <div>
                                <label class="form"> <b> PRODUCTO: </b>  </label>
                            </div>
                            <div>
                            <select name="productos" id="cbxProductos" class="form fi"
                                    style="height: 30px; width: 200px;" onmouseover="mostrarError('producto')"
                                    onmouseout="ocultarError('producto')">   
                                    
                                    <?php  
                                    $selected[]="";
                                    for ($i = 1; $i < 6; $i++){
                                        $selected[$i] = "";
                                        if($prod->producto == $i){
                                            $selected[$i] = 'selected="selected"';
                                        }
                                    }
                                    ?>
                                    
                                    <option value="0">Seleccione...</option>
                                    <option value="1" <?php echo $selected[1];?> >Camiseta</option>
                                    <option value="2" <?php echo $selected[2];?> >Abrigo</option>
                                    <option value="3" <?php echo $selected[3];?> >Gorra</option>
                                    <option value="4" <?php echo $selected[4];?> >Taza</option>
                                    <option value="5" <?php echo $selected[5];?> >Bolso</option>
                                </select> 
                            </div>


                            <div>
                                <label class="form"> <b> CLIENTE: </b>  </label>
                            </div>
                            <div>
                                <input type="text" name="cliente" id="txtCliente" class="form fi" placeholder="Ingresar Nombre Cliente"
                                style="height: 20px; width: 200px;" onmouseover="mostrarError('cliente')"
                                    onmouseout="ocultarError('cliente')">
                            </div>


                            <div>
                                <label class="form"> <b> TELÉFONO CLIENTE: </b>  </label>
                            </div>
                            <div>
                                <input type="text" name="telefono" id="txtTelefono" class="form fi" placeholder="Ingresar Teléfono Cliente"
                                style="height: 20px; width: 200px;" onmouseover="mostrarError('telefono')"
                                    onmouseout="ocultarError('telefono')">
                            </div>


                            <div>
                                <label class="form"> <b> COLORES DISPONIBLES: </b> </label>
                            </div>
                            <div id="chbxColor">
                                Amarillo <input type="checkbox" name="colores" value="1" id="amarillo" class="form color">
                                Azul <input type="checkbox" name="colores" value="2" id="azul" class="form color">
                                Rojo <input type="checkbox" name="colores" value="3" id="rojo" class="form color"> 
                                Verde <input type="checkbox" name="colores" value="4" id="verde" class="form color">
                                Morado <input type="checkbox" name="colores" value="5" id="morado" class="form color">
                                Naranja <input type="checkbox" name="colores" value="6" id="naranja" class="form color"> 
                                Blanco <input type="checkbox" name="colores" value="7" id="blanco" class="form color">
                                Negro <input type="checkbox" name="colores" value="8" id="negro" class="form color">
                                Gris <input type="checkbox" name="colores" value="9" id="gris" class="form color"> 
                            </div>


                            <div>
                                <label class="form"> <b> DISEÑO: </b> </label>
                            </div>
                            <div>
                                <select name="diseño" id="cbxDisenio" class="form"
                                style="height: 30px; width: 200px;" onmouseover="mostrarError('disenio')"
                                    onmouseout="ocultarError('disenio')">

                                    <?php  
                                    $selected[]="";
                                    for ($i = 1; $i < 4; $i++){
                                        $selected[$i] = "";
                                        if($prod->disenio == $i){
                                            $selected[$i] = 'selected="selected"';
                                        }
                                    }
                                    ?>

                                    <option value="0">Seleccione...</option>
                                    <option value="1" <?php echo $selected[1]; ?> >Personalizado</option>
                                    <option value="2" <?php echo $selected[2]; ?> >Estándar</option>
                                    <option value="3" <?php echo $selected[3]; ?> >Sorpresa</option>                        
                                </select> 
                            </div> 


                            <div>
                                <label class="form"> <b> MODELO DE SUBLIMADO: </b>  </label>
                            </div> 
                            <div id="rb" onmouseover="mostrarError('modelo')"
                                onmouseout="ocultarError('modelo')">

                                <?php      
                                    $realista = ""; $caricatura = ""; $anime = "";                            
                                    if($prod->modelo == "realista"){
                                        $realista = 'checked';                                        
                                    }else if ($prod->modelo == "caricatura"){
                                        $caricatura = 'checked';                                        
                                    }else if ($prod->modelo == "anime"){
                                        $anime = 'checked';                                        
                                    }
                                    ?>


                                <input type="radio" class="ms" id="realista" name="modelo" value="real" <?php echo $realista; ?>/> Realista 
                                <input type="radio" class="ms" id="caricatura" name="modelo" value="cari"<?php echo $caricatura; ?> /> Caricatura 
                                <input type="radio" class="ms" id="anime" name="modelo" value="an" <?php echo $anime; ?>/> Anime
                            </div>

                            <div>
                                <label class="form"> <b> OBSERVACIONES: </b> </label>
                            </div>
                            <div>
                                <textarea name="observaciones" id="obs" cols="100" rows="3" class="form" placeholder="Ingrese sus Observaciones"
                                onmouseover="mostrarError('observaciones')"
                                    onmouseout="ocultarError('observaciones')"><?php echo $prod->observaciones; ?></textarea>
                            </div> 

                            
                            <div>
                                <input type="submit" class="form botones" value="Actualizar" onclick="if (!confirm('¿Está seguro de Editar el Diseño de Producto?')) return false;" >   
                                <a class="btndisenio" href="index.php?c=Productos&f=view_list">CANCELAR</a>
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
    
            //OBTENER ELEMENTOS 
            var cbxProducto = document.getElementById("cbxProductos");
            var txtCliente = document.getElementById("txtCliente");
            var cbxDisenio = document.getElementById("cbxDisenio");
            var rbModelo = document.getElementsByName("modelo");
    
            var letra = /^[a-z ,.'-]+$/i;
            var telefono = /^[09]+[0-9]{8}$/g;
    
            depurar();

            //VALIDACIONES
            //PRODUCTO
            if (cbxProducto.value === null || cbxProducto.value === '0') {
                valido = false;
                mensaje("DEBE SELECCIONAR UN PRODUCTO", cbxProducto);
            }
            //CLIENTE
            if(txtCliente.value === ''){
                valido = false;
                mensaje("DEBE INGRESAR SU NOMBRE",txtCliente);
            }else if (!letra.test(txtCliente.value)){
                valido = false;
                mensaje("EL NOMBRE DEBE CONTENER SOLO LETRAS", txtCliente);
            }else if(txtCliente.value.length >20){
                valido = false;
                mensaje("EL NOMBRE DEBE CONTENER MÁXIMO 20 CARACTERES", txtCliente); 
            }
            
            //DISEÑO
            if (cbxDisenio.value === null || cbxDisenio.value === '0') {
                valido = false;
                mensaje("DEBE SELECCIONAR UNA OPCIÓN DE DISEÑO PARA SU PRODUCTO", cbxDisenio);
            }
            //MODELO
            var sel = false;
            for (let i = 0; i < rbModelo.length; i++) {
                if (rbModelo[i].checked) {
                    sel = true;
                //  let res=rbModelo[i].value;
                break;
                }
            }
            if (!sel) {
                valido = false;
                mensaje("DEBE SELECCIONAR UN TIPO DE MODELO PARA PLASMAR EN SU PRODUCTO", rbModelo[0]);
            }
            
            return valido;
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
                case "cbxProducto":
                    nodoMensaje.setAttribute("id", "error-producto");
                    break;
                case "txtCliente":
                    nodoMensaje.setAttribute("id", "error-cliente");
                    break;
                case "cbxDisenio":
                    nodoMensaje.setAttribute("id", "error-disenio");
                    break;
                case "modelo":
                    nodoMensaje.style.marginTop = '-35px';
                    nodoMensaje.setAttribute("id", "error-modelo");
                    break;
                default:
                    break;
            }

            nodoPadre.appendChild(nodoMensaje);
            nodoMensaje.style.visibility = 'hidden';
        }

        function depurar() {            
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

