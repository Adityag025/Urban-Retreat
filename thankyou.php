<?php
include 'config.php';

// Capturing Primary source
if ($_GET['utm_primarysource'] != '') {

  $utm_primarysource = $_GET['utm_primarysource'];
} else if ($_GET['utm_source'] != '') {

  $utm_primarysource = $_GET['utm_source'];
} else if ($_GET['primarysource'] != '') {

  $utm_primarysource = $_GET['primarysource'];
} else if ($_GET['primarysource'] != '') {

  $utm_primarysource = $_GET['primarysource'];
} else {

  $utm_primarysource = '';
}

// Capturing Secondary source

if ($_GET['utm_secondarysource'] != '') {

  $utm_secondarysource = $_GET['utm_secondarysource'];
} else if ($_GET['utm_medium'] != '') {

  $utm_secondarysource = $_GET['utm_medium'];
} else if ($_GET['secondarysource'] != '') {

  $utm_secondarysource = $_GET['secondarysource'];
} else if ($_GET['secondarysource'] != '') {

  $utm_secondarysource = $_GET['secondarysource'];
} else {

  $utm_secondarysource = '';
}

// Capturing Tertiary source

if ($_GET['utm_tertiarysource'] != '') {

  $utm_tertiarysource = $_GET['utm_tertiarysource'];
} else if ($_GET['tertiarysource'] != '') {

  $utm_tertiarysource = $_GET['tertiarysource'];
} else if ($_GET['utm_term'] != '') {

  $utm_tertiarysource = $_GET['utm_term'];
} else {

  $utm_tertiarysource = '';
}

// Capturing UTM Campaign

if ($_GET['utm_campaign'] != '') {

  $utm_campaign = $_GET['utm_campaign'];
} else if ($_GET['Campaign'] != '') {

  $utm_campaign = $_GET['Campaign'];
} else {

  $utm_campaign = '';
}

// Capturing UTM Keywords 

if ($_GET['utm_keywords'] != '') {

  $utm_keywords = $_GET['utm_keywords'];
} else if ($_GET['Keyword'] != '') {

  $utm_keywords = $_GET['Keyword'];
} else {

  $utm_keywords = '';
}

// Capturing srd value 

if ($_GET['srd'] != '') {

  $srd_value = $_GET['srd'];
} else {

  $srd_value = '';
}

// Capturing GCLID 

$gclid = $_GET['gclid'];

