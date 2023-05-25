<div>
    <p class="display-6">Select a member</p>
    <form id="form" class="d-flex align-items-center" method="POST">
        <select class="form-control form-select w-75" name="memberId">
            <?php foreach ($members as $member) : ?>
                <option value="<?= $member['id'] ?>"><?= $member['name'] ?></option>
            <?php endforeach ?>
        </select>
        <button class="btn btn-primary mx-4">Get info</button>
    </form>
</div>

<?php
if (isset($loans) && isset($reserves)) : ?>
    <div class="d-flex mt-5">
        <ul class="list-group w-25">
            <li class="list-group-item active text-center">Active loans</li>
            <?php foreach ($loans as $loan) : ?>
                <li class="list-group-item"><?= $loan['title'] ?></li>
            <?php endforeach ?>
        </ul>
        <ul class="list-group mx-3 w-25">
            <li class="list-group-item active text-center">Reserves</li>
            <?php foreach ($reserves as $reserve) : ?>
                <li class="list-group-item"><?= $reserve['title'] ?></li>
            <?php endforeach ?>
        </ul>
    </div>


<?php endif ?>

<script>
    const $form = document.getElementById('form')
    $form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar el envío del formulario

        var memberId = $form.memberId.value;
        var actionUrl = '<?= $BASE_URL . '/' . $CONTROLLER ?>/find/' + memberId;
        this.action = actionUrl; // Modificar la acción del formulario

        this.submit(); // Enviar el formulario
    });
</script>