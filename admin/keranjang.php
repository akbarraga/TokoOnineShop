<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Belanja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }
        .product {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            max-width: 200px;
        }
        .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        #cart {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>

</head>
<body>
    <div id="product-list">
        <div class="product" onclick="addToCart('Iphone 11', 6000000)">
            <img src="images/iPhone 11.jpg" alt="Iphone 11">
            Iphone 11 - Rp. 6.000.000
        </div>
        <div class="product" onclick="addToCart('Iphone 11 promax', 6700000)">
            <img src="images/iPhone11pm.jpg" alt="Iphone 11 promax">
            Iphone 11 promax - Rp. 6.700.000
        </div>
        <div class="product" onclick="addToCart('Iphone 12', 9000000)">
            <img src="images/iphone12promax.jpg" alt="Iphone 12">
            Iphone 12 - Rp. 9.000.000
        </div>
    </div>

    <div id="cart">
        <h2>Keranjang Belanja</h2>
        <ul id="cart-items"></ul>
        <p id="total">Total: Rp. 0</p>
        <a href="login2.html" class ="btn btn-primary btn-lg">Beli</a>
        <script>
            document.getElementById("beliButton").addEventListener("click", function() {
               // Periksa apakah pengguna sudah login atau belum
               if (userLoggedIn) {
                  // Jika sudah login, arahkan ke halaman pembelian
                  window.location.href = "buy.html";
               } else {
                  // Jika belum login, arahkan ke halaman login
                  window.location.href = "login1.html";
               }
            });
         </script>
                           
    </div>

    <script>
        let cartItems = [];

        function addToCart(productName, price) {
            cartItems.push({ name: productName, price: price });
            updateCart();
        }

        function formatRupiah(amount) {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(amount);
        }

        function updateCart() {
            const cartList = document.getElementById('cart-items');
            const totalElement = document.getElementById('total');
            let total = 0;

            // Clear previous items
            cartList.innerHTML = '';

            // Update cart items
            cartItems.forEach(item => {
                const listItem = document.createElement('li');
                listItem.textContent = `${item.name} - ${formatRupiah(item.price)}`;
                cartList.appendChild(listItem);

                total += item.price;
            });

            // Update total
            totalElement.textContent = `Total: ${formatRupiah(total)}`;
        }
    </script>
</body>
</html>
