<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Campaign — CharityHub</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app"></div>

    <script>
        axios.interceptors.request.use(config => {
            const token = localStorage.getItem('jwt_token');
            if (token) config.headers.Authorization = `Bearer ${token}`;
            return config;
        });

        // TODO: Form buat campaign baru + Axios POST ke /api/campaigns
    </script>
</body>
</html>
