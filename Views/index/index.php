<?php $Title = "Main" ?>
<?php require_once __DIR__ . "/../layouts/header.php"; ?>

<main id="main-content">

  <!-- ข่าวเด่นประจำวัน -->
  <div class="hero-band">
    <section class="hero" aria-labelledby="hero-heading">
      <div class="wrap hero-grid">
        <article>
          <span class="tag tag--economy"><svg class="icon"><use href="#icon-economy"/></svg>เศรษฐกิจ</span>
          <h1 id="hero-heading" class="hero-heading">
            <a href="/article.php?id=gdp-growth-forecast">สภาพัฒน์ปรับคาดการณ์ GDP ปีนี้ ชี้ภาคส่งออกและท่องเที่ยวเป็นแรงหนุนหลัก</a>
          </h1>
          <p class="hero-excerpt">
            หน่วยงานด้านเศรษฐกิจเปิดเผยตัวเลขคาดการณ์การเติบโตล่าสุด พร้อมระบุปัจจัยเสี่ยงจากภาวะเศรษฐกิจโลกที่ยังต้องจับตาในช่วงครึ่งปีหลัง
          </p>
          <p class="meta">
            <a href="/author/newsroom">กองบรรณาธิการ</a> ·
            <time datetime="2026-07-05T08:30">5 ก.ค. 2569 · 08:30 น.</time>
          </p>
        </article>
        <div class="thumb thumb--economy" role="img" aria-label="ภาพประกอบข่าวเด่น: การประชุมสภาเศรษฐกิจ">
          <svg class="icon"><use href="#icon-economy"/></svg>
          <span>เศรษฐกิจ</span>
        </div>
      </div>
    </section>
  </div>

  <!-- ข่าวล่าสุด + แถบข้าง -->
  <div class="wrap content-grid">

    <section aria-labelledby="latest-heading">
      <div class="section-heading">
        <h2 id="latest-heading">ข่าวล่าสุด</h2>
        <a class="see-all" href="/latest">ดูทั้งหมด <svg class="icon"><use href="#icon-arrow-right"/></svg></a>
      </div>

      <div class="article-list">

        <article class="article-row">
          <div class="thumb thumb--sm thumb--politics" role="img" aria-label="ภาพประกอบข่าวการเมือง">
            <svg class="icon"><use href="#icon-politics"/></svg><span>การเมือง</span>
          </div>
          <div>
            <span class="tag tag--politics"><svg class="icon"><use href="#icon-politics"/></svg>การเมือง</span>
            <h3><a href="/article.php?id=parliament-session">สภาเปิดสมัยประชุมสามัญ ถกร่างกฎหมายสำคัญ 3 ฉบับ</a></h3>
            <p>เตรียมพิจารณาร่างกฎหมายที่เกี่ยวข้องกับการปฏิรูปโครงสร้างพื้นฐานด้านพลังงาน</p>
            <p class="meta"><time datetime="2026-07-05T07:50">5 ก.ค. 2569 · 07:50 น.</time></p>
          </div>
        </article>

        <article class="article-row">
          <div class="thumb thumb--sm thumb--sports" role="img" aria-label="ภาพประกอบข่าวกีฬา">
            <svg class="icon"><use href="#icon-sports"/></svg><span>กีฬา</span>
          </div>
          <div>
            <span class="tag tag--sports"><svg class="icon"><use href="#icon-sports"/></svg>กีฬา</span>
            <h3><a href="/article.php?id=national-team-win">ทีมชาติไทยเอาชนะคู่แข่ง 2-1 ผ่านเข้ารอบต่อไป</a></h3>
            <p>เกมสูสีตลอด 90 นาที ก่อนตัดสินด้วยประตูชัยในช่วงทดเวลาบาดเจ็บ</p>
            <p class="meta"><time datetime="2026-07-05T07:10">5 ก.ค. 2569 · 07:10 น.</time></p>
          </div>
        </article>

        <article class="article-row">
          <div class="thumb thumb--sm thumb--tech" role="img" aria-label="ภาพประกอบข่าวเทคโนโลยี">
            <svg class="icon"><use href="#icon-tech"/></svg><span>เทคโนโลยี</span>
          </div>
          <div>
            <span class="tag tag--tech"><svg class="icon"><use href="#icon-tech"/></svg>เทคโนโลยี</span>
            <h3><a href="/article.php?id=local-startup-funding">สตาร์ทอัพไทยระดมทุนรอบใหม่ ขยายตลาดสู่ภูมิภาคอาเซียน</a></h3>
            <p>เตรียมเปิดสำนักงานเพิ่มใน 2 ประเทศ พร้อมขยายทีมพัฒนาผลิตภัณฑ์</p>
            <p class="meta"><time datetime="2026-07-05T06:45">5 ก.ค. 2569 · 06:45 น.</time></p>
          </div>
        </article>

        <article class="article-row">
          <div class="thumb thumb--sm thumb--entertainment" role="img" aria-label="ภาพประกอบข่าวบันเทิง">
            <svg class="icon"><use href="#icon-entertainment"/></svg><span>บันเทิง</span>
          </div>
          <div>
            <span class="tag tag--entertainment"><svg class="icon"><use href="#icon-entertainment"/></svg>บันเทิง</span>
            <h3><a href="/article.php?id=film-festival-lineup">เทศกาลภาพยนตร์ประกาศสายประกวดปีนี้ มีผลงานไทยติดโผ 3 เรื่อง</a></h3>
            <p>ผลงานจากผู้กำกับหน้าใหม่ได้รับเสียงตอบรับดีจากกรรมการคัดเลือกรอบแรก</p>
            <p class="meta"><time datetime="2026-07-04T21:20">4 ก.ค. 2569 · 21:20 น.</time></p>
          </div>
        </article>

        <article class="article-row">
          <div class="thumb thumb--sm thumb--world" role="img" aria-label="ภาพประกอบข่าวต่างประเทศ">
            <svg class="icon"><use href="#icon-world"/></svg><span>ต่างประเทศ</span>
          </div>
          <div>
            <span class="tag tag--world"><svg class="icon"><use href="#icon-world"/></svg>ต่างประเทศ</span>
            <h3><a href="/article.php?id=regional-trade-talks">ผู้นำภูมิภาคหารือกรอบความร่วมมือทางการค้าฉบับใหม่</a></h3>
            <p>คาดสรุปรายละเอียดภายในไตรมาสหน้า มุ่งลดอุปสรรคด้านภาษีระหว่างกัน</p>
            <p class="meta"><time datetime="2026-07-04T19:05">4 ก.ค. 2569 · 19:05 น.</time></p>
          </div>
        </article>

        <article class="article-row">
          <div class="thumb thumb--sm thumb--lifestyle" role="img" aria-label="ภาพประกอบข่าวไลฟ์สไตล์">
            <svg class="icon"><use href="#icon-lifestyle"/></svg><span>ไลฟ์สไตล์</span>
          </div>
          <div>
            <span class="tag tag--lifestyle"><svg class="icon"><use href="#icon-lifestyle"/></svg>ไลฟ์สไตล์</span>
            <h3><a href="/article.php?id=urban-farming-trend">เทรนด์ปลูกผักในเมืองมาแรง คนรุ่นใหม่หันทำสวนบนดาดฟ้า</a></h3>
            <p>ชุมชนหลายแห่งเริ่มรวมกลุ่มแบ่งปันพื้นที่และองค์ความรู้ด้านเกษตรในเมือง</p>
            <p class="meta"><time datetime="2026-07-04T17:40">4 ก.ค. 2569 · 17:40 น.</time></p>
          </div>
        </article>

      </div>
    </section>

    <aside class="sidebar" aria-label="แถบข้างเสริม">

      <div class="widget-box">
        <h2 class="widget-title"><svg class="icon"><use href="#icon-fire"/></svg>ข่าวยอดนิยม</h2>
        <ol class="rank-list">
          <li>
            <span class="rank-num" aria-hidden="true">01</span>
            <div>
              <h3><a href="/article.php?id=popular-1">ราคาน้ำมันขยับขึ้นต่อเนื่องสัปดาห์ที่สาม จับตาผลกระทบค่าครองชีพ</a></h3>
              <p class="meta"><svg class="icon"><use href="#icon-trend"/></svg>อ่าน 24.3k ครั้ง</p>
            </div>
          </li>
          <li>
            <span class="rank-num" aria-hidden="true">02</span>
            <div>
              <h3><a href="/article.php?id=popular-2">นักวิทยาศาสตร์ไทยพัฒนาวัสดุรีไซเคิลใหม่ ลดขยะพลาสติกในครัวเรือน</a></h3>
              <p class="meta"><svg class="icon"><use href="#icon-trend"/></svg>อ่าน 19.8k ครั้ง</p>
            </div>
          </li>
          <li>
            <span class="rank-num" aria-hidden="true">03</span>
            <div>
              <h3><a href="/article.php?id=popular-3">สรุปผลบอลนัดสำคัญคืนนี้ พร้อมตารางแข่งขันสัปดาห์หน้า</a></h3>
              <p class="meta"><svg class="icon"><use href="#icon-trend"/></svg>อ่าน 17.2k ครั้ง</p>
            </div>
          </li>
          <li>
            <span class="rank-num" aria-hidden="true">04</span>
            <div>
              <h3><a href="/article.php?id=popular-4">แอปพลิเคชันใหม่ช่วยวางแผนการเงินส่วนบุคคล ยอดดาวน์โหลดพุ่ง</a></h3>
              <p class="meta"><svg class="icon"><use href="#icon-trend"/></svg>อ่าน 14.6k ครั้ง</p>
            </div>
          </li>
          <li>
            <span class="rank-num" aria-hidden="true">05</span>
            <div>
              <h3><a href="/article.php?id=popular-5">เปิดปฏิทินเทศกาลท่องเที่ยวช่วงปลายปี รวมกิจกรรมทั่วประเทศ</a></h3>
              <p class="meta"><svg class="icon"><use href="#icon-trend"/></svg>อ่าน 11.4k ครั้ง</p>
            </div>
          </li>
        </ol>
      </div>

      <nav class="widget-box" aria-label="ลิงก์หมวดหมู่ทั้งหมด">
        <h2 class="widget-title">หมวดหมู่</h2>
        <ul class="cat-links">
          <li><a href="/category.php?cat=politics"><span class="label"><span class="dot"></span>การเมือง</span><span class="count">128</span></a></li>
          <li><a href="/category.php?cat=economy"><span class="label"><span class="dot"></span>เศรษฐกิจ</span><span class="count">96</span></a></li>
          <li><a href="/category.php?cat=sports"><span class="label"><span class="dot"></span>กีฬา</span><span class="count">204</span></a></li>
          <li><a href="/category.php?cat=entertainment"><span class="label"><span class="dot"></span>บันเทิง</span><span class="count">153</span></a></li>
          <li><a href="/category.php?cat=technology"><span class="label"><span class="dot"></span>เทคโนโลยี</span><span class="count">87</span></a></li>
          <li><a href="/category.php?cat=world"><span class="label"><span class="dot"></span>ต่างประเทศ</span><span class="count">72</span></a></li>
        </ul>
      </nav>

      <div class="newsletter-box">
        <h2><svg class="icon"><use href="#icon-mail"/></svg>รับข่าวสารทางอีเมล</h2>
        <p>สรุปข่าวสำคัญประจำวัน ส่งตรงถึงกล่องจดหมายทุกเช้า</p>
        <form action="/subscribe" method="post">
          <label for="email" hidden>อีเมลของคุณ</label>
          <input type="email" id="email" name="email" placeholder="อีเมลของคุณ" required>
          <button type="submit">สมัคร</button>
        </form>
      </div>

    </aside>
  </div>

  <!-- หมวดหมู่: การเมือง -->
  <section class="category-block" aria-labelledby="cat-politics">
    <div class="wrap">
      <div class="section-heading">
        <h2 id="cat-politics">การเมือง</h2>
        <a class="see-all" href="/category.php?cat=politics">ดูทั้งหมด <svg class="icon"><use href="#icon-arrow-right"/></svg></a>
      </div>
      <div class="card-grid">
        <article class="card">
          <div class="thumb thumb--politics" role="img" aria-label="ภาพประกอบข่าวการเมือง"><svg class="icon"><use href="#icon-politics"/></svg><span>การเมือง</span></div>
          <h3><a href="/article.php?id=politics-1">คณะกรรมาธิการเรียกหน่วยงานชี้แจงแผนงบประมาณปีหน้า</a></h3>
          <p>คาดใช้เวลาพิจารณาอีก 2 สัปดาห์ก่อนเสนอเข้าที่ประชุมใหญ่</p>
          <p class="meta"><time datetime="2026-07-04T15:00">4 ก.ค. 2569</time></p>
        </article>
        <article class="card">
          <div class="thumb thumb--politics" role="img" aria-label="ภาพประกอบข่าวการเมือง"><svg class="icon"><use href="#icon-politics"/></svg><span>การเมือง</span></div>
          <h3><a href="/article.php?id=politics-2">พรรคการเมืองเปิดตัวนโยบายด้านสวัสดิการฉบับปรับปรุง</a></h3>
          <p>เน้นกลุ่มผู้สูงอายุและแรงงานนอกระบบเป็นหลัก</p>
          <p class="meta"><time datetime="2026-07-04T13:30">4 ก.ค. 2569</time></p>
        </article>
        <article class="card">
          <div class="thumb thumb--politics" role="img" aria-label="ภาพประกอบข่าวการเมือง"><svg class="icon"><use href="#icon-politics"/></svg><span>การเมือง</span></div>
          <h3><a href="/article.php?id=politics-3">ผู้ตรวจการแผ่นดินรับเรื่องร้องเรียนโครงการก่อสร้างสาธารณะ</a></h3>
          <p>อยู่ระหว่างตรวจสอบขั้นตอนการจัดซื้อจัดจ้างในหลายพื้นที่</p>
          <p class="meta"><time datetime="2026-07-04T11:15">4 ก.ค. 2569</time></p>
        </article>
      </div>
    </div>
  </section>

  <!-- หมวดหมู่: กีฬา -->
  <section class="category-block category-block--alt" aria-labelledby="cat-sports">
    <div class="wrap">
      <div class="section-heading">
        <h2 id="cat-sports">กีฬา</h2>
        <a class="see-all" href="/category.php?cat=sports">ดูทั้งหมด <svg class="icon"><use href="#icon-arrow-right"/></svg></a>
      </div>
      <div class="card-grid">
        <article class="card">
          <div class="thumb thumb--sports" role="img" aria-label="ภาพประกอบข่าวกีฬา"><svg class="icon"><use href="#icon-sports"/></svg><span>กีฬา</span></div>
          <h3><a href="/article.php?id=sports-1">นักกีฬาไทยคว้าเหรียญทองรายการระดับภูมิภาค</a></h3>
          <p>ทำเวลาดีที่สุดในรอบ 3 ปี สร้างสถิติใหม่ให้ทีมชาติ</p>
          <p class="meta"><time datetime="2026-07-04T20:00">4 ก.ค. 2569</time></p>
        </article>
        <article class="card">
          <div class="thumb thumb--sports" role="img" aria-label="ภาพประกอบข่าวกีฬา"><svg class="icon"><use href="#icon-sports"/></svg><span>กีฬา</span></div>
          <h3><a href="/article.php?id=sports-2">สมาคมกีฬาประกาศปฏิทินการแข่งขันฤดูกาลใหม่</a></h3>
          <p>เพิ่มจำนวนสนามแข่งขันในต่างจังหวัดมากขึ้นกว่าปีก่อน</p>
          <p class="meta"><time datetime="2026-07-04T18:20">4 ก.ค. 2569</time></p>
        </article>
        <article class="card">
          <div class="thumb thumb--sports" role="img" aria-label="ภาพประกอบข่าวกีฬา"><svg class="icon"><use href="#icon-sports"/></svg><span>กีฬา</span></div>
          <h3><a href="/article.php?id=sports-3">โค้ชทีมชาติเผยแผนเตรียมทีมสำหรับรายการใหญ่ปลายปี</a></h3>
          <p>เน้นฟื้นฟูสภาพร่างกายนักกีฬาหลังตารางแข่งขันแน่นตลอดไตรมาส</p>
          <p class="meta"><time datetime="2026-07-04T16:10">4 ก.ค. 2569</time></p>
        </article>
      </div>
    </div>
  </section>

  <!-- หมวดหมู่: เทคโนโลยี -->
  <section class="category-block" aria-labelledby="cat-tech">
    <div class="wrap">
      <div class="section-heading">
        <h2 id="cat-tech">เทคโนโลยี</h2>
        <a class="see-all" href="/category.php?cat=technology">ดูทั้งหมด <svg class="icon"><use href="#icon-arrow-right"/></svg></a>
      </div>
      <div class="card-grid">
        <article class="card">
          <div class="thumb thumb--tech" role="img" aria-label="ภาพประกอบข่าวเทคโนโลยี"><svg class="icon"><use href="#icon-tech"/></svg><span>เทคโนโลยี</span></div>
          <h3><a href="/article.php?id=tech-1">หน่วยงานรัฐเปิดตัวระบบยืนยันตัวตนดิจิทัลเวอร์ชันใหม่</a></h3>
          <p>รองรับการใช้งานผ่านแอปพลิเคชันมือถือ ลดขั้นตอนติดต่อราชการ</p>
          <p class="meta"><time datetime="2026-07-04T14:50">4 ก.ค. 2569</time></p>
        </article>
        <article class="card">
          <div class="thumb thumb--tech" role="img" aria-label="ภาพประกอบข่าวเทคโนโลยี"><svg class="icon"><use href="#icon-tech"/></svg><span>เทคโนโลยี</span></div>
          <h3><a href="/article.php?id=tech-2">บริษัทไทยเปิดตัวชิปประมวลผลสำหรับอุปกรณ์ IoT</a></h3>
          <p>ชูจุดเด่นด้านการประหยัดพลังงานและต้นทุนการผลิตที่ต่ำกว่า</p>
          <p class="meta"><time datetime="2026-07-04T12:40">4 ก.ค. 2569</time></p>
        </article>
        <article class="card">
          <div class="thumb thumb--tech" role="img" aria-label="ภาพประกอบข่าวเทคโนโลยี"><svg class="icon"><use href="#icon-tech"/></svg><span>เทคโนโลยี</span></div>
          <h3><a href="/article.php?id=tech-3">งานสัมมนาด้านปัญญาประดิษฐ์ดึงผู้เชี่ยวชาญนานาชาติร่วมงาน</a></h3>
          <p>หัวข้อหลักเน้นการประยุกต์ใช้ AI ในภาคการเกษตรและสาธารณสุข</p>
          <p class="meta"><time datetime="2026-07-04T10:05">4 ก.ค. 2569</time></p>
        </article>
      </div>
    </div>
  </section>

  <!-- หมวดหมู่: บันเทิง -->
  <section class="category-block category-block--alt" aria-labelledby="cat-entertainment">
    <div class="wrap">
      <div class="section-heading">
        <h2 id="cat-entertainment">บันเทิง</h2>
        <a class="see-all" href="/category.php?cat=entertainment">ดูทั้งหมด <svg class="icon"><use href="#icon-arrow-right"/></svg></a>
      </div>
      <div class="card-grid">
        <article class="card">
          <div class="thumb thumb--entertainment" role="img" aria-label="ภาพประกอบข่าวบันเทิง"><svg class="icon"><use href="#icon-entertainment"/></svg><span>บันเทิง</span></div>
          <h3><a href="/article.php?id=ent-1">ค่ายเพลงประกาศคอนเสิร์ตใหญ่ส่งท้ายปี เปิดจองบัตรสัปดาห์หน้า</a></h3>
          <p>คาดจัดขึ้นในสนามกลางแจ้ง รองรับผู้ชมกว่า 20,000 คน</p>
          <p class="meta"><time datetime="2026-07-04T09:00">4 ก.ค. 2569</time></p>
        </article>
        <article class="card">
          <div class="thumb thumb--entertainment" role="img" aria-label="ภาพประกอบข่าวบันเทิง"><svg class="icon"><use href="#icon-entertainment"/></svg><span>บันเทิง</span></div>
          <h3><a href="/article.php?id=ent-2">ซีรีส์ไทยได้รับเชิญฉายในเทศกาลภาพยนตร์ต่างประเทศ</a></h3>
          <p>ทีมผู้สร้างเตรียมเดินทางร่วมงานพร้อมเปิดตัวตัวอย่างใหม่</p>
          <p class="meta"><time datetime="2026-07-03T22:30">3 ก.ค. 2569</time></p>
        </article>
        <article class="card">
          <div class="thumb thumb--entertainment" role="img" aria-label="ภาพประกอบข่าวบันเทิง"><svg class="icon"><use href="#icon-entertainment"/></svg><span>บันเทิง</span></div>
          <h3><a href="/article.php?id=ent-3">รายการวาไรตี้ยอดนิยมเตรียมกลับมาอีกครั้งในฤดูกาลใหม่</a></h3>
          <p>ปรับรูปแบบรายการใหม่ พร้อมเพิ่มแขกรับเชิญหลากหลายวงการ</p>
          <p class="meta"><time datetime="2026-07-03T20:15">3 ก.ค. 2569</time></p>
        </article>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
