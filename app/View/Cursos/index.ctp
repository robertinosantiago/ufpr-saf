<h1>Cursos da UFPR</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Duração</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dados as $dado): ?>
        <tr>
            <td><?php echo $dado['Curso']['id']; ?></td>
            <td><?php echo $dado['Curso']['nome']; ?></td>
            <td><?php echo $dado['Curso']['duracao']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

