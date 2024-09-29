<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Videografi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Kategori Videografi</h1>

        <div class="videography-list">
            <div class="videography-item">
                <img src="https://via.placeholder.com/400x250" alt="Video 1">
                <h2>Judul Video 1</h2>
                <p>Ini adalah deskripsi singkat video pertama.</p>
            </div>

            <div class="videography-item">
                <img src="https://via.placeholder.com/400x250" alt="Video 2">
                <h2>Judul Video 2</h2>
                <p>Ini adalah deskripsi singkat video kedua.</p>
            </div>

            <div class="videography-item">
                <img src="https://via.placeholder.com/400x250" alt="Video 3">
                <h2>Judul Video 3</h2>
                <p>Ini adalah deskripsi singkat video ketiga.</p>
            </div>

            <div class="videography-item">
                <img src="https://via.placeholder.com/400x250" alt="Video 4">
                <h2>Judul Video 4</h2>
                <p>Ini adalah deskripsi singkat video keempat.</p>
            </div>
        </div>
    </div>

</body>
</html>

<style>
    /* style.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.container {
    width: 90%;
    margin: auto;
    padding: 20px;
}

h1 {
    text-align: center;
    margin-bottom: 40px;
    color: #333;
}

.videography-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.videography-item {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    width: 48%;
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease;
}

.videography-item img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.videography-item h2 {
    margin: 20px 0 10px;
    color: #333;
}

.videography-item p {
    color: #666;
    font-size: 14px;
}

.videography-item:hover {
    transform: scale(1.05);
}

@media screen and (max-width: 768px) {
    .videography-item {
        width: 100%;
    }
}
