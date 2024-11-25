<?php include_once(__DIR__ . '/../templates/header.php'); ?>

<div class="card">
    <div class="card-header">
        <h2>Add New Student</h2>
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Major</label>
                <input type="text" name="major" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?php include_once(__DIR__ . '/../templates/footer.php'); ?>