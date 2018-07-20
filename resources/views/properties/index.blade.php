@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="ibox ">
              <div class="ibox-head">
                  <div class="ibox-title">Propiedades</div>
                  <div class="ibox-tools">

                  </div>
              </div>
              <div class="ibox-body">

                  <div class="">
                      <table id="students-table" class="table table-hover">
                          <thead class="thead-default thead-lg">
                              <tr>

                                  <th width="30%">Folio</th>
                                  <th width="20%">Dirección</th>
                                  <th width="20%">Comuna</th>
                                  <th width="20%"></th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach (App\Property::all() as $property)
                              <tr>
                                <td >{{$property->folio}}</td>
                                <td >{{$property->address}}</td>
                                <td >{{$property->comuna->nombre or '--'}}</td>
                                <td >Imagenes: {{count($property->images)}} Documentos: {{count($property->docs)}}</td>
                              </tr>
                             @endforeach

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>


@endsection
