# GameHubGames.pro

Static/PHP public site for `gamehubgames.pro`.

## Deploy Notes

- Deploy the repository root to the domain `public_html`.
- Primary blog index: `/blog/`
- Legacy blog path `/blog.php` redirects to `/blog/`.
- Sitemap: `/sitemap.xml`
- Robots: `/robots.txt`

## Launch Checklist

- Confirm Hostinger SSL is active for `gamehubgames.pro` and `www.gamehubgames.pro`.
- Confirm Cloudflare SSL/TLS is set to Full or Full (strict) after origin SSL is valid.
- Purge Cloudflare cache after deployment.
