<div class="menu p-2 h-100 text-white p-0">
    <div class="icon-web">
        <img src="<?= $BASE_URL ?>/app/public/img/logo.jpeg" alt="" />
    </div>
    <br>
    <div class="my-2 h-75 position-relative">
        <a class="<?= $CONTROLLER == "documents" ? 'active-option' : '' ?> option d-flex align-items-center p-2 text-decoration-none" href="<?= $BASE_URL ?>/documents/index">
            <i class="fa-solid fa-newspaper"></i>
            <p class="p-0 my-0 mx-2">Documents</p>
        </a>

        <?php
        if ($USER_ROL == "member") : ?>
            <a class="<?= $CONTROLLER == "reserve" ? 'active-option' : '' ?> option d-flex align-items-center p-2 text-decoration-none" href="<?= $BASE_URL ?>/reserve">
                <i class="fa-solid fa-newspaper"></i>
                <p class="p-0 my-0 mx-2">Reserve</p>
            </a>
        <?php elseif ($USER_ROL == "employee") : ?>
            <a class="<?= $CONTROLLER == "members" ? 'active-option' : '' ?> option d-flex align-items-center p-2 text-decoration-none" href="<?= $BASE_URL ?>/members">
                <i class="fa-solid fa-newspaper"></i>
                <p class="p-0 my-0 mx-2">Members</p>
            </a>
        <?php elseif ($USER_ROL == "admin") : ?>
            <a class="<?= $CONTROLLER == "employees" ? 'active-option' : '' ?> option d-flex align-items-center p-2 text-decoration-none" href="<?= $BASE_URL ?>/employees">
                <i class="fa-solid fa-newspaper"></i>
                <p class="p-0 my-0 mx-2">Employees</p>
            </a>
        <?php endif ?>

        <?php if ($USER_ROL != "member") : ?>
            <div class="my-2 text-secondary">Resources</div>
            <?php if ($USER_ROL == "admin") : ?>
                <a class="<?= $CONTROLLER == "members" ? 'active-option' : '' ?> option d-flex align-items-center p-2 text-decoration-none" href="<?= $BASE_URL ?>/members">
                    <i class="fa-solid fa-newspaper"></i>
                    <p class="p-0 my-0 mx-2">Members</p>
                </a>
            <?php endif ?>
            <a class="<?= $CONTROLLER == "reserves" ? 'active-option' : '' ?> option d-flex align-items-center p-2 text-decoration-none" href="<?= $BASE_URL ?>/reserves">
                <i class="fa-solid fa-newspaper"></i>
                <p class="p-0 my-0 mx-2">Reserves</p>
            </a>
            <a class="<?= $CONTROLLER == "loans" ? 'active-option' : '' ?> option d-flex align-items-center p-2 text-decoration-none" href="<?= $BASE_URL ?>/loans">
                <i class="fa-solid fa-newspaper"></i>
                <p class="p-0 my-0 mx-2">Loans</p>
            </a>
            <a class="<?= $CONTROLLER == "returns" ? 'active-option' : '' ?> option d-flex align-items-center p-2 text-decoration-none" href="<?= $BASE_URL ?>/returns">
                <i class="fa-solid fa-newspaper"></i>
                <p class="p-0 my-0 mx-2">Returns</p>
            </a>
        <?php endif ?>

        <a class="option position-absolute w-100 bottom-0 d-flex align-items-center p-2 text-decoration-none" href="<?= $BASE_URL ?>/login/signout">
            <i class="fa-solid fa-newspaper"></i>
            <p class="p-0 my-0 mx-2">Log out</p>
        </a>
    </div>
</div>