  <html>
  <head>
      <meta charset="utf-8" />
      <title>Einstieg in jQuery</title>
      <style>
          #beispiel{
              width: 400px;
              background-color: orange;
              color: black;
              font: 200% sans-serif;
              text-align: center;
              padding: 20px;
          }
      </style>
      <script type="text/javascript" src="jquery.inview.min.js"></script>
      <script>
         $(function () {
             $('#beispiel').hide().FadeIn(4000);
         });
      </script>
  </head>
  <body>
    <div id="beispiel">
        Guten Morgen jQuery :-)
    </div>
  </body>
  </html>