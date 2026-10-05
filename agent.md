# Company Profile - Eraya Digital Solusindo

## Project Overview
This is a **company profile website** for **Eraya Digital Solusindo (EDS)**, a digital solutions company based in Indonesia. The website showcases their services, team, portfolio/clients, and contact information.

## Tech Stack
- **Framework**: Laravel 10+ (PHP 8.3)
- **Frontend**: Blade templates + Vite for asset bundling
- **CSS/JS**: Custom template (template_v1) with Bootstrap, jQuery, various plugins
- **Server**: Laravel Octane with OpenSwoole (high-performance PHP server)
- **Containerization**: Docker + Docker Swarm
- **Process Manager**: Supervisord
- **Queue Workers**: Laravel queue workers (3 processes for `default` queue)

## Project Structure
```
company_profile/
├── source/                    # Laravel application root
│   ├── app/
│   │   ├── Http/Controllers/EndUser/Landing.php  # Main controller
│   │   └── Models/User.php
│   ├── resources/
│   │   ├── views/
│   │   │   ├── templatebody.blade.php            # Main layout
│   │   │   ├── halamandepan.blade.php            # Home page
│   │   │   ├── halamanemailprofesional.blade.php # Email Professional service page
│   │   │   ├── hubungikami.blade.php             # Contact page
│   │   │   └── includes/                         # Header, footer, assets
│   │   ├── css/app.css
│   │   └── js/app.js, bootstrap.js
│   ├── routes/web.php                            # Web routes
│   └── vite.config.js
├── config/
│   ├── supervisord.conf                          # Production supervisord config
│   ├── php.ini                                   # PHP configuration
│   └── dev/                                      # Development configs
├── Dockerfile                                    # Production Docker image (Alpine + PHP 8.3 + OpenSwoole)
├── docker-compose.yaml                           # Docker Swarm deployment
├── development.sh                                # Dev server starter (Octane + Swoole + watch)
├── production.sh                                 # Production deployment script
├── deploy.env                                    # Deployment environment variables
└── README.md
```

## Routes
| Route | Controller Method | Description |
|-------|------------------|-------------|
| `/` | `Landing@index` | Home page (halaman depan) |
| `/layanan/email-profesional` | `Landing@email_profesional` | Email Professional service page |
| `/layanan/hubungi-kami` | `Landing@hubungi_kami` | Contact page |

## Controller: `App\Http\Controllers\EndUser\Landing`
- **`index()`** - Home page with visitor location detection (via ipinfo.io)
- **`email_profesional()`** - Email Professional service page
- **`hubungi_kami()`** - Contact page with office locations and map embeds
- **`get_info_location()`** - Private method to detect visitor IP and location

## Pages Content

### Home Page (`halamandepan.blade.php`)
- **Hero Carousel**: 3 slides (App Development, Tax/Accounting Consulting, Hardware/Software Consulting)
- **Process Section**: 4-step process (Consultation → Development → Revision → Publish/Maintain)
- **About Section**: Company intro + counters (1 Country, 15 Active Servers, 13 Projects)
- **Services Carousel**: 6 services (Mail Server, App Development, Tax/Accounting, UMKM, DevOps)
- **CTA Section**: Cybersecurity assurance
- **Team Section**: 6 team members with roles
- **Blog/Partners Section**: Blog posts + client logos carousel (10 clients)

### Email Professional Page (`halamanemailprofesional.blade.php`)
- **Hero**: Professional email solutions for UMKM
- **Pricing Tables**: 3 tiers (Personal Rp30K/mo, Business Starter Rp60K/mo, Enterprise - Contact)
- **FAQ Section**: 5 accordion items about mail server

### Contact Page (`hubungikami.blade.php`)
- Contact info for Jakarta & Malang teams (phone numbers)
- Email: `hallo@erayadigital.co.id`
- Two Google Maps embeds (Jakarta & Malang offices)

## Key Features
1. **Visitor Location Detection**: Uses ipinfo.io API to detect visitor city/region/country
2. **Responsive Template**: Custom template_v1 with Bootstrap, animations (WOW.js), carousels (Slick), particles.js
3. **Multi-language Ready**: Indonesian language (lang="id")
4. **SEO Package**: Uses `ralphjsmit/laravel-seo` for meta tags

## Deployment
- **Platform**: Docker Swarm
- **Image**: `eds_company_profile:1.1.0` (built from Dockerfile)
- **Port**: 8080 (container) → 10160 (published)
- **Volumes**: `./source/storage/` persisted
- **Environment**: `APP_ENV=production`
- **Health Check**: `curl http://127.0.0.1:8080/up`

### Development
```bash
./development.sh
# Runs: php artisan octane:start --server=swoole --port=1101 --watch
```

### Production
```bash
./production.sh
# 1. Fixes permissions
# 2. Pulls latest from git (via SSH)
# 3. Builds Docker image (linux/amd64)
# 4. Deploys to Docker Swarm stack
# 5. Prunes old images
```

## Team Members (Hardcoded in Template)
1. **Ariza Agung P** - Marketing Eraya Digital
2. **Erfan Huda** - Konsultan Pajak dan Akuntan
3. **Mochamad Aries S** - Sistem Analis
4. **Ryan Dony Pratama** - Senior Programmer
5. **Yoppi Niko Ifandika** - Senior Programmer
6. **Achmad Rozikin** - DevOps Spesialis

## Client Portfolio (Hardcoded)
- PT. GAYENG MAS ABADI (2023-present)
- SMKN 1 Malang (2019-present)
- SMK PGRI 6 Malang (2021-present)
- KOTAK CANTIK MAGELANG (2023-present)
- SMK SINAR ABADI MELAK (2023-present)
- KLINIK ARTHA MEDICAL CENTRE MELAK (2024-present)
- PUSKESMAS DEMPAR KUTAI BARAT (2023-present)
- OLIVIA BABY SHOP MALANG (2014-2024)
- SANJAYA GROUP (2022-present)
- TOKO SEPATU QQ TEMPUR SARI (2022-present)

## Configuration Files
- **`deploy.env`**: Docker image name, tag, swarm stack name
- **`config/supervisord.conf`**: Runs Octane server + 3 queue workers
- **`config/php.ini`**: PHP settings (copied to container)
- **`source/vite.config.js`**: Vite config with laravel-vite-plugin

## Important Notes
- **No database models** beyond default User - this is a static content site
- **All content is hardcoded in Blade templates** - no CMS/admin panel
- **Assets served from `public/template_v1/`** - images, CSS, JS for the template
- **Uses `nobody:nobody` user in Docker** for security
- **OpenSwoole** installed via PECL for Octane high-performance server
- **Queue workers** run for background jobs (3 processes)

## Common Tasks
- **Add new service**: Edit `halamandepan.blade.php` services section
- **Update team**: Edit team section in `halamandepan.blade.php`
- **Add client logo**: Add image to `public/template_v1/img/brand/` + update brand carousel
- **Change pricing**: Edit `halamanemailprofesional.blade.php` pricing tables
- **Update contact info**: Edit `hubungikami.blade.php`
- **Deploy**: Run `./production.sh` (requires `deploy.env` and SSH key `~/.ssh/vps_gio_eds`)