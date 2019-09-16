@extends('front.template')

@section('pageTitle', 'Materia Gris ')

@section('mainContent')

<div class="home">
  <div class="row">
    <div id="div-img" class="col-12">

        <img class="img-home" src="/images/home.jpg" alt="home-materia">

        <div class="bg-text">
            <h3>UN NUEVO CONCEPTO DE ESPACIO DE TRABAJO LLEGA AL OESTE</h3>
            <br>
            <p>COWORKING · OFICINAS FLEXIBLES · EMPRESAS · FACILITY SERVICE</p>
            <br>
            <button class="bg-button" type="button" name="button"> Vení a conocernos</button>
        </div>

    </div>
  </div>
</div>
<br>
<br>
<div class=" container-planes row">
    <div class="container-plan col-lg-3 col-md-6 col-xs-12">
      <img src="/images/plan1.jpg" alt="own office" style="width:100%">
      <h3>HOT DESK</h3>
      <p>Trabaja desde el Hot Desk de cualquiera de los espacios de la MQCo. hasta 10 jornadas por mes: incluye uso de salas y full access a todos los eventos de la Comunidad.</p>
      <br>
      <br>
      <a class="btn-consultar" href="">Consultar</a>
    </div>

    <div class="container-plan col-lg-3 col-md-6 col-xs-12">
      <img src="/images/plan1.jpg" alt="own office" style="width:100%">
      <h3>SURF DESK</h3>
      <p>Tené tu puesto fijo en un ambiente colaborativo y encontrá la sinergia que tu emprendimiento necesita. </p>
      <br>
      <a class="btn-consultar" href="">Consultar</a>
    </div>

    <div class="container-plan col-lg-3 col-md-6 col-xs-12">
      <img src="/images/plan1.jpg" alt="own office" style="width:100%">
      <h3>FIX DESK</h3>
      <p>Este puesto dedicado está pensado para hacer crecer tu negocio. Llega con tu equipo, conéctate y empezá a producir! </p>
      <br>
      <a class="btn-consultar" href="">Consultar</a>
    </div>

    <div class="container-plan col-lg-3 col-md-6 col-xs-12">
      <img src="/images/plan1.jpg" alt="own office" style="width:100%">
      <h3>OWN OFFICE</h3>
      <p>Oficinas privadas a la medida de tu equipo. La combinación perfecta entre privacidad y sinergia. </p>
      <br>
      <a class="btn-consultar" href="">Consultar</a>
    </div>


</div>
<br>
    <div class="servicios row">
      <div class="col-12">
        <h1>SERVICIOS</h1>
      </div>

    </div>
<br>


<div class=" container-services row">
    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/papelera.png" alt="own office" style="width:15%">
        <h3>INSUMOS DE OFICINA</h3>
          <p>Trabaja desde el Hot Desk de cualquiera de los espacios de la MQCo. hasta 10 jornadas por mes: incluye uso de salas y full access a todos los eventos de la Comunidad.</p>
          <br>
          <br>
    </div>

    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/wifi.png" alt="own office" style="width:25%">
        <h3>WIFI</h3>
        <p>Tené tu puesto fijo en un ambiente colaborativo y encontrá la sinergia que tu emprendimiento necesita. </p>
        <br>
    </div>

    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/proyector.png" alt="own office" style="width:25%">
        <h3>PROYECTOR</h3>
          <p>Este puesto dedicado está pensado para hacer crecer tu negocio. Llega con tu equipo, conéctate y empezá a producir! </p>
        <br>
    </div>

    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/smart.png" alt="own office" style="width:25%">
        <h3>SMART TV</h3>
          <p>Oficinas privadas a la medida de tu equipo. La combinación perfecta entre privacidad y sinergia. </p>
        <br>
    </div>

    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/cafe.png" alt="own office" style="width:25%">
        <h3>CAFE</h3>
          <p>Este puesto dedicado está pensado para hacer crecer tu negocio. Llega con tu equipo, conéctate y empezá a producir! </p>
        <br>
    </div>

    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/after.png" alt="own office" style="width:25%">
        <h3>AFTER OFFICE</h3>
          <p>Oficinas privadas a la medida de tu equipo. La combinación perfecta entre privacidad y sinergia. </p>
        <br>
    </div>
    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/espacio.png" alt="own office" style="width:25%">
        <h3>ESPACIOS DE TRABAJO</h3>
          <p>Oficinas privadas a la medida de tu equipo. La combinación perfecta entre privacidad y sinergia. </p>
        <br>
    </div>
    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/eventos.png" alt="own office" style="width:25%">
        <h3>EVENTOS</h3>
          <p>Oficinas privadas a la medida de tu equipo. La combinación perfecta entre privacidad y sinergia. </p>
        <br>
    </div>
    <div class="container-service col-lg-3 col-md-6 col-xs-12">
      <img src="/images/salas.png" alt="own office" style="width:25%">
        <h3>SALA DE REUNIONES</h3>
          <p>Oficinas privadas a la medida de tu equipo. La combinación perfecta entre privacidad y sinergia. </p>
        <br>
    </div>

</div>

<script src="/js/navbar.js"></script>
@endsection
