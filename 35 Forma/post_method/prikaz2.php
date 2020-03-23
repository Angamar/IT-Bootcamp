<html>
    <head>
        <style>
       p {
           text-align: center;
           border: 1px solid black;
           padding: 10px;
           margin: 10px;

        
       }
        </style>
    </head>

    <body>

    <p>Dobro došli, Vaše ime je: <?php echo $_POST["ime"];?></p>

    <p>Vaš e-mail je:  <?php echo $_POST["email"];?></p> 
   
    </body>

</html>