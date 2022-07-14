<h1><?php echo e($modo); ?> empleado</h1>

<?php if(count($errors)>0): ?>

<div class="alert alert-danger" role="alert">
    <ul>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<?php endif; ?>

<div class="form-group">
<label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="<?php echo e(isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')); ?>" id="Nombre">
</div>
<div class="form-group">
<label for="Apellido1">Apellido1</label>
    <input type="text" class="form-control" name="Apellido1" value="<?php echo e(isset($empleado->Apellido1)?$empleado->Apellido1:old('Apellido1')); ?>" id="Apellido1">
</div>
<div class="form-group">
<label for="Apellido2">Apellido2</label>
    <input type="text" class="form-control" name="Apellido2" value="<?php echo e(isset($empleado->Apellido2)?$empleado->Apellido2:old('Apellido2')); ?>" id="Apellido2">
</div>
<div class="form-group">
<label for="Correo">Correo</label>
    <input type="email" class="form-control" name="Correo" value="<?php echo e(isset($empleado->Correo)?$empleado->Correo:old('Correo')); ?>" id="Correo">
</div>
<div class="form-group">
<label for="Foto">Foto</label><br>
    <?php if(isset($empleado->Foto)): ?>
    <img src="<?php echo e(asset('storage').'/'.$empleado->Foto); ?>" class="img-thumbnail img-fluid" width="100" alt="Foto">
    <?php endif; ?>
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
</div><br>
    <a href="<?php echo e(url('empleado/')); ?>" class="btn btn-primary">Volver</a>
    <input type="submit" class="btn btn-success" value="<?php echo e($modo); ?>"><?php /**PATH C:\xampp\htdocs\sistema\resources\views/empleado/form.blade.php ENDPATH**/ ?>