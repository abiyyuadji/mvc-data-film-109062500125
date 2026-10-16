<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Film</title>
</head>

<body>

    <h2>Data Film</h2>

    <?php if (isset($_GET['success'])): ?>

        <?php if ($_GET['success'] === 'create'): ?>
            <p>Film berhasil ditambahkan.</p>
        <?php elseif ($_GET['success'] === 'update'): ?>
            <p>Film berhasil diperbarui.</p>
        <?php elseif ($_GET['success'] === 'delete'): ?>
            <p>Film berhasil dihapus.</p>
        <?php endif; ?>

    <?php endif; ?>

    <a href="index.php?page=film&action=create">
        Tambah Film
    </a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">

        <tr>
            <th>Judul</th>
            <th>Genre</th>
            <th>Tahun Rilis</th>
            <th>Durasi</th>
            <th>Sutradara</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($film as $f): ?>

            <tr>

                <td>
                    <?= htmlspecialchars($f['judul']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($f['genre']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($f['tahun_rilis']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($f['durasi']) ?> menit
                </td>

                <td>
                    <?= htmlspecialchars($f['sutradara']) ?>
                </td>

                <td>

                    <a href="index.php?page=film&action=edit&id=<?= $f['id'] ?>">
                        Edit
                    </a>

                    <form
                        method="post"
                        action="index.php?page=film&action=delete"
                        style="display:inline"
                        onsubmit="return confirm('Hapus film ini?')"
                    >

                        <input
                            type="hidden"
                            name="id"
                            value="<?= $f['id'] ?>"
                        >

                        <button type="submit">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>