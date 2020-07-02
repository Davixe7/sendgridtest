@extends('layouts.app')
@section('content')
<div class="container card-container">
  <h1>Registrar nuevo comercio</h1>
  <div class="row">
    <div class="col-md-6">
      <form action="">
        <span class="form-subtitle">Identidad del comercio</span>
        <div class="form-section">
          <div class="row">
            <div class="col-md-5">
              <profile-picture-uploader/>
            </div>
            <div class="col-md-7">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="#">Nombre</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="#">NIT</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="#">Descripción</label>
                <textarea rows="3" class="form-control"></textarea>
              </div>
            </div>
          </div>
        </div>
        
        <span class="form-subtitle">Información de contacto</span>
        <div class="form-section">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="#">Teléfono 1</label>
                <input type="tel" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="#">Teléfono 2</label>
                <input type="tel" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="#">Email</label>
            <input type="email" class="form-control">
          </div>
        </div>
        
        <span class="form-subtitle">Ubicación</span>
        <div class="form-section">
          <div id="map"></div>
          <div class="form-group">
            <label for="#">Dirección</label>
            <input type="text" class="form-control">
          </div>
        </div>
        
        <div class="text-right">
          <button class="btn btn-primary">Registrar</button>
        </div>
      </form>
    </div>
    <div class="col-md-6" style="background: url('/img/mapa.jpg'); background-size: 520px 520px;"></div>
    <div class="col-md-6 gallery-col d-none">
      <div class="button-group">
        <button class="btn btn-secondary">Ubicación</button>
        <button class="btn btn-secondary">Galería</button>
      </div>
      <div class="toggleable-section">
        <div class="row">
          <div class="col-md-6">
            <profile-picture-uploader>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<style>
  .form-section {
    margin-bottom: 15px;
  }
  .form-subtitle {
    display: block;
    font-weight: 700;
    font-size: 1em;
    color: gray;
    margin: 15px 0;
  }
  .gallery-col {}
  .gallery-col .button-group {
    margin-bottom: 10px;
  }
</style>
@endsection