<div class="d-flex justify-content-between align-items-center">
    <a class="text-decoration-none m-0 text-primary" href="<?= $CONTROLLER ?>/new">Create reservation</a>
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
        <?php foreach ($reserves as $reserve) : ?>
            <tr>
                <td><?= $reserve['documentId'] ?></td>
                <td><?= $reserve['memberId'] ?></td>
                <td><?= $reserve['bookingDate'] ?></td>
                <td><a href="<?= $CONTROLLER ?>/delete/<?= $reserve['id'] ?>" class="text-danger text-decoration-none">cancel</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>