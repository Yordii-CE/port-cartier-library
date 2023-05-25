<div class="d-flex align-items-center justify-content-<?= $USER_ROL == "admin" ? 'between' : 'end' ?>">
    <?php if ($USER_ROL == "admin") : ?>
        <a class="text-decoration-none m-0 text-primary" href="<?= $CONTROLLER ?>/new">Create member</a>
    <?php endif ?>

    <?php if ($USER_ROL != "member") : ?>
        <a class="text-decoration-none m-0 text-primary" href="<?= $CONTROLLER ?>/find">Find a member</a>
    <?php endif ?>
</div>

<table class="table mt-4">
    <thead>
        <tr>
            <td>Name</td>
            <td>Last name</td>
            <td>Email</td>
            <td>Passowrd</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Rol</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($members as $member) : ?>
            <tr>
                <td><?= $member['name'] ?></td>
                <td><?= $member['lastName'] ?></td>
                <td><?= $member['email'] ?></td>
                <td><?= $member['password'] ?></td>
                <td><?= $member['address'] ?></td>
                <td><?= $member['phone'] ?></td>
                <td><?= $member['rol'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>