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

    <p>Dobro došli, Vaše ime je: <?php echo $_GET["ime"];?></p>

    <p>Vaš e-mail je:  <?php echo $_GET["email"];?></p> 
   
    </body>

</html>