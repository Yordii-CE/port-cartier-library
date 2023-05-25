<div class="w-50 mx-auto">
    <div class="d-flex align-items-center justify-content-between">
        <h3 class="display-6">Register return</h3>
        <a class="text-decoration-none m-0 text-primary" href="<?= $BASE_URL . '/' . $CONTROLLER ?>">Back</a>
    </div>
    <form class="mt-4" action="create" method="POST">
        <div class="form-group">
            <label for="">Loaned documents</label>
            <select name="loanId" class="mt-3 form-control form-select" required>
                <?php foreach ($loanedDocuments as $document) : ?>
                    <option value="<?= $document['id'] ?>"><?= $document['name'] ?> [<?= $document['loanDate'] ?>]<?= $document['title'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <br>
        <button class="btn btn-primary w-100">Register</button>
    </form>
</div>