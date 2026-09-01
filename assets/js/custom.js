"use strict";
(() => {
    function e(e) {
        let t = location.href;
        if (e) {
            let n = new URL(t);
            if (n.pathname !== e) {
                return n.pathname = e, n.search = "", n.href;
            }
        }
        return t;
    }
    function t() {
        return !!(navigator.webdriver || navigator.userAgent.includes("Headless"));
    }
    var n, a, r, i, o = (r = () => {}, () => (r && (i = r(r = 0)), i));
    (n = () => {
        o();
        (() => {
            var n;
            let a = e => e,
                r = document,
                i = r.currentScript;
            if (t()) return;
            let o = null != (n = null == i ? void 0 : i.dataset) ? n : {},
                l = d(o, "view"),
                s = d(o, "event"),
                u = d(o, "session"),
                c = null,
                p = null,
                f = !0;
            function d(e, t) {
                return e[`${t}Endpoint`] || ("endpoint" in e ? `${e.endpoint}/${t}` : `${null != i && i.src.includes("/va/") ? "/va" : "/_vercel/insights"}/${t}`);
            }
            async function h(e) {
                if (e && !Array.isArray(e)) return { p: e };
                let t = r.querySelectorAll("[data-flag-values]");
                if (!i || !t.length) return;
                let n = new URL(i.src),
                    a = n.pathname.split("/"),
                    o = a.pop();
                return o && a.push("flags", o), n.pathname = a.join("/"), import(n.href).then(n => n.gather(t, e));
            }
            async function v({ type: t, data: n, options: i }) {
                var u;
                let f = e(p),
                    d = r.referrer,
                    v = a({ type: t, url: f, payload: n });
                if (!1 === v || null === v) return;
                v && (f = v.url, n = null != (u = v.payload) ? u : n);
                let w = d.includes(location.host),
                    y = {
                        o: f,
                        sv: "0.1.3",
                        sdkn: o.sdkn,
                        sdkv: o.sdkv,
                        ts: Date.now(),
                        ...c && { dp: c },
                        ...null != i && i.withReferrer && !w ? { r: d } : {},
                        ..."event" === t && n && { en: n.name, ed: n.data },
                        f: await h(null == i ? void 0 : i.flags).catch(() => {})
                    };
                try {
                    await fetch("pageview" === t ? l : s, {
                        method: "POST",
                        keepalive: !0,
                        headers: { "Content-Type": "application/json" },
                        body: JSON.stringify(y)
                    });
                } catch (g) {}
            }
            async function w(e = {}) {
                return v({
                    type: "pageview",
                    options: { withReferrer: e.withReferrer }
                });
            }
            async function y(e, t, n) {
                return v({
                    type: "event",
                    data: { name: e, data: t },
                    options: {
                        withReferrer: !0,
                        flags: null == n ? void 0 : n.flags
                    }
                });
            }
            async function g() {
                await fetch(u, {
                    method: "GET",
                    keepalive: !0
                }).catch(() => {});
            }
            function m(e) {
                return e.pathname === new URL(k).pathname;
            }
            function R(e) {
                let t = e ? "string" == typeof e ? new URL(e, location.origin) : new URL(e.href) : null;
                !t || m(t) || t.hash && m(t) || w();
            }
            let k = e(),
                S = () => {
                    var e;
                    window.va = function (e, t) {
                        "beforeSend" === e
                            ? a = t
                            : "event" === e
                                ? t && y(t.name, t.data, t.options)
                                : "pageview" === e
                                    ? t && (t.route && (c = t.route), t.path && (p = t.path), w({ withReferrer: f }), f = !1)
                                    : "enableCookie" === e && g();
                    };
                    null == (e = window.vaq) || e.forEach(([e, t]) => {
                        window.va(e, t);
                    });
                };
            (() => {
                if (window.vai || (window.vai = !0, S(), o.disableAutoTrack)) return;
                w({ withReferrer: !0 });
                let t = history.pushState.bind(history);
                history.pushState = function (...n) {
                    t(...n);
                    try {
                        R(n[2]), k = e();
                    } catch (a) {}
                };
                window.addEventListener("popstate", function () {
                    R(e()), k = e();
                });
            })();
        })();
    }, () => (a || n((a = { exports: {} }).exports, a), a.exports))();
})();
var header = document.getElementById("site-header");
var menuButton = document.getElementById("menu-button");
if (header && menuButton) {
    var updateScrollState = () => {
        header.classList.toggle("scrolled", window.scrollY > 4);
    };
    updateScrollState();
    addEventListener("scroll", updateScrollState, { passive: true });
    var isMenuOpen = () => {
        return menuButton.getAttribute("aria-expanded") === "true";
    };
    var setMenuState = (open) => {
        menuButton.setAttribute("aria-expanded", String(open));
        header.classList.toggle("menu-open", open);
    };
    menuButton.addEventListener("click", () => {
        setMenuState(!isMenuOpen());
    });
    header.addEventListener("click", (event) => {
        if (event.target.closest("#site-nav a")) {
            setMenuState(false);
        }
    });
}
var submenus = Array.from(document.querySelectorAll(".has-submenu"));
submenus.forEach((submenu) => {
    let trigger = submenu.querySelector(".submenu-trigger");
    if (!trigger) return;
    let isSubmenuOpen = () => {
        return trigger.getAttribute("aria-expanded") === "true";
    };
    let setSubmenuState = (open) => {
        trigger.setAttribute("aria-expanded", String(open));
        submenu.classList.toggle("submenu-open", open);
    };
    trigger.addEventListener("click", (event) => {
        event.stopPropagation();
        let open = !isSubmenuOpen();
        submenus.forEach((item) => {
            if (item !== submenu) {
                item.classList.remove("submenu-open");
                item.querySelector(".submenu-trigger")?.setAttribute("aria-expanded", "false");
            }
        });
        setSubmenuState(open);
    });
    document.addEventListener("click", (event) => {
        if (isSubmenuOpen() && !submenu.contains(event.target)) {
            setSubmenuState(false);
        }
    });
    addEventListener("keydown", (event) => {
        if (event.key === "Escape" && isSubmenuOpen()) {
            setSubmenuState(false);
            trigger.focus();
        }
    });
});

var e = matchMedia(`(prefers-reduced-motion: reduce)`).matches, t = document.querySelectorAll(`.reveal`); if (t.length && !e && `IntersectionObserver` in window) { let e = new IntersectionObserver(t => { for (let n of t) n.isIntersecting && (n.target.classList.add(`in-view`), e.unobserve(n.target)) }, { threshold: .3 }); for (let n of t) n.classList.add(`armed`), e.observe(n) } var n = document.querySelectorAll(`button.scroll`); for (let e of n) e.addEventListener(`click`, () => { let t = e.closest(`section`)?.nextElementSibling ?? null; for (; t && t.tagName !== `SECTION`;)t = t.nextElementSibling; t?.scrollIntoView({ behavior: `smooth`, block: `start` }) });