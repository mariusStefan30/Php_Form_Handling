<html>
<body>
    <!--In this project, we’ll use PHP and HTML to build a calculator. 
    We’ll create a front-end in HTML with forms and
    handle the math on the back-end with PHP.-->

    <!-- Addition Form -->
    <h3>Addition</h3>
    <!-- Link addition to php related file -->
      <form action="addition.php" method="get">
        First Number: <input type="number" name="add_first">
        <br>
        Second Number: <input type="number" name="add_second">
        <br>
        <button type="submit">Add</button>
      </form>

      <!-- Division Form -->
      <h3>Division</h3>
      <!-- Link addition to php related file -->
       <form action="division.php" method="get">
        Numerator: <input type="number" name="div_num">
        <br>
        Denumerator: <input type="number" name="div_den">
        <br>
        <button type="submit">Divide</button>
      </form>
    </form>
    <!-- Reset the page -->
    <a href="index.php">Reset</a>
    </body>
</html>
