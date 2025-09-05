<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.typekit.net/wtf0tbn.css">
    <link rel="stylesheet" href="https://use.typekit.net/wtf0tbn.css">
</head>
<body>
    
    <header>
        <p class="headerText">
            SMPL <br>
            SNAX
        </p>
        <p style="color:#473f34">Keeping it simple.</p>
        <img src="images/breadcircle.png" alt="" id="headerImg">
    </header>
    

    <section class="order">
        <div class="menuImgs">
            <img src="images/matchacookies.jpg" alt="" id="cookies">
            <img src="images/cake.jpg" alt="" id="cake-image">
        </div>
        <form action="order.php" method="POST">
            <h1>Take Your Pick</h1>
            <div>
                <input type="checkbox" name="bread">
                <label for="bread">Bread</label>
            </div>
            <div>
                <input type="checkbox" name="cake">
                <label for="cake">Cake</label>
            </div>
            <div>
                <input type="checkbox" name="cookies">
                <label for="cookies">Cookies</label>
            </div>
            <div>
                <input type="checkbox" name="donut">
                <label for="donut">Donut</label>
            </div>
            <div>
                <input type="checkbox" name="muffin">
                <label for="muffin">Muffin</label>
            </div>
            <input type="submit" value="Submit" id="submit">
        </form>
    </section>
</body>
</html>