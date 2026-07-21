<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= public_dir('style.css') ?>">
    <title><?= $Title ?? "PHP simple framework " ?></title>
    <meta name="description" content="ทันข่าว รวมข่าวสารล่าสุด การเมือง เศรษฐกิจ กีฬา บันเทิง เทคโนโลยี อัปเดตตลอดวัน อ่านง่าย โหลดไว">
    <meta name="robots" content="index, follow">
</head>

<!-- ===== ชุดไอคอน SVG (inline, ไม่มี network request เพิ่ม) ===== -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <defs>
    <symbol id="icon-search" viewBox="0 0 24 24"><circle cx="10.5" cy="10.5" r="6.5"/><line x1="15.3" y1="15.3" x2="21" y2="21"/></symbol>
    <symbol id="icon-menu" viewBox="0 0 24 24"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></symbol>
    <symbol id="icon-bolt" viewBox="0 0 24 24"><path d="M13 2 4 14h6l-1 8 9-12h-6z" stroke-linejoin="round"/></symbol>
    <symbol id="icon-arrow-right" viewBox="0 0 24 24"><line x1="4" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></symbol>
    <symbol id="icon-fire" viewBox="0 0 24 24"><path d="M12 2c1 3-3 4-3 8a3 3 0 0 0 6 0c0-1-1-2-1-3 2 1 4 4 4 7a6 6 0 0 1-12 0c0-5 3-6 6-12z" stroke-linejoin="round"/></symbol>
    <symbol id="icon-trend" viewBox="0 0 24 24"><polyline points="3 17 10 10 14 14 21 5"/><polyline points="15 5 21 5 21 11"/></symbol>
    <symbol id="icon-mail" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></symbol>
    <symbol id="icon-politics" viewBox="0 0 24 24"><path d="M12 3 3 8h18z" stroke-linejoin="round"/><line x1="5" y1="8" x2="5" y2="18"/><line x1="9.5" y1="8" x2="9.5" y2="18"/><line x1="14.5" y1="8" x2="14.5" y2="18"/><line x1="19" y1="8" x2="19" y2="18"/><line x1="3" y1="21" x2="21" y2="21"/></symbol>
    <symbol id="icon-economy" viewBox="0 0 24 24"><line x1="4" y1="20" x2="4" y2="12"/><line x1="10" y1="20" x2="10" y2="7"/><line x1="16" y1="20" x2="16" y2="14"/><line x1="20" y1="20" x2="20" y2="4"/></symbol>
    <symbol id="icon-sports" viewBox="0 0 24 24"><path d="M8 4h8l1 5a5 5 0 0 1-10 0z" stroke-linejoin="round"/><path d="M12 14v4"/><path d="M8 21h8"/><path d="M3 5h5"/><path d="M16 5h5"/></symbol>
    <symbol id="icon-entertainment" viewBox="0 0 24 24"><rect x="3" y="8" width="18" height="12" rx="1.5"/><path d="M3 8l3-4h4l-2 4"/><path d="M11 8l3-4h4l-2 4"/></symbol>
    <symbol id="icon-tech" viewBox="0 0 24 24"><rect x="7" y="7" width="10" height="10" rx="1.5"/><line x1="9" y1="2" x2="9" y2="7"/><line x1="15" y1="2" x2="15" y2="7"/><line x1="9" y1="17" x2="9" y2="22"/><line x1="15" y1="17" x2="15" y2="22"/><line x1="2" y1="9" x2="7" y2="9"/><line x1="2" y1="15" x2="7" y2="15"/><line x1="17" y1="9" x2="22" y2="9"/><line x1="17" y1="15" x2="22" y2="15"/></symbol>
    <symbol id="icon-world" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><ellipse cx="12" cy="12" rx="4" ry="9"/><line x1="3" y1="12" x2="21" y2="12"/></symbol>
    <symbol id="icon-lifestyle" viewBox="0 0 24 24"><path d="M12 21s-7-4.5-9-9a5 5 0 0 1 9-3 5 5 0 0 1 9 3c-2 4.5-9 9-9 9z" stroke-linejoin="round"/></symbol>
  </defs>
</svg>

<header class="site-header">
  <div class="wrap header-row">
    <a href="/" class="logo" aria-label="ทันข่าว หน้าแรก">
      <span class="logo-main">ทัน<span class="accent">ข่าว</span></span>
      <span class="logo-tagline">รู้ก่อน • ทันทุกเรื่อง</span>
    </a>

    <form class="search-form" role="search" action="/search" method="get">
      <label for="q" hidden>ค้นหาข่าว</label>
      <input type="search" id="q" name="q" placeholder="ค้นหาข่าว...">
      <button type="submit" aria-label="ค้นหา"><svg class="icon"><use href="#icon-search"/></svg></button>
    </form>

    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <label for="nav-toggle" class="nav-toggle-label" aria-label="เปิดเมนู">
      <svg class="icon"><use href="#icon-menu"/></svg>
    </label>
  </div>

  <nav class="main-nav" aria-label="หมวดหมู่ข่าวหลัก">
    <div class="wrap">
      <ul>
<li><a href="/">หน้าแรก</a></li>
        <li><a href="/category/politics">การเมือง</a></li>
        <li><a href="/category/economy">เศรษฐกิจ</a></li>
        <li><a href="/category/sports">กีฬา</a></li>
        <li><a href="/category/entertainment">บันเทิง</a></li>
        <li><a href="/category/technology">เทคโนโลยี</a></li>
        <li><a href="/category/world">ต่างประเทศ</a></li>
        <li><a href="/category/lifestyle">ไลฟ์สไตล์</a></li>
      </ul>
    </div>
  </nav>
</header>

<body>