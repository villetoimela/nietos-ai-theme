# Nietos Blog Posts Block

Kaunis, dynaaminen blog-korttilistalohko kategoriafiltteröinnillä. Suunniteltu Nietos AI brand guidelinesin mukaan midnight-värimaailmalla ja mint/lavender aksenttiväreillä.

## Ominaisuudet

- ✨ **Dynaaminen kategoriafiltteröinti** - Käyttäjät voivat suodattaa artikkeleita kategorioittain
- 🎨 **Brand-värimaailma** - Midnight gradient taustat + Mint/Lavender aksentit
- 📱 **Täysin responsiivinen** - Toimii kaikilla laitteilla
- ⚡ **Sujuvat animaatiot** - Hienovaraiset fade-in ja hover-efektit
- 🎛️ **Mukautettava** - Asetukset editorin sivupalkissa
- ♿ **Saavutettava** - Reduced motion -tuki, semanttinen HTML

## Käyttö

### 1. Lisää lohko editorissa

1. Avaa WordPress-editori
2. Paina `+` lisätäksesi uuden lohkon
3. Hae "Nietos Blog Posts"
4. Lisää lohko sivulle

### 2. Asetukset

Editorin sivupalkissa voit muokata:

**Asetukset:**
- Artikkelien määrä (1-20)
- Sarakkeita (1-4)

**Kategoriat:**
- Valitse kategoriat joita näytetään (tyhjä = kaikki)

**Näytä elementit:**
- Featured Image (kyllä/ei)
- Kategoriat (kyllä/ei)
- Päivämäärä (kyllä/ei)
- Ote (kyllä/ei)

### 3. Align-asetukset

Lohko tukee:
- **Wide** - Leveä leveys
- **Full** - Koko leveys

## Tiedostorakenne

```
blocks/nietos-blog-posts/
├── block.json          # Lohkon määrittelyt
├── render.php          # Server-side rendering
├── src/
│   └── index.js        # React-editori (lähdekoodi)
├── index.js            # Buildin tuotos (generoidaan)
├── index.asset.php     # Buildin asset-deps (generoidaan)
├── style.css           # Frontend-tyylit
├── editor.css          # Editori-tyylit
├── filter.js           # Filtteröinti-skripti (frontend)
└── README.md           # Tämä tiedosto
```

## Kehittäminen

### Build-komennot

```bash
# Kertaluonteinen build
npm run build

# Watch-mode (kehitys)
npm run start
```

### Tyylit

Lohko käyttää Nietos AI brand guidelinesin mukaisia värejä:

**Väripaletti:**
- `#4433A6` - Midnight Indigo (base)
- `#79F3B1` - Mint (contrast)
- `#E8B7FF` - Lavender (accent)
- `#251D51` - Deep shadow
- `#372696` - Gradient base

**Fontit:**
- **Fira Sans** - Body text, UI elements
- **Literata** - Otsikot

## Tekninen toteutus

### Frontend

- **Kategoriafiltteröinti**: Vanilla JavaScript, ei riippuvuuksia
- **Animaatiot**: CSS transitions + JavaScript show/hide
- **Grid**: CSS Grid, auto-fill responsive layout

### Backend

- **Server-side rendering**: PHP (render.php)
- **WP_Query**: Dynaaminen postausten haku
- **Kategoriat**: get_categories() API

### Editor

- **Framework**: @wordpress/blocks
- **Preview**: ServerSideRender
- **Controls**: InspectorControls (sivupalkki)

## Saavutettavuus

- Semanttinen HTML (article, time, heading-hierarkia)
- ARIA-attribuutit tarvittaessa
- Keyboard-navigointi
- Reduced motion -tuki

## Tuki

Kehitetty Nietos AI teemalle.
Brand guidelines: `/BRAND_GUIDELINES.md`
