 <div class="d-flex justify-content-<?= ($USER_ROL != "member") ? 'between' : 'end' ?>">
     <?php if ($USER_ROL != "member") : ?>
         <form id="filter-form" method="POST" class="w-25 d-flex align-items-center">
             <select name="filter" class="form-control w-50  form-select">
                 <option <?= $optionSelected == 'all' ? 'selected' : null ?> value="all">All</option>
                 <option <?= $optionSelected == 'reserved' ? 'selected' : null ?> value="reserved">Reserved</option>
                 <option <?= $optionSelected == 'lent' ? 'selected' : null ?> value="lent">Lent</option>
                 <option <?= $optionSelected == 'expired' ? 'selected' : null ?> value="expired">Expired</option>
             </select>
             <button type="submit" class="mx-3 btn btn-primary btn-sm" name="filter-btn">Filter</button>
         </form>
     <?php endif ?>
     <form class="d-flex align-items-center" method="POST" action="<?= $BASE_URL . '/' . $CONTROLLER . '/index/' . $optionSelected ?>">
         <input type="search" name="pattern" value="<?= $patternWritten ?>" class="mx-3 form-control" type="text" placeholder="key title">
         <button class="btn btn-primary" name="search-btn">Search</button>
     </form>
 </div>

 <table class="table mt-4">
     <thead>
         <tr>
             <td>Title</td>
             <td>Isbn</td>
             <td>Author</td>
             <td>Publication year</td>
             <td>Category</td>
             <td>Type</td>
             <td>Genre</td>
             <td>Description</td>
         </tr>
     </thead>
     <tbody>
         <?php foreach ($documents as $document) : ?>
             <tr>
                 <td><?= $document['title'] ?></td>
                 <td><?= $document['isbn'] ?></td>
                 <td><?= $document['author'] ?></td>
                 <td><?= $document['publicationYear'] ?></td>
                 <td><?= $document['category'] ?></td>
                 <td><?= $document['type'] ?></td>
                 <td><?= $document['genre'] ?></td>
                 <td><?= $document['description'] ?></td>

             </tr>
         <?php endforeach ?>
     </tbody>
 </table>

 <script>
     const $filterForm = document.getElementById('filter-form')
     $filterForm.addEventListener('submit', function(event) {
         event.preventDefault(); // Evitar el envío del filterFormulario

         var filterValue = $filterForm.filter.value;
         var actionUrl = '<?= $BASE_URL . '/' . $CONTROLLER ?>/index/' + filterValue;
         this.action = actionUrl; // Modificar la acción del formulario

         this.submit(); // Enviar el formulario
     });
 </script>