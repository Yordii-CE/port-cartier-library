<div class="w-50 mx-auto">
    <div class="d-flex align-items-center justify-content-between">
        <h3 class="display-6">Lend document</h3>
        <a class="text-decoration-none m-0 text-primary" href="<?= $BASE_URL . '/' . $CONTROLLER ?>">Back</a>
    </div>
    <form id="form" class="mt-4" action="create" method="POST">
        <div class="form-group">
            <label for="">Select document</label>
            <select id="documents" name="documentId" class="mt-3 form-control form-select" required>
                <?php foreach ($documents as $document) : ?>
                    <option data-member-id="<?= $document['memberId'] ?>" value="<?= $document['id'] ?>"><?= $document['title'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="">Select member</label>
            <select id="members" name="memberId" class="mt-3 form-control form-select" required>
                <?php foreach ($members as $member) : ?>
                    <option value="<?= $member['id'] ?>"><?= $member['name'] ?></option>
                <?php endforeach ?>
            </select>
            <div id="memberHelp" class="text-end form-text"></div>
        </div>
        <br>
        <div class="form-group">
            <label for="">Return date:</label>
            <input name="returnDate" type="date" class="mt-3 form-control" required>
        </div>
        <br>
        <div class="form-group text-muted">
            <i class="fa-sharp fa-solid fa-circle-info"></i>
            Automatically saved loan date.
        </div>
        <br>
        <button class="btn btn-primary w-100">Lend document</button>
    </form>
</div>

<script>
    const $documents = document.getElementById("documents")
    const $members = document.getElementById("members")
    const $memberHelp = document.getElementById("memberHelp")

    let option = $documents.options[$documents.selectedIndex];
    const {
        memberId
    } = option.dataset
    console.log(memberId.length);

    if (memberId == "") {
        Array.from($members.options).forEach(option => {
            option.disabled = false
        });
        $memberHelp.textContent = "Available for all members."
    } else {
        $members.value = null
        Array.from($members.options).forEach(option => {
            if (option.value != memberId) option.disabled = true
            else option.disabled = false
        });

        $memberHelp.textContent = "Only available for this member."
    }

    $documents.addEventListener("change", () => {
        let option = $documents.options[$documents.selectedIndex];
        const {
            memberId
        } = option.dataset
        console.log(memberId.length);

        if (memberId == "") {
            Array.from($members.options).forEach(option => {
                option.disabled = false
            });
            $memberHelp.textContent = "Available for all members."
        } else {
            $members.value = null
            Array.from($members.options).forEach(option => {
                if (option.value != memberId) option.disabled = true
                else option.disabled = false
            });

            $memberHelp.textContent = "Only available for this member."
        }

    })
</script>