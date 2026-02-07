<h1>Listado de Recursos Humanos</h1>

<table border="1">
    <thead>
        <tr>
            <th>Cédula</th>
            <th>Sueldo</th>
            <th>Estado</th>
            <th>Ingreso</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->cedula }}</td>
                <td>{{ $empleado->sueldo }}</td>
                <td>{{ $empleado->activo ? 'Activo' : 'Inactivo' }}</td>
                <td>{{ $empleado->fecha_ingreso }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No se encontraron registros en el sistema.</td>
            </tr>
        @endforelse
    </tbody>
</table>