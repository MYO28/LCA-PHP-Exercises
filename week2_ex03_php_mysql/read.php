<?php
require_once 'db_connect.php';

$search = $_GET['search'] ?? '';

if (!empty($search)) {
    $stmt = $conn->prepare("SELECT id, name, email, department, created_at FROM employees WHERE department LIKE ? ORDER BY id DESC");
    $searchTerm = "%" . $search . "%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = $conn->query("SELECT id, name, email, department, created_at FROM employees ORDER BY id DESC");
}
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><strong><?php echo htmlspecialchars($row['name']); ?></strong></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><span class="badge"><?php echo htmlspecialchars($row['department']); ?></span></td>
                    <td class="actions">
                        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn-edit">Edit</a>
                        <form method="POST" action="delete.php" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this employee?');">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" style="text-align: center; color: #7f8c8d; padding: 20px;">No employee records found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>