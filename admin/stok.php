
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="dashboard.css">
    <title>Update Stok Barang</title>
  </head>
  <body>
    <main>
      <div class="header">
        <div class="left">
          <h1>Stok Barang Toko</h1>
        </div>
        <a href="#" class="report1">
          <img src="images/DDNA_STORE.png" alt="">
        </a>
      </div>
          
      <div class="bottom-data" id="produk">
              <div class="stok">
                  <div class="header">
                      <i class="bx bx-receipt"></i>
                      <h3>Stok Produk</h3>
                      <i class="bx bx-filter"></i>
                      <i class="bx bx-search"></i>
                  </div>
                  <table border="1">
                      <tr>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Deskripsi</th>
                          <th>Stok</th>
                      </tr>
                      <?php
                      include 'koneksi.php'; // Include your connection file
                      
                      $sql = "SELECT * FROM barang";
                      $result = $conn->query($sql);
                      if ($result === false) {
                          die("Error dalam menjalankan kueri: " . $conn->error);
                      }
                      if ($result->num_rows > 0) {
                          $no = 1;
                          while($row = $result->fetch_assoc()) {
                              ?>
                              <tr>
                                  <td><?php echo $no++; ?></td>
                                  <td><?php echo htmlspecialchars($row['nama_barang']); ?></td>
                                  <td><?php echo htmlspecialchars($row['deskripsi']); ?></td>
                                  <td><?php echo htmlspecialchars($row['stok']); ?></td>
                              </tr>
                              <?php
                          }
                      } else {
                          ?>
                          <tr>
                              <td colspan="4">Tidak ada data stok barang.</td>
                          </tr>
                          <?php
                      }
                      ?>
                  </table>
              </div>
          </div>
          </main>
    <h1>Update Stok Barang</h1>
    <form action="reduce_stock.php" method="post">
      <label for="item_name">Nama Barang:</label>
      <input type="text" id="item_name" name="item_name" required /><br /><br />
      <label for="quantity">Jumlah:</label>
      <input type="number" id="quantity" name="quantity" required /><br /><br />
      <label for="operation">Operasi:</label>
      <select id="operation" name="operation" required>
        <option value="add">Tambah Stok</option>
        <option value="subtract">Kurangi Stok</option></select
      ><br /><br />
      <input type="submit" value="Update Stok" />
    </form>
  </body>
</html>
