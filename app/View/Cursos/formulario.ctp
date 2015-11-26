<h1>Novo curso</h1>

<?php echo $this->Form->create('Curso', array('action' => 'salvar')); ?>

<?php echo $this->Form->input('nome'); ?>
<?php echo $this->Form->input('duracao'); ?>
<?php echo $this->Form->input('horas_atividades_formativas'); ?>
<?php echo $this->Form->input('minimo_grupos'); ?>

<?php echo $this->Form->end('Salvar'); ?>