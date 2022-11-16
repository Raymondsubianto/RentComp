<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">RentComp</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="/welcome">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="/peminjaman">
         <i class='bx bx-user' ></i>
         <span class="links_name">Peminjaman</span>
       </a>
       <span class="tooltip">Peminjaman</span>
     </li>
     <li>
       <a href="/stok">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Stok Barang</span>
       </a>
       <span class="tooltip">Stok Barang</span>
     </li>
     <li>
       <a href="/dipinjam">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Barang Dipinjam</span>
       </a>
       <span class="tooltip">Barang Dipinjam</span>
     </li>
     <li>
       <a href="history">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Riwayat Peminjaman</span>
       </a>
       <span class="tooltip">Riwayat Peminjaman</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
            <div class="name">Hai, {{ $name }}!<div>
             <div class="job">Peminjaman Barang</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <div class="container home-section">
      @yield('section')
  </div>
  <script src="script.js"></script>
</body>
</html>