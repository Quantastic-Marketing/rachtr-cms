document.addEventListener('DOMContentLoaded', function() {
    // Clear search input
    const clearButton = document.querySelector('.btn-clear');
    const searchInput = document.querySelector('.search-box .form-control');
    
    if (clearButton && searchInput) {
        clearButton.addEventListener('click', function() {
            searchInput.value = '';
            searchInput.focus();
        });
    }
    
    // Tab functionality
    const tabLinks = document.querySelectorAll('.custom-tabs .nav-link');
    
    function activateTab(tabId) {
        // Remove active class from all tabs
        tabLinks.forEach(t => {
            t.classList.remove('active');
            t.setAttribute('aria-selected', 'false');
        });
        
        // Add active class to the target tab
        const targetTab = document.querySelector(`[data-bs-target="#${tabId}"]`);
        if (targetTab) {
            targetTab.classList.add('active');
            targetTab.setAttribute('aria-selected', 'true');
        }
        
        // Show corresponding tab content
        const tabContents = document.querySelectorAll('.tab-pane');
        tabContents.forEach(content => {
            content.classList.remove('show', 'active');
        });
        
        document.getElementById(tabId).classList.add('show', 'active');
    }
    
    tabLinks.forEach(tab => {
        tab.addEventListener('click', function() {
            const tabId = this.getAttribute('data-bs-target').substring(1);
            activateTab(tabId);
        });
    });
    
    // View All buttons functionality in the All tab
    const viewAllButtons = document.querySelectorAll('#all .btn-primary');
    
    // First View All button (Products)
    if (viewAllButtons[0]) {
        viewAllButtons[0].addEventListener('click', function() {
            activateTab('products');
        });
    }
    
    // Second View All button (Blog Posts)
    if (viewAllButtons[1]) {
        viewAllButtons[1].addEventListener('click', function() {
            activateTab('blog');
        });
    }
    
    // Third View All button (Other Pages)
    if (viewAllButtons[2]) {
        viewAllButtons[2].addEventListener('click', function() {
            activateTab('other');
        });
    }
    
    // Make navbar responsive
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (navbarToggler && navbarCollapse) {
        navbarToggler.addEventListener('click', function() {
            navbarCollapse.classList.toggle('show');
        });
    }
});