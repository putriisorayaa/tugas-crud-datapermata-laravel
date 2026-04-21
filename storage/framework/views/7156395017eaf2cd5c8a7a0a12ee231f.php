<h1>DATA BATU PERMATA</h1>

<a href="<?php echo e(route('batu.create')); ?>" > +Tambah Data</a>

<?php if(session('success')): ?>
<p><?php echo e(session('success')); ?></p>
<?php endif; ?>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 15px;
    }
    th, td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: center;
    }
    th {
        background-color: #f5f5f5;
    }
    form {
        display: inline;
    }
</style>

<table>
    <tr>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Berat (Karat)</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($d->nama); ?></td>
        <td><?php echo e($d->jenis); ?></td>
        <td><?php echo e($d->berat); ?></td>
        <td>Rp <?php echo e(number_format($d->harga, 0, ',', '.')); ?></td>
        <td>
            <button><a href="<?php echo e(route('batu.edit', $d->id)); ?>" style="text-decoration: none; color:black">Edit</a></button> |
            <form action="<?php echo e(route('batu.destroy', $d->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\xampp1\htdocs\crudbatupermata\resources\views/batu/index.blade.php ENDPATH**/ ?>