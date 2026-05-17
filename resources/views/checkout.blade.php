<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi — CharityHub</title>
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

        const campaignId = window.location.pathname.split('/')[2];
        // TODO: Form donasi + Axios POST ke /api/campaigns/{id}/donations
    </script>
</body>
</html>
