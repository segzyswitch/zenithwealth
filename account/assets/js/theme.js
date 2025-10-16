// Theme Management
const themeManager = {
	// Get current theme
	getTheme() {
		return localStorage.getItem('theme') || 'light';
	},

	// Set theme
	setTheme(theme) {
		localStorage.setItem('theme', theme);
		document.documentElement.setAttribute('data-bs-theme', theme);
		this.updateThemeIcons(theme);
	},

	// Toggle theme
	toggleTheme() {
		const currentTheme = this.getTheme();
		const newTheme = currentTheme === 'light' ? 'dark' : 'light';
		this.setTheme(newTheme);
	},

	// Update all theme icons and text
	updateThemeIcons(theme) {
		const icons = {
			light: 'bi-sun-fill',
			dark: 'bi-moon-fill'
		};

		const text = {
			light: 'Light Mode',
			dark: 'Dark Mode'
		};

		// Desktop theme toggle
		const themeIcon = document.getElementById('themeIcon');
		const themeText = document.getElementById('themeText');
		if (themeIcon) {
			themeIcon.className = `bi ${icons[theme]}`;
		}
		if (themeText) {
			themeText.textContent = text[theme];
		}

		// Mobile theme toggle
		const mobileThemeIcon = document.getElementById('mobileThemeIcon');
		if (mobileThemeIcon) {
			mobileThemeIcon.className = `bi ${icons[theme]} fs-4`;
		}

		// Auth page theme toggle
		const authThemeIcon = document.getElementById('authThemeIcon');
		const authThemeText = document.getElementById('authThemeText');
		if (authThemeIcon) {
			authThemeIcon.className = `bi ${icons[theme]}`;
		}
		if (authThemeText) {
			authThemeText.textContent = text[theme];
		}
	},

	// Initialize theme
	init() {
		const currentTheme = this.getTheme();
		this.setTheme(currentTheme);

		// Desktop theme toggle button
		const themeToggle = document.getElementById('themeToggle');
		if (themeToggle) {
			themeToggle.addEventListener('click', () => this.toggleTheme());
		}

		// Mobile theme toggle button
		const mobileThemeToggle = document.getElementById('mobileThemeToggle');
		if (mobileThemeToggle) {
			mobileThemeToggle.addEventListener('click', () => this.toggleTheme());
		}

		// Auth page theme toggle button
		const authThemeToggle = document.getElementById('authThemeToggle');
		if (authThemeToggle) {
			authThemeToggle.addEventListener('click', () => this.toggleTheme());
		}
	}
};

// Initialize theme when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
	themeManager.init();
});

// Export for use in other scripts
if (typeof module !== 'undefined' && module.exports) {
	module.exports = themeManager;
}