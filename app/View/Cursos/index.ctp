
<h1>Cursos</h1>

<p><?php echo $this->Html->link("Adicionar novo Curso", array('action' => 'add')); ?></p>


<table>
<tr>
<th>Curso</th>
<th>Duração</th>
<th>Horas Atividade</th>
<th>Mínimo de Grupos</th>
<th> Ações </th>
</tr>
<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->
<?php foreach ($cursos as $curso): ?>
<tr>
<td><?php echo $this->Html->link($curso['Curso']['nome'], array('controller' => 'Cursos', 'action' => 'view', $curso['Curso']['id'])); ?></td>
<td><?php echo $curso['Curso']['duracao']; ?></td>
<td><?php echo $curso['Curso']['horas_atividades_formativas']; ?></td>
<td><?php echo $curso['Curso']['minimo_grupos']; ?></td>
<td><?php echo $this->Html->link('Editar', array('action' => 'edit', $curso['Curso']['id'])); ?> &nbsp;
<?php echo $this->Form->postLink('Deletar',array('action' => 'delete', $curso['Curso']['id']),array('confirm' => 'Deseja Excluir o Curso: ' . $curso['Curso']['nome']))?></td>
<?php endforeach; ?>
</table>