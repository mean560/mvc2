<!DOCTYPE html>
<html>

<head>
  <title>Display records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container" style="padding:70px">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>

    <table align="center" width="500" cellpadding="10" id="box-insert">
      <tbody>
        <tr>
          <td>First Name </td>
          <td><input type="text" name="fname" required=""></td>
        </tr>
        <tr>
          <td>Last Name </td>
          <td><input type="text" name="lname" required=""></td>
        </tr>
        <tr>
          <td>Email </td>
          <td><input type="email" name="email" required=""></td>
        </tr>
        <tr>
          <td colspan="3" style="padding: 70px;">
            <input class="btn btn-secondary" type="submit" name="save" value="Save Data" onclick="js.insert();">
          </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td><input type="hidden" name="id"></td>
        </tr>
        <tr>
          <td>First Name </td>
          <td><input type="text" name="fname_update" required=""></td>
        </tr>
        <tr>
          <td>Last Name </td>
          <td><input type="text" name="lname_update" required=""></td>
        </tr>
        <tr>
          <td>Email </td>
          <td><input type="email" name="email_update" required=""></td>
        </tr>
        <tr>
          <td colspan="3" style="padding: 70px;">
            <input class="btn btn-secondary" type="submit" name="update" value="Update Data" onclick="js.updatedata()">
          </td>
        </tr>
      </tbody>
    </table>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('public/js/js.js'); ?>"></script>

</body>

<script type="text/javascript">
	$(document).ready(function(){
    js.get_all_data();
  });
</script>

</html>