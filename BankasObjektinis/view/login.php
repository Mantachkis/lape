 <?php require __DIR__ . '/virsus.php' ?>



 <form action="<?= URL ?>?route=login" method="post" class=" login-form">
     <div>
         <label>Vardas</label>
         <input type="text" class="form-control" name="name">
         <small class="form-text text-muted">Įveskite prisijungimo vardą.</small>
     </div>
     <div>
         <label>Slaptažodis</label>
         <input type="password" class="form-control" name="pass">
         <small class="form-text text-muted">Įveskite prisijungimo slaptažodį.</small>
     </div>
     <button type="submit" class="btn btn-warning">Prisijungti</button>
 </form>





 <?php require __DIR__ . '/apacia.php' ?>