$original_referrer = $_SERVER['HTTP_REFERER'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <title>Verde Vista</title>
  <meta name="description" content="">
  <meta name="robots" content="noindex, nofollow" />

  <!-- <link rel="preload" href="" as=image>
    <link rel="preload" href="" as=image media="(min-width: 768px)">
    <link rel="preload" href="" as=image media="(max-width: 768px)" style="width: 100%; height:100%"> -->



  <!-- Fav Icon code -->
  <link rel="shortcut icon" href="assets/images/verde_logo.png" />

  <meta property="og:image" content="" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" media="print" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- Google font code -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Google font End -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/intlTelInput.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/cloudzoom.css">
  <link rel="stylesheet" href="assets/css/ohsnap.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <script>
    (() => {
      class RocketLazyLoadScripts {
        constructor() {
          (this.v = "1.2.6"),
          (this.triggerEvents = ["keydown", "mousedown", "mousemove", "touchmove", "touchstart", "touchend", "wheel"]),
          (this.userEventHandler = this.t.bind(this)),
          (this.touchStartHandler = this.i.bind(this)),
          (this.touchMoveHandler = this.o.bind(this)),
          (this.touchEndHandler = this.h.bind(this)),
          (this.clickHandler = this.u.bind(this)),
          (this.interceptedClicks = []),
          (this.interceptedClickListeners = []),
          this.l(this),
            window.addEventListener("pageshow", (t) => {
              (this.persisted = t.persisted), this.everythingLoaded && this.m();
            }),
            (this.CSPIssue = sessionStorage.getItem("rocketCSPIssue")),
            document.addEventListener("securitypolicyviolation", (t) => {
              this.CSPIssue || "script-src-elem" !== t.violatedDirective || "data" !== t.blockedURI || ((this.CSPIssue = !0), sessionStorage.setItem("rocketCSPIssue", !0));
            }),
            document.addEventListener("DOMContentLoaded", () => {
              this.k();
            }),
            (this.delayedScripts = {
              normal: [],
              async: [],
              defer: []
            }),
            (this.trash = []),
            (this.allJQueries = []);
        }
        p(t) {
          document.hidden ?
            t.t() :
            (this.triggerEvents.forEach((e) => window.addEventListener(e, t.userEventHandler, {
                passive: !0
              })),
              window.addEventListener("touchstart", t.touchStartHandler, {
                passive: !0
              }),
              window.addEventListener("mousedown", t.touchStartHandler),
              document.addEventListener("visibilitychange", t.userEventHandler));
        }
        _() {
          this.triggerEvents.forEach((t) => window.removeEventListener(t, this.userEventHandler, {
            passive: !0
          })), document.removeEventListener("visibilitychange", this.userEventHandler);
        }
        i(t) {
          "HTML" !== t.target.tagName &&
            (window.addEventListener("touchend", this.touchEndHandler),
              window.addEventListener("mouseup", this.touchEndHandler),
              window.addEventListener("touchmove", this.touchMoveHandler, {
                passive: !0
              }),
              window.addEventListener("mousemove", this.touchMoveHandler),
              t.target.addEventListener("click", this.clickHandler),
              this.L(t.target, !0),
              this.S(t.target, "onclick", "rocket-onclick"),
              this.C());
        }
        o(t) {
          window.removeEventListener("touchend", this.touchEndHandler),
            window.removeEventListener("mouseup", this.touchEndHandler),
            window.removeEventListener("touchmove", this.touchMoveHandler, {
              passive: !0
            }),
            window.removeEventListener("mousemove", this.touchMoveHandler),
            t.target.removeEventListener("click", this.clickHandler),
            this.L(t.target, !1),
            this.S(t.target, "rocket-onclick", "onclick"),
            this.M();
        }
        h() {
          window.removeEventListener("touchend", this.touchEndHandler),
            window.removeEventListener("mouseup", this.touchEndHandler),
            window.removeEventListener("touchmove", this.touchMoveHandler, {
              passive: !0
            }),
            window.removeEventListener("mousemove", this.touchMoveHandler);
        }
        u(t) {
          t.target.removeEventListener("click", this.clickHandler),
            this.L(t.target, !1),
            this.S(t.target, "rocket-onclick", "onclick"),
            this.interceptedClicks.push(t),
            t.preventDefault(),
            t.stopPropagation(),
            t.stopImmediatePropagation(),
            this.M();
        }
        O() {
          window.removeEventListener("touchstart", this.touchStartHandler, {
              passive: !0
            }),
            window.removeEventListener("mousedown", this.touchStartHandler),
            this.interceptedClicks.forEach((t) => {
              t.target.dispatchEvent(new MouseEvent("click", {
                view: t.view,
                bubbles: !0,
                cancelable: !0
              }));
            });
        }
        l(t) {
          (EventTarget.prototype.addEventListenerWPRocketBase = EventTarget.prototype.addEventListener),
          (EventTarget.prototype.addEventListener = function(e, i, o) {
            "click" !== e || t.windowLoaded || i === t.clickHandler || t.interceptedClickListeners.push({
              target: this,
              func: i,
              options: o
            }), (this || window).addEventListenerWPRocketBase(e, i, o);
          });
        }
        L(t, e) {
          this.interceptedClickListeners.forEach((i) => {
              i.target === t && (e ? t.removeEventListener("click", i.func, i.options) : t.addEventListener("click", i.func, i.options));
            }),
            t.parentNode !== document.documentElement && this.L(t.parentNode, e);
        }
        D() {
          return new Promise((t) => {
            this.P ? (this.M = t) : t();
          });
        }
        C() {
          this.P = !0;
        }
        M() {
          this.P = !1;
        }
        S(t, e, i) {
          t.hasAttribute && t.hasAttribute(e) && (event.target.setAttribute(i, event.target.getAttribute(e)), event.target.removeAttribute(e));
        }
        t() {
          this._(this), "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", this.R.bind(this)) : this.R();
        }
        k() {
          let t = [];
          document.querySelectorAll("script[type=rocketlazyloadscript][data-rocket-src]").forEach((e) => {
              let i = e.getAttribute("data-rocket-src");
              if (i && !i.startsWith("data:")) {
                0 === i.indexOf("//") && (i = location.protocol + i);
                try {
                  const o = new URL(i).origin;
                  o !== location.origin && t.push({
                    src: o,
                    crossOrigin: e.crossOrigin || "module" === e.getAttribute("data-rocket-type")
                  });
                } catch (t) {}
              }
            }),
            (t = [...new Map(t.map((t) => [JSON.stringify(t), t])).values()]),
            this.T(t, "preconnect");
        }
        async R() {
          (this.lastBreath = Date.now()), this.j(this), this.F(this), this.I(), this.W(), this.q(), await this.A(this.delayedScripts.normal), await this.A(this.delayedScripts.defer), await this.A(this.delayedScripts.async);
          try {
            await this.U(), await this.H(this), await this.J();
          } catch (t) {
            console.error(t);
          }
          window.dispatchEvent(new Event("rocket-allScriptsLoaded")),
            (this.everythingLoaded = !0),
            this.D().then(() => {
              this.O();
            }),
            this.N();
        }
        W() {
          document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t) => {
            t.hasAttribute("data-rocket-src") ?
              t.hasAttribute("async") && !1 !== t.async ?
              this.delayedScripts.async.push(t) :
              (t.hasAttribute("defer") && !1 !== t.defer) || "module" === t.getAttribute("data-rocket-type") ?
              this.delayedScripts.defer.push(t) :
              this.delayedScripts.normal.push(t) :
              this.delayedScripts.normal.push(t);
          });
        }
        async B(t) {
          if ((await this.G(), !0 !== t.noModule || !("noModule" in HTMLScriptElement.prototype)))
            return new Promise((e) => {
              let i;

              function o() {
                (i || t).setAttribute("data-rocket-status", "executed"), e();
              }
              try {
                if (navigator.userAgent.indexOf("Firefox/") > 0 || "" === navigator.vendor || this.CSPIssue)
                  (i = document.createElement("script")),
                  [...t.attributes].forEach((t) => {
                    let e = t.nodeName;
                    "type" !== e && ("data-rocket-type" === e && (e = "type"), "data-rocket-src" === e && (e = "src"), i.setAttribute(e, t.nodeValue));
                  }),
                  t.text && (i.text = t.text),
                  i.hasAttribute("src") ?
                  (i.addEventListener("load", o),
                    i.addEventListener("error", function() {
                      i.setAttribute("data-rocket-status", "failed-network"), e();
                    }),
                    setTimeout(() => {
                      i.isConnected || e();
                    }, 1)) :
                  ((i.text = t.text), o()),
                  t.parentNode.replaceChild(i, t);
                else {
                  const i = t.getAttribute("data-rocket-type"),
                    s = t.getAttribute("data-rocket-src");
                  i ? ((t.type = i), t.removeAttribute("data-rocket-type")) : t.removeAttribute("type"),
                    t.addEventListener("load", o),
                    t.addEventListener("error", (i) => {
                      this.CSPIssue && i.target.src.startsWith("data:") ?
                        (console.log("WPRocket: data-uri blocked by CSP -> fallback"), t.removeAttribute("src"), this.B(t).then(e)) :
                        (t.setAttribute("data-rocket-status", "failed-network"), e());
                    }),
                    s ? (t.removeAttribute("data-rocket-src"), (t.src = s)) : (t.src = "data:text/javascript;base64," + window.btoa(unescape(encodeURIComponent(t.text))));
                }
              } catch (i) {
                t.setAttribute("data-rocket-status", "failed-transform"), e();
              }
            });
          t.setAttribute("data-rocket-status", "skipped");
        }
        async A(t) {
          const e = t.shift();
          return e && e.isConnected ? (await this.B(e), this.A(t)) : Promise.resolve();
        }
        q() {
          this.T([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts.async], "preload");
        }
        T(t, e) {
          var i = document.createDocumentFragment();
          t.forEach((t) => {
              const o = (t.getAttribute && t.getAttribute("data-rocket-src")) || t.src;
              if (o && !o.startsWith("data:")) {
                const s = document.createElement("link");
                (s.href = o),
                (s.rel = e),
                "preconnect" !== e && (s.as = "script"),
                  t.getAttribute && "module" === t.getAttribute("data-rocket-type") && (s.crossOrigin = !0),
                  t.crossOrigin && (s.crossOrigin = t.crossOrigin),
                  t.integrity && (s.integrity = t.integrity),
                  i.appendChild(s),
                  this.trash.push(s);
              }
            }),
            document.head.appendChild(i);
        }
        j(t) {
          let e = {};

          function i(i, o) {
            return e[o].eventsToRewrite.indexOf(i) >= 0 && !t.everythingLoaded ? "rocket-" + i : i;
          }

          function o(t, o) {
            !(function(t) {
              e[t] ||
                ((e[t] = {
                    originalFunctions: {
                      add: t.addEventListener,
                      remove: t.removeEventListener
                    },
                    eventsToRewrite: []
                  }),
                  (t.addEventListener = function() {
                    (arguments[0] = i(arguments[0], t)), e[t].originalFunctions.add.apply(t, arguments);
                  }),
                  (t.removeEventListener = function() {
                    (arguments[0] = i(arguments[0], t)), e[t].originalFunctions.remove.apply(t, arguments);
                  }));
            })(t),
            e[t].eventsToRewrite.push(o);
          }

          function s(e, i) {
            let o = e[i];
            (e[i] = null),
            Object.defineProperty(e, i, {
              get: () => o || function() {},
              set(s) {
                t.everythingLoaded ? (o = s) : (e["rocket" + i] = o = s);
              },
            });
          }
          o(document, "DOMContentLoaded"), o(window, "DOMContentLoaded"), o(window, "load"), o(window, "pageshow"), o(document, "readystatechange"), s(document, "onreadystatechange"), s(window, "onload"), s(window, "onpageshow");
          try {
            Object.defineProperty(document, "readyState", {
                get: () => t.rocketReadyState,
                set(e) {
                  t.rocketReadyState = e;
                },
                configurable: !0,
              }),
              (document.readyState = "loading");
          } catch (t) {
            console.log("WPRocket DJE readyState conflict, bypassing");
          }
        }
        F(t) {
          let e;

          function i(e) {
            return t.everythingLoaded ?
              e :
              e
              .split(" ")
              .map((t) => ("load" === t || 0 === t.indexOf("load.") ? "rocket-jquery-load" : t))
              .join(" ");
          }

          function o(o) {
            function s(t) {
              const e = o.fn[t];
              o.fn[t] = o.fn.init.prototype[t] = function() {
                return (
                  this[0] === window &&
                  ("string" == typeof arguments[0] || arguments[0] instanceof String ?
                    (arguments[0] = i(arguments[0])) :
                    "object" == typeof arguments[0] &&
                    Object.keys(arguments[0]).forEach((t) => {
                      const e = arguments[0][t];
                      delete arguments[0][t], (arguments[0][i(t)] = e);
                    })),
                  e.apply(this, arguments),
                  this
                );
              };
            }
            o &&
              o.fn &&
              !t.allJQueries.includes(o) &&
              ((o.fn.ready = o.fn.init.prototype.ready = function(e) {
                  return t.domReadyFired ? e.bind(document)(o) : document.addEventListener("rocket-DOMContentLoaded", () => e.bind(document)(o)), o([]);
                }),
                s("on"),
                s("one"),
                t.allJQueries.push(o)),
              (e = o);
          }
          o(window.jQuery),
            Object.defineProperty(window, "jQuery", {
              get: () => e,
              set(t) {
                o(t);
              },
            });
        }
        async H(t) {
          const e = document.querySelector("script[data-webpack]");
          e &&
            (await (async function() {
                return new Promise((t) => {
                  e.addEventListener("load", t), e.addEventListener("error", t);
                });
              })(),
              await t.K(),
              await t.H(t));
        }
        async U() {
          this.domReadyFired = !0;
          try {
            document.readyState = "interactive";
          } catch (t) {}
          await this.G(),
            document.dispatchEvent(new Event("rocket-readystatechange")),
            await this.G(),
            document.rocketonreadystatechange && document.rocketonreadystatechange(),
            await this.G(),
            document.dispatchEvent(new Event("rocket-DOMContentLoaded")),
            await this.G(),
            window.dispatchEvent(new Event("rocket-DOMContentLoaded"));
        }
        async J() {
          try {
            document.readyState = "complete";
          } catch (t) {}
          await this.G(),
            document.dispatchEvent(new Event("rocket-readystatechange")),
            await this.G(),
            document.rocketonreadystatechange && document.rocketonreadystatechange(),
            await this.G(),
            window.dispatchEvent(new Event("rocket-load")),
            await this.G(),
            window.rocketonload && window.rocketonload(),
            await this.G(),
            this.allJQueries.forEach((t) => t(window).trigger("rocket-jquery-load")),
            await this.G();
          const t = new Event("rocket-pageshow");
          (t.persisted = this.persisted), window.dispatchEvent(t), await this.G(), window.rocketonpageshow && window.rocketonpageshow({
            persisted: this.persisted
          }), (this.windowLoaded = !0);
        }
        m() {
          document.onreadystatechange && document.onreadystatechange(), window.onload && window.onload(), window.onpageshow && window.onpageshow({
            persisted: this.persisted
          });
        }
        I() {
          const t = new Map();
          document.write = document.writeln = function(e) {
            const i = document.currentScript;
            i || console.error("WPRocket unable to document.write this: " + e);
            const o = document.createRange(),
              s = i.parentElement;
            let n = t.get(i);
            void 0 === n && ((n = i.nextSibling), t.set(i, n));
            const c = document.createDocumentFragment();
            o.setStart(c, 0), c.appendChild(o.createContextualFragment(e)), s.insertBefore(c, n);
          };
        }
        async G() {
          Date.now() - this.lastBreath > 45 && (await this.K(), (this.lastBreath = Date.now()));
        }
        async K() {
          return document.hidden ? new Promise((t) => setTimeout(t)) : new Promise((t) => requestAnimationFrame(t));
        }
        N() {
          this.trash.forEach((t) => t.remove());
        }
        static run() {
          const t = new RocketLazyLoadScripts();
          t.p(t);
        }
      }
      setTimeout(function() {
        RocketLazyLoadScripts.run();
      }, 0);
    })();
  </script>
  <?php if (false): ?>
    <script>
      (function() {
        function asyncLoadCSS(filename) {
          debugger;
          var head = document.getElementsByTagName('head')[0];

          var style = document.createElement('link');
          style.href = filename;
          style.type = 'text/css';
          style.rel = 'stylesheet';
          head.appendChild(style);
        }

        function addResources() {
          asyncLoadCSS("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css");
          asyncLoadCSS("./assets/css/owl.carousel.min.css");
          // asyncLoadCSS("./assets/css/intlTelInput.css");
          asyncLoadCSS("./assets/css/animate.css");
          asyncLoadCSS("./assets/css/magnific-popup.css");
          asyncLoadCSS("./assets/css/cloudzoom.css");
          asyncLoadCSS("./assets/css/ohsnap.css");
        }
        if (window.attachEvent) {
          window.attachEvent("onload", addResources);
        } else {
          window.addEventListener("load", addResources, false);
        }
      })();
    </script>
  <?php endif ?>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
          <div class="mobile_header">
            <div class="header_logo">
              <a href="index.php">
                <img src="assets/images/verde_logo.png" alt="Logo">
              </a>
            </div>
            <!-- <div class="menu mobile_menu">
              <span></span>
              <span></span>
              <span></span>
            </div> -->
          </div>
        </div>
        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
          <!-- <div class="navbar">
            <ul class="nav">
              <li class="nav-item"><a class="nav-link" href="#about">About us</a></li>
              <li class="nav-item"><a class="nav-link" href="#highlights">Highlights</a></li>
              <li class="nav-item"><a class="nav-link" href="#plan">Master Plan</a></li>
              <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
              <li class="nav-item"><a class="nav-link" href="#location_highlights">Location Highlights</a></li>
              <li class="nav-item"><a class="nav-link" href="#">contact Us</a></li>
            </ul>
          </div> -->
        </div>
      </div>
    </div>
  </header>
  <article>
    <section id="banner">
      <div class="banner-wrapper">
        <picture>
          <source media="(max-width: 768px)" srcset="assets/images/banner/webp/main_mobile_banner.webp" type="image/webp">
          <source media="(min-width: 768px)" srcset="assets/images/banner/webp/main_banner.webp" type="image/webp">
          <img src="assets/images/banner/webp/main_banner.webp" alt="DSMAX Banner">
        </picture>
      </div>
      <div class="banner_content_wrapper">
        <div class="banner_content_box">
          <div class="banner_content">
            <h1>Verde Vista</h1>
            <p>Bliss begins at home.</p>
            <!-- <div class="banner_content_info">
              <span>2-3-4 BHK Apartments</span>
              <span>Starting At 75 lakh*</span>
              <span>Padur, Chennai</span>
            </div> -->
            <div class="thank_you">
              <p>
                Thank you
              </p>
              <span>Our Sales Team will get in touch with you shortly.</span>
            </div>
            <!-- <button class="form_btn explore">Explore Now</button> -->
          </div>
        </div>
      </div>
    </section>
  </article>

  <!-- Javascript code -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="./assets/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="./assets/js/22-wow.min.js"></script>
  <script src="./assets/js/carousel.init.js" async></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" async></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <script src="./assets/js/magnific-popup.js" async></script>
  <script src="./assets/js/ohsnap.min.js" async></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js" async></script>
  <script src="https://cdn.jsdelivr.net/npm/owlcarousel2-filter@1.0.0/dist/owlcarousel2-filter.min.js" async></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.js" async></script>
  <script type="text/javascript" src="./assets/js/intlTelInput.min.js"></script>
  <script src="./assets/js/cloudzoom.js" async></script>
  <script src="assets/js/main.js" async></script>
  <!-- optimisation scripts -->
  <!-- lazy load script -->
  <script type="rocketlazyloadscript" async>
    function isInViewport(el) {
      const rect = el.getBoundingClientRect();
      return (rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth));
    }

    function lazyload() {
      var lazyloadImages = document.querySelectorAll(".image_lazy");
      var lazyloadThrottleTimeout;
      if (lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }
      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
          // if(img.offsetTop < (window.innerHeight + scrollTop)) {
          if (isInViewport(img)) {
            srcset = img.dataset.srcset;
            if (typeof srcset !== 'undefined')
              img.srcset = srcset;
            else
              img.src = img.dataset.src;
            img.onload = function() {
              img.classList.remove('image_lazy');
            }
          }
        });
        if (lazyloadImages.length == 0) {
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }
    document.addEventListener("DOMContentLoaded", function() {
      var imgs = document.querySelectorAll(".image_lazy");
      imgs.forEach(function(img) {
        img.src = '/assets/images/loading.svg';
      })
      setTimeout(function() {
        lazyload();
      }, 750);
      document.addEventListener("scroll", lazyload);
      window.addEventListener("resize", lazyload);
      window.addEventListener("orientationChange", lazyload);
    });
  </script>
  <!-- end optimisation scripts -->
  <script type="rocketlazyloadscript" async>
    $('iframe[data-src]').each(function() {
      var dataSrc = $(this).attr('data-src');
      if (dataSrc) { // Check if data-src exists
        $(this).attr('src', dataSrc);
        $(this).removeAttr('data-src');
      }
    });
  </script>
  <!-- Javascript code -->
</body>

</html>