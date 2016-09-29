<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions', array('type' => 'Doctor', 'typePlural' => 'Doctors')); ?>
</nav>
<div class="doctors view large-9 medium-8 columns content">
    <h3><?= h($doctor->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($doctor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($doctor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($doctor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($doctor->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accepting Patients') ?></th>
            <td><?= $doctor->accepting_patients ? __('<i class="fa fa-check-circle fa-2x success" aria-hidden="true"></i>') : __('<i class="fa fa-times-circle fa-2x danger" aria-hidden="true"></i>'); ?></td>             
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Appointments') ?></h4>
        <?php if (!empty($doctor->appointments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Patient Name') ?></th>
                <th scope="col"><?= __('Appointment Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($doctor->appointments as $appointments): ?>
            <tr>
                <td><?= h($appointments->id) ?></td>
                <td><?= $this->Format->getName($appointments->patient_id, 'patients') ?></td>
                <td><?= h($appointments->appointment_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Appointments', 'action' => 'view', $appointments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Appointments', 'action' => 'edit', $appointments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appointments', 'action' => 'delete', $appointments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
