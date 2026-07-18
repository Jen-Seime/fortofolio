---
name: Digital Architect
colors:
  surface: '#111317'
  surface-dim: '#111317'
  surface-bright: '#37393e'
  surface-container-lowest: '#0c0e12'
  surface-container-low: '#1a1c20'
  surface-container: '#1e2024'
  surface-container-high: '#282a2e'
  surface-container-highest: '#333539'
  on-surface: '#e2e2e8'
  on-surface-variant: '#c4c5d9'
  inverse-surface: '#e2e2e8'
  inverse-on-surface: '#2f3035'
  outline: '#8e90a2'
  outline-variant: '#434656'
  surface-tint: '#b8c3ff'
  primary: '#b8c3ff'
  on-primary: '#002388'
  primary-container: '#2e5bff'
  on-primary-container: '#efefff'
  inverse-primary: '#124af0'
  secondary: '#ddb7ff'
  on-secondary: '#490080'
  secondary-container: '#6f00be'
  on-secondary-container: '#d6a9ff'
  tertiary: '#4cd6ff'
  on-tertiary: '#003543'
  tertiary-container: '#007792'
  on-tertiary-container: '#dbf4ff'
  error: '#ffb4ab'
  on-error: '#690005'
  error-container: '#93000a'
  on-error-container: '#ffdad6'
  primary-fixed: '#dde1ff'
  primary-fixed-dim: '#b8c3ff'
  on-primary-fixed: '#001356'
  on-primary-fixed-variant: '#0035be'
  secondary-fixed: '#f0dbff'
  secondary-fixed-dim: '#ddb7ff'
  on-secondary-fixed: '#2c0051'
  on-secondary-fixed-variant: '#6900b3'
  tertiary-fixed: '#b7eaff'
  tertiary-fixed-dim: '#4cd6ff'
  on-tertiary-fixed: '#001f28'
  on-tertiary-fixed-variant: '#004e60'
  background: '#111317'
  on-background: '#e2e2e8'
  surface-variant: '#333539'
typography:
  headline-xl:
    fontFamily: Space Grotesk
    fontSize: 64px
    fontWeight: '700'
    lineHeight: '1.1'
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Space Grotesk
    fontSize: 40px
    fontWeight: '600'
    lineHeight: '1.2'
    letterSpacing: -0.01em
  headline-lg-mobile:
    fontFamily: Space Grotesk
    fontSize: 32px
    fontWeight: '600'
    lineHeight: '1.2'
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.6'
    letterSpacing: '0'
  body-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: '1.5'
  label-mono:
    fontFamily: JetBrains Mono
    fontSize: 13px
    fontWeight: '500'
    lineHeight: '1'
    letterSpacing: 0.05em
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  container-max: 1280px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 64px
  stack-sm: 8px
  stack-md: 24px
  stack-lg: 48px
  section-gap: 120px
---

## Brand & Style
This design system is engineered for a high-end, technical portfolio that balances academic professionalism with modern web development flair. The brand personality is "The Future-Proof Engineer"—precise, innovative, and sophisticated.

The visual style leans heavily into **Glassmorphism**, utilizing multi-layered translucency to create depth without clutter. By combining deep charcoal foundations with vibrant, neon-inflected accents, the UI evokes a high-tech terminal or a premium IDE. The emotional response should be one of trust in the developer's technical stack and admiration for their attention to detail. Key characteristics include high-density information layouts softened by generous whitespace and soft-glow interactive states.

## Colors
The palette is rooted in a "Void" black foundation to maximize the luminosity of the accent colors. 

- **Primary (Neon Blue):** Used for critical calls to action, active states, and primary navigation links.
- **Secondary (Vibrant Purple):** Used for hover states, coding tags, and decorative gradients to add depth.
- **Tertiary (Cyan/Electric):** Reserved for success states and highlight accents within project cards.
- **Neutral/Surface:** A range of deep charcoals are used to differentiate "glass" layers from the canvas. 

Typography utilizes high-contrast whites for headings and mid-tone grays for metadata to ensure readability against dark backgrounds.

## Typography
The typography strategy pairs a geometric, tech-forward display face with a highly legible, neutral body face. 

- **Headlines:** Space Grotesk provides a "hacker-cool" yet professional edge with its distinctive letterforms.
- **Body:** Inter is used for all long-form content to ensure maximum accessibility and a clean, modern aesthetic.
- **Utility/Labels:** JetBrains Mono is employed for technical metadata, tags, and small labels to reinforce the developer identity.

Scale is used aggressively to create a clear visual hierarchy, with significant contrast between section headers and body descriptions.

## Layout & Spacing
The design system utilizes a **12-column fixed grid** for desktop and a **fluid single-column grid** for mobile. 

- **Rhythm:** A base 8px spacing system guides all internal component padding and margins.
- **Whitespace:** Generous section gaps (120px+) are used to allow the glassmorphism elements to "breathe" and prevent the dark theme from feeling claustrophobic.
- **Alignment:** Content is centered within a maximum container width, while decorative background gradients may bleed to the edges of the viewport to enhance the sense of depth.

## Elevation & Depth
Depth is achieved through the physics of light rather than traditional drop shadows.

1.  **The Canvas:** The lowest level, a deep `#050505` black.
2.  **The Glow:** Large, blurry, low-opacity radial gradients (Primary and Secondary colors) sit behind content layers to create a sense of environmental lighting.
3.  **The Glass:** Cards and panels use a `backdrop-filter: blur(12px)` with a semi-transparent background.
4.  **The Edge:** Every glass element must have a 1px solid border with a linear gradient (top-left to bottom-right) to simulate a light-catching "glass edge."
5.  **Interactive Glow:** Buttons and active cards utilize an `outer-glow` (box-shadow with color) rather than a black shadow, making them appear as if they are emitting light.

## Shapes
This design system uses **Rounded (Option 2)** geometry. This strikes a balance between the precision of sharp technical lines and the approachability of modern consumer software. 

- **Standard Cards:** 1rem (16px) corner radius.
- **Buttons & Chips:** 0.5rem (8px) corner radius for a sturdy, clickable feel.
- **Input Fields:** Consistent with buttons at 0.5rem.

Large decorative elements or background "blobs" should remain perfectly organic and circular to contrast with the structured grid of the UI.

## Components
### Glass Cards
The signature component. Must feature a `backdrop-filter: blur(12px)`, a subtle 1px border (`rgba(255,255,255,0.1)`), and a slight vertical gradient. On hover, the border opacity increases and the background glow intensifies.

### Glow Buttons
Primary buttons use a solid Primary Color background. On hover, they trigger a `box-shadow` glow effect of the same color. Secondary buttons are "ghost" style with a glass background and a colored border.

### Tech Chips
Small, mono-spaced tags used for skills (e.g., "React", "TypeScript"). These use a subtle secondary color tint with a high-contrast border.

### Navigation Bar
A fixed, "floating" glass bar at the top of the viewport. It should be narrow, with a heavy backdrop blur to ensure content passing underneath is obscured but maintains the color profile.

### Interactive Inputs
Form fields should have a dark, recessed appearance (`rgba(0,0,0,0.3)`) and a 1px border that transitions to the Primary accent color on focus.