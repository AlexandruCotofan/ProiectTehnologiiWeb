<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Work Out</title>
  <link rel="stylesheet" href="training.css">
</head>

<body>

  <?php
  require_once "header.php";
  ?>

  <img src="poze/logo.jpg" class="logo" alt="Logo-ul aplicației">

  <section class="training__container">
    <table class="training__table">
      <thead class="training__table__header">
        <tr>
          <th>User Name</th>
          <th>Email</th>
          <th>Nr antrenamente</th>
        </tr>
      </thead>
      <tbody id="data" class="training__table__body">
      </tbody>
    </table>
    <a class="training__btn" href="epic.php">Înapoi la pagina principală</a>
  </section>

</body>

</html>


<script>
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "data.php";
  var asynchronous = true;

  ajax.open(method, url, asynchronous);
  //sendind ajax request
  ajax.send();

  //receiving response from data.php
  ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //converting json back to array
      var data = JSON.parse(this.responseText);
      console.log(data); //for debugging

      //html value for <tbody>
      var html = "";
      // looping throught the data
      for (var a = 0; a < data.length; a++) {
        var email = data[a].email;
        var user_name = data[a].user_name;
        var nr_antrenamente = data[a].nr_antrenamente;

        //appending  at html
        html += "<tr>";
        html += "<td>" + user_name + "</td>";
        html += "<td>" + email + "</td>";
        html += "<td>" + nr_antrenamente + "</td>";
        html += "</tr>";
      }

      //replacing <tbody> of <table>
      document.getElementById("data").innerHTML = html;
    }
  }
</script>