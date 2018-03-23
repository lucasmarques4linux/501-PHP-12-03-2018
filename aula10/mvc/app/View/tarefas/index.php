<h2>Lista de Tarefas</h2>

<a href="?r=tarefas/new">Novo Tarefa</a>
<ul>
	<?php if ($tarefas) : ?>
		<?php foreach($tarefas as $tarefa): ?>
			<li><?=$tarefa->getDescricao() ?></li>
		<?php endforeach; ?>
	<?php endif; ?>
</ul>