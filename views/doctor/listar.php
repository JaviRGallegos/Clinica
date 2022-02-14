<table>
    <?php foreach ($doctores as $doctor) : ?>
        <tbody>
            <tr>
                <th scope="row"><?= $doctor->getId() ?></th>
                <td><?= $doctor->getNombre() ?></td>
                <td><?= $doctor->getApellidos() ?></td>
                <td><?= $doctor->getTelefono() ?></td>
                <td><?= $doctor->getEspecialidad() ?></td>
            </tr>
            <br>

        <?php endforeach; ?>

        </tbody>
</table>