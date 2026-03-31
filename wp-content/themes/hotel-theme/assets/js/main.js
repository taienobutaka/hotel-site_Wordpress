/* ===========================
   Main JavaScript - Hotel Theme
   =========================== */

document.addEventListener("DOMContentLoaded", function () {
  /* ---- Header: Mobile Menu ---- */
  initMobileMenu();
  setHeaderHeight();

  /* ---- Page-specific Init ---- */
  var body = document.body;

  if (body.classList.contains("page-template-template-top")) {
    initTopPage();
  }

  if (body.classList.contains("page-template-template-rooms")) {
    initFadePage();
  }

  if (body.classList.contains("page-template-template-services")) {
    initFadePage();
  }

  if (body.classList.contains("page-template-template-plans")) {
    initFadePage();
  }

  if (body.classList.contains("page-template-template-contact-confirm")) {
    initContactConfirm();
  }
});

window.addEventListener("pageshow", function () {
  var body = document.body;
  if (body.classList.contains("page-template-template-top")) {
    initTopPage();
  }
  if (
    body.classList.contains("page-template-template-rooms") ||
    body.classList.contains("page-template-template-services") ||
    body.classList.contains("page-template-template-plans")
  ) {
    initFadePage();
  }
});

/* ===========================
   Mobile Menu
   =========================== */
function initMobileMenu() {
  var menuBtn = document.getElementById("mobile-menu-btn");
  var menuClose = document.getElementById("mobile-menu-close");
  var menu = document.getElementById("mobile-menu");

  if (!menuBtn || !menu) return;

  menuBtn.addEventListener("click", function () {
    menu.classList.add("is-open");
    document.body.classList.add("is-menu-open");
    document.body.style.overflow = "hidden";
  });

  if (menuClose) {
    menuClose.addEventListener("click", function () {
      menu.classList.remove("is-open");
      document.body.classList.remove("is-menu-open");
      document.body.style.overflow = "";
    });
  }

  var menuLinks = menu.querySelectorAll("a");
  menuLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      menu.classList.remove("is-open");
      document.body.classList.remove("is-menu-open");
      document.body.style.overflow = "";
    });
  });
}

function setHeaderHeight() {
  var header = document.querySelector("header");
  if (header) {
    document.documentElement.style.setProperty(
      "--header-height",
      header.offsetHeight + "px",
    );
    window.addEventListener("resize", function () {
      document.documentElement.style.setProperty(
        "--header-height",
        header.offsetHeight + "px",
      );
    });
  }
}

/* ===========================
   Top Page (Index)
   =========================== */
function initTopPage() {
  initIntroOverlay();
  initScrollFade();
  initFixedReservationBtn();
  initRoomGallery();
  initContactForm();
}

function initIntroOverlay() {
  var overlay = document.querySelector(".intro-overlay");
  var heroText = document.querySelector(".hero-text");
  var video = document.getElementById("hero-video");
  var fallback = document.getElementById("hero-fallback");

  if (!overlay) return;

  function showHeroTexts() {
    if (heroText) {
      heroText.classList.remove("is-fading");
      heroText.classList.add("is-visible");
    }
  }

  function switchToVideo() {
    if (video && fallback) {
      fallback.style.display = "none";
      video.style.display = "block";
      video.play().catch(function () {});
    }
    showHeroTexts();
  }

  function switchToBlackBackground() {
    if (video && fallback) {
      video.style.display = "none";
      fallback.style.display = "block";
    }
    showHeroTexts();
  }

  // Hide intro overlay after 2s, then check video
  setTimeout(function () {
    overlay.classList.add("is-hidden");
    showHeroTexts();
  }, 2000);

  // Switch to video once it can play
  if (video) {
    video.addEventListener(
      "canplay",
      function () {
        switchToVideo();
      },
      { once: true },
    );

    // Also try fetching to trigger switch early
    var videoSrc = video.querySelector("source");
    if (videoSrc && videoSrc.src) {
      fetch(videoSrc.src, { method: "HEAD" })
        .then(function (response) {
          if (response.ok) {
            switchToVideo();
          }
        })
        .catch(function () {
          console.info("Video file not available, showing fallback.");
        });
    }

    video.addEventListener("ended", function () {
      switchToBlackBackground();
      setTimeout(function () {
        video.currentTime = 0;
        switchToVideo();
      }, 4000);
    });
  }
}

