<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>シンプルログイン</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-6">ようこそ</h1>
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-500 text-white rounded-lg text-lg">ログイン</a>
            <a href="{{ route('register') }}" class="px-6 py-3 bg-green-500 text-white rounded-lg text-lg">登録</a>
        </div>
    </div>
</body>
</html>
