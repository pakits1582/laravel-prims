function data() {
    function getThemeFromLocalStorage() {
        if (window.localStorage.getItem('dark')) {
            return JSON.parse(window.localStorage.getItem('dark'));
        }

        return (
            !!window.matchMedia &&
            window.matchMedia('(prefers-color-scheme: dark)').matches
        );
    }

    function setThemeToLocalStorage(value) {
        window.localStorage.setItem('dark', value);
    }

    return {
        dark: getThemeFromLocalStorage(),
        toggleTheme() {
            this.dark = !this.dark;
            setThemeToLocalStorage(this.dark);
        },
        isSideMenuOpen: false,
        toggleSideMenu() {
            this.isSideMenuOpen = !this.isSideMenuOpen;
        },
        closeSideMenu() {
            this.isSideMenuOpen = false;
        },
        isNotificationsMenuOpen: false,
        toggleNotificationsMenu() {
            this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen;
        },
        closeNotificationsMenu() {
            this.isNotificationsMenuOpen = false;
        },
        isProfileMenuOpen: false,
        toggleProfileMenu() {
            this.isProfileMenuOpen = !this.isProfileMenuOpen;
        },
        closeProfileMenu() {
            this.isProfileMenuOpen = false;
        },
        isPagesMenuOpen: false,
        togglePagesMenu() {
            this.isPagesMenuOpen = !this.isPagesMenuOpen;
        },
        showModal: false,  // Ensure this is false by default
        openModal() {
            this.showModal = true;
        },
        closeModal() {
            this.showModal = false;
        },
    };
}
