# Fraven Interiors – Site Improvement Guide

## 1. Performance

| Improvement | Why | How |
|-------------|-----|-----|
| **Lazy-load images** | Faster first load, especially on mobile | Add `loading="lazy"` to images below the fold (projects, contact image). |
| **Optimize hero image** | `banner-bg.jpg` is likely large | Compress to WebP or smaller JPG (e.g. 1400px wide). Use `<picture>` with WebP + JPG fallback. |
| **Preconnect to Google Fonts** | Reduces delay before font loads | Add `<link rel="preconnect" href="https://fonts.googleapis.com">` and same for `fonts.gstatic.com`. |
| **Minimize render-blocking** | Faster first paint | Load Font Awesome async or self-host only the icons you use (e.g. 10–15 icons). |

---

## 2. SEO

| Improvement | Why | How |
|-------------|-----|-----|
| **Add `og:image`** | Better previews when shared on social (Facebook, WhatsApp, LinkedIn) | Add `<meta property="og:image" content="https://www.fraveninteriors.com/img/banner-bg.jpg">` (use your real URL and a 1200×630 image). |
| **Structured data (JSON-LD)** | Rich results in Google (e.g. local business) | Add a `<script type="application/ld+json">` block with LocalBusiness schema (name, address, phone, email, url). |
| **Page-specific titles & descriptions** | Each page ranks for its own topic | About: “About Fraven Interiors – Our Team & Story”; Services: “Interior Design Services – Residential & Commercial”; etc. |
| **Heading hierarchy** | One `<h1>` per page, then logical `<h2>`/`<h3>` | You already have one H1 on the homepage; ensure About/Services/Projects/Contact each have one clear H1. |
| **Internal links** | Helps Google and users discover projects/contact | Add a “View project” or “Get a quote” link from each project card to contact or project detail. |

---

## 3. Trust & Conversion

| Improvement | Why | How |
|-------------|-----|-----|
| **Clickable phone number** | One tap to call on mobile | Use `<a href="tel:+254707558754">0707558754</a>` in header/footer (with +254 if that’s your country code). |
| **Short testimonials** | Builds trust | Add a “What clients say” section with 2–3 quotes (name, project type, optional photo). |
| **Before/after or case study** | Shows results | One section or project page with before/after images or a short “Challenge → Solution → Result” story. |
| **Clear response time** | Sets expectations | e.g. “We reply within 24 hours” near the form (you have this in copy; keep it visible). |
| **Optional: WhatsApp** | Many users prefer it for first contact | Add a “Chat on WhatsApp” button linking to `https://wa.me/254707558754` (adjust number). |

---

## 4. User Experience (UX)

| Improvement | Why | How |
|-------------|-----|-----|
| **Skip to main content** | Accessibility and keyboard users | Add `<a href="#main-content" class="skip-link">Skip to main content</a>` and an `id="main-content"` on the first section after the header. |
| **Project cards clickable** | Users expect to open a project | Wrap the whole project card in `<a href="projects.html#project-1">` or a dedicated project page. |
| **Form feedback** | Users know the form worked | You already show success/error; ensure the alert is visible (e.g. scroll into view) and consider a short “We’ll be in touch within 24 hours” in the success message. |
| **Footer address** | Local SEO and trust | If you have a physical address, add it in the footer (and in LocalBusiness schema). |
| **Social links** | Open in new tab and accessible | Use `target="_blank"` and `rel="noopener noreferrer"` (you can add `aria-label="Facebook"` etc. for screen readers). |

---

## 5. Accessibility

| Improvement | Why | How |
|-------------|-----|-----|
| **Focus styles** | Keyboard users need to see focus | Ensure buttons and links have a visible `:focus` outline (e.g. orange ring) in `modern-minimal.css`. |
| **Alt text** | Screen readers and SEO | Use descriptive alt for every image (e.g. “Modern living room with neutral sofa and plants” not just “Living room”). |
| **Color contrast** | Readability for everyone | Check gray text on dark background (e.g. `#BFC5CA` on `#1F2A36`) meets WCAG AA (4.5:1 for normal text). |
| **Form labels** | Required for accessibility | Keep every input associated with a `<label>` (you already do; avoid removing them). |

---

## 6. Content & Pages

| Improvement | Why | How |
|-------------|-----|-----|
| **Services link to contact** | Clear path to “Get a quote” | Add “Get a quote” or “Discuss this service” on each service card linking to contact (or contact with `?service=residential`). |
| **About page** | Builds connection | Short story, team photo, values (quality, deadlines, communication). You have structure; add a few sentences and a clear CTA to contact. |
| **Projects page** | Proof of work | Ensure all project images load (g5–g9 if you use them); add short captions or categories (Residential / Commercial). |
| **FAQ section** | Reduces same questions and helps SEO | 5–10 questions (e.g. “How long does a project take?”, “Do you work outside Nairobi?”) on the Contact page or a dedicated FAQ. |

---

## 7. Technical / Security

| Improvement | Why | How |
|-------------|-----|-----|
| **HTTPS** | Required for forms and trust | Use HTTPS on your live domain (e.g. Let’s Encrypt). |
| **Form on PHP host** | Emails actually send | Deploy the site (or at least the form) on a host that runs PHP and has `mail()` or SMTP configured. |
| **Canonical URL** | Use the real domain | Update canonical and `og:url` to your actual live URL (e.g. `https://www.fraveninteriors.com`). |

---

## Priority order (quick wins first)

1. **Phone as `tel:` link** in header/footer.  
2. **`og:image`** and **canonical/og:url** with real domain.  
3. **`loading="lazy"`** on below-the-fold images.  
4. **Skip link** and **`:focus` styles** in CSS.  
5. **LocalBusiness JSON-LD** on the homepage.  
6. **Testimonials** section and **clickable project cards**.  
7. **Preconnect** for Google Fonts and **optional WebP** for hero.

Use this as a checklist and tick off items as you implement them. If you tell me which item you want first (e.g. “add og:image and tel link”), I can give you the exact code to paste.
