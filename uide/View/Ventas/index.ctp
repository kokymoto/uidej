<div class="ventas index">
	<h2><?php echo __('Ventas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('numboletos'); ?></th>
			<th><?php echo $this->Paginator->sort('numcombo'); ?></th>
			<th><?php echo $this->Paginator->sort('subtotal'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($ventas as $venta): ?>
	<tr>
		<td><?php echo h($venta['Venta']['id']); ?>&nbsp;</td>
		<td><?php echo h($venta['Venta']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($venta['Venta']['numboletos']); ?>&nbsp;</td>
		<td><?php echo h($venta['Venta']['numcombo']); ?>&nbsp;</td>
		<td><?php echo h($venta['Venta']['subtotal']); ?>&nbsp;</td>
		<td><?php echo h($venta['Venta']['total']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($venta['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $venta['Cliente']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $venta['Venta']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $venta['Venta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $venta['Venta']['id']), null, __('Esta seguro que desea eliminar # %s?', $venta['Venta']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Venta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Combos'), array('controller' => 'combos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Combo'), array('controller' => 'combos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Carteleras'), array('controller' => 'carteleras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Cartelera'), array('controller' => 'carteleras', 'action' => 'add')); ?> </li>
	</ul>
</div>
