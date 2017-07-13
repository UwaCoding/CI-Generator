<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tokens List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Token</th>
		<th>User Id</th>
		<th>Created</th>
		
            </tr><?php
            foreach ($tokens_data as $tokens)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tokens->token ?></td>
		      <td><?php echo $tokens->user_id ?></td>
		      <td><?php echo $tokens->created ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>