<div class="card-datatable table-responsive pt-0">
    <div class="text-nowrap" id="searchResults">
        @if ($agenda->isEmpty())
            <h5 class="card-header">No se encontro registro de empleados.</h5>
        @else
            <table id="agenda">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Puesto</th>
                        <th>Departamento</th>
                        <th>Hotel</th>
                        <th>Extencion</th>
                        <th>Email</th>
                        @auth
                            <th>Acciones</th>
                            <th></th>
                        @endauth
                    </tr>
                </thead>
                <tbody id="agendaList">
                    <!-- Aquí se mostrarán los empleados -->
                    @foreach ($agenda as $agenda)
                        <tr>
                            <td>{{ $agenda->name }}</td>
                            <td>{{ $agenda->job }}</td>
                            <td>{{ $agenda->departament }}</td>
                            <td>{{ $agenda->hotel }}</td>
                            <td>{{ $agenda->extension }}</td>
                            <td>{{ $agenda->email }}</td>
                            @auth
                                <td>
                                    <a href="{{ route('agenda.edit', $agenda->id) }}"><i
                                            class="bx bx-edit me-1"></i>Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST">
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
