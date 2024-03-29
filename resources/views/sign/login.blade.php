@extends('sign.master')

  {{-- lang html tag --}}

  @section('lang'){{$lang}}@stop

  {{-- Title Head --}}

  @section('title'){{$title}}@stop

  {{-- Metatag Head --}}

  @section('Content-Type','text/html; charset=UTF-8')
  @section('x-ua-compatible','ie=edge')
  @section('keywords','')
  @section('description','')
  @section('viewport','width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1')
  @section('idiomaLang','es-mx')

  <!--Menu Transparente
  @section('menuCSS','css/menu/menu.css?v='.cache("js_version_number").'')
  -->

  {{-- Angular Controller --}}

  @section('controller','signin')

  {{-- Body --}}

  @section('content')


    <!--Main layout-->
    <main>
    
        <section id="signin">

          <div class="row">

            <div class="col-md-3"></div>

            <div class="col-md-6">

              <div class="card">

                <div class="card-image resaltar">
                  <img class="logoCompany text-center" src="img/logo-example.png">
                </div>

                <div class="card-content">

                  <div class="col-md-2"></div>

                  <div class="col-md-8 resaltar">

                    <p class="resaltar">Bienvenido a Company Name por favor ingrese su usuario y contraseña</p>

                    <div class="input-group resaltar">
                      <span class="input-group-addon "><span class="fa fa-user"></span></span>
                      <input id="correo" type="text" placeholder="Correo Electrónico" class="form-control bootstrap-normal-input" aria-label="Amount (to the nearest dollar)">
                    </div>

                    <div class="input-group resaltar">
                      <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                      <input id="contPass" type="password" placeholder="Contraseña" class="form-control bootstrap-normal-input" aria-label="Amount (to the nearest dollar)">
                    </div>

                    <button ng-click="send()" id="ingresarButton" style="margin-top: 40px; margin-bottom: 80px;" class="btn waves-effect waves-light resaltar" type="submit" name="action">Ingresar
                      <i class="fa fa-sign-in" aria-hidden="true"></i>
                    </button>
                    
                  </div>

                </div>

                <div class="col-md-2"></div>

                <div class="wave"></div>

              </div>

            </div>

            <div class="col-md-3"></div>

          </div>

        </section>

    </main>
    <!--Main layout-->

    @stop
