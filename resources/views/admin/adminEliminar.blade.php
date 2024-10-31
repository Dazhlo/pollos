
    <!-- Aqui se coloca la plantilla -->
    @extends('/menu/menuAdmin')

  


    @section('titulo','crear')

    @section('contenido')



    <div class="flex justify-center"></div>
<form action="/admin/eliminar/{{$Platillo->id}}" method ="POST"  enctype="multipart/form-data"  class=""> 
	@csrf
    @method('DELETE')
<div class="h-full bg-gray-400 dark:bg-gray-900 ">
	<!-- Container -->
	<div class="mx-auto">
		<div class="flex justify-center px-6 py-12">
			<!-- Row -->
			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<!-- Col -->
				<div class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
					style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"></div>
				<!-- Col -->
				<div class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
					<h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Editar platillos</h3>
					
					<form class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">
						{{-- nombre del platillo --}}
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="firstName" name ="platillo" id="platillo" >
                                    Nombre del platillo 
                                </label>
								<input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    name ="nombre" id="nombre"
                                    type="text"
                                    placeholder="Nombre del platillo" value ="{{$Platillo->nombre_platillo}}" readonly
                                />
							</div>
							{{-- precio del platillo  --}}
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName" name="precio" id="precio">
                                    precio
                                </label>
								<input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                   name="precio" id="precio"
                                    type="text"
                                    placeholder="precio" value="{{$Platillo->precio_unitario}}" readonly
                                />

								
							</div>
							{{-- stock del los paltillos --}}
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName" name="stock" id="stock">
                                    Stock
                                </label>
								<input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                   name="stock" id="stock"
                                    type="text"
                                    placeholder="stock" value="{{$Platillo->stock}}" readonly
                                />

								
							</div>
						</div>
						{{-- Detalles del pedido --}}
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="detalles" name="detalles">
                                detalles del pedido
                            </label>
							<input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               for="detalles" name="detalles"
                                type="detalles"
                                placeholder="detalles del pedido" value="{{$Platillo->detalle_platillo}}" readonly
                            />
						</div>
						<div class="mb-4 md:flex md:justify-between">
							
						
						</div>
						<div class="mb-6 text-center">
							<button
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline"
                                type="submit" action =""
                            >
                               Confirmar eliminación
                            </button>
						</div>
						<hr class="mb-6 border-t" />
						
						<div class="text-center">
							<label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Foto del platillo</label>
							<div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
							  <div class="text-center">
								<svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
								  <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
								</svg>
								<div class="mt-4 flex text-sm leading-6 text-gray-600">
								  <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
									<span>Click aqui para subir la imagen</span>
									<input id="file-upload" type="file" class="sr-only" name="imagen1"  accept="image/*" >
								  </label>
								  <p class="pl-1"> O suelta la imagen aqui</p>
								</div>
								<p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
							  </div>
							</div>
						  </div>
						</div>
					  </div>



					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</form>




    @endsection