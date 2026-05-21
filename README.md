# Holtzweb — Astro Site

Static marketing site for [holtzweb.com](https://www.holtzweb.com) built from [astro-marketing-theme](https://github.com/MarcusHoltz/astro-marketing-theme).


---

## Features in Hiding

These components and pages are complete but intentionally parked. They are **not built unless you rename them** (remove the `.unused` / `.disabled` suffix so Astro picks them up). All import paths have been verified correct.


---

### Ready to drop in — no other changes needed

| File | What it is | Where to use it |
|------|-----------|-----------------|
| `src/components/Ticker.astro.unused` | Three rows of large scrolling CSS-animated keywords (SECURE · RELIABLE · SCALABLE · …). Pure CSS, zero JS. | Between any two sections on `index.astro` |
| `src/components/Testimonials.astro.unused` | Testimonial grid pulling from `src/data/projects/testimonials.json` (3 real entries). | `index.astro` or `about.astro` |
| `src/components/CTA.astro.unused` | Standalone "Network Snapshot" + phone CTA banner. | Bottom of `index.astro`, above `<Footer />` |


---

### Intentionally disabled — enable as a pair

| File | What it is |
|------|-----------|
| `src/components/ConciergeIT.astro.disabled` | Homepage section for IT managed service — automation pipeline visual + feature grid. |
| `src/pages/services/concierge-it.astro.disabled` | Full service page: 3 pricing tiers (Essential/Managed/Enterprise), 5-step how-it-works, FAQ, and bottom CTA. |

To enable: rename both files (drop `.disabled`), then add `<ConciergeIT />` to `index.astro` and add the service to `src/data/services/services-index.json`.


---

### Needs minor work before use

| File | What it is | What's needed |
|------|-----------|---------------|
| `src/components/AboutScene.astro.unused` | Interactive Three.js 3D IT workspace — draggable desk, dual monitors, server rack with blinking LEDs, floating orbit labels with tooltips. Designed to embed inside an about section via `values` prop. | Pair with an about section; consider wrapping in an `<IntersectionObserver>` RAF gate if performance is a concern. |
| `src/components/ConciergeIT.astro.unused` | Empty stub only — points to `ConciergeIT.astro.disabled`. Ignore. | — |
| `src/content/posts/` + `src/pages/blog/[slug].astro` | Local Astro content-collection blog. `[slug].astro` already reads from `src/content/posts/*.md` and renders full post pages with image hero, tags, breadcrumb, and styled prose. One placeholder post (`mmmm-cake.md`) included. The blog index currently links out to the external RSS feed; swap `href={post.link}` → `href={withBase("/blog/" + post.slug)}` in `blog/index.astro` to redirect readers to local pages instead. | Add a `src/content/config.ts` schema (title, pubDate, description, tags, category, draft, pin, image) and drop `.md` posts into `src/content/posts/`. |
| `src/lib/socialLinks.ts` | Complete social link generator (17 platforms: GitHub, LinkedIn, GitLab, X/Twitter, Instagram, YouTube, Twitch, Telegram, Signal, Blog, Reddit, HN, Lobsters, Discogs, CodePen, JSFiddle, Facebook). Reads handles from `src/data/global/personal.json` and returns typed `SocialLink[]`. Fully implemented but never imported — `Sidebar.astro` uses a hardcoded 2-entry array instead. | Import `getSocialLinks` from `@/lib/socialLinks` in `Sidebar.astro`, call it with `personalData`, and remove the inline `socialLinks` array. Add any new handles to `personal.json`. |

<!-- packages-last-updated: 2026-05-16 -->
