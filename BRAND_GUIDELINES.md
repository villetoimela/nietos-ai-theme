# Nietos AI - Brand Guidelines

## 1. Brand Core

### Brand Promise
Nietos AI makes WordPress site management natural and effortless. We're not just a tool – we're the new standard for intelligent site administration.

### Brand Values
- **Trustworthy**: Security and user control first
- **Intuitive**: Natural language interface that understands
- **Efficient**: Automate routines, free up creativity
- **Transparent**: Bring Your Own Key model, complete transparency

### Brand Personality
- **Professional, not over-the-top**: We're not a "helper bot" or "digital friend" – we're a reliable tool
- **Technical, not technocratic**: We communicate clearly without jargon
- **Modern, not trendy**: Enduring aesthetics over fleeting trends
- **Human, not artificial**: We help real people with real work

## 2. Visual Identity

### Color Palette

#### Midnight Core Palette
```css
/* Foundational Surfaces */
--nietos-base: #4433A6         /* Midnight Indigo background */
--nietos-contrast: #79F3B1     /* Mint foreground on dark surfaces */
--nietos-accent-1: #5644BC     /* Action/background tint */
--nietos-accent-2: #372696     /* Hover / emphasis */
--nietos-accent-3: #251D51     /* Deep shadow / headlines */
--nietos-accent-5: #E8B7FF     /* Highlight panel */
--nietos-overlay: #79F3B133    /* 20% mint overlay / borders */
```

#### Text Colors
```css
--nietos-text-primary: #79F3B1   /* Body copy on base surfaces */
--nietos-text-secondary: #E8B7FF /* Metadata and subtle headings */
--nietos-text-tertiary: #94A3B8  /* Muted UI elements */
--nietos-text-inverted: #251D51  /* Text on light highlight panels */
```

#### Semantic Support
```css
--nietos-success: #10B981      /* Positive actions */
--nietos-warning: #F59E0B      /* Warnings */
--nietos-danger: #EF4444       /* Destructive */
--nietos-info: #06B6D4         /* Informative highlights */
```

### Typography

#### Fonts

**Primary UI Font – Fira Sans**
- Clean humanist sans-serif for body copy and interface text
- Supports wide weight range for hierarchy

```css
font-family: "Fira Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
```

**Display Font – Literata**
- Elegant serif for headings, pull quotes and large numerals

```css
font-family: "Literata", "Times New Roman", serif;
```

**Code Font – JetBrains Mono** (for inline code/ui logs)
```css
font-family: "JetBrains Mono", "Courier New", monospace;
```

#### Text Hierarchy

```css
/* Headings */
--heading-xl: 52px / 1.1, font-family: Literata, font-weight: 300
--heading-lg: 40px / 1.15, font-family: Literata, font-weight: 300
--heading-md: 32px / 1.2, font-family: Literata, font-weight: 300
--heading-sm: 24px / 1.25, font-family: Literata, font-weight: 400

/* Body Text */
--body-lg: 18px / 1.6, font-family: Fira Sans, font-weight: 400
--body-md: 16px / 1.6, font-family: Fira Sans, font-weight: 400
--body-sm: 14px / 1.5, font-family: Fira Sans, font-weight: 400

/* UI Text */
--label: 14px / 1.4, font-family: Fira Sans, font-weight: 500
--caption: 12px / 1.4, font-family: Fira Sans, font-weight: 400
--code: 14px / 1.4, font-family: JetBrains Mono, font-weight: 400
```

### Logo and Marks

#### Logo Usage

**Primary Logo**
- Nietos AI text: Inter Bold, 24pt
- Color: --nietos-primary or --nietos-text-primary
- Minimum size: 120px width
- Clear space: 16px on all sides

**Icon/Symbol**
- Simple geometric shape
- Recommended: Modernist "N" or abstract chat-bubble
- Works at 16px–256px sizes
- Monochromatic or two-color (primary + accent)

**Logo Versions**
1. Full logo (text + icon)
2. Compact logo (text only)
3. Icon logo (symbol only, for small spaces)

#### Incorrect Usage
❌ Don't stretch or modify proportions
❌ Don't use gradients (except in specifically defined contexts)
❌ Don't add shadows to the logo
❌ Don't use colors outside the brand palette