function initScrollFade() {
  // Automatically add scroll-fade to all main images (excluding FV, header, footer)
  var allImages = Array.prototype.slice.call(
    document.querySelectorAll("main img"),
  );
  var fadeTargets = allImages.filter(function (img) {
    if (img.closest("header") || img.closest("footer")) return false;
    if (img.closest('section[data-name="FV"]')) return false;
    if (img.closest(".hero-section")) return false;
    if (img.hasAttribute("data-no-fade")) return false;
    return true;
  });

  fadeTargets.forEach(function (img) {
    img.classList.add("scroll-fade");
  });

  var targets = document.querySelectorAll(".scroll-fade");
  if (!targets.length) return;

  var observer = new IntersectionObserver(
    function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          obs.unobserve(entry.target);
        }
      });
    },
    { root: null, rootMargin: "0px 0px -10% 0px", threshold: 0 },
  );

  targets.forEach(function (el) {
    observer.observe(el);
  });
}

function initFixedReservationBtn() {
  var btn = document.getElementById("fixed-reservation-btn");
  if (!btn) return;

  var footer = document.querySelector("footer");
  if (!footer) return;

  window.addEventListener("scroll", function () {
    var footerTop = footer.getBoundingClientRect().top;
    var windowHeight = window.innerHeight;

    if (footerTop <= windowHeight) {
      btn.style.opacity = "0";
      btn.style.pointerEvents = "none";
    } else {
      btn.style.opacity = "1";
      btn.style.pointerEvents = "auto";
    }
  });
}

function initRoomGallery() {
  var pcGallery = document.getElementById("room-gallery-pc");
  var spGallery = document.getElementById("room-gallery-sp");

  setupSmoothGallery(pcGallery, 0.35);
  setupSmoothGallery(spGallery, 0.25);
}

function setupSmoothGallery(container, speed) {
  if (!container || !container.children.length) return;

  var offsetX = 0;
  var contentWidth = 0;

  function updateWidth() {
    contentWidth = container.scrollWidth / 2;
  }

  function animate() {
    offsetX += speed;
    if (offsetX >= contentWidth) {
      offsetX = 0;
    }
    container.style.transform = "translateX(-" + offsetX + "px)";
    requestAnimationFrame(animate);
  }

  updateWidth();
  window.addEventListener("resize", updateWidth);
  requestAnimationFrame(animate);
}

function initContactForm() {
  var form = document.getElementById("contact-form");
  if (!form) return;

  var submitBtn = form.querySelector('button[type="submit"]');
  if (!submitBtn) return;

  var privacyCheckbox = document.getElementById("privacy-agree");

  form.addEventListener("submit", function (e) {
    var name = form.querySelector('[name="name"]');
    var email = form.querySelector('[name="email"]');
    var message = form.querySelector('[name="message"]');
    var errors = [];

    if (name && !name.value.trim()) errors.push("お名前を入力してください");
    if (email && !email.value.trim())
      errors.push("メールアドレスを入力してください");
    if (message && !message.value.trim())
      errors.push("お問い合わせ内容を入力してください");
    if (privacyCheckbox && !privacyCheckbox.checked)
      errors.push("プライバシーポリシーに同意してください");

    if (errors.length > 0) {
      e.preventDefault();
      alert(errors.join("\n"));
    }
  });
}

/* ===========================
   Fade Page (Rooms / Services / Plans)
   =========================== */
function initFadePage() {
  var targets = Array.from(document.querySelectorAll(".fade-target"));
  targets.forEach(function (el) {
    el.classList.add("scroll-fade");
  });

  var kvBg = document.querySelector(".kv-fade-bg");
  var kvOverlay = document.querySelector(".kv-fade-overlay");

  if (kvBg) kvBg.classList.remove("is-visible");
  if (kvOverlay) kvOverlay.classList.remove("is-visible");

  if (targets.length) {
    var observer = new IntersectionObserver(
      function (entries, obs) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            obs.unobserve(entry.target);
          }
        });
      },
      { root: null, rootMargin: "0px 0px -10% 0px", threshold: 0 },
    );
    targets.forEach(function (el) {
      observer.observe(el);
    });
  }

  requestAnimationFrame(function () {
    requestAnimationFrame(function () {
      if (kvBg) kvBg.classList.add("is-visible");
      if (kvOverlay) kvOverlay.classList.add("is-visible");
    });
  });
}

/* ===========================
   Contact Confirm
   =========================== */
function initContactConfirm() {
  var form = document.getElementById("confirm-form");
  if (!form) return;

  form.addEventListener("submit", function (e) {
    e.preventDefault();
    var lang = form.getAttribute("data-lang") || "ja";
    window.location.href = "/" + lang + "/contact-complete/";
  });
}
