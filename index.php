<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Summit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/style.css">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <header class="header">
    <picture>
  <source media="(max-width: 390px)" srcset="image/Group 184.png">
  <img src="image/Group 183 (1).png" alt="Event Banner" class="event_banner">
</picture>
       <div class="header-content">
        <img src="image/日本最大規模のフリーランスイベント.png" alt="日本最大規模のフリーランスイベント" class="event_description">
        <img src="image/stocksun_logo.png" alt="StockSun Logo"class="stocksun_logo">
        <picture>
        <source media="(max-width: 390px)" srcset="image/logo.png">
                <img src="image/kv.svg" alt="FREELANCE SUMMIT" class="title">
        </picture>
            <img src="image/sub_title.png" alt="Sub Title" class="sub_title">
        <img src="image/sub_title.png" alt="suponserted by DYMテック" class="hide_dym">
        <img src="image/日付.png" alt="3/4 Sat 10:00-18:00" class="date_image">
            <img src="image/東京国際フォーラム ホールE2.png" alt="東京国際フォーラム ホールE2" class="venue_image">
            <a href="#" class="apply_button_rapper">
                <img src="image/button (1).png" alt="参加申し込みはこちら (無料)" class="apply_button">
            </a>
        </div>
    </header>

    <main class="px-4 py-8">
        <!-- Freelance Summit Section -->
        <section class="text-center">
            <h2 class="text-3xl font-bold">Freelance Summit</h2>
            <p class="mt-4">「FREELANCE SUMMIT」は、StockSun株式会社が主催する日本最大級のフリーランスイベントです。</p>
            <p class="mt-2">様々な業界のフリーランスが一堂に会し、情報交換やビジネスマッチングを行う場として、毎年多くの参加者が集まります。</p>
        </section>

        <!-- Event Summary Section -->
        <section class="mt-12">
            <h2 class="text-2xl font-bold text-center">Event Summary</h2>
            <div class="mt-8 space-y-4">
                <div class="flex justify-between items-center">
                    <span class="font-bold">開催日時</span>
                    <span>3/4 Sat 10:00-18:00</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="font-bold">会場</span>
                    <span>幕張メッセ フォーラムホール</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="font-bold">イベント内容</span>
                    <span>フリーランス向けセミナー、展示会、交流会</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="font-bold">参加費</span>
                    <span>無料</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="font-bold">アクセス</span>
                    <span>幕張メッセ / JR京葉線 海浜幕張駅 徒歩5分</span>
                </div>
            </div>
        </section>

        <!-- Contents Section -->
        <section class="mt-12 bg-yellow-100 py-8">
            <h2 class="text-2xl font-bold text-center">Contents</h2>
            <div class="mt-8 flex justify-center space-x-8">
                <div class="w-1/2">
                    <img src="https://source.unsplash.com/random/400x300" alt="Content 1" class="w-full h-48 object-cover">
                    <p class="mt-2 text-center">フリーランスに役立つセミナー</p>
                </div>
                <div class="w-1/2">
                    <img src="https://source.unsplash.com/random/400x300" alt="Content 2" class="w-full h-48 object-cover">
                    <p class="mt-2 text-center">自分の仕事を見つける展示会</p>
                </div>
            </div>
            <div class="text-center mt-8">
                <button class="px-6 py-2 bg-green-500 rounded-full">参加申し込みはこちら (無料)</button>
            </div>
        </section>

        <!-- Pick Up Section -->
        <section class="mt-12">
            <h2 class="text-2xl font-bold text-center">Pick Up</h2>
            <p class="mt-4 text-center">注目の出展企業をご紹介します。</p>
            <ul class="mt-4 space-y-2 text-center">
                <li>株式会社DYM</li>
                <li>株式会社PE-BANK</li>
                <li>株式会社クラウドワークス</li>
                <li>株式会社ランサーズ</li>
                <li>株式会社サイバーエージェント</li>
            </ul>
        </section>

        <!-- About Exhibitors Section -->
        <section class="mt-12">
            <h2 class="text-2xl font-bold text-center">About Exhibitors</h2>
            <p class="mt-4 text-center">出展企業の詳細情報をご覧ください。</p>
            <ul class="mt-4 space-y-2 text-center">
                <li>オープンな社風の企業</li>
                <li>成長中のベンチャー企業</li>
                <li>フリーランスに優しい企業</li>
                <li>IT系企業</li>
                <li>クリエイティブ系企業</li>
            </ul>
        </section>

        <!-- Time Schedule Section -->
        <section class="mt-12 bg-gray-100 py-8">
            <h2 class="text-2xl font-bold text-center">Time Schedule</h2>
            <div class="mt-8 grid grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded shadow">
                    <img src="https://source.unsplash.com/random/100x100" alt="Speaker 1" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-2 text-center">スピーカー1</p>
                    <p class="text-center">10:00-11:00</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <img src="https://source.unsplash.com/random/100x100" alt="Speaker 2" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-2 text-center">スピーカー2</p>
                    <p class="text-center">11:00-12:00</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <img src="https://source.unsplash.com/random/100x100" alt="Speaker 3" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-2 text-center">スピーカー3</p>
                    <p class="text-center">12:00-13:00</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <img src="https://source.unsplash.com/random/100x100" alt="Speaker 4" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-2 text-center">スピーカー4</p>
                    <p class="text-center">13:00-14:00</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <img src="https://source.unsplash.com/random/100x100" alt="Speaker 5" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-2 text-center">スピーカー5</p>
                    <p class="text-center">14:00-15:00</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <img src="https://source.unsplash.com/random/100x100" alt="Speaker 6" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-2 text-center">スピーカー6</p>
                    <p class="text-center">15:00-16:00</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <img src="https://source.unsplash.com/random/100x100" alt="Speaker 7" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-2 text-center">スピーカー7</p>
                    <p class="text-center">16:00-17:00</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <img src="https://source.unsplash.com/random/100x100" alt="Speaker 8" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-2 text-center">スピーカー8</p>
                    <p class="text-center">17:00-18:00</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <img src="https://source.unsplash.com/random/100x100" alt="Speaker 9" class="w-24 h-24 rounded-full mx-auto">
                    <p class="mt-2 text-center">スピーカー9</p>
                    <p class="text-center">18:00-19:00</p>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="mt-12">
            <h2 class="text-2xl font-bold text-center">FAQ</h2>
            <ul class="mt-4 space-y-2 text-center">
                <li>Q: 参加費はかかりますか？</li>
                <li>A: 無料です。</li>
                <li>Q: 事前申し込みは必要ですか？</li>
                <li>A: はい、必要です。</li>
                <li>Q: 当日の持ち物はありますか？</li>
                <li>A: 名刺をご持参ください。</li>
            </ul>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-4 text-center">
        <p>&copy; 2023 StockSun</p>
    </footer>
</body>
</html>