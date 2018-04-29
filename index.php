<!DOCTYPE html>
<html>
    <head>
        <title>Aerolinea</title>
        <meta charset="utf-8">

        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/vendor.bundle.css">
        <link rel="stylesheet" href="assets/css/app.bundle.css">
        <link rel="stylesheet" href="assets/css/theme-d.css">
        <script src="assets/js/vendor.bundle.js"></script>
        <script src="assets/js/app.bundle.js"></script>

        <style>
            .brand-text, #header h1, .card-title{
                font-family: 'Oswald', sans-serif;
            }

        </style>
    </head>
    <body>

        <div id="app_wrapper">
            <header id="app_topnavbar-wrapper">
                <nav role="navigation" class="navbar topnavbar">
                    <div class="nav-wrapper">
                        <ul class="nav navbar-nav pull-left left-menu">
                            <li class="app_menu-open">
                                <a href="javascript:void(0)" data-toggle-state="app_sidebar-left-open" data-key="leftSideBar">
                                    <i class="zmdi zmdi-menu"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav left-menu hidden-xs">
                            <li>
                                <a href="javascript:void(0)" class="nav-link">
                                    <span>Inicio</span>
                                </a>
                            </li>


                        </ul>

                    </div>

                </nav>
            </header>

            <section id="content_outer_wrapper">
                <div id="content_wrapper" class="card-overlay">
                    <div id="header_wrapper" class="header-md">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <header id="header">
                                        <h1>Buscar Vuelos</h1>
                                        <small></small>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content" class="container">
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="card">

                                        <div class="card" style="box-shadow: none;">
                                            <header class="card-heading">
                                                <h2 class="card-title">Ingresa tu origen, destino y la fecha del vuelo.</h2>
                                            </header>
                                            <form id="form_consul">
                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <div class="form-group is-empty">
                                                                <div class="input-group"  id="variable_filtro" style="    width: 100%;">
                                                                    <label class="control-label">Origen</label>
                                                                    <select name="ciudad_origen" id="ciudad_origen" class="select form-control">
                                                                        <option value="">Ingresa una ciudad</option>
                                                                    </select>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <div class="form-group is-empty">
                                                                <div class="input-group" style="width: 100%">
                                                                    <label for="obs" class="control-label">Destino</label>
                                                                    <select name="ciudad_destino" id="ciudad_destino" class="select form-control">
                                                                        <option value="">Ciudad de Destino</option>
                                                                    </select>                                                                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <div class="form-group is-empty">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>

                                                                    <label class="control-label">Fecha Desde</label>
                                                                    <input type="text" class="form-control datepicker" name="start_date" id="start_date" type="date" placeholder="Desde...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <div class="form-group is-empty">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>

                                                                    <label class="control-label">Fecha Hasta</label>
                                                                    <input type="text" class="form-control datepicker" name="end_date" id="end_date" type="date" placeholder="Desde...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group is-empty">
                                                                <div class="input-group pull-right">
                                                                    <input type="hidden" name="buscador" value="buscador"> 
                                                                    <button type="button" id="btn_consultar" class="btn btn-tumblr">
                                                                        <i class="zmdi zmdi-search"></i> Buscar<div class="ripple-container"></div>
                                                                    </button>    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>


                                        </div>

                                        <div style="display: none" id="loader" class="card-body loader-demo">
                                            <div class="loader loader-pink"></div>
                                        </div>
                                        <div style="display: none" class="card-body" id="respuesta_consulta">

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

            </section>

            <!--            <footer id="footer_wrapper">
                            <div class="footer-content">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <h6 class="card-title">Vuelos económicos</h6>
                                        <p>En nuestro sitio web puedes encontrar una amplia variedad de tiquetes aéreos y vuelos económicos, paquetes turísticos
                                            y mucho más. Puedes elegir tu destino favorito y comenzar a planificar tus tan esperadas vacaciones ahora. 
                                            Además puedes consultar disponibilidad de vuelos de forma rápida y sencilla,
                                            para poder encontrar la opción que más se ajuste a tus necesidades. 
                                            Tenemos ofertas a miles de destinos. Reserva ahora tu viaje.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-2">
            
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <h6 class="card-title">Ofertas exclusivas en tu email</h6>
                                        <p>Recibirás emails promocionales de Despegar.com, no compartiremos tus datos personales con terceros. Para más información consulta las políticas de privacidad.</p>
                                        <div class="form-group is-empty">
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="footerEmail" placeholder="Ingresa tu correo electrónico...">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-white btn-fab animate-fab btn-fab-sm">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row copy-wrapper">
                                    <div class="col-xs-8">
                                        <p class="copy">© Copyright <time class="year">2018</time> </p>
                                    </div>
                                    <div class="col-xs-4">
                                        <ul class="social">
                                            <li>
                                                <a href="javascript:void(0)"><i class="zmdi zmdi-facebook-box"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="zmdi zmdi-instagram"></i> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="zmdi zmdi-twitter-box"></i> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="zmdi zmdi-linkedin"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </footer>-->

        </div>

        <div class="modal fade" id="modal_detalle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title card-title" id="exampleModalLabel">RESERVA DE VUELO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="respuesta_detalle">

                    </div>

                </div>
            </div>
        </div>



        <script>
            $(document).ready(function () {


                var select = $('#ciudad_origen');


                $.ajax({
                    type: "GET",
                    url: "/testBackend/consultas.php?mostrar_ciudad",
                    success: function (resulta)
                    {
                        var result = jQuery.parseJSON(resulta);
                        //  console.log(result);
                        var output = "<option>Ciudad de Origen</option>";
                        for (var i in result)
                        {
                            output += "<option value='" + result[i].id + "'>" + result[i].nombre + "</option>";
                        }
                        output += "";
                        select.html(output);

                    }
                });


                $('#ciudad_origen').change(function () {


                    $('#ciudad_destino').html("");


                    var id_o = $(this).val();

                    $.ajax({
                        type: "GET",
                        url: "/testBackend/consultas.php?mostrar_ciudad&id_o=" + id_o,
                        success: function (resulta)
                        {
                            var result = jQuery.parseJSON(resulta);
                            //  console.log(result);
                            var output = "";
                            for (var i in result)
                            {
                                output += "<option value='" + result[i].id + "'>" + result[i].nombre + "</option>";
                            }
                            output += "";
                            $('#ciudad_destino').append(output);

                        }
                    });


                });

                $('#btn_consultar').click(function () {

                    $('#loader').show();

                    $.ajax({
                        type: "POST",
                        url: "/testBackend/consultas.php",
                        data: $("#form_consul").serialize(),
                        success: function (data)
                        {
                            $('#loader').hide();
                            $('#respuesta_consulta').show();
                            $('#respuesta_consulta').html(data);
                        }
                    });


                });






            });

        </script>




    </body>
</html>
