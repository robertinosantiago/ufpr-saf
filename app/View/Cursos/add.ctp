<h1>Novo Curso</h1>

<?php
echo $this->Form->create('Curso');
echo $this->Form->input('nome');
echo $this->Form->input('duracao');
echo $this->Form->input('horas_atividades_formativas');
echo $this->Form->input('minimo_grupos');
echo $this->Form->end('Salvar');
