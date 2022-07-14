
<?php $__env->startSection('content'); ?>
<div class="container">

<div class="text-success">
    <?php if(Session::has('mensaje')): ?>
    <?php echo e(Session::get('mensaje')); ?>

    <?php endif; ?>
</div><br>

<a href="<?php echo e(url('empleado/create')); ?>" class="btn btn-success">Crear nuevo empleado</a><br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido1</th>
            <th>Apellido2</th>
            <th>Correo</th>
            <th>Gestión</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($empleado->id); ?></td>
            <td><img src="<?php echo e(asset('storage').'/'.$empleado->Foto); ?>" class="img-thumbnail img-fluid" width="100" alt="Foto"></td>
            <td><?php echo e($empleado->Nombre); ?></td>
            <td><?php echo e($empleado->Apellido1); ?></td>
            <td><?php echo e($empleado->Apellido2); ?></td>
            <td><?php echo e($empleado->Correo); ?></td>
            <td>
               
            <a href="<?php echo e(url('/empleado/'.$empleado->id.'/edit')); ?>" class="btn btn-warning">Editar</a>

            <form action="<?php echo e(url('/empleado/'.$empleado->id)); ?>" class="d-inline" method="post">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('DELETE')); ?>

            <input type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar?')" value="Eliminar">
            </form>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo $empleados->links(); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema\resources\views/empleado/index.blade.php ENDPATH**/ ?>