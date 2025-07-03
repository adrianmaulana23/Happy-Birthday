<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday Humaira! 🎉</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --warm: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            --dark: #1a1a2e;
            --light: #ffffff;
            --glass: rgba(255, 255, 255, 0.1);
            --shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            min-height: 100vh;
            overflow-x: hidden;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Time Lock Screen */
        .time-lock {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: all 0.8s ease;
        }

        .lock-icon {
            font-size: 4rem;
            color: #f093fb;
            margin-bottom: 2rem;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .countdown {
            display: flex;
            gap: 1rem;
            margin: 2rem 0;
            flex-wrap: wrap;
            justify-content: center;
        }

        .time-unit {
            background: var(--glass);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 1rem;
            text-align: center;
            min-width: 80px;
            color: white;
        }

        .time-number {
            font-size: 2rem;
            font-weight: 700;
            display: block;
        }

        .time-label {
            font-size: 0.8rem;
            opacity: 0.8;
        }

        /* Gift Box Opening */
        .gift-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.95) 0%, rgba(22, 33, 62, 0.95) 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            transition: all 0.8s ease;
        }

        .gift-box {
            width: 150px;
            height: 150px;
            position: relative;
            cursor: pointer;
            transition: transform 0.3s ease;
            animation: giftFloat 3s ease-in-out infinite;
        }

        .gift-box:hover {
            transform: scale(1.1);
        }

        @keyframes giftFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .gift-box::before {
            content: '🎁';
            font-size: 8rem;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: giftGlow 2s ease-in-out infinite;
        }

        @keyframes giftGlow {
            0%, 100% { filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.5)); }
            50% { filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.8)); }
        }

        .gift-text {
            color: white;
            font-size: 1.5rem;
            margin-top: 2rem;
            text-align: center;
            animation: textGlow 2s ease-in-out infinite;
        }

        @keyframes textGlow {
            0%, 100% { text-shadow: 0 0 10px rgba(255, 255, 255, 0.5); }
            50% { text-shadow: 0 0 20px rgba(255, 255, 255, 0.8); }
        }

        .open-button {
            background: var(--secondary);
            border: none;
            color: white;
            padding: 15px 40px;
            font-size: 1.2rem;
            border-radius: 50px;
            cursor: pointer;
            margin-top: 2rem;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: var(--shadow);
        }

        .open-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        /* Main Content */
        .main-content {
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s ease;
            padding: 2rem 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .main-content.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .header h1 {
            font-family: 'Dancing Script', cursive;
            font-size: clamp(3rem, 8vw, 6rem);
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            animation: titleFloat 4s ease-in-out infinite;
        }

        @keyframes titleFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .header h2 {
            font-family: 'Pacifico', cursive;
            font-size: clamp(2rem, 5vw, 3rem);
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Glass Cards */
        .glass-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(31, 38, 135, 0.5);
        }

        /* Letter Section */
        .letter {
            position: relative;
            overflow: hidden;
            text-align: justify;
        }

        .letter::before {
            content: '✨';
            position: absolute;
            top: -10px;
            right: -10px;
            font-size: 3rem;
            opacity: 0.3;
            animation: sparkle 3s ease-in-out infinite;
        }

        @keyframes sparkle {
            0%, 100% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(180deg) scale(1.2); }
        }

        .confetti {
            position: fixed;
            width: 10px;
            height: 10px;
            background-color: #f093fb;
            left: 0;
            top: 0;
            border-radius: 50%;
            z-index: -10; /* Behind all content */
            pointer-events: none;
            animation: confettiFall 5s linear forwards;
        }

        .letter h3,
        .glass-card h3 {
            font-family: 'Dancing Script', cursive;
            font-size: 2.5rem;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .letter p {
            color: white;
            line-height: 1.8;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        /* Interactive Gallery */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .photo-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
        }

        .photo-card:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0 25px 50px rgba(31, 38, 135, 0.5);
        }

        .photo-placeholder {
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .photo-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        .photo-caption {
            padding: 1rem;
            color: white;
            font-weight: 500;
            text-align: center;
        }

        /* Interactive Candle */
        .candle-section {
            text-align: center;
            margin: 3rem 0;
        }

        .candle-container {
            position: relative;
            display: inline-block;
            margin: 2rem 0;
        }

        .candle {
            width: 60px;
            height: 150px;
            background: linear-gradient(45deg, #ff6b6b, #ff8e8e, #ffb3b3);
            border-radius: 10px;
            position: relative;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(255, 107, 107, 0.5);
            animation: candleGlow 3s ease-in-out infinite;
        }

        @keyframes candleGlow {
            0%, 100% { box-shadow: 0 10px 30px rgba(255, 107, 107, 0.5); }
            50% { box-shadow: 0 15px 40px rgba(255, 107, 107, 0.8); }
        }

        .flame {
            width: 25px;
            height: 40px;
            background: radial-gradient(circle, #ffd700, #ff6b00);
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            position: absolute;
            top: -35px;
            left: 50%;
            transform: translateX(-50%);
            animation: flicker 1.5s infinite;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        @keyframes flicker {
            0%, 100% { transform: translateX(-50%) scaleY(1) rotate(-2deg); }
            50% { transform: translateX(-48%) scaleY(0.9) rotate(2deg); }
        }

        .flame:hover {
            animation: flameHover 0.5s infinite;
        }

        @keyframes flameHover {
            0%, 100% { transform: translateX(-50%) scale(1); }
            50% { transform: translateX(-50%) scale(1.1); }
        }

        .flame.blown-out {
            opacity: 0;
            animation: none;
        }

        .wish-message {
            color: white;
            font-size: 1.2rem;
            margin-top: 2rem;
            min-height: 60px;
            transition: all 0.5s ease;
        }

        .photo-placeholder {
            width: 100%;
            height: 200px; /* atur tinggi sesuai selera */
            object-fit: cover; /* biar gambar menyesuaikan */
            border-radius: 20px 20px 0 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .countdown {
                gap: 0.5rem;
            }
            
            .time-unit {
                min-width: 60px;
                padding: 0.5rem;
            }
            
            .time-number {
                font-size: 1.5rem;
            }
            
            .glass-card {
                padding: 1.5rem;
            }
            
            .letter p {
                font-size: 1rem;
            }
            
            .gallery {
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 2.5rem;
            }
            
            .header h2 {
                font-size: 1.5rem;
            }
            
            .glass-card {
                padding: 1rem;
            }
            
            .candle {
                width: 40px;
                height: 100px;
            }
            
            .flame {
                width: 20px;
                height: 30px;
            }

            p {
                font-size: 0.9rem;
            }
        }

        /* Hidden states */
        .hidden {
            display: none !important;
        }

        .fade-out {
            opacity: 0;
            pointer-events: none;
        }

        @media (max-width: 375px) {
            /* ====== Header Title ====== */
            .header h1 {
                font-size: 2rem; /* Happy Birthday */
            }

            .header h2 {
                font-size: 1.2rem; /* Humaira! */
            }

            /* ====== Section Titles ====== */
            .letter h3,
            .glass-card h3 {
                font-size: 1.8rem; /* Judul section seperti Birthday Letter, The Birthday Girl */
            }

            /* ====== Gift Box ====== */
            .gift-box {
                width: 100px;
                height: 100px;
            }

            .gift-box::before {
                font-size: 5rem;
            }

            .gift-text {
                font-size: 1rem;
            }

            .open-button {
                font-size: 1rem;
                padding: 10px 25px;
            }

            /* ====== Countdown ====== */
            .time-unit {
                min-width: 50px;
                padding: 0.5rem;
            }

            .time-number {
                font-size: 1.3rem;
            }

            .time-label {
                font-size: 0.7rem;
            }

            /* ====== Candle ====== */
            .candle {
                width: 40px;
                height: 90px;
            }

            .flame {
                width: 15px;
                height: 25px;
            }

            .wish-message {
                font-size: 1rem;
            }

            .glass-card p {
                font-size: 0.7rem;
            }
            p {
                font-size: 0.7rem;
            }
        }

        @media (max-width: 320px) {
            /* ====== Header Title ====== */
            .header h1 {
                font-size: 1.7rem; /* lebih kecil untuk layar 320px */
            }

            .header h2 {
                font-size: 1rem;
            }

            /* ====== Section Titles ====== */
            .letter h3,
            .glass-card h3 {
                font-size: 1.5rem;
            }

            /* ====== Gift Box ====== */
            .gift-box {
                width: 80px;
                height: 80px;
            }

            .gift-box::before {
                font-size: 4rem;
            }

            .gift-text {
                font-size: 0.9rem;
            }

            .open-button {
                font-size: 0.9rem;
                padding: 8px 20px;
            }

            /* ====== Countdown ====== */
            .time-unit {
                min-width: 45px;
                padding: 0.3rem;
            }

            .time-number {
                font-size: 1.1rem;
            }

            .time-label {
                font-size: 0.65rem;
            }

            /* ====== Candle ====== */
            .candle {
                width: 30px;
                height: 70px;
            }

            .flame {
                width: 12px;
                height: 20px;
            }

            .wish-message {
                font-size: 1rem;
            }
            .glass-card p {
                font-size: 0.7rem;
            }
            p {
                font-size: 0.7rem;
            }
        }

        .carousel-container {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            align-items: center; /* Vertikal center */
            justify-content: center; /* Horizontal center */
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .photo-card {
            flex: 0 0 300px; /* Lebar setiap foto */
            margin: 0 10px;
        }

        .photo-placeholder {
            width: 300px;
            height: 300px;
            object-fit: cover; /* Biar nggak gepeng */
            border-radius: 15px;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: none; /* hapus background */
            border: none;
            font-size: 3rem;
            color: white; /* warna panah putih */
            cursor: pointer;
            z-index: 10;
        }

        .carousel-btn:hover {
            color: #f0f0f0; /* warna putih sedikit lebih terang saat hover */
        }

        .carousel-btn.prev {
            left: 10px; /* dekatkan ke foto sisi kiri */
        }

        .carousel-btn.next {
            right: 10px; /* dekatkan ke foto sisi kanan */
        }

    </style>
</head>
<body>
    <div class="confetti"></div>

    <!-- Time Lock Screen -->
    <div class="time-lock" id="timeLock">
        <i class="fas fa-lock lock-icon"></i>
        <h2 style="color: white; font-family: 'Pacifico', cursive; margin-bottom: 1rem;">Website Terkunci</h2>
        <p style="color: rgba(255,255,255,0.8); text-align: center; max-width: 500px; margin-bottom: 2rem;">
            Website ucapan ulang tahun ini hanya bisa dibuka setelah tanggal yang sudah ditentukan. Sabar ya! 😊
        </p>
        <div class="countdown" id="countdown">
            <div class="time-unit">
                <span class="time-number" id="days">00</span>
                <span class="time-label">Hari</span>
            </div>
            <div class="time-unit">
                <span class="time-number" id="hours">00</span>
                <span class="time-label">Jam</span>
            </div>
            <div class="time-unit">
                <span class="time-number" id="minutes">00</span>
                <span class="time-label">Menit</span>
            </div>
            <div class="time-unit">
                <span class="time-number" id="seconds">00</span>
                <span class="time-label">Detik</span>
            </div>
        </div>
        <p style="color: rgba(255,255,255,0.6); font-size: 0.9rem;">Target: 6 Oktober 2025</p>
    </div>

    <!-- Gift Box Opening -->
    <div class="gift-container hidden" id="giftContainer">
        <div class="gift-box" id="giftBox">
            <div class="gift-sparkles"></div>
        </div>
        <div class="gift-text">
            <h3 style="font-family: 'Pacifico', cursive; margin-bottom: 1rem;">Ada sesuatu untukmu! ✨</h3>
            <p>Klik kotak kadonya untuk membuka kejutan spesial</p>
        </div>
        <button class="open-button" id="openGift">
            <i class="fas fa-gift"></i> Buka Sekarang!
        </button>
    </div>

    <!-- Main Content -->
    <div class="main-content hidden" id="mainContent">
        <div class="header">
            <br>
            <h1>Happy Birthday</h1>
            <h2>Humaira! 🎂</h2>
        </div>

        <!-- Letter Section -->
        <div class="glass-card letter">
            <h3>Birthday Letter</h3>
            <p>Happy Birthday, Humaira! 🎉</p>
            <p>Anjir udah ulang tahun lagi aja luu, padahal rasanya baru kemarin gw nulis kata kata ini WKWKWKW. gw literally nulis ini di tanggal gw ngirim website nya pertama kali. ini gw time travel dari tanggal 4 Juli.</p>
            <p>Gw gabakal nulis yang mellow mellow gitu sih ya, tapi yaa… gw seneng aja gitu bisa kenal lu, bisa bareng di room chat ngobrol ngobrol banyak, kadang gw ngerasa sendiri dan gaada temen ngobrol, tapi gara gara lu gw bisa ngobrolin hal apapun, sampe hal ga penting juga diomongin.</p>
            <p>Semoga di umur lu yang sekarang ini, makin banyak hal baik yang dateng ke hidup lu ya. lu deserve hal-hal yang bikin lu bahagia, yang bikin lu senyum, yang bikin lu ngerasa disayang dengan cara yang gak setengah-setengah dengan orang orang di sekitar lu.</p>
            <p>Btw, thank you udah pernah jadi temen ngobrol yang asik, temen random, temen yang... yah, kadang bisa bikin hari ga suram suram amat lah. lu mungkin gak nyadar, tapi hal-hal kecil yang lu lakuin tuh ngaruh banget ke gw.</p>
            <p>So... happy birthday ya. jangan lupa bahagia, jangan lupa jaga diri. dan jangan lupa juga istirahat kalo capek. lu manusia bukan mesin kopi. gw harap selama ini gw ngasih dampak yang baik buat lu. and i hope the future is kind to you.</p>
            <p>Take care yaa, see you again somewhere, sometime</p>
            <p style="text-align: right; font-weight: 600; margin-top: 2rem;">From a stranger ✨</p>
        </div>


    <div class="glass-card">
    <h3>The Birthday Girl</h3>
    <button class="carousel-btn prev" onclick="moveCarousel(-1)">&#10094;</button>
    <div class="carousel-container">
        <div class="carousel-track" id="carouselTrack">
            <div class="photo-card">
                <img src="images/photo1.jpg" alt="Foto Kenangan 1" class="photo-placeholder">
                <div class="photo-caption">Payungan bisi hujan</div>
            </div>
            <div class="photo-card">
                <img src="images/photo2.jpg" alt="Foto Kenangan 2" class="photo-placeholder">
                <div class="photo-caption">Wajah senang dapat daging</div>
            </div>
            <div class="photo-card">
                <img src="images/photo3.jpg" alt="Foto Kenangan 3" class="photo-placeholder">
                <div class="photo-caption">Jalan jalan ceunah</div>
            </div>
            <div class="photo-card">
                <img src="images/photo4.jpg" alt="Foto Kenangan 3" class="photo-placeholder">
                <div class="photo-caption">OTW Berenang</div>
            </div>
            <div class="photo-card">
                <img src="images/photo5.jpg" alt="Foto Kenangan 3" class="photo-placeholder">
                <div class="photo-caption">Gabut Nunggu Kelas</div>
            </div>
            <div class="photo-card">
                <img src="images/photo6.jpg" alt="Foto Kenangan 3" class="photo-placeholder">
                <div class="photo-caption">"Mwehehehe"</div>
            </div>
            <div class="photo-card">
                <img src="images/photo7.jpg" alt="Foto Kenangan 3" class="photo-placeholder">
                <div class="photo-caption">Make Up Baru</div>
            </div>
            <div class="photo-card">
                <img src="images/photo8.jpg" alt="Foto Kenangan 3" class="photo-placeholder">
                <div class="photo-caption">Helm Gas LPG</div>
            </div>
            <div class="photo-card">
                <img src="images/photo9.jpg" alt="Foto Kenangan 3" class="photo-placeholder">
                <div class="photo-caption">Dapat Duit Bos</div>
            </div>
            <div class="photo-card">
                <img src="images/photo10.jpg" alt="Foto Kenangan 3" class="photo-placeholder">
                <div class="photo-caption">Sang Tentara Unjani</div>
            </div>
            <!-- Tambahkan lebih banyak foto di sini -->
        </div>
    </div>
    <button class="carousel-btn next" onclick="moveCarousel(1)">&#10095;</button>
</div>

        <!-- Interactive Candle -->
        <div class="glass-card">
            <h3>Make a Wish!</h3>
            <div class="candle-section">
                <div class="candle-container">
                    <div class="candle">
                        <div class="flame" id="flame" onclick="blowCandle()"></div>
                    </div>
                </div>
                <div class="wish-message" id="wishMessage">
                    Klik lilinnya untuk meniup dan membuat permohonan! 🕯️
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="glass-card" style="text-align: center; margin-top: 3rem;">
            <p style="color: white; font-size: 1rem;">
                Website buatan sendiri ni bos 
            </p>
            <p style="color: rgba(255,255,255,0.7); font-size: 0.7rem; margin-top: 0.5rem;">
                Happy Birthday, once again! ✨
            </p>
        </div>
    </div>

    <script>
        // Target date: October 6, 2025 (WIB)
    const targetDate = new Date('October 6, 2025 00:00:00 GMT+0700').getTime();

    // Elements
    const timeLock = document.getElementById('timeLock');
    const giftContainer = document.getElementById('giftContainer');
    const mainContent = document.getElementById('mainContent');
    const giftBox = document.getElementById('giftBox');
    const openGift = document.getElementById('openGift');
    const flame = document.getElementById('flame');
    const wishMessage = document.getElementById('wishMessage');
    const musicBtn = document.getElementById('musicBtn');
        
        let isPlaying = false;
        let candleBlown = false;

        // Fetch server time
    async function getServerTime() {
        try {
            const res = await fetch("https://worldtimeapi.org/api/timezone/Asia/Jakarta");
            const data = await res.json();
            return new Date(data.datetime).getTime();
        } catch (error) {
            console.error("Gagal mengambil waktu server:", error);
            // Fallback ke waktu lokal jika gagal
            return new Date().getTime();
        }
    }

        // Check if website should be unlocked
    async function checkTimelock() {
        const now = await getServerTime();
        const distance = targetDate - now;

        if (distance < 0) {
            // Website is unlocked
            timeLock.classList.add('fade-out');
            setTimeout(() => {
                timeLock.classList.add('hidden');
                giftContainer.classList.remove('hidden');
                createParticles();
                createBalloons();
            }, 800);
            return;
        }
            
            // Update countdown
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById('days').textContent = days.toString().padStart(2, '0');
        document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
        document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
        document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
    }


        // Open gift box
        function openGiftBox() {
            giftContainer.classList.add('fade-out');
            setTimeout(() => {
                giftContainer.classList.add('hidden');
                mainContent.classList.remove('hidden');
                mainContent.classList.add('visible');
                
                // Create confetti effect
                createConfetti();
                // Pindahkan setInterval ke LUAR fungsi createConfetti
                const confettiInterval = setInterval(createConfetti, 1000); // Setiap 1 detik
            }, 800);
        }

        // Create confetti effect (reduced amount)
        function createConfetti() {
            const colors = ['#ff6b6b', '#4ecdc4', '#45b7d1', '#96ceb4', '#ffeaa7', '#dda0dd', '#98d8c8'];
            for (let i = 0; i < 30; i++) {
                const confetti = document.createElement('div');
                confetti.classList.add('confetti'); // ⬅️ Gunakan class confetti
                confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                confetti.style.left = Math.random() * 100 + '%';
                confetti.style.top = '-10px';
                confetti.style.animation = `confettiFall ${Math.random() * 3 + 2}s linear forwards`;
                document.body.appendChild(confetti);

                // Hapus confetti setelah animasi selesai
                setTimeout(() => {
                    confetti.remove();
                }, 5000);
            }
        }
        // Blow candle function
        function blowCandle() {
            if (!candleBlown) {
                flame.classList.add('blown-out');
                candleBlown = true;
                
                setTimeout(() => {
                    wishMessage.innerHTML = `
                        <div style="animation: fadeInUp 1s ease;">
                            <i class="fas fa-star" style="color: #ffd700;"></i>
                            Semoga semua keinginanmu terkabul! 
                            <i class="fas fa-star" style="color: #ffd700;"></i>
                            <br>
                            <span style="font-size: 0.9rem; opacity: 0.8;">
                                Happy Birthday, Humaira! ✨🎂🎉
                            </span>
                        </div>
                    `;
                    
                    // Create wish sparkles
                    createWishSparkles();
                }, 500);
            }
        }

        // Create wish sparkles (reduced amount)
        function createWishSparkles() {
            const sparkles = ['✨', '⭐', '💫', '🌟', '💖'];
            for (let i = 0; i < 20; i++) { // Reduced from 20 to 8
                const sparkle = document.createElement('div');
                sparkle.textContent = sparkles[Math.floor(Math.random() * sparkles.length)];
                sparkle.style.position = 'fixed';
                sparkle.style.fontSize = '1.5rem';
                sparkle.style.left = Math.random() * 100 + '%';
                sparkle.style.top = Math.random() * 100 + '%';
                sparkle.style.zIndex = '1000';
                sparkle.style.pointerEvents = 'none';
                sparkle.style.animation = `sparkleAnimation ${Math.random() * 2 + 1}s ease-out forwards`;
                document.body.appendChild(sparkle);
                
                setTimeout(() => {
                    sparkle.remove();
                }, 3000);
            }
        }

        // Show photo message
        function showPhotoMessage(photoNumber) {
            const messages = [
                "Foto pertama yang penuh kenangan indah! 📸✨",
                "Momen bahagia yang tak terlupakan! 💕🌟",
                "Senyuman termanis di hari spesial! ⭐💖"
            ];
            
            alert(messages[photoNumber - 1]);
        }


        // Event listeners
        openGift.addEventListener('click', openGiftBox);
        giftBox.addEventListener('click', openGiftBox);

        // Initialize
        checkTimelock();
        setInterval(checkTimelock, 1000);

        // Add CSS animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes confettiFall {
                to {
                    transform: translateY(100vh) rotate(360deg);
                    opacity: 0;
                }
            }
            
            @keyframes sparkleAnimation {
                0% {
                    transform: scale(0) rotate(0deg);
                    opacity: 1;
                }
                50% {
                    transform: scale(1.2) rotate(180deg);
                    opacity: 1;
                }
                100% {
                    transform: scale(0) rotate(360deg);
                    opacity: 0;
                }
            }
            
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        document.head.appendChild(style);

        // Add touch support for mobile
        if ('ontouchstart' in window) {
            document.addEventListener('touchstart', function() {}, {passive: true});
        }

        // Add page visibility API to pause animations when tab is not active
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                // Pause animations
                document.querySelectorAll('*').forEach(el => {
                    if (el.style.animationPlayState !== 'paused') {
                        el.style.animationPlayState = 'paused';
                    }
                });
            } else {
                // Resume animations
                document.querySelectorAll('*').forEach(el => {
                    if (el.style.animationPlayState === 'paused') {
                        el.style.animationPlayState = 'running';
                    }
                });
            }
        });

        // Add smooth scroll behavior
        document.documentElement.style.scrollBehavior = 'smooth';

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            setTimeout(() => {
                document.body.style.transition = 'opacity 1s ease';
                document.body.style.opacity = '1';
            }, 100);
        });

        let carouselIndex = 0;

        function moveCarousel(direction) {
            const track = document.getElementById('carouselTrack');
            const cards = track.querySelectorAll('.photo-card');
            const cardWidth = cards[0].offsetWidth + 20; // Lebar + margin

            carouselIndex += direction;

            // Looping: jika sampai ujung balik ke awal
            if (carouselIndex < 0) {
                carouselIndex = cards.length - 1;
            } else if (carouselIndex >= cards.length - 2) {
                carouselIndex = 0;
            }

            track.style.transform = `translateX(-${carouselIndex * cardWidth}px)`;
        }

    </script>
</body>
</html>