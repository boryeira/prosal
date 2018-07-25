@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="ibox ">
              <div class="ibox-head">
                  <div class="ibox-title">Propiedades</div>
                  <div class="ibox-tools">
                    <a href="{{url('/properties/create')}}" class="btn btn-success text-white">Nueva Propiedad</a>

                  </div>
              </div>
              <div class="ibox-body">

                  <div class="table-responsive">
                      <table id="state-table" class="table table-hover">
                          <thead class="thead-default thead-lg">
                              <tr>

                                  <th width="10%">Folio</th>
                                  <th width="30%">Dirección</th>
                                  <th width="20%">Comuna</th>
                                  <th width="20%">tipo</th>
                                  <th width="10%">Archivos</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach (App\Property::all() as $property)
                              <tr>
                                <td ><a href="{{url('/properties/'.$property->id)}}">#{{$property->folio}}</a></td>
                                <td >{{$property->address}}</td>
                                <td >{{$property->comuna->nombre or '--'}}</td>
                                <td>
                                  {{$property->tipo}}
                                </td>
                                <td ><i class="ti ti-image"></i> {{count($property->images)}} <i class="ti ti-file"></i> {{count($property->docs)}}</td>
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

@section('css') {{-- stylesheet para esta vista --}}
	<link href="{{asset('css/datatables.min.css')}}" rel="stylesheet" />
@endsection

@section('scripts')
  {{--  datatable --}}
	<script src="{{ asset('js/datatables.min.js') }}"></script>
	<script>
		$(document).ready(function() {
				$('#state-table').DataTable({
					"paging": true,
					"ordering": true,
					"language": {
								"lengthMenu": "Mostrar _MENU_ elementos",
								"zeroRecords": "Sin resultados",
								"info": "Mostrando pagina _PAGE_ de _PAGES_",
								"infoEmpty": "Sin resultados",
								"infoFiltered": "(filtered from _MAX_ total records)",
								"search": "Filtrar:"
					}

				});
			});

	</script>
	{{--  End datatable --}}
@endsection
