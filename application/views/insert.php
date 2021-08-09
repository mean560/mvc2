<!DOCTYPE html>
<html>

<head>
  <title>Data Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container" style="text-align: center;">
    <h1 style="padding: 70px 0px;">ADD DATA FORM</h1>
    <form method="post" action="<?= base_url() ?>Crud/insert">
      <table align="center" width="500" cellpadding="10">
        <tr>
          <td>First Name </td>
          <td><input type="text" name="fname" required /></td>
        </tr>
        <tr>
          <td>Last Name </td>
          <td><input type="text" name="lname" required /></td>
        </tr>
        <tr>
          <td>Email </td>
          <td><input type="email" name="email" required /></td>
        </tr>
        <tr>
          <td colspan="3" style="padding: 70px;">
            <input class="btn btn-secondary" type="submit" name="save" value="Save Data" />
          </td>
        </tr>
      </table>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>