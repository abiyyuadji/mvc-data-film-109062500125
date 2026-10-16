<?php

class FilmController
{
    public function __construct(private Film $model) {}

    public function index(): void
    {
        $film = $this->model->getAll();

        require __DIR__ . '/../views/film/index.php';
    }

    public function create(): void
    {
        require __DIR__ . '/../views/film/create.php';
    }

    public function store(): void
    {
        $data = $this->validateInput($_POST);

        $this->model->insert($data);

        header('Location: index.php?page=film&success=create');
        exit;
    }

    public function edit(): void
    {
        $id = (int) ($_GET['id'] ?? 0);

        $film = $this->model->findById($id);

        if (!$film) {
            http_response_code(404);
            exit('Data film tidak ditemukan.');
        }

        require __DIR__ . '/../views/film/edit.php';
    }

    public function update(): void
    {
        $id = (int) ($_POST['id'] ?? 0);

        $data = $this->validateInput($_POST);

        $this->model->update($id, $data);

        header('Location: index.php?page=film&success=update');
        exit;
    }

    public function delete(): void
    {
        $id = (int) ($_POST['id'] ?? 0);

        $this->model->delete($id);

        header('Location: index.php?page=film&success=delete');
        exit;
    }

    private function validateInput(array $input): array
    {
        $data = [
            'judul' => trim($input['judul'] ?? ''),
            'genre' => trim($input['genre'] ?? ''),
            'tahun_rilis' => trim($input['tahun_rilis'] ?? ''),
            'durasi' => trim($input['durasi'] ?? ''),
            'sutradara' => trim($input['sutradara'] ?? '')
        ];

        if (
            $data['judul'] === '' ||
            $data['genre'] === '' ||
            $data['tahun_rilis'] === '' ||
            $data['durasi'] === '' ||
            $data['sutradara'] === ''
        ) {
            exit('Semua data film wajib diisi.');
        }

        return $data;
    }
}
?>