<!DOCTYPE html>
<?php
    include_once("dataHandler.php");
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pines ITA</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/styles.css" as="style">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <header>
        <div align="center" class="logo" id="logo">
            <img src="img/pinlogo.png" alt="" width="5%" height= "5%">
        </div>
    </header>

    <div class="nav-bg">
        <nav class="navegacion_principal contenedor">
            <a href="#logo">Inicio</a>
            <a href="#servicio__compra">Catalogo</a>
            <a href="#boton__contactar">Servicios</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </div>
    
    <section class="pines">
        <div class="pines-contenido">
            <h2>Dale estilo a tu ropa</h2>
            
            <div class="ubicacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" width="72" height="72" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="18" y1="6" x2="18" y2="6.01" />
                    <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                    <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                    <line x1="9" y1="4" x2="9" y2="17" />
                    <line x1="15" y1="15" x2="15" y2="20" />
                  </svg>
                <p>Aguascalientes, Aguascalientes</p>
            </div>

            <a class="boton" id="boton__contactar" href="#">Contactar</a>
        </div>
    </section>
   
    <main class="contenedor sombra main">
        <h2 id="nuestros_servicios">Nuestros servicios</h2>
        
        <div class="servicios">
            <section class="servicio">
                <h3>Diseños de Pines</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pinned" width="72" height="72" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 4v6l-2 4v2h10v-2l-2 -4v-6" />
                        <line x1="12" y1="16" x2="12" y2="21" />
                        <line x1="8" y1="4" x2="16" y2="4" />
                      </svg>
                </div>
                <p>Fusce eleifend neque gravida augue viverra facilisis. Sed sit amet auctor tellus, eget feugiat diam. Vivamus nec aliquam est</p>
            </section>
            
            <section class="servicio" id="servicio__cotizacion">
                <h3>Cotizaciones</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="72" height="72" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="12" r="9" />
                        <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                        <path d="M12 6v2m0 8v2" />
                      </svg>
                </div>
                <p>Fusce eleifend neque gravida augue viverra facilisis. Sed sit amet auctor tellus, eget feugiat diam. Vivamus nec aliquam est.</p>
            </section>
            
            <section class="servicio" id="servicio__compra">
                <h3>Compra</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="72" height="72" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <rect x="3" y="5" width="18" height="14" rx="3" />
                        <line x1="3" y1="10" x2="21" y2="10" />
                        <line x1="7" y1="15" x2="7.01" y2="15" />
                        <line x1="11" y1="15" x2="13" y2="15" />
                      </svg>
                </div>
                <p>Fusce eleifend neque gravida augue viverra facilisis. Sed sit amet auctor tellus, eget feugiat diam. Vivamus nec aliquam est.</p>
            </section>
        </div>
    </main>
    
    <section class="contenedor sombra">
        <h2>Catalogo</h2>

        <div class="catalogo" id="catalogo">
            <?php
                $dataHandler = new dataHandler;
                $dataHandler->init();
                $dataHandler->fetch_products();
                $dataHandler->print_products();
            ?>
        </div>        
    </section>

    <!--
        Popup para comprar algún pin del catalogo
    -->

    <div class="overlay" id="overlay">
        <div class="popup" id="popup"></div>
            <form class="compra">
                <a class="btn-cerrar-popup" id="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                <fieldset>
                    <legend>Compra</legend>
                    <div class="contenedor-campos-compra">
                        <div class="label">
                            <label class="nombre-pin">PIN</label>
                            <label id="nombre-pin">prueba 1</label>
                        </div>
                        
                        <div class="label">
                            <label class="precio-pin">Precio</label>
                            <label id="precio-pin">prueba 2</label>
                        </div>
                        
                        <div class="label">
                            <label class="descripcion-pin">Descripción</label>
                            <label id="descripcion-pin">prueba 3</label>
                        </div>
                        <div class="label">
                            <label class="cantidadpin">Cantidad</label>
                            <input id="cantidad-pin" type="text" placeholder="0">
                        </div>
                    </div>
                    <div class="alinear-derecha flex">
                        <button id="abrir__datos" class="btn__comprar boton w-sm-100">Comprar</button>
                    </div>
                </fieldset>
            </form>
    </div>

    <!--
        Formulario para datos del cliente al momento de hacer la compra.
    -->

    <div class="overlay" id="overlay__datos">
        <div class="popup" id="popup1"></div>
            <form action="" class="compra">
                <a class="btn-cerrar-popup" id="btn-cerrar-popup1"><i class="fas fa-times"></i></a>
                <fieldset>
                    <legend>datos</legend>
                    <div class="contenedor-campos-datos">
                        <div class="dato">
                            <label>Nombre</label>
                            <input class="input-text" id="nombre__datos" placeholder="Tu nombre">
                        </div>
                        
                        <div class="dato">
                            <label>Correo</label>
                            <input class="input-text" id="email__datos" placeholder="correo@correo">
                        </div>

                        <div class="dato">
                            <label>Celular</label>
                            <input class="input-text" id="celular__datos" placeholder="+52-000-000-00-00">
                        </div>

                        <div class="dato">
                            <label>Dirección</label>
                            <textarea class="input-text" id="mensaje__datos" placeholder="Dirección"></textarea>
                        </div>
                    </div>
                
                    <div class="alinear-derecha flex">
                        <button id="abrir__API" class="btn__comprar boton w-sm-100">Comprar</button>
                    </div>
                </fieldset>
            </form>
    </div>

    <!--
        Formulario para que puedan enviar correos con sugerencias, problemas u otras razones.
    -->
    <section class="contenedor sombra conta">
        <h2 id="contacto">Contacto</h2>
        <form class="formulario" name="formulario-contacto" netlify>
            <fieldset>
                <legend>Contáctanos para más información</legend>

                <div class="contenedor-campos">
                    <div class="campo">
                        <label>Nombre</label>
                        <input name="nombre" id="nombre" placeholder="Tu nombre">
                    </div>
                    
                    <div class="campo">
                        <label>Correo</label>
                        <input name="email" id="email" placeholder="correo@correo">
                    </div>
                    
                    <div class="campo">
                        <label>Mensaje</label>
                        <textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                    </div>
                </div>
            
                <div class="alinear-derecha flex">
                    <input class="boton w-sm-100" type="submit" value="Enviar">
                </div>
            </fieldset>
        </form>
    </section>
   
    <footer class="footer">
        <p>Todos los derechos reservados®</p>
    </footer>
    <script src="popup.js"></script>
</body>
</html>