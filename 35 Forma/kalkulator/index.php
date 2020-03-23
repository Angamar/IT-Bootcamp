<html>
    <head>
        <title> Kalkulator </title>
        <style>
      form {
          border: 1px solid black;
          margin: 10px;
          width: 250px;
          background: lightgray;
      }

      label {
          padding: 10px;
          width: 100px;
          color: blue;
          margin: 10px 0;
      }

      input {
          margin: 10px;
          width: 80;
      }
        </style>
    </head>

    <body>

    <html>
    <head>
        <style>
       
        </style>
    </head>

    <body>
<h2> Kalkulator</h2>
<hr>

    <form action = "rezultat.php" method="post">
        <label>Prvi broj:</label>
        <input type="number" name="br1">
        <br><br>

        <label>Drugi broj:</label>
        <input type="number" name="br2">
        <br><br>

        <label>Operacija: </label>
        <select name="operacija">
            <option value ="+">Saberi</option>
            <option value ="-">Oduzmi</option>
            <option value ="*">Pomnozi</option>
            <option value ="/">Podeli</option>
        </select>
        <br><br>
        <input type = "submit" value="Racunaj">
    </form>
        
   
    </body>

</html>
        
