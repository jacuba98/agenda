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
                                <td>...</td>
                            @endauth
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
