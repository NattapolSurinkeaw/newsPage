
<?php $Title = "หมวดหมู่ข่าว" ?>
<?php require_once __DIR__ . "/../layouts/header.php"; ?>

<?php $page_url = "" ?> 
<?php echo $category['name']; ?>
<main id="main-content">

  <!-- ===== ส่วนหัวหมวดหมู่ ===== -->
  <header class="cat-header cat-header--<?= htmlspecialchars($cat['tag'], ENT_QUOTES, 'UTF-8') ?>">
    <div class="wrap cat-header-grid">
      <div>
        <span class="eyebrow">หมวดหมู่</span>
        <h1 class="cat-title">
          <svg class="icon"><use href="#<?= htmlspecialchars($cat['icon'], ENT_QUOTES, 'UTF-8') ?>"/></svg>
          ข่าว<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>
        </h1>
        <p class="cat-desc"><?= htmlspecialchars($cat['desc'], ENT_QUOTES, 'UTF-8') ?></p>
        <p class="cat-meta">
          <span class="tag tag--<?= htmlspecialchars($cat['tag'], ENT_QUOTES, 'UTF-8') ?>">
            <svg class="icon"><use href="#<?= htmlspecialchars($cat['icon'], ENT_QUOTES, 'UTF-8') ?>"/></svg>
            <?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>
          </span>
          <span>อัปเดตล่าสุด: <time datetime="<?= date('Y-m-d\TH:i') ?>"><?= date('j M Y • H:i') ?> น.</time></span>
          <a class="rss-link" href="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>/rss.xml" aria-label="RSS ของหมวด<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>">
            <svg class="icon"><use href="#icon-rss"/></svg> RSS
          </a>
        </p>
      </div>
      <div class="thumb thumb--<?= htmlspecialchars($cat['tag'], ENT_QUOTES, 'UTF-8') ?>" role="img" aria-label="ภาพประกอบหมวด<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>">
        <svg class="icon"><use href="#<?= htmlspecialchars($cat['icon'], ENT_QUOTES, 'UTF-8') ?>"/></svg>
        <span><?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?></span>
      </div>
    </div>
  </header>

  <!-- ===== เนื้อหา: รายการข่าว + แถบข้าง ===== -->
  <div class="wrap content-grid">

    <section aria-labelledby="latest-heading">
      <div class="section-heading">
        <h2 id="latest-heading">ข่าว<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>ล่าสุด</h2>
        <span class="see-all" aria-hidden="true">หน้า 1 / 12</span>
      </div>

      <div class="article-list">
        <?php
        // ตัวอย่างรายการข่าว (ในงานจริงดึงจาก DB) — วนลูปสร้าง 8 รายการ
        $articles = [
          ['slug'=>'sample-1','time'=>'2026-07-05T09:30','date'=>'5 ก.ค. 2569 · 09:30 น.','title'=>"สรุปประเด็นเด่น{$cat['name']}วันนี้ ที่คุณไม่ควรพลาด",'excerpt'=>'รวม 5 ประเด็นที่กำลังถูกพูดถึงมากที่สุด พร้อมบริบทเบื้องหลังที่ช่วยให้เข้าใจง่ายขึ้น'],
          ['slug'=>'sample-2','time'=>'2026-07-05T08:10','date'=>'5 ก.ค. 2569 · 08:10 น.','title'=>"วิเคราะห์แนวโน้ม{$cat['name']}ระยะสั้น จากผู้เชี่ยวชาญ",'excerpt'=>'มองภาพรวมสถานการณ์ในช่วงครึ่งหลังของปี พร้อมปัจจัยที่ต้องจับตา'],
          ['slug'=>'sample-3','time'=>'2026-07-05T07:00','date'=>'5 ก.ค. 2569 · 07:00 น.','title'=>"{$cat['name']}เช้านี้: สรุปข่าวที่กำลังมาแรง",'excerpt'=>'อัปเดตรายชั่วโมง คัดเฉพาะประเด็นที่ส่งผลต่อชีวิตประจำวัน'],
          ['slug'=>'sample-4','time'=>'2026-07-04T22:45','date'=>'4 ก.ค. 2569 · 22:45 น.','title'=>"{$cat['name']}ล่าสุด: เหตุการณ์สำคัญที่เกิดขึ้นเมื่อคืน",'excerpt'=>'ไทม์ไลน์ย่อย พร้อมลิงก์อ่านรายละเอียดเชิงลึกของแต่ละช่วงเวลา'],
          ['slug'=>'sample-5','time'=>'2026-07-04T18:20','date'=>'4 ก.ค. 2569 · 18:20 น.','title'=>"{$cat['name']}เย็นนี้: สิ่งที่ต้องรู้ก่อนวันใหม่เริ่ม",'excerpt'=>'สรุปสั้น ใช้เวลาอ่านไม่ถึง 2 นาที ครอบคลุมทุกมิติที่สำคัญ'],
          ['slug'=>'sample-6','time'=>'2026-07-04T15:05','date'=>'4 ก.ค. 2569 · 15:05 น.','title'=>"{$cat['name']}บ่ายนี้: รวมข่าวเด่นจากทุกภูมิภาค",'excerpt'=>'คัดสรรเรื่องที่ได้รับความสนใจสูงสุด เรียงตามลำดับความน่าสนใจ'],
          ['slug'=>'sample-7','time'=>'2026-07-04T11:30','date'=>'4 ก.ค. 2569 · 11:30 น.','title'=>"{$cat['name']}: ข้อมูลเชิงลึกที่หลายคนอาจมองข้าม",'excerpt'=>'เจาะประเด็นที่ไม่ค่อยถูกพูดถึง พร้อมตัวเลขสนับสนุนอย่างชัดเจน'],
          ['slug'=>'sample-8','time'=>'2026-07-04T09:00','date'=>'4 ก.ค. 2569 · 09:00 น.','title'=>"{$cat['name']}เมื่อวาน: เหตุการณ์ที่กำลังส่งผลต่อเนื่อง",'excerpt'=>'ย้อนดูเหตุการณ์สำคัญ พร้อมวิเคราะห์ผลกระทบในระยะถัดไป'],
        ];
        
        foreach ($articles as $i => $a): ?>
        <article class="article-row">
          <div class="thumb thumb--sm thumb--<?= htmlspecialchars($cat['tag'], ENT_QUOTES, 'UTF-8') ?>" role="img" aria-label="ภาพประกอบข่าว<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>">
            <svg class="icon"><use href="#<?= htmlspecialchars($cat['icon'], ENT_QUOTES, 'UTF-8') ?>"/></svg>
            <span><?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?></span>
          </div>
          <div>
            <span class="tag tag--<?= htmlspecialchars($cat['tag'], ENT_QUOTES, 'UTF-8') ?>">
              <svg class="icon"><use href="#<?= htmlspecialchars($cat['icon'], ENT_QUOTES, 'UTF-8') ?>"/></svg>
              <?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>
            </span>
            <h3>
              <a href="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>/article/<?= htmlspecialchars($a['slug'], ENT_QUOTES, 'UTF-8') ?>">
                <?= htmlspecialchars($a['title'], ENT_QUOTES, 'UTF-8') ?>
              </a>
            </h3>
            <p><?= htmlspecialchars($a['excerpt'], ENT_QUOTES, 'UTF-8') ?></p>
            <p class="meta">
              <a href="/author/newsroom">กองบรรณาธิการ</a> ·
              <time datetime="<?= htmlspecialchars($a['time'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($a['date'], ENT_QUOTES, 'UTF-8') ?></time>
            </p>
          </div>
        </article>
        <?php endforeach ?>
      </div>

      <!-- เพจจิเนชัน -->
      <nav class="pagination" aria-label="เพจจิเนชันข่าว<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>">
        <a class="page-link page-link--current" href="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>?page=1" aria-current="page">1</a>
        <a class="page-link" href="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>?page=2">2</a>
        <a class="page-link" href="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>?page=3">3</a>
        <a class="page-link page-link--next" href="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>?page=2" rel="next">ถัดไป ›</a>
      </nav>
    </section>

    <aside class="sidebar" aria-label="แถบข้างเสริม">

      <!-- หมวดหมู่ทั้งหมด -->
      <nav class="widget-box" aria-label="ลิงก์หมวดหมู่ทั้งหมด">
        <h2 class="widget-title">หมวดหมู่ทั้งหมด</h2>
        <ul class="cat-links">
          <?php foreach ($categories as $key => $c): ?>
          <li>
            <a href="/category.php?cat=<?= htmlspecialchars($key, ENT_QUOTES, 'UTF-8') ?>"
               class="<?= $key===$slug ? 'is-active' : '' ?>"
               <?= $key===$slug ? 'aria-current="page"' : '' ?>>
              <span class="label"><span class="dot"></span><?= htmlspecialchars($c['name'], ENT_QUOTES, 'UTF-8') ?></span>
              <span class="count"><?= (string)(120 - array_search($key, array_keys($categories))*7) ?></span>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <!-- ข่าวยอดนิยมในหมวดนี้ -->
      <div class="widget-box">
        <h2 class="widget-title"><svg class="icon"><use href="#icon-fire"/></svg>ยอดนิยมในหมวด<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?></h2>
        <ol class="rank-list">
          <li>
            <span class="rank-num" aria-hidden="true">01</span>
            <div>
              <h3><a href="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>/article/popular-1">อันดับ 1: ประเด็น<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>ที่ถูกแชร์มากที่สุดสัปดาห์นี้</a></h3>
              <p class="meta"><svg class="icon"><use href="#icon-trend"/></svg>อ่าน 18.5k ครั้ง</p>
            </div>
          </li>
          <li>
            <span class="rank-num" aria-hidden="true">02</span>
            <div>
              <h3><a href="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>/article/popular-2">อันดับ 2: สรุปเรื่อง<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>ที่คนพูดถึงทั้งออนไลน์และออฟไลน์</a></h3>
              <p class="meta"><svg class="icon"><use href="#icon-trend"/></svg>อ่าน 14.2k ครั้ง</p>
            </div>
          </li>
          <li>
            <span class="rank-num" aria-hidden="true">03</span>
            <div>
              <h3><a href="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>/article/popular-3">อันดับ 3: เจาะมุมมองที่หลากหลายเกี่ยวกับ<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?></a></h3>
              <p class="meta"><svg class="icon"><use href="#icon-trend"/></svg>อ่าน 11.8k ครั้ง</p>
            </div>
          </li>
          <li>
            <span class="rank-num" aria-hidden="true">04</span>
            <div>
              <h3><a href="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>/article/popular-4">อันดับ 4: ไทม์ไลน์เหตุการณ์สำคัญด้าน<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?></a></h3>
              <p class="meta"><svg class="icon"><use href="#icon-trend"/></svg>อ่าน 9.6k ครั้ง</p>
            </div>
          </li>
          <li>
            <span class="rank-num" aria-hidden="true">05</span>
            <div>
              <h3><a href="<?= htmlspecialchars($page_url, ENT_QUOTES, 'UTF-8') ?>/article/popular-5">อันดับ 5: คำถามที่พบบ่อยเกี่ยวกับ<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>ช่วงนี้</a></h3>
              <p class="meta"><svg class="icon"><use href="#icon-trend"/></svg>อ่าน 7.4k ครั้ง</p>
            </div>
          </li>
        </ol>
      </div>

      <!-- Newsletter -->
      <div class="newsletter-box">
        <h2><svg class="icon"><use href="#icon-mail"/></svg>รับข่าว<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>ทางอีเมล</h2>
        <p>สรุปข่าว<?= htmlspecialchars($cat['name'], ENT_QUOTES, 'UTF-8') ?>สำคัญประจำวัน ส่งตรงถึงกล่องจดหมายทุกเช้า</p>
        <form action="/subscribe" method="post">
          <label for="email" hidden>อีเมลของคุณ</label>
          <input type="hidden" name="category" value="<?= htmlspecialchars($slug, ENT_QUOTES, 'UTF-8') ?>">
          <input type="email" id="email" name="email" placeholder="อีเมลของคุณ" required>
          <button type="submit">สมัคร</button>
        </form>
      </div>

    </aside>
  </div>

</main>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>