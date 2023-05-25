<div class="w-50 mx-auto">
    <div class="d-flex align-items-center justify-content-between">
        <h3 class="display-6">Create reserve</h3>
        <a class="text-decoration-none m-0 text-primary" href="<?= $BASE_URL . '/' . $CONTROLLER ?>">Back</a>
    </div>
    <form class="mt-4" action="create" method="POST">
        <div class="form-group">
            <label for="">Select document</label>
            <select name="documentId" class="mt-3 form-control form-select" required>
                <?php foreach ($documents as $document) : ?>
                    <option value="<?= $document['id'] ?>"><?= $document['title'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="">Select member</label>
            <select name="memberId" class="mt-3 form-control form-select" required>
                <?php foreach ($members as $member) : ?>
                    <option value="<?= $member['id'] ?>"><?= $member['name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <br>
        <div class="form-group text-muted">
            <i class="fa-sharp fa-solid fa-circle-info"></i>
            Automatically saved booking date.
        </div>
        <br>
        <button class="btn btn-primary w-100">Create reserve</button>
    </form>
</div>