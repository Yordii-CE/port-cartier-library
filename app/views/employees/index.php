<div class="w-50 mx-auto">
    <div class="d-flex align-items-center justify-content-between">
        <h3 class="display-6">Create member</h3>

    </div>
    <form class="mt-4" action="<?= $BASE_URL . '/' . $CONTROLLER ?>/create" method="POST">
        <input type="text" class="form-control" name="name" placeholder="Name" required>
        <br>
        <input type="text" class="form-control" name="lastName" placeholder="Last name" required>
        <br>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <br>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <br>
        <input type="text" class="form-control" name="address" placeholder="Address" required>
        <br>
        <input type="text" class="form-control" name="phone" placeholder="Phone" required>
        <br>
        <div class="form-group">
            <label for="">Select rol:</label>
            <select name="rol" class="mt-3 form-control form-select" required>
                <option value="member">Member</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <br>
        <button class="btn btn-primary w-100">Create member</button>
    </form>
</div>