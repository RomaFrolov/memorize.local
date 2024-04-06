<?php



$name = addslashes($_POST['category']);
$category = $db->query("SELECT * FROM `insectcategory`")->findAll();


?>



    <div class="card-item">
      
      <form action="" class="form" method="POST">
        <label for="">Назва категорії</label>
        <input type="text" name="category" required>


        <button type="submit">Створити</button>
        </form>
    </div>


