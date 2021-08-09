<!DOCTYPE html>
<html>

<head>
  <title>Update Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <div class="container" style="text-align: center;">
    <?php
    $i = 1;
    foreach ($data as $row) {
    ?>
      <h1 style="padding: 70px 0px;">UPDATE DATA FORM</h1>
      <form method="post" >
        <table align="center" width="500" cellpadding="10">
          <tr>
            <td>Frist Name </td>
            <td><input type="text" name="fname" value="<?php echo $row->fname; ?>" required /></td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname" value="<?php echo $row->lname; ?>" required /></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $row->email; ?>" required /></td>
          </tr>
          <tr>
            <td colspan="3" style="padding: 70px;">
              <input class="btn btn-secondary" type="submit" name="update" value="Update Records" />
            </td>
          </tr>
        </table>
      </form>
    <?php } ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>