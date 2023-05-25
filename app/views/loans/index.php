<div class="d-flex justify-content-between align-items-center">
    <a class="text-decoration-none m-0 text-primary" href="<?= $CONTROLLER ?>/new">Create loan</a>

</div>

<table class="table mt-4">
    <thead>
        <tr>
            <td>Document Id</td>
            <td>Member Id</td>
            <td>Loand date</td>
            <td>Return date</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($loans as $loan) : ?>
            <tr>
                <td><?= $loan['documentId'] ?></td>
                <td><?= $loan['memberId'] ?></td>
                <td><?= $loan['returnDate'] ?></td>
                <td><?= $loan['loanDate'] ?></td>
                <td><a href="<?= $CONTROLLER ?>/delete/<?= $loan['id'] ?>" classn="text-danger text-decoration-none">cancel</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>