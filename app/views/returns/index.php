<div class="d-flex justify-content-between align-items-center">
    <a class="text-decoration-none m-0 text-primary" href="<?= $CONTROLLER ?>/new">Register Return</a>
</div>

<table class="table mt-4">
    <thead>
        <tr>
            <td>Document Id</td>
            <td>Member Id</td>
            <td>Booking date</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($returned as $element) : ?>
            <tr>
                <td><?= $element['documentId'] ?></td>
                <td><?= $element['memberId'] ?></td>
                <td><?= $element['returnDate'] ?></td>
                <td><?= $element['loanDate'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>