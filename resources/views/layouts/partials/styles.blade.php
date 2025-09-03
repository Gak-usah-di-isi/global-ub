@include('layouts.partials.link')

<style>
    .custom-table thead {
        background-color: #e3e7f4;
    }

    table td {
        background-color: #f6f8fc;
    }

    .custom-table th {
        background-color: transparent;
        text-align: left;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        font-weight: 600;
        padding: 12px 16px;
        border-bottom: 1px solid #e2e8f0;
    }

    .custom-table td {
        padding: 12px 16px;
        border-bottom: 1px solid #f1f5f9;
        font-size: 13px;
    }

    .custom-table tbody tr:hover {
        background-color: #f8fafc;
    }

    .badge {
        display: inline-block;
        font-size: 11px;
        padding: 4px 8px;
        border-radius: 9999px;
        background-color: #f1f5f9;
        color: #475569;
        font-weight: 500;
    }

    .switch {
        width: 36px;
        height: 20px;
        border-radius: 9999px;
        background-color: rgba(37, 69, 174, 0.6);
        position: relative;
    }

    .switch::after {
        content: "";
        position: absolute;
        top: 2px;
        left: 2px;
        width: 16px;
        height: 16px;
        background: white;
        border-radius: 50%;
        transition: transform 0.3s;
    }

    .peer:checked+.switch {
        background-color: #2545ae;
    }

    .peer:checked+.switch::after {
        transform: translateX(16px);
    }

    #sidebar.collapsed .nav-label,
    #sidebar.collapsed .caret-icon {
        display: none;
    }

    #sidebar.collapsed .submenu {
        display: none !important;
    }

    #sidebar.collapsed .sidebar-menu-item {
        justify-content: center;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }

    .nav-logo {
        transition: width 0.3s ease;
    }

    #sidebar.collapsed .nav-logo {
        width: 40px !important;
    }

    /* Mobile sidebar (off-canvas) */
    #sidebar {
        transition: transform 0.35s ease, width 0.3s ease;
        will-change: transform;
    }

    @media (max-width: 767px) {
        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 260px !important;
            transform: translateX(-100%);
        }

        #sidebar.mobile-open {
            transform: translateX(0);
        }

        /* Sembunyikan tombol collapse arrow di mobile */
        #sidebar .collapse-wrapper {
            display: none;
        }
    }

    @media (min-width: 768px) {
        #sidebar {
            transform: none !important;
        }
    }

    .mobile-sidebar-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);
        backdrop-filter: blur(2px);
        z-index: 40;
        display: none;
    }

    .mobile-sidebar-overlay.show {
        display: block;
    }
</style>
