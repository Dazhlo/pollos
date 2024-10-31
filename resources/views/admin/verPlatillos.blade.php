@extends('/menu/menuAdmin')
@section('titulo', 'login')


@section('contenido')
@if (empty($Platillos))
<h4>No hay registros</h4>
@else
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
              <h3>Clientes registrados</h3>
          <tr>
      <th scope="col" class="px-6 py-3">
                  Id
              </th>
              <th scope="col" class="px-6 py-3">
                  Nombre
              </th>
              <th scope="col" class="px-6 py-3">
                  Detalles
              </th>
              <th scope="col" class="px-6 py-3">
                  Stock
              </th>
                <th scope="col" class="px-6 py-3">
                  Precio
              </th>
              <th scope="col" class="px-6 py-3">
                  Platillo imagen
               </th>
               <th scope="col" class="px-6 py-3">
                Editar
             </th>
                  <th scope="col" class="px-6 py-3">
                  Eliminar
              </th>
             
          </tr>
      </thead>
      <tbody>
        @foreach ($Platillos as $item)
        <tr>   
              <td class="px-8 py-2">
                  {{$item ->id_platillo}}
              </td>
              <td class="px-8 py-2">
                {{$item ->nombre_platillo}}
              </td>
              <td class="px-8 py-2">
                {{$item ->detalle_platillo}}
              </td>
              <td class="px-10 py-2">
                {{$item ->stock}}
              </td>
              <td class="px-10 py-2">
                {{$item ->precio_unitario}}
              </td>
            <td class="px-8 py-2">
             <img src="{{$item ->imagen}}
" alt="{{$item ->imagen}}
" width="150px">          </td>
              <td class="px-8 py-2">
                <a href="/cliente/editar/{{$item ->id_platillo}}">Editar </a>
              </td>
              <td class="px-8 py-2">
                <a href="/cliente/borrar/{{$item ->id_platillo}}">Eliminar </a>
             </td>
            </tr>
             
            @endforeach
     
          
      </tbody>
  </table>
</div>


  @endif

  @endsection