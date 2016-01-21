<h1>Editar Curso</h1>
<?php
echo $this->Form->create('Curso', array('action' => 'edit'));
echo $this->Form->input('duracao', array('label' => 'Duração'));
echo $this->Form->input('horas_atividades_formativas');
echo $this->Form->input('minimo_grupos');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Salvar');
?>