@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="ibox ">
          <div class="ibox-head">
            Detalles
          </div>
          <div class="ibox-body">
            <div class="card mb-4">
                <div class="card-body ">
                  <div class="row mb-2">
                      <div class="col-12 text-muted">FOLIO:</div>
                      <div class="col-12">{{$property->folio}}</div>
                  </div>
                  <div class="row mb-2">
                      <div class="col-12 text-muted">DIRECCION:</div>
                      <div class="col-12">{{$property->address}}</div>
                  </div>
                  <div class="row mb-2">
                      <div class="col-12 text-muted">COMUNA:</div>
                      <div class="col-12">{{$property->comuna->nombre}}</div>
                  </div>
                  <div class="row mb-2">
                      <div class="col-12 text-muted">TIPO:</div>
                      <div class="col-12">{{$property->tipo}}</div>
                  </div>

                </div>

              </div>
          </div>
        </div>
        <div class="ibox ">
          <div class="ibox-head">
Documentos
          </div>
          <div class="ibox-body">
            <button class="btn btn-success" style="margin-bottom:20px">Nuevo documento</button>
            <ul class="list-group list-group-bordered">
              @foreach ($property->docs as $doc)
                <li class="list-group-item flexbox"><a target="blank_" href="{{url('/storage/doc/'.$doc->link)}}">{{$doc->link}}</a>
                    <span class="badge badge-danger"><i class="ti-trash"></i></span>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-6 ">
        <div class="row ">
          @foreach ($property->images as $image)
          <div class="col-md-4">
            <img src="{{url('/storage/img/1.jpg')}}"/>
          </div>
          @endforeach
        </div>
          <div class="row pm-4" style="padding-top:20px" >
            <div class="col-md-4">
              <button class="btn btn-success">Nueva imagen</button>
            </div>
        </div>
      </div>
  </div>


@endsection

@section('css') {{-- stylesheet para esta vista --}}

@endsection

@section('scripts')

@endsection
