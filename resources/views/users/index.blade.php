<x-app-layout>
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="sm:fixed sm:top-0 p-6 text-right z-10">
            <a href="{{ url('/') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home
            </a>
        </div>

        <div class="max-w-5xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <img src="{{ asset('images/gp-Logo.png') }}" alt="Logo de grupo piñero" width="130" height="130">
            </div>

            <div class="mt-16 d-flex flex justify-center ">
                <a href="{{ route('user.create') }}"
                    class="btn-ico font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                    data-toggle="modal" data-target="#myModal" data-placement="top" title="Agregar Nuevo Usuario">
                    <i class='bx bx-user-plus' style="font-size: 2.7em;"></i>
                </a>
            </div>

            <br>

            <div class="card-datatable
                table-responsive pt-0">
                <div class="text-nowrap" id="searchResults">
                    @if ($users->isEmpty())
                        <h5 class="card-header">No se encontro registro de empleados.</h5>
                    @else
                        <table id="agenda">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    @auth
                                        <th>Acciones</th>
                                        <th></th>
                                    @endauth
                                </tr>
                            </thead>
                            <tbody id="agendaList">
                                <!-- Aquí se mostrarán los empleados -->
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        @auth
                                            <td>
                                                <a href="{{ route('user.edit', $user->id) }}"><i
                                                        class="bx bx-edit me-1"></i>Editar</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item btn-danger"
                                                        onclick="return confirm('¿Estás seguro de eliminar este contacto?')"><i
                                                            class="bx bx-trash me-1"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        @endauth
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>


            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="#"
                            class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5"
                                class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            Grupo Piñero
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    <!--Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})-->
                    <a>{{ config('app.name', 'Agenda') }}</a>
                </div>
            </div>
        </div>
</x-app-layout>
