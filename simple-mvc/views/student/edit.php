<?php include_once(__DIR__ . '/../templates/header.php'); ?>

<div class="card">
    <div class="card-header">
        <h2>Edit Student</h2>
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" 
                       value="<?php echo htmlspecialchars($student['nim']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" 
                       value="<?php echo htmlspecialchars($student['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Major</label>
                <input type="text" name="major" class="form-control" 
                       value="<?php echo htmlspecialchars($student['major']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?php include_once(__DIR__ . '/../templates/footer.php'); ?>