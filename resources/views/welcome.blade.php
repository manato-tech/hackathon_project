
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col h-screen">
    <header class="absolute inset-x-0 top-0 h-16 bg-slate-800 text-3xl flex justify-between items-center">
    <div class="text-white">    
            ToDoList
        </div>
        <div class="flex space-x-5">
            <div class="text-white">
                <a href="/">トップページ</a>
            </div>
            <div class="text-white">
                <a href="mypage.html" class="mylist">マイリスト</a>
            </div>
            <div class="text-white">
                <a href="toppage.html" class="logout">ログアウト</a>
        
            </div>    
    
        </div>
    </header>

    <main class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="text-center space-y-4">
            <h1 class="text-4xl font-bold mb-6">Aim Higher</h1>
            <intro>少しでもより良い生活を目指して、あなたの仕事や家事の管理を手助けします。</intro>
            <div class="space-x-4">
                <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-blue-500 text-white rounded-lg text-lg">ログイン</a>
                <a href="{{ route('register') }}" class="px-6 py-3 bg-green-500 text-white rounded-lg text-lg">アカウント登録</a>
            </div>
        </div>
    </main>

    <footer>
        <div class="absolute inset-x-0 h-16 bg-slate-300 text-3xl flex items-center justify-center border-t">
            <div class="flex space-x-5">
                <div>    
                    ToDoList
                </div>
                <div class="text-blue-600">
                    <a href="contact.html" class="contact">お問い合わせ</a>
                </div>
            </div>
            <div>    
                はこちら
            </div>
    </footer>
</body>

</html>