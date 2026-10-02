<?php
require '../configuracion/basedatos.php';

if (isset($_POST['query'])) {
    $query = $_POST['query'];
    $query = $conn->real_escape_string($query);

    $sql = "SELECT * FROM producto WHERE descripcion LIKE '%$query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="table table-striped table-hover table-bordered">';
        echo '<thead class="table-dark">';
        echo '<tr>';
        echo '<th>Id producto</th>';
        echo '<th>Fecha cadu</th>';
        echo '<th>Descripción</th>';
        echo '<th>Cantidad</th>';
        echo '<th>Característica</th>';
        echo '<th>Id tipo producto</th>';
        echo '<th>Id marca</th>';
        echo '<th>Id proveedor</th>';
        echo '<th>Acciones</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id_producto'] . '</td>';
            echo '<td>' . $row['fecha_cadu'] . '</td>';
            echo '<td>' . $row['descripcion'] . '</td>';
            echo '<td>' . $row['cantidad'] . '</td>';
            echo '<td>' . $row['caracteristica'] . '</td>';
            echo '<td>' . $row['id_tipo_producto'] . '</td>';
            echo '<td>' . $row['id_marca'] . '</td>';
            echo '<td>' . $row['id_proveedor'] . '</td>';
            echo '<td>';
            echo '<div class="btn-group">';
            echo '<a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal" data-bs-id="' . $row['id_producto'] . '"><i class="fa-solid fa-pencil"></i></a>';
            echo '<a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-id="' . $row['id_producto'] . '"><i class="fa-solid fa-trash"></i></a>';
            echo '</div>';
            echo '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>No se encontraron productos que coincidan con la búsqueda.</p>';
    }
} else {
    echo '<p>Error: No se recibió ningún término de búsqueda.</p>';
}

$conn->close();