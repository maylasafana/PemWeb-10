<?php require_once __DIR__ . '/../templates/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Student List</h2>
    <a href="index.php?action=create" class="btn btn-primary">Add New Student</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Name</th>
            <th>Major</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo htmlspecialchars($student['nim']); ?></td>
            <td><?php echo htmlspecialchars($student['name']); ?></td>
            <td><?php echo htmlspecialchars($student['major']); ?></td>
            <td>
                <a href="index.php?action=edit&id=<?php echo $student['id']; ?>" 
                   class="btn btn-sm btn-warning">Edit</a>
                <a href="index.php?action=delete&id=<?php echo $student['id']; ?>" 
                   class="btn btn-sm btn-danger"
                   onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>

