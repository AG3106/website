# Portfolio Website Template

A modern, responsive portfolio website template built with pure PHP, HTML, and CSS.

## 🚀 Quick Start

To run the website locally:

1. **Install PHP** (if not already installed).
2. Open a terminal in this directory.
3. Run the built-in PHP server:
   ```bash
   php -S localhost:8080
   ```
4. Open your browser and navigate to: [http://localhost:8080](http://localhost:8080)

## 📂 Project Structure

```
/
├── css/                # Stylesheets (style.css)
├── images/             # Project assets and profile images
├── includes/           # Reusable components (header, footer, menu)
│   ├── header.inc      # Page head, title, and site header
│   ├── menu.inc        # Navigation bar
│   └── footer.inc      # Page footer
├── cs771/              # Example subdirectory (Course page)
├── legacy/             # Archived files
├── index.php           # Landing/About page
├── projects.php        # Project portfolio page
└── research.php        # Research publications page
```

## 🛠️ Customization

### Adding a New Page
1. Duplicate `index.php`.
2. Update the `$current_page` variable at the top.
3. Change the content inside `.page-content`.

### Editing Navigation
Modify `includes/menu.inc` to add or remove links. Ensure you check for the `$current_page` variable to highlight the active tab.

### Changing Styles
Edit `css/style.css`. The site uses CSS variables for colors (light/dark mode) at the top of the file.

## 📱 Features
- **Responsive Design:** Works on Mobile, Tablet, and Desktop.
- **Dark Mode:** Auto-detects system preference and includes a toggle.
- **Horizontal Scroll Sidebar:** Layout adapts for mobile devices.
