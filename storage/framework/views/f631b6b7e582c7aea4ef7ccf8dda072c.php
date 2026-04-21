<!DOCTYPE html>
<html>
<head>
    <title>EDIT DATA BATU PERMATA</title>
    <style>
        input {
            display: block;
            margin-bottom: 10px;
            padding: 6px;
            width: 250px;
        }
        button {
            padding: 6px 10px;
        }
        a {
            display: inline-block;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<h1>EDIT DATA BATU PERMATA</h1>

<!-- tombol kembali -->
<a href="<?php echo e(route('batu.index')); ?>">← Kembali</a>

<form action="<?php echo e(route('batu.update', $data->id)); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>

<input type="text" name="nama" value="<?php echo e($data->nama); ?>" placeholder="Nama">
<input type="text" name="jenis" value="<?php echo e($data->jenis); ?>" placeholder="Jenis">
<input type="number" name="berat" value="<?php echo e($data->berat); ?>" placeholder="Berat (Karat)">
<input type="number" name="harga" value="<?php echo e($data->harga); ?>" placeholder="Harga">

<button type="submit">Update</button>
</form>

</body>
</html><?php /**PATH C:\xampp1\htdocs\crudbatupermata\resources\views/batu/edit.blade.php ENDPATH**/ ?>