<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mock Data</title>
</head>
<body>
    <h1>Mock Data</h1>

    <table>
        <thead>
            <tr>
                <th>Module ID</th>
                <th>Language ID</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Description</th>
                <th>Button Title</th>
                <th>Button Link</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Deleted At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mockData as $data): ?>
            <tr>
                <td><?= $data['moduleId'] ?></td>
                <td><?= $data['languageId'] ?></td>
                <td><?= $data['title'] ?></td>
                <td><?= $data['subtitle'] ?></td>
                <td><?= $data['description'] ?></td>
                <td><?= $data['buttonTitle'] ?></td>
                <td><?= $data['buttonLink'] ?></td>
                <td><?= $data['createdAt'] ?></td>
                <td><?= $data['updatedAt'] ?></td>
                <td><?= $data['deletedAt'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
