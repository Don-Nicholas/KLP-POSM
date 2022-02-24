<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background: white;
        }

        .content {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 10px;
        }

    </style>
</head>

<body>

    <?php 
include('connection.php');
if (isset($_GET['update'])){
		$upid = $_GET['update'];
		//-----giselect ang b_id para ang case mabalik ug add sa beverages
		$result3 = $mysqli->query("SELECT * FROM
customer where cus_id=$upid")
		or die($mysqli->error);	
	$row3 = mysqli_fetch_assoc($result3);
}
?>


    <div class="content">

        <form action="process_customerupdate.php" method="POST">
            <table>

                <tr>
                    <td>
                        <label>No.</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $row3['cus_id']; ?>" name="id" style="width: 200px;">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Full Name</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $row3['cus_name']; ?>" name="name" style="width: 200px;">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Address</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $row3['cus_add']; ?>" name="address" style="width: 200px;">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Contact No.</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $row3['contact']; ?>" name="contact" style="width: 200px;">
                    </td>
                </tr>

                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                    </td>
                </tr>

                </tr>
            </table>
        </form>
    </div>

</body>

</html>
