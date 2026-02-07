# Real-Time Broken Link Detector

**WordPress Plugin**  
A lightweight, efficient broken link checker that monitors hyperlinks in real-time and via scheduled scans — helping you maintain a healthy site, improve SEO, and enhance user experience.

![Plugin Banner](https://via.placeholder.com/1200x600.png?text=Real-Time+Broken+Link+Detector)  
*(Replace with your actual banner/screenshot)*

## Description

**Real-Time Broken Link Detector** is a modern WordPress plugin that automatically detects broken, redirected, or missing hyperlinks across your posts, pages, custom post types, comments, and more.

Unlike traditional heavy scanners that slow down your server, this plugin combines:

- **Real-time monitoring** — catches broken links as soon as content is published/updated
- **Background scheduled scans** using WP-Cron — thorough checks without impacting frontend performance
- **Clean, intuitive admin dashboard** — view, filter, sort, and manage broken links easily

Perfect for bloggers, agencies, e-commerce sites, and anyone who wants to prevent link rot before it hurts rankings or frustrates visitors.

## Key Features

- Real-time link validation on post/page save/update
- Scheduled full-site scans via WP-Cron (configurable frequency)
- Detects **404**, **redirects**, timeouts, and server errors
- Supports internal **and** external links
- Checks links in post content, custom fields, comments (optional)
- Smart link status caching to minimize HTTP requests
- Bulk actions: mark as fixed, ignore, re-check
- Dashboard widget + dedicated **Tools → Broken Links** screen
- Lightweight — no heavy JavaScript libraries or constant polling
- Developer-friendly hooks and filters
- Multisite compatible (network-activated scans available)

## Installation

1. Download the latest release from this repository
2. Upload the `real-time-broken-link-detector` folder to `/wp-content/plugins/`
3. Activate the plugin through the **Plugins** menu in WordPress
4. Go to **Tools → Broken Links** to view results and adjust settings

Alternatively, install & activate via ZIP upload in WordPress admin.

## Screenshots

*(Add 3–5 screenshots here using GitHub image upload or external host)*

1. Broken links overview dashboard  
2. Real-time detection notice on post edit  
3. Detailed link report with status codes & actions  
4. Settings screen (scan frequency, exclusions, etc.)

## Usage

After activation:

- The plugin starts monitoring automatically
- First full scan runs on next WP-Cron event (usually within minutes–hours)
- Visit **Tools → Broken Links** to see results
- Adjust scan interval and other options in **Settings → Broken Link Detector**

## Contributing

Contributions are welcome!

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

Please follow WordPress Coding Standards.

## Roadmap

- [ ] Email notifications for newly discovered broken links
- [ ] One-click link replacement / redirect suggestion
- [ ] REST API endpoint for external integrations
- [ ] Link performance metrics (response time, slow links)
- [ ] Export broken links report (CSV/JSON)

## License

This project is licensed under the **GNU General Public License v2 or later** — see the [LICENSE](LICENSE) file for details.

## Credits & Inspiration

Built with love for the WordPress community.  
Inspired by the need for lighter, real-time alternatives to resource-heavy link checkers.

---

