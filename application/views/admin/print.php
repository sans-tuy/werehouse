<!DOCTYPE html>
<html>
<head>
    <title>Print</title>
</head>
<body class="table-responsive">
    <table class="table table-hover" border="1" width="100%" style="padding: 4px 4px 6px 6px;">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Foto</th>
            <th>Deskripsi</th>
        </tr>

        <?php
			$id= 1;
			foreach ($products as $data): 
		?>

        <tr>
            <td><?php echo $id++ ?></td>
            <td><?php echo $data->name ?></td>
            <td><?php echo $data->quantity ?></td>
            <td><img src="<?php echo base_url('upload/product/' . $data->image )?>" alt="" height="64"> </td>
            <td><?php echo $data->description ?></td>
        </tr>

        <?php endforeach; ?>
    </table>

        <script type="text/javascript">
        	window.print();
        </script>
</body>
</html>
