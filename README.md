# Praktikum-Pemrograman-Web  <!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Instagram Profile - Bootstrap & Tailwind (Single File)</title>

  <!-- BOOTSTRAP CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <!-- BOOTSTRAP ICONS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    rel="stylesheet"
  />

  <!-- TAILWIND (via CDN) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* ===== Shared minor custom styles ===== */
    body { background:#0f1720; color:#e6eef8; }
    a { text-decoration: none; }

    /* ===== Bootstrap section custom ===== */
    .bs-root { padding: 2rem 1rem; }
    .bs-sidebar { min-height: 420px; }
    .bs-profile-img {
      width: 120px; height: 120px; object-fit: cover;
      border: 3px solid #1f2937;
    }
    .bs-highlight { width:64px;height:64px;border-radius:50%;object-fit:cover;border:2px solid #111827; }
    .bs-post-box { position:relative; padding-top:100%; overflow:hidden; background:#0b1220; }
    .bs-post-box img { position:absolute; inset:0; width:100%; height:100%; object-fit:cover; }

    /* Tab styles */
    .mode-tab { cursor:pointer; padding:.4rem .8rem; border-radius:.5rem; margin-right:.5rem; }
    .mode-tab.active { background: #0b1220; box-shadow:0 2px 6px rgba(0,0,0,.6); }

    /* small screens adjustments (Bootstrap block) */
    @media (max-width:767px) {
      .bs-sidebar { display:none; }
      .tw-sidebar { display:none; }
    }
  </style>
</head>
<body>

  <div class="container-fluid py-3">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 style="margin:0">Instagram Profile — Bootstrap & Tailwind (single file)</h2>
      <div>
        <span id="tabBootstrap" class="mode-tab active">Bootstrap View</span>
        <span id="tabTailwind" class="mode-tab">Tailwind View</span>
      </div>
    </div>

    <!-- ===== Bootstrap Version ===== -->
    <section id="bootstrapView" class="bs-root card mb-4" style="display:block;">
      <div class="row g-0">
        <!-- Sidebar -->
        <aside class="col-2 border-end bg-dark text-light bs-sidebar d-none d-md-block">
          <nav class="nav flex-column p-3">
            <a class="nav-link text-light" href="#"><i class="bi bi-house-fill me-2"></i>Beranda</a>
            <a class="nav-link text-light" href="#"><i class="bi bi-search me-2"></i>Jelajahi</a>
            <a class="nav-link text-light" href="#"><i class="bi bi-person-circle me-2"></i>Profil</a>
            <a class="nav-link text-light" href="#"><i class="bi bi-gear me-2"></i>Pengaturan</a>
          </nav>
        </aside>

        <!-- Main content -->
        <main class="col">
          <div class="container-fluid p-4">
            <!-- Header / Profile -->
            <div class="row align-items-center">
              <div class="col-auto text-center">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=600&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt="profile" class="rounded-circle bs-profile-img">
              </div>
              <div class="col">
                <div class="d-flex align-items-center flex-wrap gap-2">
                  <h3 class="me-3 mb-0">andy_profile</h3>
                  <button class="btn btn-outline-light btn-sm">Edit Profile</button>
                  <button class="btn btn-dark btn-outline-secondary btn-sm"><i class="bi bi-gear"></i></button>
                </div>
                <ul class="list-inline mt-3 mb-0">
                  <li class="list-inline-item pe-3"><strong>24</strong> posts</li>
                  <li class="list-inline-item pe-3"><strong>6.2k</strong> followers</li>
                  <li class="list-inline-item"><strong>180</strong> following</li>
                </ul>
                <p class="mt-2 mb-0"><strong>Andy Adithia</strong> • <span class="fst-italic text-muted">"coding & coffee"</span></p>
              </div>
            </div>

            <!-- Highlights -->
            <div class="mt-4">
              <div class="d-flex gap-3 overflow-auto pb-2">
                <div class="text-center">
                  <img class="bs-highlight" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=200&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt="h1">
                  <div class="small mt-1 text-light">Travel</div>
                </div>
                <div class="text-center">
                  <img class="bs-highlight" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=200&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt="h2">
                  <div class="small mt-1 text-light">Food</div>
                </div>
                <div class="text-center">
                  <div class="d-flex align-items-center justify-content-center rounded-circle border bg-secondary" style="width:64px;height:64px">+</div>
                  <div class="small mt-1 text-light">New</div>
                </div>
              </div>
            </div>

            <!-- Tabs -->
            <ul class="nav nav-tabs justify-content-center mt-4" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#">POSTS</a></li>
              <li class="nav-item"><a class="nav-link" href="#">SAVED</a></li>
              <li class="nav-item"><a class="nav-link" href="#">TAGGED</a></li>
            </ul>

            <!-- Posts grid -->
            <div class="row g-2 mt-3">
              <!-- Example repeated posts (12) -->
              <div class="col-12 col-sm-6 col-md-4">
                <div class="post-box bs-post-box">
                  <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt="p1">
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="post-box bs-post-box">
                  <img src="https://images.unsplash.com/photo-1502767089025-6572583495b0?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt="p2">
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="post-box bs-post-box">
                  <img src="https://images.unsplash.com/photo-1472214103451-9374bd1c798e?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt="p3">
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="post-box bs-post-box">
                  <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt="p4">
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="post-box bs-post-box">
                  <img src="https://images.unsplash.com/photo-1504198453319-5ce911bafcde?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt="p5">
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="post-box bs-post-box">
                  <img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt="p6">
                </div>
              </div>
              <!-- duplicate to reach 12 -->
              <div class="col-12 col-sm-6 col-md-4"><div class="post-box bs-post-box"><img src="https://images.unsplash.com/photo-1504198453319-5ce911bafcde?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt=""></div></div>
              <div class="col-12 col-sm-6 col-md-4"><div class="post-box bs-post-box"><img src="https://images.unsplash.com/photo-1472214103451-9374bd1c798e?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt=""></div></div>
              <div class="col-12 col-sm-6 col-md-4"><div class="post-box bs-post-box"><img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt=""></div></div>
              <div class="col-12 col-sm-6 col-md-4"><div class="post-box bs-post-box"><img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt=""></div></div>
              <div class="col-12 col-sm-6 col-md-4"><div class="post-box bs-post-box"><img src="https://images.unsplash.com/photo-1502767089025-6572583495b0?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt=""></div></div>
              <div class="col-12 col-sm-6 col-md-4"><div class="post-box bs-post-box"><img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt=""></div></div>
            </div>

            <!-- footer -->
            <div class="border-top pt-3 text-center mt-4 text-muted">
              © 2025 — Bootstrap Version
            </div>
          </div>
        </main>
      </div>
    </section>

    <!-- ===== Tailwind Version ===== -->
    <section id="tailwindView" class="tw-root card p-4" style="display:none;">
      <div class="flex">
        <!-- Sidebar -->
        <aside class="tw-sidebar hidden md:flex flex-col w-48 lg:w-56 pr-4 border-r border-gray-700">
          <div class="flex items-center gap-3 p-3">
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=200&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-10 h-10 rounded-full object-cover border-2 border-gray-700" alt="mini">
            <div>
              <div class="font-semibold">andy_profile</div>
              <div class="text-xs text-gray-400">Andy Adithia</div>
            </div>
          </div>
          <nav class="flex flex-col p-3 space-y-2 text-gray-300">
            <a class="hover:text-gray-100" href="#"><i class="bi bi-house-fill me-2"></i>Beranda</a>
            <a class="hover:text-gray-100" href="#"><i class="bi bi-search me-2"></i>Jelajahi</a>
            <a class="hover:text-gray-100" href="#"><i class="bi bi-person-circle me-2"></i>Profil</a>
            <a class="hover:text-gray-100" href="#"><i class="bi bi-gear me-2"></i>Pengaturan</a>
          </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 px-4">
          <div class="max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-4 md:gap-6">
              <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=600&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-28 h-28 md:w-32 md:h-32 rounded-full border-2 border-gray-700 object-cover" alt="profile">
              <div class="flex-1">
                <div class="flex items-center flex-wrap gap-3">
                  <h3 class="text-xl font-semibold m-0">andy_profile</h3>
                  <button class="px-3 py-1 border rounded text-sm">Edit Profile</button>
                  <button class="px-2 py-1 border rounded text-sm"><i class="bi bi-gear"></i></button>
                </div>

                <div class="flex space-x-6 text-sm mt-3">
                  <div><span class="font-bold">24</span> posts</div>
                  <div><span class="font-bold">6.2k</span> followers</div>
                  <div><span class="font-bold">180</span> following</div>
                </div>

                <p class="mt-3 text-sm"><span class="font-semibold">Andy Adithia</span> <span class="text-gray-400 italic">"coding & coffee"</span></p>
              </div>
            </div>

            <!-- Highlights -->
            <div class="mt-4">
              <div class="flex overflow-x-auto space-x-4 pb-2">
                <div class="text-center">
                  <img class="w-16 h-16 rounded-full border-2 border-gray-700 object-cover" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=200&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt="">
                  <div class="text-xs mt-1">Travel</div>
                </div>
                <div class="text-center">
                  <img class="w-16 h-16 rounded-full border-2 border-gray-700 object-cover" src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?q=80&w=200&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" alt="">
                  <div class="text-xs mt-1">Food</div>
                </div>
                <div class="text-center">
                  <div class="w-16 h-16 rounded-full border-2 border-gray-700 flex items-center justify-center bg-gray-900">+</div>
                  <div class="text-xs mt-1">New</div>
                </div>
              </div>
            </div>

            <!-- Tabs -->
            <div class="flex justify-center space-x-12 border-b border-gray-700 pb-2 mt-4">
              <div class="pb-2 border-b-2 border-white">POSTS</div>
              <div class="text-gray-400">SAVED</div>
              <div class="text-gray-400">TAGGED</div>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 mt-3">
              <div class="aspect-square overflow-hidden border border-gray-700">
                <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-full h-full object-cover" alt="">
              </div>
              <div class="aspect-square overflow-hidden border border-gray-700">
                <img src="https://images.unsplash.com/photo-1502767089025-6572583495b0?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-full h-full object-cover" alt="">
              </div>
              <div class="aspect-square overflow-hidden border border-gray-700">
                <img src="https://images.unsplash.com/photo-1472214103451-9374bd1c798e?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-full h-full object-cover" alt="">
              </div>
              <div class="aspect-square overflow-hidden border border-gray-700"><img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-full h-full object-cover"></div>
              <div class="aspect-square overflow-hidden border border-gray-700"><img src="https://images.unsplash.com/photo-1504198453319-5ce911bafcde?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-full h-full object-cover"></div>
              <div class="aspect-square overflow-hidden border border-gray-700"><img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-full h-full object-cover"></div>
              <!-- duplicates -->
              <div class="aspect-square overflow-hidden border border-gray-700"><img src="https://images.unsplash.com/photo-1504198453319-5ce911bafcde?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-full h-full object-cover"></div>
              <div class="aspect-square overflow-hidden border border-gray-700"><img src="https://images.unsplash.com/photo-1472214103451-9374bd1c798e?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-full h-full object-cover"></div>
              <div class="aspect-square overflow-hidden border border-gray-700"><img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-full h-full object-cover"></div>
              <div class="aspect-square overflow-hidden border border-gray-700"><img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-full h-full object-cover"></div>
              <div class="aspect-square overflow-hidden border border-gray-700"><img src="https://images.unsplash.com/photo-1502767089025-6572583495b0?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-full h-full object-cover"></div>
              <div class="aspect-square overflow-hidden border border-gray-700"><img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=abcd" class="w-full h-full object-cover"></div>
            </div>

            <div class="text-center mt-6 border-t border-gray-700 pt-3 text-gray-400 text-sm">
              © 2025 — Tailwind Version
            </div>
          </div>
        </main>
      </div>
    </section>

  </div>

  <!-- BOOTSTRAP JS (optional for components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Tab switching logic
    const tabBS = document.getElementById('tabBootstrap');
    const tabTW = document.getElementById('tabTailwind');
    const viewBS = document.getElementById('bootstrapView');
    const viewTW = document.getElementById('tailwindView');

    function setActive(mode) {
      if(mode === 'bs') {
        viewBS.style.display = 'block';
        viewTW.style.display = 'none';
        tabBS.classList.add('active');
        tabTW.classList.remove('active');
      } else {
        viewBS.style.display = 'none';
        viewTW.style.display = 'block';
        tabBS.classList.remove('active');
        tabTW.classList.add('active');
      }
    }

    tabBS.addEventListener('click', () => setActive('bs'));
    tabTW.addEventListener('click', () => setActive('tw'));

    // default
    setActive('bs');
  </script>
</body>
</html>
