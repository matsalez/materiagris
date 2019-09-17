@extends('front.template')

@section('pageTitle', 'Materia Gris | CoWork ')

@section('mainContent')

<div class="home">
  <div class="row">
    <div id="div-img" class="col-12">
        <img class="img-home" src="/images/home2.jpg" alt="home-materia">

        <div class="bg-text">
            <h3>UN NUEVO CONCEPTO DE ESPACIO DE TRABAJO LLEGA AL OESTE</h3>
            <br>
            <p>COWORKING · OFICINAS FLEXIBLES · EMPRESAS · FACILITY SERVICE</p>
            <br>
            <a class="bg-button" type="button" name="button"> Vení a conocernos</a>
        </div>

    </div>
  </div>
</div>
<br>
<br>
<div id="espacios" class=" container-planes row">
    <div class="container-plan col-lg-3 col-md-6 col-xs-12">
      <img src="/images/plan1.jpg" alt="own office" style="width:100%">
      <h3>HOT DESK</h3>
      <p>Trabaja desde el Hot Desk de cualquiera de los espacios de la MQCo. hasta 10 jornadas por mes: incluye uso de salas y full access a todos los eventos de la Comunidad.</p>
      <br>
      <br>
      <a class="btn-consultar" href="">CONSULTAR</a>
    </div>

    <div class="container-plan col-lg-3 col-md-6 col-xs-12">
      <img src="/images/plan1.jpg" alt="own office" style="width:100%">
      <h3>SURF DESK</h3>
      <p>Tené tu puesto fijo en un ambiente colaborativo y encontrá la sinergia que tu emprendimiento necesita. </p>
      <br>
      <a class="btn-consultar" href="">CONSULTAR</a>
    </div>

    <div class="container-plan col-lg-3 col-md-6 col-xs-12">
      <img src="/images/plan1.jpg" alt="own office" style="width:100%">
      <h3>FIX DESK</h3>
      <p>Este puesto dedicado está pensado para hacer crecer tu negocio. Llega con tu equipo, conéctate y empezá a producir! </p>
      <br>
      <a class="btn-consultar" href="">CONSULTAR</a>
    </div>

    <div class="container-plan col-lg-3 col-md-6 col-xs-12">
      <img src="/images/plan1.jpg" alt="own office" style="width:100%">
      <h3>OWN OFFICE</h3>
      <p>Oficinas privadas a la medida de tu equipo. La combinación perfecta entre privacidad y sinergia. </p>
      <br>
      <a class="btn-consultar" href="">CONSULTAR</a>
    </div>


</div>
<br>
    <div id="servicios" class="servicios row">
      <div class="col-12">
        <h1> SERVICIOS </h1>
      </div>

    </div>
<br>


<div class=" container-services row">
    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/papelera.png" alt="own office" style="width:15%">
        <h3>INSUMOS DE OFICINA</h3>

    </div>

    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/wifi.png" alt="own office" style="width:25%">
        <h3>WIFI</h3>

        <br>
    </div>

    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/proyector.png" alt="own office" style="width:25%">
        <h3>PROYECTOR</h3>

        <br>
    </div>

    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/smart.png" alt="own office" style="width:25%">
        <h3>SMART TV</h3>
        <br>
    </div>

    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/cafe.png" alt="own office" style="width:25%">
        <h3>CAFE</h3>
        <br>
    </div>

    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/after.png" alt="own office" style="width:25%">
        <h3>AFTER OFFICE</h3>
        <br>
    </div>
    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/espacio.png" alt="own office" style="width:25%">
        <h3>ESPACIOS DE TRABAJO</h3>

    </div>
    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/eventos.png" alt="own office" style="width:25%">
        <h3>EVENTOS</h3>

        <br>
    </div>
    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/salas.png" alt="own office" style="width:25%">
        <h3>SALA DE REUNIONES</h3>

        <br>
    </div>
</div>
<br>
<br>
<br>
<div id="contacto" class="base-form">
  <!-- start base texts -->
  <div class="base-textos">
    <div class="row">
      <div class="col-6">
        <div class="titulo-contacto">
            <h3>CONTACTO</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <div class="texto-contacto">
            <p>Comunicate con nosotros por whatsapp, e-mail, redes sociales o completando el siguiente formulario para consultas y presupuestos mayoristas. Dentro de las 24 hs. nos estaremos comunicando con vos.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <div class="iconos-contacto">
            <i class="fab fa-instagram"> materiagris </i>
          <br>
          <i class="fab fa-whatsapp"> 1130068331</i>
          <br>
          <i class="far fa-envelope"> mgcowork@gmail.com.ar</i>
          <br>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <div class="sucursales-contacto">
            <span>Nuestras Oficinas</span>
            <br>
            <br>
            <span>Almafuerte 2344</span>
            <br>
            <span>Francisco Alvarez</span>
            <br>
            <span>Buenos Aires</span>
            <br>

          <br>
        </div>
      </div>
    </div>
    <br>


  </div>
  <!-- end base texts -->

  <!-- start base inputs -->
  <div id="formulario" class="base-inputs">
    <div class="row">
      <div class="col-lg-6">
        <form class="contact" action="" method="post">

          <input id="input-sm" type="text" name="nombre" value="NOMBRE">
          <br>
          <br>
          <input id="input-sm" type="email" name="email" value="EMAIL">
          <br>
          <br>
          <input id="input-md" type="text" name="mensaje" value="MENSAJE">
          <br>
          <br>
          <button id="button-form" type="submit" name="button">ENVIAR</button>
          <br>
          <br>
        </form>
      </div>
    </div>
  </div>
  <!-- end base inputs -->
</div>

<!-- boton whatsapp -->
<div class="btn-whatsapp">
  <a id="btn-wh" href="https://api.whatsapp.com/send?phone=5491130494150&text=Me%20contacto%20para%20realizar%20un%20pedido" target="_blank">
    <i id="btn-icon" class="fab fa-whatsapp"></i>
  </a>
</div>


<script src="/js/navbar.js"></script>
@endsection
