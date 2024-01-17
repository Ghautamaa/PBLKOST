<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <h2>Edit Profile</h2>
    <div class="row">
        <div class="col-lg-8">
            <form name="editprofile" action="<?php echo base_url ('cprofile/editprofile'); ?>" method="post">
                <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user');?>">
                <div class="mb-3 mt-4">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" id="nama_user" placeholder="Ganti Nama" name="nama_user" required>
                </div>
                <button type="submit" class="btn btn-success ">Submit</button> 
            </form>
        </div>
    </div>
</body>
</html>