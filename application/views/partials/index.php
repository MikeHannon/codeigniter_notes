<?php
for ($i = 0; $i < count($values); $i ++){?>

      <div class="col s12 m6 offset-m3">
         <div class="card blue-grey darken-1">
           <div class="card-content white-text">
             <span class="card-title"><?=$values[$i]['title'] ?></span>
             <textarea name ="<?=$values[$i]['id']?>"> <?=$values[$i]['content']?> </textarea>
             <div class="card-action">
              <button class = "blue-text" onclick = "local_delete(<?=$values[$i]['id']?>)">Delete</button>
            </div>
          </div>
        </div>
      </div>

<?php
}
?>