### Iconography

#### Style Principles
- **Stroke-based**: 2px line weight, rounded caps
- **Minimalist**: Clear, simple forms
- **Consistent**: Same geometric style across all icons
- **Recommended icon libraries**: Lucide, Heroicons, Feather

#### Icon Sizes
- Small: 16px × 16px
- Medium: 20px × 20px
- Large: 24px × 24px

#### Spacing Scale
Use these tokens to keep vertical rhythm consistent.

```css
--spacing-20 (XS): 8px
--spacing-30 (Small): 16px
--spacing-40 (Medium): 24px
--spacing-50 (Large): 40px
--spacing-60 (XL): 56px
--spacing-70 (2XL): 72px
--spacing-80 (3XL): 96px
```

### UI Components

#### Buttons

```css
/* Primary Button */
background: --nietos-contrast
color: --nietos-base
padding: 16px 24px
border-radius: 0
font-family: Literata
font-weight: 400
text-transform: uppercase
letter-spacing: -0.01em
hover: color-mix(in srgb, --nietos-contrast 85%, transparent)

/* Secondary Button */
background: transparent
color: --nietos-contrast
border: 1px solid --nietos-contrast
padding: 16px 24px
border-radius: 0
hover: background-color: color-mix(in srgb, --nietos-contrast 10%, transparent)

/* Danger Button */
background: --nietos-danger
color: #FFFFFF
```

#### Cards and Panels

```css
background: white
border: 1px solid --nietos-border
border-radius: 8px
padding: 20px
box-shadow: 0 1px 3px rgba(0,0,0,0.05)
```

#### Input Fields

```css
border: 1px solid --nietos-border
border-radius: 6px
padding: 8px 12px
background: white
focus: border-color --nietos-primary
```

### Animations and Transitions

#### Timing
```css
--transition-fast: 150ms cubic-bezier(0.4, 0, 0.2, 1)
--transition-base: 250ms cubic-bezier(0.4, 0, 0.2, 1)
--transition-slow: 350ms cubic-bezier(0.4, 0, 0.2, 1)
```

#### Use Cases
- Hover states: fast
- Modals and dropdown menus: base
- Page transitions: slow

## 3. Voice and Tone Guidelines

### General Tone
- **Clear and direct**: "Create a new post" > "Would you perhaps like to create a new post?"
- **Active voice**: "Update site settings" > "Site settings are being updated"
- **Human error tolerance**: When something goes wrong, explain what happened and how to fix it

### Terminology

#### Use These
✅ "Converse with your site"
✅ "Manage content with natural language"
✅ "Smart tools for WordPress developers"
✅ "Secure, transparent, under your control"

#### Avoid These
❌ "AI assistant"
❌ "Bot"
❌ "Virtual assistant"
❌ "Artificial intelligence solution"

### UX Copy

#### Functional Messages
```
Loading... → "Processing request..."
Error → "Action failed: [reason]"
Success → "Done"
Confirm → "Confirm [action]"
```

#### Chat Interface
```
Placeholder: "Ask or request a task – e.g., 'Create a new post'"
Empty state: "Start a conversation by typing a message"
Error message: "Request could not be processed. Check your API settings."
```

### Microcopy

#### Buttons
- Save Settings
- Send Message
- Cancel Action
- Confirm Deletion

#### Forms
- API Key (required)
- Select Model
- Max Length (tokens)
- Temperature (0-2)

## 4. Brand Application

### WordPress Admin Integration

#### Menu
- Location: Main menu, position 25 (after content management section)
- Icon: Dashicons or custom SVG
- Name: "Nietos AI"
- Submenus: "Chat", "Settings", "Documentation"

#### Settings Page
- Follows WordPress Admin styles
- Uses brand colors for accents
- Consistent cards and panels
- Clear hierarchy: Heading → Form → Actions

### Gutenberg Integration

#### Sidebar Panel
- Title: "Nietos AI"
- Icon: Brand icon
- Compact chat view
- Contextual guidance: "Edit this [post type] by typing a request"

### Website (Future)

#### Hero Section
```
H1: "WordPress management, reimagined"
Subtitle: "Converse with your site. Create content.
          Manage users. All in natural language."
CTA: "Download Plugin" / "Read Documentation"
```

