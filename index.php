<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kişisel web sitem. Hakkımda, projelerim ve iletişim bilgilerimi burada bulabilirsiniz.">
    <title>Ana Sayfa | Benim Portföyüm</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #343a40;
            --secondary: #6C5CE7;
            --accent: #0984E3;
            --bg: #f8f9fa;
            --text: #212529;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }
        header {
            background-color: var(--primary);
            color: white;
            padding: 1rem 2rem;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        header h1 {
            font-size: 1.8rem;
        }
        nav {
            margin-top: 0.5rem;
        }
        nav a {
            color: white;
            margin: 0 1rem;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        nav a:hover {
            color: var(--accent);
        }
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 4rem 2rem;
            background: linear-gradient(135deg, var(--secondary), var(--accent));
            color: white;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
        }
        .sections {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            padding: 2rem;
        }
        .card {
            background-color: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .card h2 {
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }
        .card p {
            color: #555;
        }
        .card a {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background-color: var(--accent);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s;
        }
        .card a:hover {
            background-color: var(--secondary);
        }
        footer {
            text-align: center;
            padding: 1.5rem 2rem;
            background-color: #dee2e6;
            margin-top: 2rem;
            font-size: 0.9rem;
        }
        @media (max-width: 600px) {
            .hero h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Merhaba, ben Merve</h1>
        <nav>
            <a href="/">Ana Sayfa</a>
            <a href="hakkimda.html">Hakkımda</a>
            <a href="projeler.html">Projeler</a>
            <a href="iletisim.html">İletişim</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Kişisel Web Siteme Hoş Geldiniz!</h1>
        <p>Benimle ilgili bilgilere, projelerime ve iletişim bilgilerime buradan ulaşabilirsiniz.</p>
    </section>

    <section class="sections">
        <div class="card">
            <h2>📖 Hakkımda</h2>
            <p>Beni daha yakından tanımak için buraya tıklayın.</p>
            <a href="hakkimda.html" aria-label="Hakkımda sayfasına git">Devamını Oku</a>
        </div>

        <div class="card">
            <h2>💼 Projeler</h2>
            <p>Üzerinde çalıştığım projeleri görmek için buraya tıklayın.</p>
            <a href="projeler.html" aria-label="Projeler sayfasına git">Projeleri Gör</a>
        </div>

        <div class="card">
            <h2>📨 İletişim</h2>
            <p>Bana ulaşmak için iletişim sayfasını ziyaret edebilirsiniz.</p>
            <a href="iletisim.html" aria-label="İletişim sayfasına git">İletişime Geç</a>
        </div>
    </section>

    <footer>
        &copy; 2025 Merve. Tüm hakları saklıdır.
    </footer>
</body>
</html>
