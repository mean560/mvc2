<html>

<head>
  <title>Display records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <div class="container" style="padding:70px">
    <table class="table" >
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
      </tr>
      <?php
      $i = 1;
      foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $row->fname . "</td>";
        echo "<td>" . $row->lname . "</td>";
        echo "<td>" . $row->email . "</td>";
        echo "</tr>";
        $i++;
      }
      ?>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>