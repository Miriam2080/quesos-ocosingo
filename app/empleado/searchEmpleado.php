<?php
require '../configuracion/basedatos.php';

if (isset($_POST['query'])) {
    $query = $_POST['query'];
    $query = $conn->real_escape_string($query);

    $sql = "SELECT * FROM empleado WHERE nombre LIKE '%$query%' OR ap_paterno LIKE '%$query%' OR ap_materno LIKE '%$query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="table table-striped table-hover table-bordered">';
        echo '<thead class="table-dark">';
        echo '<tr>';
        echo '<th>Id empleado</th>';
        echo '<th>nombre</th>';
        echo '<th>ap_paterno</th>';
        echo '<th>ap_materno</th>';
        echo '<th>rfc</th>';
        echo '<th>telefono</th>';
        echo '<th>calle</th>';
        echo '<th>numero</th>';
        echo '<th>id_colonia</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id_empleado'] . '</td>';
            echo '<td>' . $row['nombre'] . '</td>';
            echo '<td>' . $row['ap_paterno'] . '</td>';
            echo '<td>' . $row['ap_materno'] . '</td>';
            echo '<td>' . $row['rfc'] . '</td>';
            echo '<td>' . $row['telefono'] . '</td>';
            echo '<td>' . $row['calle'] . '</td>';
            echo '<td>' . $row['numero'] . '</td>';
            echo '<td>' . $row['id_colonia'] . '</td>';
            echo '<td>';
            echo '<div class="btn-group">';
            echo '<a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal" data-bs-id="' . $row['id_empleado'] . '"><i class="fa-solid fa-pencil"></i></a>';
            echo '<a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-id="' . $row['id_empleado'] . '"><i class="fa-solid fa-trash"></i></a>';
            echo '</div>';
            echo '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>No se encontraron empleados  que coincidan con la búsqueda.</p>';
    }
} else {
    echo '<p>Error: No se recibió ningún término de búsqueda.</p>';
}

$conn->close();