#### Feature Listing
- Grid layout (3 columns)
- Icon + Heading + Short description
- Hover effect: Lift + shadow

#### Color Scheme on Website
- Hero: Gradient (primary → primary-light), on light background
- Content: White background, light gray borders
- Footer: Dark (--nietos-text-primary as background)

## 5. Messaging Pillars

### Marketing Messages

#### Core Messages
1. **Natural Management**: "Manage your WordPress site through conversation – no complex menus"
2. **Secure and Transparent**: "Full control with your own API keys. No hidden costs."
3. **Built for Developers and Content Creators**: "Automate routines. Focus on creativity."

#### Use Cases (Example Copy)
```
"Create a new blog post about WordPress security"
  → Complete post in under a minute

"Upload this image and use it as the featured image"
  → Media in library and attached automatically

"Create a new editor user named Sarah"
  → User created securely with proper permissions
```

### Social Media

#### Tone
- Professional but approachable
- Share concrete use cases
- Emphasize security and transparency

#### Hashtags
#WordPress #WebDevelopment #ProductivityTools #OpenSource

#### Content Types
- Feature spotlights (video/GIF)
- User stories
- Technical deep-dive articles
- Update and release announcements

## 6. Do's & Don'ts

### ✅ DO
- Emphasize security and user control
- Use concrete examples of features
- Speak the language of developers and content creators
- Show code examples and API documentation
- Be transparent about limitations (e.g., API costs)

### ❌ DON'T
- Exaggerate AI capabilities ("replaces developers")
- Use clichés ("revolutionary", "game-changing")
- Hide technical details from non-technical audiences
- Promise free service (BYOK model is transparent)
- Compare aggressively to competitors

## 7. Brand Asset Checklist

Before publishing, verify:

- [ ] Is the brand color palette used correctly?
- [ ] Is typography consistent (Inter font)?
- [ ] Does the tone follow brand guidelines (not too "AI-ish")?
- [ ] Is the logo/icon the correct size and clear?
- [ ] Do links and CTA buttons work?
- [ ] Has all text been proofread?
- [ ] Is the brand consistent across all touchpoints?

---

## Appendices

### Design Tokens (JSON)
```json
{
  "colors": {
    "primary": "#2563EB",
    "primary-dark": "#1E40AF",
    "primary-light": "#3B82F6",
    "background": "#FFFFFF",
    "surface": "#F8FAFC",
    "border": "#E2E8F0",
    "success": "#10B981",
    "warning": "#F59E0B",
    "danger": "#EF4444",
    "info": "#06B6D4",
    "text-primary": "#0F172A",
    "text-secondary": "#475569",
    "text-tertiary": "#94A3B8"
  },
  "typography": {
    "font-family": "'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif",
    "font-sizes": {
      "heading-xl": "32px",
      "heading-lg": "24px",
      "heading-md": "20px",
      "heading-sm": "16px",
      "body-lg": "16px",
      "body-md": "14px",
      "body-sm": "12px"
    }
  },
  "spacing": {
    "xs": "4px",
    "sm": "8px",
    "md": "16px",
    "lg": "24px",
    "xl": "32px",
    "2xl": "48px"
  },
  "border-radius": {
    "sm": "4px",
    "md": "6px",
    "lg": "8px",
    "xl": "12px",
    "full": "9999px"
  }
}
```

### Usage Examples (WordPress Context)

**Admin Notice:**
```php
<div class="notice notice-info nietos-notice">
    <p><strong>Nietos AI:</strong> API key configured successfully.</p>
</div>
```

**Chat Message (User):**
```html
<div class="nietos-message nietos-message-user">
    <div class="nietos-message-content">
        Create a new post about WordPress security
    </div>
    <div class="nietos-message-meta">You · Just now</div>
</div>
```

**Chat Message (Assistant):**
```html
<div class="nietos-message nietos-message-assistant">
    <div class="nietos-message-content">
        I've created a new post titled "WordPress Security Essentials"...
    </div>
    <div class="nietos-message-meta">Nietos AI · Just now</div>
</div>
```

---

**Version:** 1.0
**Updated:** 2025-11
**Owner:** Nietos AI Team
**Status:** Active
