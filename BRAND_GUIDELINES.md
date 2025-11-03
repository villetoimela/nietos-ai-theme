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

#### Primary Colors
```css
/* Primary Blue - Technological, trustworthy */
--nietos-primary: #2563EB      /* Blue */
--nietos-primary-dark: #1E40AF /* Dark blue */
--nietos-primary-light: #3B82F6 /* Light blue */

/* Neutral Base - Clean, minimalist */
--nietos-background: #FFFFFF   /* White */
--nietos-surface: #F8FAFC      /* Very light gray */
--nietos-border: #E2E8F0       /* Light gray border */
```

#### Secondary Colors
```css
/* Semantic Colors */
--nietos-success: #10B981      /* Green - successful actions */
--nietos-warning: #F59E0B      /* Orange - warnings */
--nietos-danger: #EF4444       /* Red - critical actions */
--nietos-info: #06B6D4         /* Cyan - information */
```

#### Text Colors
```css
/* Typography Colors */
--nietos-text-primary: #0F172A    /* Main headings and content */
--nietos-text-secondary: #475569  /* Subheadings and meta text */
--nietos-text-tertiary: #94A3B8   /* Placeholder and disabled */
--nietos-text-inverted: #FFFFFF   /* Dark backgrounds */
```

### Typography

#### Fonts

**Primary Font - Inter**
- Modern sans-serif, optimized for screens
- Used for all UI text
- Available: Google Fonts or locally

```css
font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
```

**Monospace - JetBrains Mono** (optional, for code)
```css
font-family: 'JetBrains Mono', 'Courier New', monospace;
```

#### Text Hierarchy

```css
/* Headings */
--heading-xl: 32px / 40px, font-weight: 700  /* Hero headings */
--heading-lg: 24px / 32px, font-weight: 600  /* Page headings */
--heading-md: 20px / 28px, font-weight: 600  /* Card headings */
--heading-sm: 16px / 24px, font-weight: 600  /* Small headings */

/* Body Text */
--body-lg: 16px / 24px, font-weight: 400     /* Main content */
--body-md: 14px / 20px, font-weight: 400     /* Normal text */
--body-sm: 12px / 16px, font-weight: 400     /* Small text */

/* UI Text */
--label: 14px / 20px, font-weight: 500       /* Labels */
--caption: 12px / 16px, font-weight: 400     /* Captions */
--code: 14px / 20px, font-weight: 400        /* Code blocks */
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

### UI Components

#### Buttons

```css
/* Primary Button */
background: --nietos-primary
color: white
padding: 10px 20px
border-radius: 6px
font-weight: 500
hover: --nietos-primary-dark

/* Secondary Button */
background: transparent
color: --nietos-primary
border: 1px solid --nietos-border
padding: 10px 20px
border-radius: 6px

/* Danger Button */
background: --nietos-danger
color: white
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
