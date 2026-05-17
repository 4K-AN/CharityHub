<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CharityHub — Transparansi Donasi</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <h1>CharityHub — Landing Page</h1>
    <div id="app"></div>

    <script>
        // Axios interceptor: sisipkan JWT token di setiap request
        axios.interceptors.request.use(config => {
            const token = localStorage.getItem('jwt_token');
            if (token) {
                config.headers.Authorization = `Bearer ${token}`;
            }
            return config;
        });

        // TODO: Fetch campaigns dari API dan render ke DOM
    </script>
</body>
</html>
